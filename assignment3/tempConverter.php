<html>
<body>
<?php
$temp = $_REQUEST['temp'];
$button=$_REQUEST['button'];

if ($button=="Fahrenheit to Celsius")
   echo "<h2> Celsius: ".number_format ((($temp-32)*(5/9)),2). "</h2>";

elseif ($button=="Celsius to Fahrenheit")
   echo "<h2> Fahrenheit is: ".number_format (($temp *(9/5)+32),2). "</h2>";

echo "<HR>";
highlight_file("tempConverter.php")
?>

<form action="tempConverter.html">
   <input type="submit" value="Convert Again">
   <h4><a href="/~dn2061er/private/assignment3">Return to assignemnt3</a></h4>

</form>


</body>
</html>
