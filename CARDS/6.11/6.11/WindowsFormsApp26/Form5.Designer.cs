namespace WindowsFormsApp26
{
    partial class Form5
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
            this.dataGridView1 = new System.Windows.Forms.DataGridView();
            this.dishBindingSource2 = new System.Windows.Forms.BindingSource(this.components);
            this.restoranDataSet14 = new WindowsFormsApp26.restoranDataSet14();
            this.dishBindingSource1 = new System.Windows.Forms.BindingSource(this.components);
            this.restoranDataSet5 = new WindowsFormsApp26.restoranDataSet5();
            this.dishBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.button1 = new System.Windows.Forms.Button();
            this.button2 = new System.Windows.Forms.Button();
            this.button3 = new System.Windows.Forms.Button();
            this.dishTableAdapter1 = new WindowsFormsApp26.restoranDataSet5TableAdapters.DishTableAdapter();
            this.button4 = new System.Windows.Forms.Button();
            this.dishTableAdapter = new WindowsFormsApp26.restoranDataSet14TableAdapters.DishTableAdapter();
            this.restoranDataSet15 = new WindowsFormsApp26.restoranDataSet15();
            this.dishBindingSource3 = new System.Windows.Forms.BindingSource(this.components);
            this.dishTableAdapter2 = new WindowsFormsApp26.restoranDataSet15TableAdapters.DishTableAdapter();
            this.restoranDataSet17 = new WindowsFormsApp26.restoranDataSet17();
            this.dishBindingSource4 = new System.Windows.Forms.BindingSource(this.components);
            this.dishTableAdapter3 = new WindowsFormsApp26.restoranDataSet17TableAdapters.DishTableAdapter();
            this.idDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.nameDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.priceDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.caloriesDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.sostavDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.vesDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.categoriesIDDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.photoDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.dishBindingSource2)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.restoranDataSet14)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.dishBindingSource1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.restoranDataSet5)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.dishBindingSource)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.restoranDataSet15)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.dishBindingSource3)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.restoranDataSet17)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.dishBindingSource4)).BeginInit();
            this.SuspendLayout();
            // 
            // dataGridView1
            // 
            this.dataGridView1.AllowUserToAddRows = false;
            this.dataGridView1.AllowUserToDeleteRows = false;
            this.dataGridView1.AutoGenerateColumns = false;
            this.dataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView1.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.idDataGridViewTextBoxColumn,
            this.nameDataGridViewTextBoxColumn,
            this.priceDataGridViewTextBoxColumn,
            this.caloriesDataGridViewTextBoxColumn,
            this.sostavDataGridViewTextBoxColumn,
            this.vesDataGridViewTextBoxColumn,
            this.categoriesIDDataGridViewTextBoxColumn,
            this.photoDataGridViewTextBoxColumn});
            this.dataGridView1.DataSource = this.dishBindingSource4;
            this.dataGridView1.Location = new System.Drawing.Point(12, 12);
            this.dataGridView1.Name = "dataGridView1";
            this.dataGridView1.RowHeadersVisible = false;
            this.dataGridView1.Size = new System.Drawing.Size(914, 286);
            this.dataGridView1.TabIndex = 0;
            this.dataGridView1.CellContentClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView1_CellContentClick);
            // 
            // dishBindingSource2
            // 
            this.dishBindingSource2.DataMember = "Dish";
            this.dishBindingSource2.DataSource = this.restoranDataSet14;
            // 
            // restoranDataSet14
            // 
            this.restoranDataSet14.DataSetName = "restoranDataSet14";
            this.restoranDataSet14.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // dishBindingSource1
            // 
            this.dishBindingSource1.DataMember = "Dish";
            this.dishBindingSource1.DataSource = this.restoranDataSet5;
            // 
            // restoranDataSet5
            // 
            this.restoranDataSet5.DataSetName = "restoranDataSet5";
            this.restoranDataSet5.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(12, 315);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(145, 35);
            this.button1.TabIndex = 1;
            this.button1.Text = "Добавить";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.Button1_Click);
            // 
            // button2
            // 
            this.button2.Location = new System.Drawing.Point(12, 356);
            this.button2.Name = "button2";
            this.button2.Size = new System.Drawing.Size(145, 35);
            this.button2.TabIndex = 2;
            this.button2.Text = "Удалить";
            this.button2.UseVisualStyleBackColor = true;
            this.button2.Click += new System.EventHandler(this.Button2_Click);
            // 
            // button3
            // 
            this.button3.Location = new System.Drawing.Point(12, 397);
            this.button3.Name = "button3";
            this.button3.Size = new System.Drawing.Size(145, 35);
            this.button3.TabIndex = 3;
            this.button3.Text = "Редактировать";
            this.button3.UseVisualStyleBackColor = true;
            this.button3.Click += new System.EventHandler(this.Button3_Click);
            // 
            // dishTableAdapter1
            // 
            this.dishTableAdapter1.ClearBeforeFill = true;
            // 
            // button4
            // 
            this.button4.Location = new System.Drawing.Point(734, 397);
            this.button4.Name = "button4";
            this.button4.Size = new System.Drawing.Size(145, 35);
            this.button4.TabIndex = 4;
            this.button4.Text = "Экспорт";
            this.button4.UseVisualStyleBackColor = true;
            this.button4.Click += new System.EventHandler(this.button4_Click);
            // 
            // dishTableAdapter
            // 
            this.dishTableAdapter.ClearBeforeFill = true;
            // 
            // restoranDataSet15
            // 
            this.restoranDataSet15.DataSetName = "restoranDataSet15";
            this.restoranDataSet15.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // dishBindingSource3
            // 
            this.dishBindingSource3.DataMember = "Dish";
            this.dishBindingSource3.DataSource = this.restoranDataSet15;
            // 
            // dishTableAdapter2
            // 
            this.dishTableAdapter2.ClearBeforeFill = true;
            // 
            // restoranDataSet17
            // 
            this.restoranDataSet17.DataSetName = "restoranDataSet17";
            this.restoranDataSet17.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // dishBindingSource4
            // 
            this.dishBindingSource4.DataMember = "Dish";
            this.dishBindingSource4.DataSource = this.restoranDataSet17;
            // 
            // dishTableAdapter3
            // 
            this.dishTableAdapter3.ClearBeforeFill = true;
            // 
            // idDataGridViewTextBoxColumn
            // 
            this.idDataGridViewTextBoxColumn.DataPropertyName = "id";
            this.idDataGridViewTextBoxColumn.HeaderText = "id";
            this.idDataGridViewTextBoxColumn.Name = "idDataGridViewTextBoxColumn";
            this.idDataGridViewTextBoxColumn.ReadOnly = true;
            // 
            // nameDataGridViewTextBoxColumn
            // 
            this.nameDataGridViewTextBoxColumn.DataPropertyName = "Name";
            this.nameDataGridViewTextBoxColumn.HeaderText = "Name";
            this.nameDataGridViewTextBoxColumn.Name = "nameDataGridViewTextBoxColumn";
            // 
            // priceDataGridViewTextBoxColumn
            // 
            this.priceDataGridViewTextBoxColumn.DataPropertyName = "Price";
            this.priceDataGridViewTextBoxColumn.HeaderText = "Price";
            this.priceDataGridViewTextBoxColumn.Name = "priceDataGridViewTextBoxColumn";
            // 
            // caloriesDataGridViewTextBoxColumn
            // 
            this.caloriesDataGridViewTextBoxColumn.DataPropertyName = "Calories";
            this.caloriesDataGridViewTextBoxColumn.HeaderText = "Calories";
            this.caloriesDataGridViewTextBoxColumn.Name = "caloriesDataGridViewTextBoxColumn";
            // 
            // sostavDataGridViewTextBoxColumn
            // 
            this.sostavDataGridViewTextBoxColumn.DataPropertyName = "Sostav";
            this.sostavDataGridViewTextBoxColumn.HeaderText = "Sostav";
            this.sostavDataGridViewTextBoxColumn.Name = "sostavDataGridViewTextBoxColumn";
            // 
            // vesDataGridViewTextBoxColumn
            // 
            this.vesDataGridViewTextBoxColumn.DataPropertyName = "Ves";
            this.vesDataGridViewTextBoxColumn.HeaderText = "Ves";
            this.vesDataGridViewTextBoxColumn.Name = "vesDataGridViewTextBoxColumn";
            // 
            // categoriesIDDataGridViewTextBoxColumn
            // 
            this.categoriesIDDataGridViewTextBoxColumn.DataPropertyName = "CategoriesID";
            this.categoriesIDDataGridViewTextBoxColumn.HeaderText = "CategoriesID";
            this.categoriesIDDataGridViewTextBoxColumn.Name = "categoriesIDDataGridViewTextBoxColumn";
            // 
            // photoDataGridViewTextBoxColumn
            // 
            this.photoDataGridViewTextBoxColumn.DataPropertyName = "Photo";
            this.photoDataGridViewTextBoxColumn.HeaderText = "Photo";
            this.photoDataGridViewTextBoxColumn.Name = "photoDataGridViewTextBoxColumn";
            // 
            // Form5
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(951, 450);
            this.Controls.Add(this.button4);
            this.Controls.Add(this.button3);
            this.Controls.Add(this.button2);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.dataGridView1);
            this.Name = "Form5";
            this.Text = "Form5";
            this.Load += new System.EventHandler(this.Form5_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.dishBindingSource2)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.restoranDataSet14)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.dishBindingSource1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.restoranDataSet5)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.dishBindingSource)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.restoranDataSet15)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.dishBindingSource3)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.restoranDataSet17)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.dishBindingSource4)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion
        private System.Windows.Forms.BindingSource dishBindingSource;
        private restoranDataSet5 restoranDataSet5;
        private System.Windows.Forms.BindingSource dishBindingSource1;
        private restoranDataSet5TableAdapters.DishTableAdapter dishTableAdapter1;
        private restoranDataSet14 restoranDataSet14;
        private System.Windows.Forms.BindingSource dishBindingSource2;
        private restoranDataSet14TableAdapters.DishTableAdapter dishTableAdapter;
        public System.Windows.Forms.DataGridView dataGridView1;
        public System.Windows.Forms.Button button1;
        public System.Windows.Forms.Button button2;
        public System.Windows.Forms.Button button3;
        public System.Windows.Forms.Button button4;
        private restoranDataSet15 restoranDataSet15;
        private System.Windows.Forms.BindingSource dishBindingSource3;
        private restoranDataSet15TableAdapters.DishTableAdapter dishTableAdapter2;
        private restoranDataSet17 restoranDataSet17;
        private System.Windows.Forms.BindingSource dishBindingSource4;
        private restoranDataSet17TableAdapters.DishTableAdapter dishTableAdapter3;
        private System.Windows.Forms.DataGridViewTextBoxColumn idDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn nameDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn priceDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn caloriesDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn sostavDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn vesDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn categoriesIDDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn photoDataGridViewTextBoxColumn;
    }
}