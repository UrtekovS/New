using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Habloner
{
    public partial class Logoumt : System.Web.UI.Page
    {       
        protected void Page_Load(object sender, EventArgs e)
        {
            //просрачиваем кукис файлы
            HttpCookie login = new HttpCookie("login", string.Empty);
            HttpCookie sing = new HttpCookie("sign", string.Empty);
            login.Expires = DateTime.Now.AddDays(-1);
            sing.Expires = DateTime.Now.AddDays(-1);
            //возвращаем пользователю просроченные файлв кукис и прежнии удалябтся
            Response.Cookies.Add(login);
            Response.Cookies.Add(sing);
            Response.Redirect("Login.aspx");

        }
    }
}