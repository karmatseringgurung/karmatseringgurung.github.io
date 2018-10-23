<html>
<head>
<title>DB Example</title>
</head>
<body>

<?php
extract($_POST);
$dbname = "gurungkarm_assgn13"; // replace with your database name
$username = "gurungkarm";  // replace with your username
$password = "/Studyhard4272543/";  // replace with your password, nobody can see it

if ($button == "query database")
{
   $conn = mysqli_connect("localhost",$username,$password,$dbname);
   echo <<< HERE
      <form method="post" action="query.php">
      <h3>Info table query</h3>
      <div class = 'query'>
      <table>
      <tr>
      <th>Fields to Display</th>
      <th>First Name</th> 
      </tr>
      <tr>
      <td>
HERE;

   $sql = "select * from Info";
   $result = mysqli_query($conn,$sql);
   while ($field = mysqli_fetch_field($result))
   {
      $fieldname = $field->name;
      echo "<input type=\"checkbox\" name=\"$fieldname\" CHECKED>$fieldname";
      echo "<br>";
   }
   echo <<< HERE
   </td>
   <td valign="top">
HERE;
   
   $sql = "select distinct country from info";
   $result = mysqli_query($conn,$sql);
   echo "<input type=\"radio\" name=\"info\" value=\"all info\" CHECKED>
           all info<br>";
   while ($row = mysqli_fetch_assoc($result))
   {
      $country = $row["infp"];
      echo "<input type=\"radio\" name=\"info\" value=\"$info\">$info;
      echo "<br>";
   }
   echo <<< HERE
   </td>
   <td valign="top">
HERE;
   // get the species (no duplicates) from the DB and display as drop down box
   // Note that I made this generic to work with any table in a DB.
   // You could write it for a specific DB by just using known names.
   echo <<< HERE
   
   </td>
   </tr>
   </table>
   <br>
   <input type="submit" name="button" value="send query">
   <input type="hidden" name="username" value="$username">
   <input type="hidden" name="password" value="$password">
   <input type="hidden" name="dbname" value="$dbname">
   </form>
HERE;
echo "</div>";
}
elseif ($button == "send query")
{
   // Get the fields to be displayed from the checkboxes.
   $fieldnames = NULL;
   $conn = mysqli_connect("localhost",$username,$password,$dbname);
   $sql = "select * from info";
   $result = mysqli_query($conn,$sql);
   while ($row = mysqli_fetch_field($result))
   {
      if (isset($_REQUEST[$row->name]))
         $fieldnames[] = $row->name;
   }
   
   // Start building the query
   if (mysqli_num_fields($result) == count($fieldnames)) // all the fields
      $sql = "select * from info";
   else
   {
      $thefields = implode(",",$fieldnames);
      $sql = "select " . $thefields . " from info";
   }

   if ($info!= "all info")
      $sql = $sql . " where info = '" . $info . "'";
   

 
   echo "<p><b>the query (output for debugging purposes only, remove
          when program is working)</b>
          <br><b>$sql</b></p>";
   // send the query to the database
   $result = mysqli_query($conn,$sql);
   mysqli_close($conn);
   printtable("Query Results",$result);
   echo <<< HERE
   <table>
   <br>
   <form method="post" action="index.php">
   <input type="submit" name="button" value="return">
   <input type="hidden" name="username" value="$username">
   <input type="hidden" name="password" value="$password">
   <input type="hidden" name="dbname" value="$dbname">
   </form>
HERE;
}
// printtable will print an entire table stored in $result.  The label
// above the table is given as $tablename
function printtable($tablename,$result)
{
   //Display the entire table
   echo <<< HERE
      <h1>$tablename</h1>
      <table border="1">
      <tr>
HERE;
   // Print the table column headers
   while ($field = mysqli_fetch_field($result))
   {
      echo "<th><b>$field->name</b></th>\n";
   }
   echo "</tr>\n";
   // Print each row.  $row is an associative array containing one
   // record in the table.
   while ($row = mysqli_fetch_assoc($result))
   {
      echo "<tr>\n";
      foreach($row as $field=>$value)
      {
         /* since the table has a border, put a blank (&nbsp;) in the variable
            if the database field is NULL so that the border of the table
            cell will be displayed */
         if ($value==NULL) $value="&nbsp;";
         echo "<td>$value</td>\n";
      }
      echo "</tr>\n";
   }
   echo "</table>";
}
?>
</body>
<input class  = "Back" type="button" onclick="location.href='http://puff.mnstate.edu/~dn2061er/private/Assignment14';" value="Back" />
</html>
