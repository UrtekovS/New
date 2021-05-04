using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Data.SqlClient;

namespace Cards
{
    public partial class Form1 : Form
    {

        List<string> lst;
        int n = 1;
        //string m = "";
        int sum;
        int sum1;

        public Form1()
        {
            InitializeComponent();
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {
           
            DataGridViewRow row = this.dataGridView1.Rows[0];
            this.dataGridView1.Rows.RemoveAt(0);
            this.dataGridView3.Rows.Add(row);

            //int r = dataGridView1.RowCount;
            //MessageBox.Show(r.ToString());

            // rand();
            string m = dataGridView3[0, n].Value.ToString();
            n = n + 1;


             m= row.Cells[0].Value.ToString();
            if (m[0] == 'В')
            {
                sum+= 2;
            }
            else if (m[0] == 'Д')
            {
                sum += 3;
            }
            else if (m[0] == 'К')
            {
                sum += 4;
            }
            else if (m[0] == 'Ч')
            {
                sum += 10;
            }
            else if (m[0] == 'T')
            {
                 if (sum <=10)
                {
                    sum += 11;
                }
                else 
                {
                    sum += 1;
                } 
            }
            else
            {
                sum +=int.Parse(m[0].ToString().Trim());
            }
            label5.Text = sum.ToString();
           
           

            if (n==2)
             {
                 //string v1 = dataGridView2[0, 0].Value.ToString();
                 string z = "select * from CARDS where masty='" + m+ "'";
                Program.connecti.Open();
                 SqlCommand sql = new SqlCommand(z, Program.connecti);
                 SqlDataReader reader1 = sql.ExecuteReader();
                 reader1.Read();
                 pictureBox2.Load(reader1.GetValue(3).ToString().Trim());
                 Program.connecti.Close();
             }
            if (n == 3)
            {
                //string v1 = dataGridView2[0, 0].Value.ToString();
                string z = "select * from CARDS where masty='" + m + "'";
                Program.connecti.Open();
                SqlCommand sql = new SqlCommand(z, Program.connecti);
                SqlDataReader reader = sql.ExecuteReader();
                reader.Read();
                pictureBox5.Load(reader.GetValue(3).ToString().Trim());
                Program.connecti.Close();
            }
            if (n == 4)
            {
                //string v = dataGridView2[0, 0].Value.ToString();
                string z = "select * from CARDS where masty='" + m + "'";
                Program.connecti.Open();
                SqlCommand sql = new SqlCommand(z, Program.connecti);
                SqlDataReader reader = sql.ExecuteReader();
                reader.Read();
                pictureBox4.Load(reader.GetValue(3).ToString().Trim());
                Program.connecti.Close();
            }
            if (n == 5)
            {
                //string v = dataGridView2[0, 0].Value.ToString();
                string z = "select * from CARDS where masty='" + m + "'";
                Program.connecti.Open();
                SqlCommand sql = new SqlCommand(z, Program.connecti);
                SqlDataReader reader = sql.ExecuteReader();
                reader.Read();
                pictureBox8.Load(reader.GetValue(3).ToString().Trim());
                Program.connecti.Close();
            }
            if (n == 6)
            {
                //string v1 = dataGridView2[0, 0].Value.ToString();
                string z = "select * from CARDS where masty='" + m+ "'";
                Program.connecti.Open();
                SqlCommand sql = new SqlCommand(z, Program.connecti);
                SqlDataReader reader = sql.ExecuteReader();
                reader.Read();
                pictureBox6.Load(reader.GetValue(3).ToString().Trim());
                Program.connecti.Close();
            }
            if (n == 7)
            {
                //string v = dataGridView2[0, 0].Value.ToString();
                string z = "select * from CARDS where masty='" + m + "'";
                Program.connecti.Open();
                SqlCommand sql = new SqlCommand(z, Program.connecti);
                SqlDataReader reader = sql.ExecuteReader();
                reader.Read();
                pictureBox11.Load(reader.GetValue(3).ToString().Trim());
                Program.connecti.Close();
            }
            if (n == 8)
            {
                //string v1 = dataGridView2[0, 0].Value.ToString();
                string z = "select * from CARDS where masty='" + m+ "'";
                Program.connecti.Open();
                SqlCommand sql = new SqlCommand(z, Program.connecti);
                SqlDataReader reader = sql.ExecuteReader();
                reader.Read();
                pictureBox9.Load(reader.GetValue(3).ToString().Trim());
                Program.connecti.Close();
            }
            if (n == 9)
            {
                //string v = dataGridView2[0, 0].Value.ToString();
                string z = "select * from CARDS where masty='" + m+ "'";
                Program.connecti.Open();
                SqlCommand sql = new SqlCommand(z, Program.connecti);
                SqlDataReader reader = sql.ExecuteReader();
                reader.Read();
                pictureBox7.Load(reader.GetValue(3).ToString().Trim());
                Program.connecti.Close();
            }
            if (sum == 21)
            {
                button2.Enabled = false;
                pictureBox1.Enabled = false;
                MessageBox.Show("У вас Очко 21");
              
            }
            else if (sum > 21)
            {
                pictureBox1.Enabled = false;
                button2.Enabled = false;
                
                MessageBox.Show("У вас перебор");
            
            }

            //int r = dataGridView1.RowCount;
            //MessageBox.Show(r.ToString());

        }

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void button3_Click(object sender, EventArgs e)
        {
           
        }

       
        private void button2_Click(object sender, EventArgs e)
        {
            #region Картинки карт машины////////////////////////////////////////////////////////////////////////////
            sum1 = 0;
            for (int i = 0; i < dataGridView2.RowCount; i++)
            {
                string mm = dataGridView2[0, i].Value.ToString();         

               
                if (i == 0)
                {
                    //v = dataGridView2[0, 1].Value.ToString();
                    string z2 = "select * from CARDS where masty='" + mm + "'";
                    Program.connecti.Open();
                    SqlCommand sql2 = new SqlCommand(z2, Program.connecti);
                    SqlDataReader reader2 = sql2.ExecuteReader();
                    reader2.Read();
                    pictureBox10.Load(reader2.GetValue(3).ToString().Trim());
                    Program.connecti.Close();
                }
                if (i == 1)
                {

                    string z2 = "select * from CARDS where masty='" + mm + "'";
                    Program.connecti.Open();
                    SqlCommand sql2 = new SqlCommand(z2, Program.connecti);
                    SqlDataReader reader2 = sql2.ExecuteReader();
                    reader2.Read();
                    pictureBox12.Load(reader2.GetValue(3).ToString().Trim());
                    Program.connecti.Close();
                }

                if (i == 2)
                {

                    string z2 = "select * from CARDS where masty='" + mm + "'";
                    Program.connecti.Open();
                    SqlCommand sql2 = new SqlCommand(z2, Program.connecti);
                    SqlDataReader reader2 = sql2.ExecuteReader();
                    reader2.Read();
                    pictureBox16.Load(reader2.GetValue(3).ToString().Trim());
                    Program.connecti.Close();
                }
                if (i == 3)
                {
                    string z2 = "select * from CARDS where masty='" + mm + "'";
                    Program.connecti.Open();
                    SqlCommand sql2 = new SqlCommand(z2, Program.connecti);
                    SqlDataReader reader2 = sql2.ExecuteReader();
                    reader2.Read();
                    pictureBox17.Load(reader2.GetValue(3).ToString().Trim());
                    Program.connecti.Close();
                }
                if (i == 4)
                {
                    string z2 = "select * from CARDS where masty='" + mm + "'";
                    Program.connecti.Open();
                    SqlCommand sql2 = new SqlCommand(z2, Program.connecti);
                    SqlDataReader reader2 = sql2.ExecuteReader();
                    reader2.Read();
                    pictureBox18.Load(reader2.GetValue(3).ToString().Trim());
                    Program.connecti.Close();
                }
                if (i == 5)
                {
                    string z2 = "select * from CARDS where masty='" + mm + "'";
                    Program.connecti.Open();
                    SqlCommand sql2 = new SqlCommand(z2, Program.connecti);
                    SqlDataReader reader2 = sql2.ExecuteReader();
                    reader2.Read();
                    pictureBox13.Load(reader2.GetValue(3).ToString().Trim());
                    Program.connecti.Close();
                }
                if (i == 6)
                {
                    string z2 = "select * from CARDS where masty='" + mm + "'";
                    Program.connecti.Open();
                    SqlCommand sql2 = new SqlCommand(z2, Program.connecti);
                    SqlDataReader reader2 = sql2.ExecuteReader();
                    reader2.Read();
                    pictureBox14.Load(reader2.GetValue(3).ToString().Trim());
                    Program.connecti.Close();
                }
                if (mm[0] == 'В')
                {
                    sum1 += 2;
                }
                else if (mm[0] == 'Д')
                {
                    sum1 += 3;
                }
                else if (mm[0] == 'К')
                {
                    sum1 += 4;
                }
                else if (mm[0] == 'Ч')
                {
                    sum1 += 10;
                }
                else if (mm[0] == 'T')
                {
                    if (sum1 < 11)
                    {
                        sum1 += 11;
                    }
                    else
                    {
                        sum1 += 1;
                    }
                }
                else
                {
                    sum1 += int.Parse(mm[0].ToString().Trim());
                }
                label3.Text = sum1.ToString();
                if (sum1 < 18)
                {

                    DataGridViewRow row2 = this.dataGridView1.Rows[0];
                    this.dataGridView1.Rows.RemoveAt(0);
                    this.dataGridView2.Rows.Add(row2);
                }
                else if (sum == sum1)
                        {
                            MessageBox.Show("Ничья");
                            break;
                        }
                        else if (sum1 == 17)
                        {
                        MessageBox.Show("У мешины Казна - 17");
                         button2.Enabled = false;
                        pictureBox1.Enabled = false;
                        break;

                        } 
                        else if (sum1 == 21)
                        {
                    MessageBox.Show("У машины Очко 21");
                      pictureBox1.Enabled = false;
                       button2.Enabled = false;
                    break;
                        }
                     else if (sum < sum1 && sum1 < 22)
                        {
                    MessageBox.Show("Победила машина");
                        pictureBox1.Enabled = false;
                        button2.Enabled = false;
                     break;
                        }
                        else if (sum > sum1 )
                        {
                    MessageBox.Show("Победил игрок");
                    pictureBox1.Enabled = false;
                         button2.Enabled = false;
                            break;
                        }
                    else if (sum1 > 21)
                {
                    MessageBox.Show("У мшины перебор");
                }
            }
            
            #endregion
        }
        

        


        public void button4_Click(object sender, EventArgs e)
          {   
              #region  тусуем калоду 36 изначально, раздаём по одной, игроку и машине.///////////////////////////////////////////////
          button4.Enabled = false;
                      
          {
              Random ran = new Random();
              string[] Coloda = { "6ч", "6б", "6к", "6п", "7ч", "7б", "7к", "7п", "8ч", "8б", "8к", "8п", "9ч", "9б", "9к", "9п", "Вч", "Вб", "Вк", "Вп", "Чч", "Чб", "Чк", "Чп", "Дч", "Дб", "Дк", "Дп", "Кч", "Кб", "Кк", "Кп", "ТЧ", "ТБ", "ТК","ТП" };
              lst = new List<string>();
              string[] str = new string[36];
              int k;
              for (int i = 0; i  < str.Length; i++)
              {
                  while (true)
                  {
                      k = ran.Next(Coloda.Length);
                      if (!lst.Any(x => x.Equals(Coloda[k])))
                      {
                          lst.Add(Coloda[k]);
                          str[i] = Coloda[k];
                          break;
                      }
                }
                this.dataGridView1.Rows.Add(str[i]); //раздаём по одной по дата грид
            }
        }
        DataGridViewRow row = this.dataGridView1.Rows[0];
        this.dataGridView1.Rows.RemoveAt(0);

        DataGridViewRow row2 = this.dataGridView1.Rows[0];
        this.dataGridView1.Rows.RemoveAt(0);

        this.dataGridView2.Rows.Add(row2);
        this.dataGridView3.Rows.Add(row);

            //Вскрывает карту машины
            string mm = dataGridView2[0, 0].Value.ToString();
            string z2 = "select * from CARDS where masty='" + mm + "'";
            Program.connecti.Open();
            SqlCommand sql2 = new SqlCommand(z2, Program.connecti);
            SqlDataReader reader2 = sql2.ExecuteReader();
            reader2.Read();
            pictureBox10.Load(reader2.GetValue(3).ToString().Trim());
            Program.connecti.Close();
            
            if (mm[0] == 'В')
            {
                sum1 = 2;
            }
            else if (mm[0] == 'Д')
            {
                sum1 = 3;
            }
            else if (mm[0] == 'К')
            {
                sum1 = 4;
            }
            else if (mm[0] == 'Т')
            {
                sum1 = 11;
            }
            else if (mm[0] == 'Ч')
            {
                sum1 = 10;
            }
            else
            {
                sum1 = int.Parse(mm[0].ToString());
             }
        label3.Text = sum1.ToString();
       //Карта игроку
         string m = dataGridView3[0, 0].Value.ToString();
         //string v = dataGridView3[0, 0].Value.ToString();
        string z = "select * from CARDS where masty='" + m + "'";
        Program.connecti.Open();
        SqlCommand sql = new SqlCommand(z, Program.connecti);
        SqlDataReader reader = sql.ExecuteReader();
        reader.Read();
        pictureBox3.Load(reader.GetValue(3).ToString().Trim());
        Program.connecti.Close();

            
            if (m[0] == 'В')
            {
                sum = 2;
            }
            else if (m[0] == 'Д')
            {
                sum = 3;
            }
            else if (m[0] == 'К')
            {
                sum = 4;
            }
            else if (m[0] == 'Т')
            {
                sum = 11;
            }
            else if (m[0] == 'Ч')
            {
                sum = 10;
            }
            else
            {
                sum = int.Parse(m[0].ToString());
            }
            label5.Text = sum.ToString();
            #endregion


        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void dataGridView3_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }


 

        private void button1_Click(object sender, EventArgs e)
        {
            #region Новая игра /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            button1.Enabled = false;
            if (label5.Text != "")
            {
                pictureBox1.Enabled = true;
                button2.Enabled = true;
               
                button4.Enabled = true;
            }           
           
            dataGridView1.Rows.Clear();
           // dataGridView1.Columns.Clear();

            dataGridView2.Rows.Clear();
             dataGridView3.Rows.Clear();
             label5.Text = "";
             label3.Text = "";
           
                 
                 pictureBox3.Image = null;
             
                 pictureBox2.Image = null;
            
                 pictureBox4.Image = null;
             
                 pictureBox5.Image = null;
             
                 pictureBox8.Image = null;
             
                 pictureBox6.Image = null;
            
                 pictureBox7.Image = null;
            
                 pictureBox11.Image = null;
           
                
                 pictureBox9.Image = null;
             
                 pictureBox12.Image = null;
             
                 pictureBox10.Image = null;
            
                 pictureBox16.Image = null;
             
                 pictureBox13.Image = null;
             
            
                 pictureBox14.Image = null;
            
                 pictureBox17.Image = null;
            
                 pictureBox18.Image = null;
             
                 pictureBox15.Image = null;
            #endregion

            #region  тусуем калоду 36 изначально, раздаём по одной, игроку и машине.///////////////////////////////////////////////
            button4.Enabled = false;
            Random ran = new Random();
            string[] Coloda = { "6ч", "6б", "6к", "6п", "7ч", "7б", "7к", "7п", "8ч", "8б", "8к", "8п", "9ч", "9б", "9к", "9п", "Вч", "Вб", "Вк", "Вп", "Чч", "Чб", "Чк", "Чп", "Дч", "Дб", "Дк", "Дп", "Кч", "Кб", "Кк", "Кп", "ТЧ", "ТБ", "ТК", "ТП" };
            lst = new List<string>();

            string[] str = new string[36];
            int k, n;
            for (int i = 0; i < str.Length; i++)
            {
                while (true)
                {
                    k = ran.Next(Coloda.Length);
                    if (!lst.Any(x => x.Equals(Coloda[k])))
                    {
                        lst.Add(Coloda[k]);
                        str[i] = Coloda[k];
                        break;
                    }
                }
                this.dataGridView1.Rows.Add(str[i]); //раздаём по одной по дата грид
            }


            DataGridViewRow row = this.dataGridView1.Rows[0];
            this.dataGridView1.Rows.RemoveAt(0);

            DataGridViewRow row2 = this.dataGridView1.Rows[0];
            this.dataGridView1.Rows.RemoveAt(0);

            this.dataGridView2.Rows.Add(row2);
            this.dataGridView3.Rows.Add(row);            

            //Вскрывает карту машины
            string mm = dataGridView2[0, 0].Value.ToString();
            if (mm[0] == 'В')
            {
                sum1 = 2;
            }
            else if (mm[0] == 'Д')
            {
                sum1 = 3;
            }
            else if (mm[0] == 'К')
            {
                sum1 = 4;
            }
            else if (mm[0] == 'Т')
            {
                sum1 = 11;
            }
            else if (mm[0] == 'Ч')
            {
                sum1 = 10;
            }
            else
            {
                sum1 = int.Parse(mm[0].ToString().Trim());
            }
            label3.Text = sum1.ToString();
            string v2 = dataGridView2[0, 0].Value.ToString();
            string z2 = "select * from CARDS where masty='" + mm + "'";
            Program.connecti.Open();
            SqlCommand sql2 = new SqlCommand(z2, Program.connecti);
            SqlDataReader reader2 = sql2.ExecuteReader();
            reader2.Read();
            pictureBox10.Load(reader2.GetValue(3).ToString().Trim());
            Program.connecti.Close();


            //Вскрывает карту игрока
            string m = dataGridView3[0, 0].Value.ToString();
            string v = dataGridView3[0, 0].Value.ToString();
            string z = "select * from CARDS where masty='" + m + "'";
            Program.connecti.Open();
            SqlCommand sql = new SqlCommand(z, Program.connecti);
            SqlDataReader reader = sql.ExecuteReader();
            reader.Read();
            pictureBox3.Load(reader.GetValue(3).ToString().Trim());
            Program.connecti.Close();

            
            if (m[0] == 'В')
            {
                sum = 2;
            }
            else if (m[0] == 'Д')
            {
                sum = 3;
            }
            else if (m[0] == 'К')
            {
                sum = 4;
            }
            else if (m[0] == 'Т')
            {
                sum = 11;
            }
            else if (m[0] == 'Ч')
            {
                sum = 10;
            }
            else
            {
                sum = int.Parse(m[0].ToString());
            }
            label5.Text = sum.ToString();

            //int r = dataGridView1.RowCount;
            //MessageBox.Show(r.ToString());
            #endregion

        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void button3_Click_1(object sender, EventArgs e)
        {
            this.Hide();
            //Form1 f1 = new Form1();
            Form2 f2 = new Form2();
            f2.Show();

            //Form ifrm = new Form2();
            //ifrm.ShowDialog();






        }
    }
}
