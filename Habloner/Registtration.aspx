<%@ Page Language="C#" Async="true"  AutoEventWireup ="true" CodeBehind="Registtration.aspx.cs" Inherits="Habloner.Registtration" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
     <link rel="stylesheet" href="gtntral2.css" />
</head>
<body style="color:green; font-size:14px;" class="table_style-12">
    <form id="form1" runat="server">
        <div>
            <div  style="margin-top:0%; margin-left:40%; width: 403px;  color:cadetblue" >
                 <asp:Label ID="Label1"  runat="server" Text="Label"><h1>Регистрация пользователя</h1></asp:Label>
            </div>           
            <asp:Table ID="Table1" runat="server" Width="45%" HorizontalAlign="Center">
                <asp:TableFooterRow>
                    <asp:TableCell    HorizontalAlign="Center">
                        <asp:PlaceHolder ID="PlaceHolder1" runat="server"></asp:PlaceHolder>                     
                    </asp:TableCell>
                </asp:TableFooterRow>
                <asp:TableFooterRow>
                    <asp:TableCell HorizontalAlign="Center" >
                        <asp:Label ID="Label2" runat="server" Text="Label">Логин</asp:Label>
                    </asp:TableCell>
                    <asp:TableCell  HorizontalAlign="Center">
                        <asp:TextBox ID="TextBox1" runat="server"></asp:TextBox>
                    </asp:TableCell>
                </asp:TableFooterRow>
                <asp:TableFooterRow>
                    <asp:TableCell HorizontalAlign="Center">
                        <asp:Label ID="Label3" runat="server" Text="Label">Пароль</asp:Label>
                    </asp:TableCell>
                    <asp:TableCell  HorizontalAlign="Center">
                        <asp:TextBox ID="TextBox2" TextMode="Password"  runat="server"></asp:TextBox>
                    </asp:TableCell>
                </asp:TableFooterRow>
                <asp:TableFooterRow>
                     <asp:TableCell HorizontalAlign="Center" >
                        <asp:HyperLink ID="HyperLink1" NavigateUrl="~/Logoumt.aspx"   runat ="server">Войти</asp:HyperLink>
                    </asp:TableCell>
                    <asp:TableCell  ColumnSpan="2" HorizontalAlign="Center">
                        <asp:Button ID="Button2" runat="server"  Height="34"  Text ="Зарегистрироваться"  OnClick="Button2_Click"/>
                    </asp:TableCell>     
                </asp:TableFooterRow>
                <asp:TableFooterRow>
                    <asp:TableCell>
              
                    </asp:TableCell>
                    <asp:TableCell>

                    </asp:TableCell>
                </asp:TableFooterRow>
                <asp:TableFooterRow>
                    <asp:TableCell>

                    </asp:TableCell>
                    <asp:TableCell>

                    </asp:TableCell>
                </asp:TableFooterRow>
                <asp:TableFooterRow>
                    <asp:TableCell>

                    </asp:TableCell>
                    <asp:TableCell>

                    </asp:TableCell>
                </asp:TableFooterRow>
                <asp:TableFooterRow>
                    <asp:TableCell>

                    </asp:TableCell>
                    <asp:TableCell>

                    </asp:TableCell>
                </asp:TableFooterRow>
                <asp:TableFooterRow>
                    <asp:TableCell>

                    </asp:TableCell>
                    <asp:TableCell>

                    </asp:TableCell>
                </asp:TableFooterRow>
                <asp:TableFooterRow>
                    <asp:TableCell>

                    </asp:TableCell>
                    <asp:TableCell>

                    </asp:TableCell>
                </asp:TableFooterRow>
            </asp:Table>
        </div>
    </form>
</body>
</html>
