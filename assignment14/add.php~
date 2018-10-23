<html>
<head>
<title>Inter College</title>
</head>
<body>

<?php
extract($_POST);
   $username = "gurungkarm";
   $dbname = "gurungkarm_assgn13";
   $password = "/Studyhard4272543/";
if ($button == "add entry") // prompt for the information to add
{
   echo <<< HERE
   <div class = "add">
   <form method="post" action="add.php">
   <h3>First Name: <input type="text" name="firstName" autocomplete="off" required></h3>
   <h3>Last Name: <input type="text" name="lastName" autocomplete="off" required></h3>
   <h3>Date Of BirthDate: <input type="date" name="birthDate" autocomplete="off" required></h3>
   <h3>Gender: <input type="text" name="gender" autocomplete="off" required></h3>
   <h3>College: <input type="text" name="college" autocomplete="off" required></h3>

   <input type="submit" name="button" value="add new entry">
      <br>
   </form>
   </div>
HERE;

    echo "";
}
else // add the new entry to the pet table in the database
{
   $conn = new mysqli("localhost", $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO assgn13 (firstName, lastName, gender,birthDate, college) 
VALUES ('$firstName','$lastName',$gender,$birthDate,'$College')";

if ($conn->query($sql) === TRUE) 
{
    echo "<h1>New record created successfully</h1><br>";
     
} else 
{
    echo "<h1>Error: " . $sql . "<br>" . $conn->error."</h1><br>";
    
}

$conn->close();
}
?>
</body>
<input class = "Back" type="button" onclick="location.href='http://puff.mnstate.edu/~dn2061er/private/assignment14';" value="Back" />
</html>

