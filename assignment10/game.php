
<html>
<body bgcolor= 'grey'>
<style>
.field_set{
 
 background-color:#38d1ff;
 display:inline-block;
}

</style>
<center>
<fieldset class='field_set'>
<form method = "POST">
<?php
// extract
   extract($_REQUEST);
   $button = $_POST['button'];
   $name = $_POST['name'];
   $answer = $_POST['answer'];
   $compGuess = $_POST['compGuess'];
   $num1 = $_POST['num1'];
   $playerPoint=0;
   $compPoint=0;
	
   if ($button==NULL or $button=="restart")
   {
	   namePage();
	   resetGame;
	   //echo "<h3>Welcome player</h3>";
	   
   }
   

   else
   {
	   
	   echo "<h1><center> Welcome To Game!!!</center></h1>";
	   if ($button == "begin" or $button == "Play Again!")
	   {
		   echo "<input type = 'hidden' name = 'name' value = '$name'>";
		   
		   randomNumber($compGuess, $num1);
		   quizPage($name, $compGuess, $num1, $playerPoint, $compPoint);
	   }
	   
	   elseif ($button == "Submit")
	   {
		   
		   echo "<h3><center>Welcome Player: ".$name."</center><br></h3>";
		   checker($playerPoint, $compPoint, $compGuess, $num1, $guess, $name);
		   
	   }
	   
	   
	   elseif ($button == "Play Again!")
	   {
		   echo "<input type = 'hidden' name = 'name' value = '$name'>";
		   checker($playerPoint, $compPoint, $compGuess, $num1, $guess, $name);
		   
	   }
		   
	  
		   		
   }
   
function namePage()
{
	

   echo <<< HERE
   <center>
   <h1>Welcome to Dice roll!!!</h1>
   <h3>Enter your name:  <input type="text" name="name" autocomplete="off"></h3>
   <input type="submit" name="button" value="begin">
   </center>
HERE;
}


function randomNumber(&$compGuess, &$num1)
{

	$compGuess = rand(1,6);
	$num1 = rand(1,6);
}
function quizPage(&$name, &$compGuess, &$num1, &$playerPoint, &$compPoint)
{  
   echo <<< HERE
   <center>
   <fieldSet style = 'border: 3px black solid'>
   <h2>Player: $name</h2>
   <h2> Lets Roll Some Dice!!! </h2>
   <h4>Please Enter number between (1-6)</h4>
   Enter your guess: <input type="text" name = "guess"><br/>
   <br/>
   <input type="submit" name="button" value="Submit">
   <input type="submit" name="button" value="restart"><br>
	
	<input type = "hidden" name = "compGuess" value ="$compGuess" >
	<input type = "hidden" name = "num1" value = "$num1">
	</fieldSet>
	</center>
	 	  
HERE;

echo "<input type = 'hidden' name= 'playerPoint' value ='$playerPoint'>";
echo "<input type = 'hidden' name = 'compPoint' value = '$compPoint'>";
	
}


function checker($playerPoint, $compPoint, &$compGuess, &$num1, $guess, &$name)
{

	//$result = $num1*$num2;
	echo "<h3> Your Guess         :".$guess."</h3>";
	echo "<h3> Computer Guess:".$compGuess."</h3>";
	
	
	if ($num1==$guess and $num1 == $compGuess)
	{
		
		echo "<input type = 'hidden' name = 'playerPoint'  value = '$playerPoint'>";
		echo "<input type = 'hidden' name = 'compPoint0' value = '$compPoint'>";
		echo "<h4><marquee>you and computer got correct Answer!!!</marquee><br>";
		$playerPoint++;
		$compPoint++;
	}
	elseif ($num1 == $guess)
	{
		
		echo "<input type = 'hidden' name='playerPoint' value = '$playerPoint'>";
		echo "<input type = 'hidden' name='compPoint' value = '$compPoint'>";
		echo "<h4><marquee>Congratulation you got correct Answer!!!</marquee><br>";	
		$playerPoint++;
	}	
	
	elseif ($num1 == $compGuess)
	{
		
		echo "<input type = 'hidden' name='playerPoint' value = '$playerPoint'>";
		echo "<input type = 'hidden' name='compPoint' value = '$compPoint'>";
		echo "<h4><marquee>Computer got correct Answer!!!</marquee><br>";
		$compPoint++;
	}
	
	
	else
	{
		echo "<h3>Both Chooses wrong Answer!!! <br></h3>";
		echo "<input type = 'hidden' name = 'compGuess' value = '$compGuess' >";
		echo "<input type = 'hidden' name = 'num1' value = '$num1' >";
		echo "<input type = 'hidden' name = 'name' value = '$name'>";
		
		
	}
	
	
	echo "<input type = 'hidden' name='playerPoint' value = '$playerPoint'>";
	echo "<input type = 'hidden' name='compPoint' value = '$compPoint'>";	
	echo "<input type = 'hidden' name = 'name' value = '$name'>";
	
	if ($num1 ==1)
	{
		echo "<img src = 'diee1.jpg'>";
	}
	elseif ($num1 ==2)
	{
		echo "<img src = 'die2.jpg'>";
	}
	elseif ($num1 ==3)
	{
		echo <<< HERE
		<img src = "die3.jpg">
HERE;
	}
	elseif ($num1 ==4)
	{
		echo "<img src = die4.jpg'>";
	}
	elseif ($num1 ==5)
	{
		echo "<img src = 'die5.jpg'>";
	}
	else
	{
		echo "<img src = 'die6.jpg'>";
	}
	
	echo "<br>Correct GUESS is: ".$num1."</h4>";
	//echo "<br>Player point: ".$playerPoint."</h4>";
	//echo "<br>Computer point: ".$compPoint."</h4><br>";

	
	echo "<br><input type = 'submit' name= 'button' value ='Play Again!'>";
	echo "<input type = 'submit' name = 'button' value = 'restart'><br>";
}

function resetGame(&$playerPoint, &$compPoint)
{
	$playerPoint = 0;
	$correctCount = 0;
}


?>
</form>

  
</fieldSet>


<h4><button type="button"><a href="/~dn2061er/private/assignment10">Return to Assignment10</a></button>
<button type="button"><a href="/~dn2061er/private">Return to Main menu</a></button></h4>
<h6>CODE HERE:<br><input type="button" onclick="location.href='http://puff.mnstate.edu/~dn2061er/private/assignment10/code.php';" value="Code" /></h6> 

</center>
</body>
</html>