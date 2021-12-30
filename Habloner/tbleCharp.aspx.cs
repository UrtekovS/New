using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Habloner
{
    public partial class tbleCharp : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            Table table = new Table();
            table.HorizontalAlign = HorizontalAlign.Center;
            table.Width = new Unit("80%");
            table.Height = new Unit("50%");
            table.CssClass = "table_style-1";
            //-- шапка
            //-- создаём переменные, строки и ечейки
            TableHeaderRow hrow = new TableHeaderRow();
            TableHeaderCell hcell = new TableHeaderCell();
            hcell = new TableHeaderCell();
            hcell.Controls.Add(new Label { Text = "колонка №1" });
            hrow.Cells.Add(hcell);
            //Label hlable = new Label();
            //hlable.Text = "колонка №1";
            //hcell.Controls.Add(hlable);
            //добавляем ячейку hcell в строку hrow
            hrow.Cells.Add(hcell);
            table.Rows.Add(hrow);
            //--окончание шапки
            //--ячейка 2
            hcell = new TableHeaderCell();
            hcell.Controls.Add(new Label { Text = "колонка №2" });
            hrow.Cells.Add(hcell);
            //--ячейка 2 коней
            //--ячейка 3
            hcell = new TableHeaderCell();
            hcell.Controls.Add(new Label { Text = "колонка №3" });
            hrow.Cells.Add(hcell);
            //--ячейка 3 
            //добавляем строки в таблицу
            table.Rows.Add(hrow);
            //коней Конец шапки
            TableRow row;
            TableCell cell;
            //тело таблици
            //строка №1
            row = new TableRow();
            //строка №1 конец
            //создание ячейки№1
            cell = new TableCell();
            cell.CssClass = "table_style-4";
            cell.Controls.Add(new Label { Text = "Таблица в C#" });
            row.Cells.Add(cell);
            //конец ячейки№1

            //создание ячейки№2
            cell = new TableCell();
            cell.CssClass = "table_style-3";
            cell.Controls.Add(new Button { Text = "нажми на меня:)))" , CssClass= "table_style-5" });
            cell.Controls.Add(new TextBox { Text = "проба!" });
            row.Controls.Add(cell);
            //конец ячейки№2

            //создание ячейки№3
            cell = new TableCell();
            cell.CssClass = "table_style-7";
            cell.Controls.Add(new Image { ImageUrl= "ра.jpg", Height=50, Width=50  });
            cell.Controls.Add(new TextBox { Text = "проба!" , Width=70 });
            row.Controls.Add(cell);
            //конец ячейки№3    
            //заносим строку в таблицу
            table.Rows.Add(row);

            //2Строка
            //строка №1
            row = new TableRow();
            //строка №1 конец
            //создание ячейки№1
            cell = new TableCell();
            cell.Width = new Unit("10%");
            cell.CssClass = "table_style-6";
            cell.Controls.Add(new Label { Text = "Таблица в C#" });
            row.Cells.Add(cell);
            //конец ячейки№1

            //создание ячейки№2
            cell = new TableCell();
           // cell.ColumnSpan = 2;
            cell.CssClass = "table_style-2";
            cell.Controls.Add(new Button { Text = "нажми на меня:)))" });
            cell.Controls.Add(new TextBox { Text = "проба!" });
            row.Controls.Add(cell);
            //конец ячейки№2

            //создание ячейки№3
            cell = new TableCell();
            cell.CssClass = "table_style-4";
            cell.Controls.Add(new Image { ImageUrl = "а.jpg", Height = 50, Width = 50 });
            cell.Controls.Add(new TextBox { Text = "Cпорт!" });
            row.Controls.Add(cell);
            //конец ячейки№3
            //заносим строку в таблицу
            table.Rows.Add(row);
            //подвал страници
            TableFooterRow frow = new TableFooterRow();
            TableCell fcell1 = new TableCell();
            fcell1.ColumnSpan = 4;
            fcell1.Controls.Add(new HyperLink { NavigateUrl = "UsersPage.aspx", Text = "Вернуться на страницу пользователя" });
            fcell1.HorizontalAlign = HorizontalAlign.Center; 
            frow.Cells.Add(fcell1);
            table.Rows.Add(frow);
            PlaceHolder1.Controls.Add(table);
        }
    }
}