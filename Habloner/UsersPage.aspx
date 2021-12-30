<%@ Page Language="C#" Async="true" AutoEventWireup ="true" CodeBehind="UsersPage.aspx.cs" Inherits="Habloner.UsersPages" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <link rel="stylesheet" href="table_style1.css" />
</head>
<body class="table_style-5">
    <form id="form1" runat="server">
        <div>
            <div>
                <asp:Table ID="Table2" runat="server" style="margin-left:40%; margin-top:10px;">
                    <asp:TableFooterRow >
                        <asp:TableCell>
                             <asp:PlaceHolder ID="PlaceHolder1"  runat="server"></asp:PlaceHolder>    
                            </asp:TableCell>                      
                    </asp:TableFooterRow>
                     <asp:TableFooterRow >
                        <asp:TableCell>
                             <asp:Image ID="Image2"  ImageUrl="~/12.png"  Height="350px" Width="433px" runat="server" />   
                        </asp:TableCell>                      
                    </asp:TableFooterRow>
                </asp:Table>               
            </div>            
            <asp:Table ID="Table1" runat="server" style="margin-left: 28px; margin-top:10px;">
                <asp:TableFooterRow>
                    <asp:TableCell  HorizontalAlign="Right">
                        <asp:Label ID="Label1" runat="server" Text="Label"></asp:Label>
                    </asp:TableCell>
                    <asp:TableCell HorizontalAlign="Right">
                        <asp:Button ID="Button1" runat="server" Height ="34" Text="Выйти" OnClick="Button1_Click" />
                    </asp:TableCell>
                </asp:TableFooterRow>
                <asp:TableFooterRow>
                    <asp:TableCell ColumnSpan="2">
                        <asp:Image ID="Image1" ImageUrl="~/от1.jpg" Height="150px" runat="server" />                         
                    </asp:TableCell>
                    <asp:TableCell>
                                  <asp:HyperLink ID="HyperLink2" NavigateUrl="~/Возврат1.aspx"  runat="server"><h4>Страниа возврата</h4></asp:HyperLink>
                    </asp:TableCell>
                </asp:TableFooterRow>
            </asp:Table>
        </div>
    </form>
</body>
</html>
