   <?php
        $a= rand(1, 12);

        $b= rand(1, 12);

        $message;

        $answer = null;

        $expression = $a ." X ".$b ;

        if (!isset($_POST['guess'])) {

             $message = "Welcome to the Multiplication progarm<br/>";

        }

        elseif ($_POST['guess'] == $a*$b) { // matches!

             $message = $a ." X ".$b." = ".$a*$b." is Correct!<br/> Now try the new expression";

             $answer = $_POST['guess'];

        }

        elseif ($_POST['guess'] != $a*$b) { // some other condition

             $message = $_POST['guess']." is Wrong!";

             $answer = $_POST['guess'];

        }

        ?>


        <html>
         <body> 
        <h2><?php echo $message; ?></h2>
         <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
         <input type="hidden" name="answer" value="<?php echo $answer;?>"> 
        <input type="hidden" name="expression" value="<?php echo $expression;?>">
     What is the value of the following multiplication expression: 
<br>
        <br>
     <?php echo $expression; ?><input type="text" name="guess"><br>
         <input type="submit" value="Check">
         </form> 
        </body> 
        </html> 
