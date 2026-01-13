<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>RR Bajar - Game TopUp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            margin:0;
            font-family: Arial;
            background:#0f172a;
            color:white;
        }
        header{
            background:#020617;
            padding:15px;
            text-align:center;
            font-size:22px;
            font-weight:bold;
            color:#38bdf8;
        }
        .banner{
            background:linear-gradient(45deg,#0ea5e9,#22c55e);
            padding:30px;
            text-align:center;
            border-radius:0 0 20px 20px;
        }
        .games{
            display:grid;
            grid-template-columns:repeat(2,1fr);
            gap:15px;
            padding:15px;
        }
        .game{
            background:#020617;
            border-radius:15px;
            overflow:hidden;
            text-align:center;
            box-shadow:0 0 10px #38bdf8;
        }
        .game img{
            width:100%;
            height:150px;
            object-fit:cover;
        }
        .game h3{
            margin:10px 0;
        }
        .game a{
            display:block;
            background:#38bdf8;
            color:black;
            padding:10px;
            text-decoration:none;
            font-weight:bold;
            border-radius:0 0 15px 15px;
        }
    </style>
</head>

<body>

<header>
    RR BAJAR
</header>

<div class="banner">
    <h2>🎮 Game TopUp Shop</h2>
    <p>Fast & Secure Recharge</p>
</div>

<div class="games">

    <div class="game">
        <img src="https://i.ibb.co/wc1g4Gx/freefire.jpg">
        <h3>Free Fire</h3>
        <a href="order.php?game=freefire">Buy Now</a>
    </div>

    <div class="game">
        <img src="https://i.ibb.co/0J3dQzZ/pubg.jpg">
        <h3>PUBG Mobile</h3>
        <a href="order.php?game=pubg">Buy Now</a>
    </div>

    <div class="game">
        <img src="https://i.ibb.co/N3pF9Tf/cod.jpg">
        <h3>Call Of Duty</h3>
        <a href="order.php?game=cod">Buy Now</a>
    </div>

    <div class="game">
        <img src="https://i.ibb.co/Jm8g1KQ/ml.jpg">
        <h3>Mobile Legends</h3>
        <a href="order.php?game=ml">Buy Now</a>
    </div>

</div>

</body>
</html>