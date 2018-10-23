<?php
   extract($_REQUEST);
   
   //$randNum = rand(1, 1000);
   //echo " RandNumber is: " .$randNum. "<br>";
   guess();
  
   if ($button==NULL or $button=="start over")
      $number = 0;
	guess();
  
  
  
   else
	   if($guess == $randNum)
		   $rightNum++;
	   else
		   $number++;
   
	  
   echo <<< HERE
      <h3>Number of Guesses: $number</h3>
      <form action="guessNumber.php">
        <input type="hidden" name="number" value=$number>
        <input type="submit" name="button" value="Submit">
        <input type="submit" name="button" value="start over">
      
HERE;


function textBox(&$guess, &$number, &$randNum)
{
	$array = new SplFixedArray ();
	for ($i=0; i < $number; $i++)
	{
		if ($guess > $randNum)
			$array[$guess+ "Guess is higher"];
		else
			$array[$guess + "Guess is lower"];
	}
}

function guess()
{

echo <<< HERE
<h2> Enter a number between 1 and 1000 </h2>
<h2>Guess: <input type ="text" name="input" value="$guess"></h2><br/>


HERE;

}

?>
