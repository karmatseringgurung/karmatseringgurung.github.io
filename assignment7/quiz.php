
<html>
<body>
<style>
.field_set{
 border-color:#F00;
 background-color:#50C878;
}

</style>
<fieldset class='field_set'>
<form method = "POST">
<?php
// extract
   extract($_REQUEST);
   $button = $_POST['button'];
   $name = $_POST['name'];
   $answer = $_POST['answer'];
   $num1 = $_POST['num1'];
   $num2 = $_POST['num2'];
  
	
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
		   
		   randomNumber($num1, $num2, $counter);
		   quizPage($name, $num1, $num2, $counter, $correctCount);
	   }
	   
	   elseif ($button == "check")
	   {
		   
		   echo "<h3><center>Welcome Player: ".$name."</center><br></h3>";
		   checker($counter, $correctCount, $num1, $num2, $guess, $name);
		   
	   }
	   
	   
	   elseif ($button == "Play Again!")
	   {
		   echo "<input type = 'hidden' name = 'name' value = '$name'>";
		   quizPage($name, $num1, $num2, $counter, $correctCount);
		   
	   }
		   
	  
		   		
   }
   
function namePage()
{
	

   echo <<< HERE
   <center>
   <h1>Welcom to QUIZ!!!</h1>
   <h3>Enter your name:  <input type="text" name="name" autocomplete="off"></h3>
   <input type="submit" name="button" value="begin">
   </center>
HERE;
}


function randomNumber(&$num1, &$num2, &$counter)
{
	$counter++;
	$num1 = rand(1,9);
	$num2 = rand(1,9);
}
function quizPage(&$name, &$num1, &$num2, &$counter, &$correctCount)
{  
   echo <<< HERE
   <center>
   <fieldSet style = 'border: 3px black solid'>
   <h2>Player: $name</h2>
   <h2> What is the multiplication of $num1 and $num2 </h2>
   Enter your guess: <input type="text" name = "guess"><br/>
   <br/>
   <input type="submit" name="button" value="check">
   <input type="submit" name="button" value="restart"><br>
	
	<input type = "hidden" name = "num1" value ="$num1" >
	<input type = "hidden" name = "num2" value = "$num2">
	</fieldSet>
	</center>
	 	  
HERE;

echo "<input type = 'hidden' name= 'counter' value ='$counter'>";
echo "<input type = 'hidden' name = 'counterCount' value = '$counterCount'>";
	
}


function checker($counter, &$correctCount, &$num1, &$num2, $guess, &$name)
{

	$result = $num1*$num2;
	
	if ($result == $guess)
	{
		$correctCount++;
		
		echo "<h4><marquee>Congratulation you got correct Answer!!!</marquee><br>";
		echo "<br>Correct answer is: ".$result."</h4>";	
		echo "<input type = 'submit' name= 'button' value ='Play Again!'><br>";
		echo "<input type = 'hidden' name='correctCount' value = '$correctCount'>";
	}	
	else
	{
		echo "<h3>Wrong Answer!!! <br></h3>";
		echo "<input type = 'hidden' name = 'num1' value = '$num1' >";
		echo "<input type = 'hidden' name = 'num2' value = '$num2' >";
		echo "<input type = 'hidden' name = 'name' value = '$name'>";
		
		
	}
	
	echo "<br><input type = 'submit' name = 'button' value = 'restart'><br>";
	echo "<input type = 'hidden' name = 'name' value = '$name'>";
	echo "<input type = 'hidden' name = 'counter'  value = '$counter'>";
	echo "<input type = 'hidden' name = 'correctCount' value = '$correctCount'>";
	
	
	echo "Total Correct Answers: ".$correctCount;
	echo "<br>";
	echo "Total: ".$counter;
	
	
	
}

function resetGame(&$counter, &$correctCount)
{
	$counter = 0;
	$correctCount = 0;
}


?>
</form>
<input type="button" onclick="location.href='http://puff.mnstate.edu/~dn2061er/private/assignment7/code.php';" value="Code" />
  
</fieldSet>

<h4><a href="/~dn2061er/private/assignment7">Return to Assignment7</a></h4>
   <h4><a href="/~dn2061er/private">Return to Main menu</a></h4>
</body>
</html>
