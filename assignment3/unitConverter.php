<?php
$num = $_REQUEST['num'];
$unit = $_REQUEST['unit'];
$inches = $_REQUEST['inches'];
$feet = $_REQUEST['feet'];
$miles = $_REQUEST['miles'];
$centimeters = $_REQUEST['centimeters'];
$meters = $_REQUEST['meters'];
$kilometers = $_REQUEST['kilometers'];


if ($unit=="inches" && isset($inches))
   echo "<h2> Inches is: ".number_format ($num,6). "</h2>";

if ($unit=="inches" && isset($feet))
   echo "<h2> feet is: ".number_format (($num/12),6). "</h2>";

if ($unit=="inches" && isset($miles))
   echo "<h2> Miles is: ".number_format (($num/63360),6). "</h2>";

if ($unit=="inches" && isset($centimeters))
   echo "<h2> Centimeters is: ".number_format (($num/.393701),6). "</h2>";

if ($unit=="inches" && isset($meters))
   echo "<h2> Meters is: ".number_format (($num/39.3701),6). "</h2>";

if ($unit=="inches" && isset($kilometers))
   echo "<h2> Kilometers is: ".number_format (($num/39370.1),6). "</h2>";



if ($unit=="feet" && isset($inches))
   echo "<h2> Inches is: ".number_format ($num/0.08333,6). "</h2>";

if ($unit=="feet" && isset($feet))
   echo "<h2> feet is: ".number_format (($num),6). "</h2>";

if ($unit=="feet" && isset($miles))
   echo "<h2> Miles is: ".number_format (($num/5280),6). "</h2>";

if ($unit=="feet" && isset($centimeters))
   echo "<h2> Cetimeters is: ".number_format (($num/.0328084),6). "</h2>";

if ($unit=="feet" && isset($meters))
   echo "<h2> Meters is: ".number_format (($num/3.28084),6). "</h2>";

if ($unit=="feet" && isset($kilometers))
   echo "<h2> Kilometers is: ".number_format (($num/3280.84),6). "</h2>";




if ($unit=="miles" && isset($inches))
   echo "<h2> Inches is: ".number_format (($num*63360),6). "</h2>";

if ($unit=="miles" && isset($feet))
   echo "<h2> feet is: ".number_format (($num*5280),6). "</h2>";

if ($unit=="miles" && isset($miles))
   echo "<h2> Miles is: ".number_format ($num,6). "</h2>";

if ($unit=="miles" && isset($centimeters))
   echo "<h2> Centimeters is: ".number_format (($num*160934),6). "</h2>";

if ($unit=="miles" && isset($meters))
   echo "<h2> Meters is: ".number_format (($num*1609.34),6). "</h2>";

if ($unit=="miles" && isset($kilometers))
   echo "<h2> Kilometers is: ".number_format (($num*1.60934),6). "</h2>";


if ($unit=="centimeters" && isset($inches))
   echo "<h2> Inches is: ".number_format (($num*.393701),6). "</h2>";

if ($unit=="centimeters" && isset($feet))
   echo "<h2> feet is: ".number_format (($num*.0328084),6). "</h2>";

if ($unit=="centimeters" && isset($miles))
   echo "<h2> Miles is: ".number_format ($num,6). "</h2>";

if ($unit=="centimeters" && isset($centimeters))
   echo "<h2> Centimeters is: ".number_format (($num),6). "</h2>";

if ($unit=="centimeters" && isset($meters))
   echo "<h2> Meters is: ".number_format (($num*0.01),6). "</h2>";

if ($unit=="centimeters" && isset($kilometers))
   echo "<h2> Kilometers is: ".number_format (($num/100000),6). "</h2>";


if ($unit=="meters" && isset($inches))
   echo "<h2> Inches is: ".number_format (($num*39.3701),6). "</h2>";

if ($unit=="meters" && isset($feet))
   echo "<h2> feet is: ".number_format (($num*3.28084),6). "</h2>";

if ($unit=="meters" && isset($miles))
   echo "<h2> Miles is: ".number_format ($num*0.000621370,6). "</h2>";

if ($unit=="meters" && isset($centimeters))
   echo "<h2> Centimeters is: ".number_format (($num*100),6). "</h2>";

if ($unit=="meters" && isset($meters))
   echo "<h2> Meters is: ".number_format (($num),2). "</h2>";

if ($unit=="meters" && isset($kilometers))
   echo "<h2> Kilometers is: ".number_format (($num*0.001),6). "</h2>";


if ($unit=="kilometers" && isset($inches))
   echo "<h2> Inches is: ".number_format (($num*39370.1),6). "</h2>";

if ($unit=="kilometers" && isset($feet))
   echo "<h2> feet is: ".number_format (($num*3280.84),6). "</h2>";

if ($unit=="kilometers" && isset($miles))
   echo "<h2> Miles is: ".number_format ($num*0.621371,6). "</h2>";
if ($unit=="kilometers" && isset($centimeters))
   echo "<h2> centimeters is: ".number_format (($num*100000),6). "</h2>";

if ($unit=="kilometerss" && isset($meters))
   echo "<h2> meters is: ".number_format (($num*1000),6). "</h2>";

if ($unit=="kilometers" && isset($kilometers))
   echo "<h2 >kilometers is: ".number_format (($num),6). "</h2>";


echo "<HR>";
highlight_file("unitConverter.php")
?>

<form action="unitConverter.html">
   <input type="submit" value="Convert Again"> </br>
 <h4><a href="/~dn2061er/private/assignment3">Return to assignemnt3</a></h4>
</form>
