<html>

<head>
<title>Guessing game</title>
</head>

<?php
extract($_REQUEST);
session_start();

if (!isset($_POST["guess"])) 
{
	$_SESSION["count"] = 0; 
	$message = "Welcome to the guessing machine!";
	$_POST["numtobeguessed"] = rand(0,100);
	echo $_POST["numtobeguessed"];
} 
elseif ($_POST["guess"] > $_POST["numtobeguessed"]) 
{ 
$message = $_POST["guess"]." is too big! Try a smaller number.";
$_SESSION["count"]++; 

} 
elseif ($_POST["guess"] < $_POST["numtobeguessed"]) 
{ 
$message = $_POST["guess"]." is too small! Try a larger number.";
$_SESSION["count"]++; 

} 
else 
{
$_SESSION["count"]++;
$message = "Well done! You guessed the right number in ".$_SESSION["count"]." attempt(s)!";
unset($_SESSION["count"]);

}

?>
<body>
<h1><?php echo $message; ?></h1>
<form action="" method="POST">
<p><strong>Type your guess here:</strong>
<input type="text" name="guess"></p>
<input type="hidden" name="numtobeguessed"
value="<?php echo $_POST["numtobeguessed"]; ?>" ></p>
<p><input type="submit" name ="button" value="Submit your guess"/></p>
<p><input type="submit" name = "button "value="restart"/></p>

   <h4><a href="/~dn2061er/private/assignment6">Return to assignemnt6</a></h4>
<h6>CLICK HERE FOR CODE:<input type="button" onclick="location.href='http://puff.mnstate.edu/~dn2061er/private/assignment6/code.php';" value="Code" /></h6> 

</form>
</body>
</html>
