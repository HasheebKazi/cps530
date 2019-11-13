#!/usr/local/bin/ruby -w

print "content-type: text/html\n\n" 
require 'cgi' 
cgi = CGI.new 



print "<head>"
    print '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>'
 
    print "<style> .ph { display:none; font-size:200px;  }"
    print "#p1 { color: green;}"
    print "#p2 { color: pink;}"
    print "#p3 { color: orange;}"
    print "p { margin: 0;}"
    print " </style>"
  

    print '<script> $(document).ready(function() { $("#p1").fadeIn(2000); $("#p2").fadeIn(4000); $("#p3").fadeIn(8000);}); </script>'
print "</head>"

a = cgi['pnum'][0,3]
b = cgi['pnum'][4,3]
c = cgi['pnum'][7,5]


puts "<h1>Name: " + cgi['name'] + "</h1>" 
print '<br>'
puts "<h1>Address: " + cgi['address'].split.map(&:capitalize).join(' ') + "</h1>" 
print '<br>'
print '<h1>Number:</h1>' 

print '<p class="ph" id="p1"> (' + a + ') </p>'
print '<p class="ph" id="p2">' + b + '</p>'
print '<p class="ph" id="p3">' + c + '</p>'
