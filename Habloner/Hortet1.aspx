<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Hortet1.aspx.cs" Inherits="Habloner.Hortet1" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <asp:Button ID="Button1" Height="34px" runat ="server" Text="Жми" OnClick="Button1_Click" Width="131px" />
            <br />
            <br />
            <asp:Label ID="Label1" runat="server" Text="Привет"></asp:Label>
             <br />
            <br />
            <asp:Button ID="Button2" runat="server" Height="34px" Text="Очистить лейбл" OnClick="Button2_Click" Width="131px" />
        </div>
    </form>
</body>
</html>
