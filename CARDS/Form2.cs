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
        int rounds = 3;
        int timerPerRoud = 6;
        bool gameOver = false;

        string[] CPUchoiceList = { "Rock", "Paper", "Scissors", "Paper", "Scissors", "Rock" };
        int randomNumber = 0;
        Random rnd = new Random();
        //комп и игрок
        string CPUChoice;
        string playerChoice;
        //счёт игрока и компа
        int playerScore;
        int CPUScore;
        

        public Form2()
        {
            InitializeComponent();
            countDowenTimer.Enabled = true;
            playerChoice = "none";
            txtCountDown.Text = "5";


        }

        private void Form2_Load(object sender, EventArgs e)
        {


        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {

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


        }

        private void button4_Click(object sender, EventArgs e)
        {


        }

        private void pictureBox12_Click(object sender, EventArgs e)
        {

        }

        private void button3_Click(object sender, EventArgs e)
        {
            //ощищаем, наченаем игру заново
            playerScore = 0;
            CPUScore = 0;
            rounds = 3;
            txtScore.Text = "Игрок :" + playerScore + "-" + "Компютер :" + CPUScore;
            playerChoice = "none";
            countDowenTimer.Enabled = true;

            picPlayer.Image = Properties.Resources.depositphotos_7461846_stock_illustration_playing_card_back_side_60x90;
            picCPU.Image = Properties.Resources.depositphotos_7461846_stock_illustration_playing_card_back_side_60x90;
            gameOver = false;
            ////create a random variable
            //Random r = new Random();
            //int rr = r.Next(3);
            ////Computer choice
            //CompChoice = rr;
            //////User Choice
            ////   int UserChoice = Value.ToString();

            ////Picks Pc Choice to play
            //pcChoice = "Rock.jpg";
            //if (CompChoice == 1) ;
            //{
            //    pcChoice = "Paper.jpg";
            //}
            //if (CompChoice == 2) ;
            //{
            //    pcChoice = "Scissors.jpg";
            //}
            ////pictureBox12.Text = pcChoice;
            //picCPU.Image = Image.FromFile(pcChoice + "Rock.jpg");
            //picCPU.Image = Image.FromFile(pcChoice + "Paper.jpg");
            //picCPU.Image = Image.FromFile(pcChoice + "Scissors.jpg");
            ////Draw
            ////if (CompChoice == UserChoice)
            //{
            //    MessageBox.Show("Ничья!");

            //}
        }

        private void label6_Click(object sender, EventArgs e)
        {

        }

        private void button5_Click(object sender, EventArgs e)
        {
            //Form2 f2 = new Form2();
            if (countDowenTimer.Enabled == false) { 
                this.Hide();
            Form1 f1 = new Form1();
            f1.Show();
            }
                else { 
                    button5.Enabled = true;
                }




            }

        private void pictureBox16_Click(object sender, EventArgs e)
        {

        }

        private void countDowenTimerEvent(object sender, EventArgs e)
        {
            //таймер старта включаем на убывание
            timerPerRoud -= 1;
            txtCountDown.Text = timerPerRoud.ToString();
            // при таймере на нуле, происходит рандом придметов машины.
            txtRounds.Text = "Rounds: " + rounds;
            if (timerPerRoud < 1)
            {
                countDowenTimer.Enabled = false;
                timerPerRoud = 6;
                randomNumber = rnd.Next(0, CPUchoiceList.Length);
                CPUChoice = CPUchoiceList[randomNumber];

                switch (CPUChoice)
                {
                    case "Rock":
                        picCPU.Image = Properties.Resources.Rock;
                        break;
                    case "Paper":
                        picCPU.Image = Properties.Resources.Paper;
                        break;
                    case "Scissors":
                        picCPU.Image = Properties.Resources.Scissors;
                        break;

                }

                if (rounds > 0)
                {
                    checkGame();
                }
                else
                {
                    if (playerScore > CPUScore)
                    {
                        MessageBox.Show("Победа игрока, конец игры!!");
                    }
                    else
                    {
                        MessageBox.Show("Победа компютера, конец игры!!");
                    }
                    gameOver = true;
                }


            }
        }

        private void Rock_Click(object sender, EventArgs e)
        {
            picPlayer.Image = Properties.Resources.Rock;
            playerChoice = "Rock";
        }

        private void Paper_Click(object sender, EventArgs e)
        {
            picPlayer.Image = Properties.Resources.Paper;
            playerChoice = "Paper";
        }

        private void Scissors_Click(object sender, EventArgs e)
        {
            picPlayer.Image = Properties.Resources.Scissors;
            playerChoice = "Scissors";
        }

        private void checkGame()
        {
            if (playerChoice == "Rock" && CPUChoice == "Paper")
            {
                playerScore += 1;
                rounds -= 1;
                MessageBox.Show("Победил игрок, ножницы камень не режут!");
            }
            else if (playerChoice == "Scissors" && CPUChoice == "Rock")
            {
                playerScore += 1;
                rounds -= 1;
                MessageBox.Show("Победил игрок, бумага оборачивает камень!");
            }
            else if (playerChoice == "Paper" && CPUChoice == "Scissors")
            {
                playerScore += 1;
                rounds -= 1;
                MessageBox.Show("Победил игрок, ножницы режут бумагу!");
            }
            else if (playerChoice == "Rock" && CPUChoice == "Scissors")
            {
                CPUScore += 1;
                rounds -= 1;
                MessageBox.Show("Победил машины, бумага оборачивает камень!");
            }
            else if (playerChoice == "Paper" && CPUChoice == "Rock")
            {
                CPUScore += 1;
                rounds -= 1;
                MessageBox.Show("Победил машины, ножницы камень не режут!!");
            }
            else if (playerChoice == "Scissors" && CPUChoice == "Paper")
            {
                CPUScore += 1;
                rounds -= 1;
                MessageBox.Show("Победил машины, ножницы режут бумагу!");
            }
            else if (playerChoice == "none")
            {
                MessageBox.Show("Сделайте свой выбор");
            }
            else
            {
                MessageBox.Show("Нечья!!!");
            }

            startNextRound();

        }
        private void startNextRound()
        {
            if (gameOver == true)
            {
                return;
            }
            txtScore.Text = "Игрок :" + playerScore + "-" + "Компютер :" + CPUScore;
            playerChoice = "none";
                countDowenTimer.Enabled = true;
        
            picPlayer.Image = Properties.Resources.depositphotos_7461846_stock_illustration_playing_card_back_side_60x90;
            picCPU.Image = Properties.Resources.depositphotos_7461846_stock_illustration_playing_card_back_side_60x90;

        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            
        }

        private void checkBox1_CheckedChanged(object sender, EventArgs e)
        {
            
        }

        private void radioButton1_CheckedChanged(object sender, EventArgs e)
        {
            
        }
    }
}
