<html>
<head>
<title>quiz</title>

</head>

<body>


<form method = "POST">

<?php

extract($_REQUEST);
$button = $_POST['button'];
   $name = $_POST['name'];

   
$quizNumber = 0;
$correctAns = 0;
$wrongAns = 0;

$question = ["What does an eight-sided sign mean?", 
"At an intersection with a four-way stop, which driver can go first?",
"How far ahead should you look when you are on the open highway?",
"Why shouldn't you rely on another driver's signal light? ",
"You come to a sharp crest of a hill. What should you do?",
"When a large truck wants to pass you, what should you do?"];
	
$questionAnswer = ["B", "A", "B", "A", "C", "A"];

$correctAsso= [$question[0] => $questionAnswer[0], 
$question[1] => $questionAnswer[1],
$question[2] => $questionAnswer[2],
$question[3] => $questionAnswer[3],
$question[4] => $questionAnswer[4],
$question[6] => $questionAnswer[5]];
								
//echo $correstAsso[$question[0]];
//echo $question["What is my name?"];

if ($button==NULL or $button=="restart")
{
	namePage();
	}
	else
	{
		if ($button == "begin")
		{ 
	quizPage($question , $questionAnswer, $correctAsso, $name );  }
		   		
   }





function namePage()
{
	

   echo <<< HERE
   <center>
   <h1>Welcome to Driving Test!!!</h1>
   <h3>Enter your name:  <input type="text" name="name" autocomplete="off"></h3>
   <input type="submit" name="button" value="begin">
   </center>
HERE;
}

function quizPage(&$question , &$questionAnswer, &$correctAsso, &$name )
{
	 echo <<< HERE
   <center>
   <fieldSet style = 'border: 3px black solid'>
   <h2>Player: $name</h2>
   <h2> Answer the question!!! </h2>
   
   $question[0]<br>
   Enter your guess: <input type="text" name = "guess"><br/>
   <br/>
   <input type="submit" name="button" value="Submit">
   <input type="submit" name="button" value="restart"><br>
	
	<input type = "hidden" name = "compGuess" value ="$compGuess" >
	<input type = "hidden" name = "num1" value = "$num1">
	</fieldSet>
	</center>
	 	  
HERE;



}



?>

</body>
</html>