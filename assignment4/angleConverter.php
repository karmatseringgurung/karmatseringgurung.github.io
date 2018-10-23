<form>
<?php
   extract($_REQUEST);
   if ($button==NULL or $button=="clear")
   {
      $num=NULL;
      
   }
   echo <<< HERE
         <fieldset>
   <legend><h1>angleConverter</h1></legend>
   <h3>Enter a number:  <input type="text" name="num"></h3>
   <h3>select the unit of the input</h3> 
   <select name="unit">
      <option>degree</option>
      <option>radian</option>
      <option>gradian</option>
     
     
   </select><br/>
 
   <h3>click on the unit to convert to</h3>
   <!--   <input type="checkbox" name="degree">degree<br/> degree is "on" -->
   <input type="checkbox" name="degree" >degree<br/>
   <input type="checkbox" name="radian" >radian<br/>
   <input type="checkbox" name="gradian" >gradian<br/>

   <input type="reset" value="reset">


   <input type="submit" value="Perform operation">
   <h4><a href="/~dn2061er/private/assignment4">Return to assignemnt4</a></h4>
   </fieldset>

HERE;
   
   if ($button == "calculate")
   {
      $mpg = $miles/$gallons;
      echo "<h2>$mpg MPG</h2>";
   }
?>
</form>
