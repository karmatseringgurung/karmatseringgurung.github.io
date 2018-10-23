<html>
<head>
<style>

fieldset{
background-color: powderblue;
border: 2px;


}

</style>
</head>

<fieldset>
<legend>Calculated Value</legend>
<?php
$Celsius = $_REQUEST['Celsius'];
echo "<h3>Celsius To Kelvin: ". ($Celsius+273.15) . "</h1>";


echo "<HR>";
highlight_file("Celsius2Kelvin.php")
?>
</fieldset>
<form action="Celsius2Kelvin.html">
   <input type="submit" value="Convert Again">
</form>




</body>
</html>
