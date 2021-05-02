namespace Cards
{
    partial class Form2
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            this.cARDSBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.cardsDataSet5 = new Cards.CardsDataSet5();
            this.cARDSTableAdapter = new Cards.CardsDataSet5TableAdapters.CARDSTableAdapter();
            this.button2 = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.txtCountDown = new System.Windows.Forms.Label();
            this.label8 = new System.Windows.Forms.Label();
            this.button6 = new System.Windows.Forms.Button();
            this.button4 = new System.Windows.Forms.Button();
            this.button3 = new System.Windows.Forms.Button();
            this.txtScore = new System.Windows.Forms.Label();
            this.button5 = new System.Windows.Forms.Button();
            this.countDowenTimer = new System.Windows.Forms.Timer(this.components);
            this.txtRounds = new System.Windows.Forms.Label();
            this.picPlayer = new System.Windows.Forms.PictureBox();
            this.picCPU = new System.Windows.Forms.PictureBox();
            ((System.ComponentModel.ISupportInitialize)(this.cARDSBindingSource)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.cardsDataSet5)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.picPlayer)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.picCPU)).BeginInit();
            this.SuspendLayout();
            // 
            // cARDSBindingSource
            // 
            this.cARDSBindingSource.DataMember = "CARDS";
            this.cARDSBindingSource.DataSource = this.cardsDataSet5;
            // 
            // cardsDataSet5
            // 
            this.cardsDataSet5.DataSetName = "CardsDataSet5";
            this.cardsDataSet5.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // cARDSTableAdapter
            // 
            this.cARDSTableAdapter.ClearBeforeFill = true;
            // 
            // button2
            // 
            this.button2.BackColor = System.Drawing.Color.Olive;
            this.button2.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.button2.ForeColor = System.Drawing.SystemColors.ButtonHighlight;
            this.button2.Location = new System.Drawing.Point(7, 223);
            this.button2.Name = "button2";
            this.button2.Size = new System.Drawing.Size(165, 40);
            this.button2.TabIndex = 1;
            this.button2.Text = "Камень!";
            this.button2.UseVisualStyleBackColor = false;
            this.button2.Click += new System.EventHandler(this.Rock_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(192)))));
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.label1.Location = new System.Drawing.Point(501, 301);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(150, 24);
            this.label1.TabIndex = 3;
            this.label1.Text = "Баллы игрока!";
            this.label1.Click += new System.EventHandler(this.label1_Click);
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(192)))));
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 36F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.label3.Location = new System.Drawing.Point(-158, 299);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(158, 55);
            this.label3.TabIndex = 3;
            this.label3.Text = "label1";
            this.label3.Click += new System.EventHandler(this.label1_Click);
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(192)))));
            this.label4.Font = new System.Drawing.Font("Microsoft Sans Serif", 36F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.label4.Location = new System.Drawing.Point(845, 113);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(452, 55);
            this.label4.TabIndex = 3;
            this.label4.Text = "Предмет машины:";
            this.label4.Click += new System.EventHandler(this.label1_Click);
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(192)))));
            this.label5.Font = new System.Drawing.Font("Microsoft Sans Serif", 36F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.label5.Location = new System.Drawing.Point(53, 113);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(415, 55);
            this.label5.TabIndex = 3;
            this.label5.Text = "Предмет игрока:";
            this.label5.Click += new System.EventHandler(this.label1_Click);
            // 
            // txtCountDown
            // 
            this.txtCountDown.AutoSize = true;
            this.txtCountDown.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(192)))));
            this.txtCountDown.Font = new System.Drawing.Font("Microsoft Sans Serif", 48F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.txtCountDown.Location = new System.Drawing.Point(631, 397);
            this.txtCountDown.Name = "txtCountDown";
            this.txtCountDown.Size = new System.Drawing.Size(69, 73);
            this.txtCountDown.TabIndex = 3;
            this.txtCountDown.Text = "5";
            this.txtCountDown.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            this.txtCountDown.Click += new System.EventHandler(this.label1_Click);
            // 
            // label8
            // 
            this.label8.AutoSize = true;
            this.label8.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(192)))));
            this.label8.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.label8.Location = new System.Drawing.Point(684, 301);
            this.label8.Name = "label8";
            this.label8.Size = new System.Drawing.Size(161, 24);
            this.label8.TabIndex = 3;
            this.label8.Text = "Баллы машины!";
            this.label8.Click += new System.EventHandler(this.label1_Click);
            // 
            // button6
            // 
            this.button6.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(192)))), ((int)(((byte)(255)))), ((int)(((byte)(255)))));
            this.button6.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.button6.Location = new System.Drawing.Point(358, 224);
            this.button6.Name = "button6";
            this.button6.Size = new System.Drawing.Size(184, 39);
            this.button6.TabIndex = 4;
            this.button6.Text = "Ножницы!";
            this.button6.UseVisualStyleBackColor = false;
            this.button6.Click += new System.EventHandler(this.Paper_Click);
            // 
            // button4
            // 
            this.button4.BackColor = System.Drawing.SystemColors.ButtonHighlight;
            this.button4.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.button4.Location = new System.Drawing.Point(178, 225);
            this.button4.Name = "button4";
            this.button4.Size = new System.Drawing.Size(174, 39);
            this.button4.TabIndex = 5;
            this.button4.Text = "Бумага!";
            this.button4.UseVisualStyleBackColor = false;
            this.button4.Click += new System.EventHandler(this.Scissors_Click);
            // 
            // button3
            // 
            this.button3.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(224)))), ((int)(((byte)(192)))));
            this.button3.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.button3.Location = new System.Drawing.Point(607, 605);
            this.button3.Name = "button3";
            this.button3.Size = new System.Drawing.Size(147, 38);
            this.button3.TabIndex = 6;
            this.button3.Text = "Новая игра";
            this.button3.UseVisualStyleBackColor = false;
            this.button3.Click += new System.EventHandler(this.button3_Click);
            // 
            // txtScore
            // 
            this.txtScore.AutoSize = true;
            this.txtScore.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(224)))), ((int)(((byte)(192)))));
            this.txtScore.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.txtScore.Location = new System.Drawing.Point(530, 334);
            this.txtScore.Name = "txtScore";
            this.txtScore.Size = new System.Drawing.Size(315, 33);
            this.txtScore.TabIndex = 7;
            this.txtScore.Text = "Игрок 0 - Компютор: 0";
            this.txtScore.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            this.txtScore.Click += new System.EventHandler(this.label6_Click);
            // 
            // button5
            // 
            this.button5.BackColor = System.Drawing.Color.Lime;
            this.button5.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.button5.Location = new System.Drawing.Point(0, 2);
            this.button5.Name = "button5";
            this.button5.Size = new System.Drawing.Size(145, 67);
            this.button5.TabIndex = 8;
            this.button5.Text = "Вернуться в игру \"21\".";
            this.button5.UseVisualStyleBackColor = false;
            this.button5.Click += new System.EventHandler(this.button5_Click);
            // 
            // countDowenTimer
            // 
            this.countDowenTimer.Interval = 1000;
            this.countDowenTimer.Tick += new System.EventHandler(this.countDowenTimerEvent);
            // 
            // txtRounds
            // 
            this.txtRounds.AutoSize = true;
            this.txtRounds.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(204)));
            this.txtRounds.Location = new System.Drawing.Point(601, 497);
            this.txtRounds.Name = "txtRounds";
            this.txtRounds.Size = new System.Drawing.Size(132, 33);
            this.txtRounds.TabIndex = 9;
            this.txtRounds.Text = "Round: 3";
            // 
            // picPlayer
            // 
            this.picPlayer.Image = global::Cards.Properties.Resources.depositphotos_7461846_stock_illustration_playing_card_back_side_60x90;
            this.picPlayer.Location = new System.Drawing.Point(74, 291);
            this.picPlayer.Name = "picPlayer";
            this.picPlayer.Size = new System.Drawing.Size(385, 339);
            this.picPlayer.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom;
            this.picPlayer.TabIndex = 10;
            this.picPlayer.TabStop = false;
            // 
            // picCPU
            // 
            this.picCPU.Image = global::Cards.Properties.Resources.depositphotos_7461846_stock_illustration_playing_card_back_side_60x90;
            this.picCPU.Location = new System.Drawing.Point(918, 291);
            this.picCPU.Name = "picCPU";
            this.picCPU.Size = new System.Drawing.Size(379, 339);
            this.picCPU.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom;
            this.picCPU.TabIndex = 2;
            this.picCPU.TabStop = false;
            this.picCPU.Click += new System.EventHandler(this.pictureBox12_Click);
            // 
            // Form2
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.AutoValidate = System.Windows.Forms.AutoValidate.EnablePreventFocusChange;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(192)))));
            this.ClientSize = new System.Drawing.Size(1443, 690);
            this.Controls.Add(this.picPlayer);
            this.Controls.Add(this.txtRounds);
            this.Controls.Add(this.button5);
            this.Controls.Add(this.txtScore);
            this.Controls.Add(this.button3);
            this.Controls.Add(this.button4);
            this.Controls.Add(this.button6);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label8);
            this.Controls.Add(this.txtCountDown);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.picCPU);
            this.Controls.Add(this.button2);
            this.ForeColor = System.Drawing.SystemColors.ActiveCaptionText;
            this.Name = "Form2";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Form2";
            this.TransparencyKey = System.Drawing.Color.White;
            this.Load += new System.EventHandler(this.Form2_Load);
            ((System.ComponentModel.ISupportInitialize)(this.cARDSBindingSource)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.cardsDataSet5)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.picPlayer)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.picCPU)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private CardsDataSet5 cardsDataSet5;
        private System.Windows.Forms.BindingSource cARDSBindingSource;
        private CardsDataSet5TableAdapters.CARDSTableAdapter cARDSTableAdapter;
        private System.Windows.Forms.Button button2;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label txtCountDown;
        private System.Windows.Forms.Label label8;
        public System.Windows.Forms.PictureBox picCPU;
        private System.Windows.Forms.Button button6;
        private System.Windows.Forms.Button button4;
        private System.Windows.Forms.Button button3;
        private System.Windows.Forms.Label txtScore;
        private System.Windows.Forms.Button button5;
        private System.Windows.Forms.Timer countDowenTimer;
        private System.Windows.Forms.Label txtRounds;
        private System.Windows.Forms.PictureBox picPlayer;
    }
}