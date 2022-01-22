<%@ Page Language="C#" Async="true" AutoEventWireup="true" CodeBehind="Login.aspx.cs" Inherits="Habloner.Login" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
 <link rel="stylesheet" href="table_style1.css" />
</head>
<body style="color:blueviolet; " class="table_style-7">
    <form id="form1" runat="server">     
          <div  style="margin-top:0; margin-left: 45%; width: 191px;">
                <asp:Label ID="Label1" runat="server"  style= " color:blueviolet;" Width="100%"  Text="Label"><h1>Авторизация</h1></asp:Label>            
            </div>
        <div>          
            <asp:Table ID="table1" runat="server" CssClass="table_style-1" Width="50%" HorizontalAlign="Center">
                <asp:TableRow>
                    <asp:TableCell HorizontalAlign="Center"  ColumnSpan="2" CssClass="table_style-4">
                        <asp:HyperLink ID="HyperLink1" runat="server" >Авторизация</asp:HyperLink>
                    </asp:TableCell>                    
                </asp:TableRow>
                 <asp:TableRow>
                    <asp:TableCell CssClass="table_style-6" Width="45%" Height="10%" HorizontalAlign="Center">
                        <asp:HyperLink ID="HyperLink2" runat="server">Логин</asp:HyperLink>
                    </asp:TableCell>
                    <asp:TableCell CssClass="table_style-10" Width="100%" Height="10%" HorizontalAlign="Center">
                        <asp:TextBox ID="TextBox1" runat="server" Width="100%" Height="10%"></asp:TextBox>
                    </asp:TableCell>
                </asp:TableRow>
                 <asp:TableRow>
                    <asp:TableCell CssClass="table_style-6" Width="45%" Height="10%" HorizontalAlign="Center">
                        <asp:HyperLink ID="HyperLink3" runat="server">Пароль</asp:HyperLink>
                    </asp:TableCell>
                    <asp:TableCell >
                        <asp:TextBox ID="TextBox2" TextMode="Password" runat ="server" Width="100%"></asp:TextBox>
                    </asp:TableCell>
                </asp:TableRow>
                  <asp:TableRow>                          
                   <asp:TableCell Height="32" >
                       <asp:Button ID="Button1" runat="server" Height="70%" Width="100%"   Text="Войти" OnClick="Button1_Click" />
                    </asp:TableCell>
                       <asp:TableCell CssClass="table_style-1a" HorizontalAlign="Center">
                        <asp:HyperLink ID="HyperLink5" NavigateUrl="~/Registtration.aspx"  runat="server">Зарегистрироваться.</asp:HyperLink>
                      </asp:TableCell>
                </asp:TableRow>
            </asp:Table>
        </div>
    </form>
</body>
</html>
