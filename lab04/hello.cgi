#!/usr/local/bin/perl

print "Content-type: text/html\n\n";

use CGI':standard';
use strict;

print <<"EOF";
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
        <style>
            h1 {
                font-size: 5rem;
                font-family: 'Righteous', cursive;
                text-align: center;
                color: rgb(20, 129, 240);
            }
        </style>
        <title>CPS530 Lab04 Q1</title>
    </head>
    <body>
        <h1>This is my first Perl program.</h1>
    </body>
    </html>
EOF