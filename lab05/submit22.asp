<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 5 part 2</title>

    <style>
        body {
            background-color: <%="Request.QueryString("color")"%>;
            font-size: 50px;
        }
    </style>

</head>
<body>
    <%
        Response.Cookies("LastVisit") = Date()
        Response.Cookies("LastVisit").Expires = Date() + 5
        Response.Write("You last visited on : " & Session("LastVisit"))
        Response.Write("<br />")
        Response.Cookies("TimeVisited") = Time()
        Response.Cookies("TimeVisited").Expires = Time() + 5
        Response.Write("The time you last visited was : " & Session("TimeVisited"))
        Response.Write("<br />")
        Response.Write("<br />")
    %>
</body>
</html>