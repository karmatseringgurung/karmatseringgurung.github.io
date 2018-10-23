<html>
<body>
<?php


game();
game_check();


function game_check()
{
		game();
        $roll = $_POST['submit']; 
        $dice =  rand(1, 6);

        if ($roll == 1 && $dice == 1) 
       { 
          print "Great Job, You're Good!"; 
       }
       else  
       {
             print "Wrong <br />"; 
       }



       if($dice == 1) print "<img src='1.png'>"."<br>";
       if($dice == 2) print "<img src='2.png'>"."<br>";
       if($dice == 3) print "<img src='3.png'>"."<br>";
       if($dice == 4) print "<img src='4.png'>"."<br>";
       if($dice == 5) print "<img src='5.png'>"."<br>";
       if($dice == 6) print "<img src='6.png'>"."<br>";

               else {
                  print "Thanks". "<br>";
            }

        <form>   
       <input type="submit" name="back" value ="Play again">
		</form>
    
		
		if ($back=="Play again")
			game();
		else
			game_check();
}


function game()
{
<form  method="post">
 	game_check();

           Your guess: <br>

         <input type= "text" name="" size= "1">

       <input type ="submit" name = "submit">

      </form>
}


?>

</body>
</html>

