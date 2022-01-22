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
                Label label = new Label();
                label.Text = "Страница пользователя!";
                label.Font.Size = 34;              
        
                 PlaceHolder1.Controls.Add(label);


                Label1.Text = login.Value;
                    return;
                
            }
            Response.Redirect("Login.aspx ");
        }

        protected void Button1_Click(object sender, EventArgs e)
        {
            Button button1 = new Button();
            button1.Width = new Unit("24%");
            button1.Height = new Unit ("10%");
            button1.CssClass = "table_style-1";
            

            Response.Redirect("Logoumt.aspx");
        }

    }
}
