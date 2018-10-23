<form>
<?php
   extract($_REQUEST);
   if ($button==NULL or $button=="clear")
   {
      $num=NULL;
      
   }
   echo <<< HERE
         <fieldset>
   <legend><h1>massConverter</h1></legend>
   <h3>Enter a number:  <input type="text" name="num"></h3>
   <h3>select the unit of the input</h3> 
   <select name="$unit">
      <option>miligram</option>
      <option>gram</option>
      <option>kilogram</option>
      <option>ounce</option>
      <option>pounds</option>
      <option>tons</option>
   </select><br/>
 
   <h3>click on the unit to convert to</h3>

   <input type="submit" name="$button" value="Miligram">
   <input type="submit" name="$button" value="Gram">
   <input type="submit" name="$button" value="Kilogram">
   <input type="submit" name="$button" value="Ounce">
   <input type="submit" name="$button" value="Pound">
   <input type="submit" name="$button" value="Ton"><br/>


   <input type="checkbox" name="miligram" value="$miligram">miligram<br/>
   <input type="checkbox" name="gram" value="$gram">gram<br/>
   <input type="checkbox" name="kilogram" value="$kilogram"><br/>
   <input type="checkbox" name="ounce" value ="$ounce">ounce<br/>
   <input type="checkbox" name="pound" value = "$pound">pound<br/>
   <input type="checkbox" name="ton" value = "$ton">ton<br/>
   

   
   <h4><a href="/~dn2061er/private/assignment4">Return to assignemnt4</a></h4>
   </fieldset>

HERE;
   
	if ($unit=="miligram" && $button=="Miligram")
		echo "<h2> miligram is: ".number_format ($num,6). "</h2>";

  		




        
?>
</form>