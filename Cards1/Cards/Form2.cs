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
            if (pictureBox16.Visible == false)
            {
                pictureBox16.Visible = true;
            }
            else
            {
                pictureBox18.Visible = false;
                pictureBox8.Visible = false;
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
           if(pictureBox18.Visible == false) { 
            pictureBox18.Visible=true;
            pictureBox16.Visible = false;
            pictureBox8.Visible = false;
            }
        }
        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void pictureBox8_Click(object sender, EventArgs e)
        {

        }

        private void pictureBox18_Click(object sender, EventArgs e)
        {
            
        }

        private void button6_Click(object sender, EventArgs e)
        {
            if (pictureBox16.Visible == false)
            {
                pictureBox16.Visible = true;
                pictureBox18.Visible = false;
                pictureBox8.Visible = false;
            }
          
         }

        private void button4_Click(object sender, EventArgs e)
        {
            if (pictureBox8.Visible == false)
            {
                pictureBox18.Visible = false;
                pictureBox16.Visible = false;
                pictureBox8.Visible = true;
            }
           
        }

        private void pictureBox12_Click(object sender, EventArgs e)
        {

        }

        private void button3_Click(object sender, EventArgs e)
        {
            pictureBox12.Image = Image.FromFile("paper.jpg");
            //create a random variable
            Random r = new Random();
            int rr = r.Next(3);
            //Computer choice
            int CompChoice = rr;
            ////User Choice
           // int UserChoice = label6.mess;

            //Picks Pc Choice to play
            string pcChoice = "Rock";
            if (CompChoice == 1) ;
            {
                pcChoice = "Paper";
            }
            if (CompChoice == 2) ;
            {
                pcChoice = "Scissors";
            }
            pictureBox12.Text = pcChoice;

            //Draw
            //if (CompChoice == UserChoice)
            {
                MessageBox.Show("Ничья!");

            }
        }

        private void label6_Click(object sender, EventArgs e)
        {

        }

        private void button5_Click(object sender, EventArgs e)
        {
            this.Hide();
            Form1 f1 = new Form1();
            //Form2 f2 = new Form2();
            f1.Show();
        }
    }
}
