<html>
<body>
<?php
$kilo = $_REQUEST['kilo'];
$liter = $_REQUEST['liter'];
echo "<h1>Calculated KiloPerLiter: ".number_format ($kilo/$liter,2) . "</h1>";

echo "<HR>";
highlight_file("KiloPerLt.php")
?>

<form action="KiloPerLt.html">
   <input type="submit" value="Convert Again">
</form>


</body>
</html>
