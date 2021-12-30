using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Habloner
{
    public partial class UsersPages : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {            
            //проверка если куки вообще
            HttpCookie login = Request.Cookies["login"];
            HttpCookie sign = Request.Cookies["sign"];
            if (login != null && sign != null)
            {
                TextBox textBox = new TextBox()
                {
                    Text = "Страница пользователя",
                    ForeColor = System.Drawing.Color.Aqua,
                };
                textBox.Font.Size = 24;
                textBox.Font.Bold = true;
               
                PlaceHolder1.Controls.Add(textBox);


                Label1.Text = login.Value;
                    return;
                
            }
            Response.Redirect("Login.aspx ");
        }

        protected void Button1_Click(object sender, EventArgs e)
        {
            Response.Redirect("Logoumt.aspx");
        }

    }
}
