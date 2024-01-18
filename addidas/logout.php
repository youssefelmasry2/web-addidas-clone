<?php
session_start();

session_destroy();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>adidas</title>
    <link rel="stylesheet" href="loginpage.css" />
    <link rel="stylesheet" href="stylesheet.css">
    <style>
        button {
            width: 100px;
            height: 50px;
            cursor: pointer;
        }

        .bg img {
            width: 100%;
            height: auto;
        }

        .bg {
            width: 100%;
            position: relative;
        }

        h1,
        h2 {
            text-align: center;
            font-family: AdihausDIN;
        }

        .container {
            position: relative;
            width: 100%;

        }

        .container img {
            width: 100%;
            height: auto;
        }

        .container .btn {
            position: absolute;
            color: rgb(0, 0, 0);
            font-size: 26px;
            cursor: pointer;
            width: 200px;
            text-align: center;
            background-color: rgb(255, 255, 255);
            font-family: AdihausDIN;
            font-weight: bold;
            margin-left: 120px;
            border-radius: 0px;
            box-shadow: 2px 2px transparent;
        }

        .container .btn:hover {
            background-color: rgba(255, 255, 255, 0.56);
            color: black;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="image">
            <a href="main.html" target="_blank"><img src="image/adidas.png.jpg" alt="adidas logo" style="height: 70px;"></a>
            <hr>
        </div>
    </div>

    <h1> You Logged Out Successfully</h1><br>

    <div class="container">
        <img src="image/worldcup.jpeg" alt="Snow" style="width:100%">
        <div style="width: 20%;position:absolute;height: 100%; background-color: black; color: rgb(250, 250, 250);">
            <h1 style="font-size: 60px;">LOG IN OR SIGN UP TO RECEIVE THE 20% COUPON</h1><br>
            <a href="login.php"><button class="btn" style="margin-top :30px">LOG IN</button></a><br>
            <a href="register - Copy.html"><button class="btn" style="margin-top :100px">SIGN UP</button></a>
        </div>
    </div>
</body>

</html>