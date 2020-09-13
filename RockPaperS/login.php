
<!DOCTYPE html>
<html>
<head>
<title>ashita19028</title>
<title>Ashita's Login Page</title>
</head>
<body>
<div class="container">
<a>Please Log In</a>
<form method="POST">
  <label for="Login name">User Name:</label><br>
  <input type="text" id="uname" name="who"><br>
  <label for="pword">Password:</label><br>
  <input type="password" id="pword" name="pass">
  <input type="submit" value="Log In" name="button">
  <input type="submit" value="Cancel">
</form>
<p>
For a password hint, view source and find a password hint
in the HTML comments.
<!-- Hint: The password is the three character name of the 
programming language used in this class (all lower case) 
followed by 123. -->
</p>
</div>
</body>
</html>
<?php 
session_start();
$salt = 'XyZzy12*_';
$md5 = hash('md5', 'XyZzy12*_php123');
if(isset($_POST['button'])){
  if(!isset($_POST['who']) || !isset($_POST['pass'])) {
    echo "User name and password required<br>";
  }
  elseif (hash('md5',$salt."".$_POST['pass'])== $md5){
    $_SESSION['Login name']=true;
    header("Location: game.php?name=".urlencode($_POST['who']));
    echo"password correct";
  }
  else{
    echo"Incorrect password";
  }
}
   
?>