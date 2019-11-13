#!/usr/bin/python

# Import modules for CGI handling 
import cgi, cgitb 

form = cgi.FieldStorage() 
name = form.getvalue('name')
address  = form.getvalue('address')
a = form.getvalue('pnum')[0:3]
b = form.getvalue('pnum')[3:7]
c = form.getvalue('pnum')[7:]



print "Content-type:text/html\r\n\r\n"

print "<head>"
print '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>'
 
print "<style> .ph { font-size:200px;  }"
print "#p1 { color: green; position: relative; }"
print "#p2 { color: pink; position: relative;}"
print "#p3 { color: orange; position: relative;}"
print "p { margin: 0;}"
print " </style>"
  
gg = '250px'
print '<script> $(document).ready(function() { $("#p1").animate({ left: "250px" }, 6000); $("#p2").animate({ left: "400px" }, 7000); $("#p3").animate({ left: "550px" }, 8000);}); </script>'
print "</head>"



print "<h1>Name: %s </h1>" % (name)
print '<br>'
print "<h1>Address: %s </h1>" % (address)
 
print '<br>'
print '<h1>Number:</h1>' 

print '<p class="ph" id="p1"> (%s) </p>' % (a)
print '<p class="ph" id="p2"> %s </p>' % (b)
print '<p class="ph" id="p3"> %s </p>' % (c)
