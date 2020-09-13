<!DOCTYPE html>
<html>
<head>
<title>ashita19028 </title>
</head>
<body>
<div class="container">
<h1>Welcome to Rock Paper Scissors</h1>
<p>
<a href="login.php">Please Log In</a>
</p>
<p> 
<a href="game.php">game.php</a> 

</p>
</div>
</body>
<?php
session_start();
if(isset($_SESSION['Login name']))     //if session not found redirect to homepage
  { 
    header('Location:login.php');
}
else{
    echo 'ERROR:NEED USERNAME,click login';
}
?>