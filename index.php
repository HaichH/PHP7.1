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
/*            html{
                background: url(cake.jpg) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }*/

.fullscreen-bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    z-index: -100;
}

.fullscreen-bg__video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
@media (min-aspect-ratio: 16/9) {
  .fullscreen-bg__video {
    height: 300%;
    top: -100%;
  }
}

@media (max-aspect-ratio: 16/9) {
  .fullscreen-bg__video {
    width: 300%;
    left: -100%;
  }
}
        </style>
    </head>
    <body>
        <div class="fullscreen-bg">
    <video loop muted autoplay poster="cake.jpg" class="fullscreen-bg__video">
        <source src="rain.mp4" type="video/mp4">
<!--        <source src="video/big_buck_bunny.mp4" type="video/mp4">
        <source src="video/big_buck_bunny.ogv" type="video/ogg">-->
    </video>
        </div>
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
