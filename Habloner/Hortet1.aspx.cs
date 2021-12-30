using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Habloner
{
    public partial class Hortet1 : System.Web.UI.Page
    {
        public class Contact
        {
            public int ContactId { get; set; }
            public string Name { get; set; }
            public string Address { get; set; }
            public string City { get; set; }
            public string State { get; set; }
            public string Zip { get; set; }
            //[DataType(DataType.EmailAddress)]
            public string Email { get; set; }
        }
        protected void Page_Load(object sender, EventArgs e)
        {
           
       }

        protected void Button1_Click(object sender, EventArgs e)
        {
            Label1.Text = Convert.ToString(DateTime.Now);
        }

        protected void Button2_Click(object sender, EventArgs e)
        {
            Label1.Text = " ";
        }
    }
}