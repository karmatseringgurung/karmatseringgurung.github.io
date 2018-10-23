<html>
<head>
<title>DB Example</title>
</head>
<body>

<?php
extract($_POST);
$username = "gurungkarm";
$password = "/Studyhard4272543/";
$dbname = "gurungkarm_assgn13";
   echo <<< HERE
   <div class = "index">
   <h3>Welcome to Database</h3>
   <form method="post" action="query.php">
   <input type="submit" name="button" value="query database">
   <input type="hidden" name="username" value="$username">
   <input type="hidden" name="password" value="$password">
   <input type="hidden" name="dbname" value="$dbname">
   </form>
   <form method="post" action="add.php">
   <input type="submit" name="button" value="add entry">
   <input type="hidden" name="username" value="$username">
   <input type="hidden" name="password" value="$password">
   <input type="hidden" name="dbname" value="$dbname">
   </form>
   <form method="post" action="delete.php">
   <input type="submit" name="button" value="delete entry">
   <input type="hidden" name="username" value="$username">
   <input type="hidden" name="password" value="$password">
   <input type="hidden" name="dbname" value="$dbname">
   </form>
   </div>
HERE;
?>
</body>
<input class  = "Back" type="button" onclick="location.href='http://puff.mnstate.edu/~dn2061er/private/';" value="Back to Main" />

</html>
