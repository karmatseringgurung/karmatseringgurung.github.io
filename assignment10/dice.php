<html>
<body>
<form>
<?php

extract($_REQUEST);

$dice = rand(1,6);
$roll = $_POST['submit'];



if ($button==NULL or $button=="restart")
	namePage();
else
{
	mainFunc($name);
}


echo $dice;
echo $roll;

function mainFunc($name)
{	
	buttons($name);
	
	$player = playerPoints();
	
	echo <<< HERE
	<form>
	
	<center>
	<table border ="2">
	
	<tr>
		<th>Player</th>
		<th>points</th>
		
	</tr>
	
	<tr>
		<th>$name</th>
		<th>$player</th>
		
	</tr>
	
	<tr>
		<th>Computer</th>
		<th>$compPoints</th>
		
	</tr>
	
	</table>
	</center>
	
	
	
	</form>
	
	
HERE;
	
}


function playerPoints()
{
	
	$playerPoint =0;
	while ($button !== "Again")
	{
		
	
	
	if ($button = "Guess" && $guess==1 && gue() ==1)
		$playerPoint++;
	elseif ($button = "Guess" && $guess==2 && gue() ==2)
		$playerPoint++;
	elseif ($button = "Guess" && $guess==3 && gue() ==3)
		$playerPoint++;
	elseif ($button = "Guess" && $guess==4 && gue() ==4)
		$playerPoint++;
	elseif ($button = "Guess" && $guess==5 && gue() ==5)
		$playerPoint++;
	elseif ($button = "Guess" && $guess==6 && gue() ==6)
		$playerPoint++;
		
	return $playerPoint;
	}	

}
function buttons($name)
{
	echo <<< HERE
	<form>
	<center>
	<h2>Lets Play Guess???? </h2> 
	<h3>Player: $name</h3><br/>
	Your guess: <input type="text" name="guess" size="1"><br/>
 	<br/>

	<input type="submit" name="button" value="Guess" >
	<input type="submit" name="button" value="Again">
	
	</center>
	</form>
	
HERE;
	
}

function namePage()
{
	echo <<< HERE
	<center>
	<h1>Welcome TO Dice World</h1>
	<h3>Enter Your name: <input type = "text" name="name" autocomplete="off"></h3>
	<input type="submit" name="button" value="Lets Play">
	</center>
	
HERE;
}




?>
</form>
</body>
</html>