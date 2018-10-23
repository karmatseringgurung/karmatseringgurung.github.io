<html>
<head>
<title>DB Example</title>
</head>
<body>

<?php
extract($_POST);
   $username = "gurungkarm";
   $dbname = "gurungkarm_assgn13";
   $password = "/Studyahrd4272543/";


if ($button == "delete entry") // prompt for city name and country
{
{
   echo <<< HERE
   <div class = "add">
   <form method="post" action="add.php">
   <h3>First Name: <input type="text" name="firstName" autocomplete="off" required></h3>
   <h3>Last Name: <input type="text" name="lastName" autocomplete="off" required></h3>
   <h3>Date Of BirthDate: <input type="number" name="birthDate" autocomplete="off" required></h3>
   <h3>Gender: <input type="number" name="gender" autocomplete="off" required></h3>
   <h3>College: <input type="text" name="college" autocomplete="off" required></h3>

   <input type="submit" name="button" value="add new entry">
      <br>
   </form>
   </div>
HERE;



echo "<div class = 'left'>";
    echo"<h1 > Select from Database below!!!<h1>";
   $table = "city";
   $conn = mysqli_connect("localhost",$username,$password,$dbname);
   $sql = "select * from $table";
   $result = mysqli_query($conn,$sql);
   
   // output the field names
   echo "<h3>Field Names in the $table table</h3>";
   while ($field = mysqli_fetch_field($result))
   {
      echo "$field->name<br>\n";
   }
   
   
   // output the records
   echo "<h3>Records in the $table table</h3>";
   echo "------------------<br>";
   while ($row = mysqli_fetch_assoc($result))
   {
      foreach ($row as $col=>$val)
      {
         echo "$col - $val<br>\n";
      }
      echo "------------------<br>";
   }



$conn->close(); 
echo "</div>";
}
else // attempt to delete
{
   $conn = new mysqli("localhost", $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM assgn13 WHERE name = '$firstName' AND country = '$college'";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Record deleted successfully<h1>";
} else {
    echo "<h1>Error deleting record: " . $conn->error."<h1>";
}


}

?>
</body>
<input class ="Back" type="button" onclick="location.href='http://puff.mnstate.edu/~dn2061er/private/Assignment14';" value="Back" />

</html>

