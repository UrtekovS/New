using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Cards
{
    static class Program
    {
        /// <summary>
        /// Главная точка входа для приложения.
        ///  </summary>
         // создаем глобальную переменную для строки подключения
        public static string connect_string = "Data Source=SALAMON-5X\\SQLEXPRESS;Initial Catalog=Cards;Integrated Security=True";
        public static SqlConnection connecti = new SqlConnection
            (Program.connect_string);
        
        [STAThread]
        static void Main()
        {
            Application.EnableVisualStyles();
            Application.SetCompatibleTextRenderingDefault(false);
            Application.Run(new Form1());
        }
    }
}
