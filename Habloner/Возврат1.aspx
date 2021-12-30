<%@ Page Language="C#"  AutoEventWireup="true" CodeBehind="Возврат1.aspx.cs" Inherits="Habloner.Возврат1" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <link rel="stylesheet" href="table_style1.css" />
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <asp:Table ID="Table1" runat="server" Width="72%"  BorderWidth="1"  HorizontalAlign="Center" style="background-color:aquamarine">
                <asp:TableHeaderRow  HorizontalAlign="Center">
                    <asp:TableCell >
                        <asp:Label ID="Label1" runat="server" Text="Колонка №1"></asp:Label>
                    </asp:TableCell>                
                    <asp:TableCell>
                        <asp:Label ID="Label3" runat="server" Text="Колонка №2"></asp:Label>
                    </asp:TableCell>                
                    <asp:TableCell>
                        <asp:Label ID="Label4" runat="server" Text="Крлонка №3"></asp:Label>
                    </asp:TableCell>
                </asp:TableHeaderRow>
                <asp:TableRow>
                    <asp:TableCell   HorizontalAlign="Center" CssClass="table_style-2">
                         <asp:TextBox runat="server"></asp:TextBox>
                    </asp:TableCell>

                    <asp:TableCell   HorizontalAlign="Center"  CssClass="table_style-3">
                        <asp:ImageButton ID="ImageButton1" Height="50px" BorderWidth="1"  ImageUrl="~/Снимок экрана (324).png"  runat="server" OnClick="ImageButton1_Click" />
                    </asp:TableCell>
                    <asp:TableCell  HorizontalAlign="Center"  CssClass="table_style-4">
                        <asp:Image ID="Image1" runat="server" Height="300px" ImageUrl="~/13.png" />
                    </asp:TableCell>                   
                </asp:TableRow>
                <asp:TableFooterRow>
                    <asp:TableCell   HorizontalAlign="Center" CssClass="table_style-1 table_style-1--heit">
                         <asp:TextBox ID="tb1" runat="server" ></asp:TextBox>
                        <asp:HyperLink ID="HyperLink1" NavigateUrl="tbleCharp.aspx" runat="server">Таблица на C#</asp:HyperLink>
                    </asp:TableCell>
                    <asp:TableCell   HorizontalAlign="Center" CssClass="table_style-4--heit table_style-4">
                         <asp:TextBox  ID="tb2" runat="server"></asp:TextBox>
                    </asp:TableCell>
                </asp:TableFooterRow>
                <asp:TableFooterRow HorizontalAlign="Center">
                    <asp:TableCell ColumnSpan="3">
                         <asp:Label ID="Label2" runat="server" Text="Label"><h4>подвал страницы</h4></asp:Label>
                    </asp:TableCell>
                </asp:TableFooterRow>
            </asp:Table>
        </div>
    </form>
</body>
</html>
