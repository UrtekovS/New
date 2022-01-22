using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Configuration;
using System.Data;
using System.Linq;
using System.Web.UI.WebControls;

namespace Habloner
{
    public partial class Registtration : System.Web.UI.Page
    {      

        //Подключение к база асинхронное
        private SqlConnection sqlConnection = null;     
           
        protected async void Page_Load(object sender, EventArgs e)
        {
            //Заголовок
            Label label = new Label();
            label.Text = "Заполните форму!";
            label.Font.Size = 14;
            
            PlaceHolder1.Controls.Add(label);

            string connectionString = ConfigurationManager.ConnectionStrings["DBConnection"].ConnectionString;
            sqlConnection = new SqlConnection(connectionString);
            await sqlConnection.OpenAsync();
        }

        protected async void Button2_Click(object sender, EventArgs e)
        {
            //проверка на существование дублей в базе
            Dictionary<string, string> db = new Dictionary<string, string>();
            SqlCommand getUsersCredCmd = new SqlCommand("SELECT [Login], [Password] FROM Users", sqlConnection);
            SqlDataReader sqlReader = null;
            try
            {
                sqlReader = await getUsersCredCmd.ExecuteReaderAsync();
                while (await sqlReader.ReadAsync())
                {
                    db.Add(Convert.ToString(sqlReader["Login"]), Convert.ToString(sqlReader["Password"]));

                }
            }
            catch { }
            finally
            {
                if (sqlReader != null)                
                    sqlReader.Close();                
            }
            //добавлене пользователя в базу данных 
            if(!db.Keys.Contains(TextBox1.Text))
               {
                var login = TextBox1.Text;
                var password = TextBox2.Text;
                if (!string.IsNullOrEmpty(login) && !string.IsNullOrEmpty(password))
                {
                    var query = $"insert into Users (Password, Login) values ('{login}','{password}');";
                    SqlCommand regUser = new SqlCommand(query, sqlConnection);
                    regUser.ExecuteNonQuery();
                    
                    Response.Redirect("Login.aspx", false);
                }
                string script = "alert('Вы успешно зарегистрировались!');";
                ClientScript.RegisterClientScriptBlock(this.GetType(), "MessageBoox", script, true);
            }
            else
            {
                string script = "alert('Такой логин уже есть!');";
                ClientScript.RegisterClientScriptBlock(this.GetType(), "MessageBoox", script, true);
            }
                
        }

        protected void Page_Unload(object sender, EventArgs e)
        {
            if (sqlConnection != null && sqlConnection.State != ConnectionState.Closed)
                sqlConnection.Close();
           
        }
    }  
}