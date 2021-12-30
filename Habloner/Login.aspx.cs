using System;
using System.Collections.Generic;
using System.Linq;
using System.Data;
using System.Data.SqlClient;
using System.Configuration;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Threading.Tasks;

namespace Habloner
{
    public partial class Login : System.Web.UI.Page
    {   
        //Подключение к базе
        private SqlConnection sqlConnection = null;
        protected async void Page_Load(object sender, EventArgs e)
        {
            string connectionString = ConfigurationManager.ConnectionStrings["DBConnection"].ConnectionString;
            sqlConnection = new SqlConnection(connectionString);
            await sqlConnection.OpenAsync(); 
        }

       

        protected async void Button1_Click(object sender, EventArgs e)
        {
            //Проверка в базе на совподение логина и пороля
            var _login = TextBox1.Text;
            var _password = TextBox2.Text;
            var _query = $"select [login], [Password] from Users where [Login] = '{_login}' and [Password] = '{_password}';";
            SqlCommand getUsersCredCmd = new SqlCommand(_query, sqlConnection);
            SqlDataReader sqlReader = sqlReader = await getUsersCredCmd.ExecuteReaderAsync();
            try
            {
                while (await sqlReader.ReadAsync())
                {
                    HttpCookie login = new HttpCookie("login", TextBox1.Text);
                    HttpCookie sign = new HttpCookie("sign", Signature.GetSign(TextBox1.Text + "bytepp"));
                    Response.Cookies.Add(login);
                    Response.Cookies.Add(sign);
                    Response.Redirect("UsersPage.aspx", false);
                }
                
                string script = "alert('Нет такого пользователя!');";
                ClientScript.RegisterClientScriptBlock(this.GetType(), "MessageBoox", script, true);

            }
            catch { }
            finally
            {
                if (sqlReader != null)
                {
                    sqlReader.Close();
                   
                }
                
            }           
        }
        //Закрываем подключение к базе
        protected void Page_Unload(object sender, EventArgs e)
        {
            if (sqlConnection != null && sqlConnection.State != ConnectionState.Closed)
                sqlConnection.Close();
        }
    }
}
