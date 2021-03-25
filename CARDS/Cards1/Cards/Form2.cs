using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Cards
{
    public partial class Form2 : Form
    {
        List<string> lst;
       // int idk = [ ];
        
        int sum;
        int sum1;
        public Form2()
        {
            InitializeComponent();
        }

        private void Form2_Load(object sender, EventArgs e)
        {
            // TODO: данная строка кода позволяет загрузить данные в таблицу "cardsDataSet5.CARDS". При необходимости она может быть перемещена или удалена.
            this.cARDSTableAdapter.Fill(this.cardsDataSet5.CARDS);

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            this.Close();
            Form1 f1 = new Form1();
            f1.Show();
            //Form2 f2 = new Form2();
            //f2.Close();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            if (pictureBox21.Visible)
            {
                pictureBox21.Hide();
            }
            //int idk = idk[].Value.ToInt();
            //int idk= "select * from Cards where id="[]""
            //    Program.connecti.Open();
            //SqlCommand sql2 = new SqlCommand(z2, Program.connecti);
            //SqlDataReader reader2 = sql2.ExecuteReader();
            //reader2.Read();
            //pictureBox10.Load(reader2.GetValue(3).ToString().Trim());
            //Program.connecti.Close();

        }
        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }
    }
}
