<html>
<body>
<?php
$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$addition = $_REQUEST['Addition'];
$substraction = $_REQUEST['Substraction'];
$multiplication = $_REQUEST['Multiplication'];
$division= $_REQUEST['Division'];
$modulus = $_REQUEST['Modulus'];

if (isset($addition))
   echo "<h3>Addition of num is:".number_format ($num1+$num2,2) . "</h3>";

if (isset($substraction))
   echo "<h3>subtraction num is:".number_format ($num1-$num2,2) . "</h3>";

if (isset($multiplication))
   echo "<h3>multiplication is:".number_format ($num1*$num2,2) . "</h3>";

if (isset($division))
   echo "<h3>Division of num is:".number_format ($num1/$num2,2) . "</h3>";

if (isset($modulus))
   echo "<h3>Modulus of num is:".number_format (($num1%$num2),2) . "</h3>";




echo "<HR>";
highlight_file("calculator.php")
?>

<form action="calculator.html">
   <input type="submit" value="Convert Again">
</form>


</body>
</html>
