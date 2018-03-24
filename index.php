<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Github Test</title>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Days+One" />
        <style>
            label{
                font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
            color: white;
            }
            h1{
                font-family: "Days One";
                text-align:center;
                color: pink;
            }
            .half{
                width: 50%;
            }
            html{
                background: url(cake.jpg) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <?php echo '<h1>'.'Employee\'s Birthday\'s '.'</h2>';?>
        <div class="half">
        <?php
       
        $names = array('Mandla','Andrew','Pieter','James','Marko');
        $dates = array('13 January 1998','15 September 1996','12 April 1980','6 July 1982','8 December 1986');
        for($i =0; $i <5;$i++){
            echo ("<label>Name: $names[$i] "."</br></br>"."Birthday: $dates[$i]</label><hr/>");
        }
       //Just checking if it will cover the commmit
        ?>
        </div>
    </body>
</html>
