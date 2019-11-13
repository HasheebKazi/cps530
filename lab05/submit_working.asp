<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 5 part 2</title>

    <style>
        body {
            background-color:  <%=Request.QueryString("color")%>;
            font-size: 50px;
        }
    </style>

</head>
<body>
    
</body>
    <h1>Cookie Visit Tracking Info</h1>    
    <%
        Response.Cookies("lv") = Date()
        Response.Cookies("lv").Expires = Date() + 5
        Response.Write("last visit --- " & Request.Cookies("lv"))
        Response.Write("<br />")
        Response.Cookies("time") = Time()
        Response.Cookies("time").Expires = Date() + 10
        Response.write("The server time seems to be -3 hours from eastern standard time")
        Response.Write("<br />")

        Response.Write("which was at time --- " & Request.Cookies("time"))
        Response.Write("<br />")
        Response.Write("<br />")
    %>
</html>