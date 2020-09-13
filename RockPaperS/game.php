
<!DOCTYPE html>
<html>
<head>
<title>ashita19028</title>
<title>Ashita's Rock, Paper, Scissors Game</title>
</head>
<body>
<div class="container">
<h1>Rock Paper Scissors</h1>
<p>Welcome: </p>
<form  method="post">
<select name="human">
<option value="-1">Select</option>
<option value="Rock">Rock</option>
<option value="Paper">Paper</option>
<option value="Scissors">Scissors</option>
<option value="Test">Test</option>
</select>
<input type="submit" name="chance" value="Play">
<input type="submit" name="logout" value="Logout">
</form>
<p>
"Press a strategy and press play"
</p>
</div>
</body>
</html>
<?php
session_start();    //session start
//if session not found redirect to homepage
if(!isset($_SESSION['Login name'])){
    die("Name parameter missing");
}
else{
    if(isset($_POST['chance'])) {
        $User = $_POST['human'];
        
        $names= array('Rock', 'Paper', 'Scissors');
        shuffle($names);
        $CPU=$names[0];
    function check($CPU,$User)
    {
        if($User == $CPU){
            return 'Tie';
        }
        else if($User == "Rock"){
            if($CPU == "Scissors") {
                return'You Win';
            } else {
                return 'You Lose';
            }
        }
        else if($User == "Paper") {
            if($CPU == "Rock") {
                return 'You Win';
            }
            else {
               return 'You Lose';
            }
        }
        else if($User == "Scissors") {
            if($CPU == "Rock") {
                return 'You Lose';
            } else {
                return ' You Win';
            }
        }
    }  
    if($User =="Test"){
        for($c=0;$c<3;$c++) {
            for($h=0;$h<3;$h++) {
              $r = check($c, $h);
              echo'Human='.$names[$h]. ' Computer=' .$names[$c]. 'Result='.$r.'<br>';
            }
        
        }

    }
    else{
            $r =check($CPU,$User);
           echo"Your Play=".$User. " Computer Play=".$CPU. " Result=".$r."";
        }
   }
   else if(isset($_POST['logout'])){
    header('Location: index.php');
   }
}
?>