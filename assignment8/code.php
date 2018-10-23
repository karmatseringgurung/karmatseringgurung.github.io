<html>
<body>
<style>
.field_set{
 
 background-color:#DCDCDC;
 display:inline-block;
}

</style>
<center>
<fieldset class = 'field_set' style="border: 3px black solid">


<form method="POST"> 
<?php 
extract($_REQUEST); 


if($button == NULL ) 
{  
 
        displayform(); 
           

} 


elseif ($button == "Calculate") 
{ 
    if (checkdate($month,$day,$year) and checkdate($month1,$day1,$year1)) 
    { 
        $price = calcCharge($month,$month1,$day,$day1,$year,$year1,$radio,$hour,$hour1,$minute,$minute1); 
        echo "<h4>Your total amount of Parking ticket is <br>$".round($price,2)."<h4>"; 
    } 
     
     
    else 
    { 

        echo "<h1 style = 'color:red'>Incorrect date entered!!!!!!!<br>"; 
        echo"<a href = 'http://puff.mnstate.edu/~bb6844uv/private/Assignment8/'>Go back</a><h3>"; 
    } 
} 
function displayform() 
{ 

echo <<< HERE
<fieldset styl="border: 1px black solid">
<h1>Parking Reservation</h1>
</fieldset>
HERE;

   $yr = date('Y'); 
   $d = date('d'); 
   $m = date('m'); 
   echo "<form>"; 
   echo "<h2>Enter a Entrance Date: </h2>";
   echo "Day";
   selectNum("day",1,31,$d); 
   echo " Month ";
   selectNum("month",1,12,$m); 
   echo " Year ";
   selectNum("year",$yr-5,$yr+5,$yr); 
   echo "<br>";
	echo " Hour ";
   selectNum("hour",1,23,0); 
   echo " Minute ";
   selectNum("minute",1,59,0); 
      echo "<h2>Enter a Exit Date: </h2>"; 
   echo "Day";
   selectNum("day1",1,31,$d); 
   echo " Month ";
   selectNum("month1",1,12,$m); 
   echo " Year ";
   selectNum("year1",$yr-5,$yr+5,$yr); 
   echo "<br>";
	echo " Hour ";
   selectNum("hour1",1,23,0); 
   echo " Minute1 ";
   
   echo <<< HERE
   <p></p>
   <h3><input type = "submit" name = "button" value = "Calculate"></h3>
HERE;

   
     
    
           echo "<div class = 'radio'>"; 
    echo "<h2>SERVICES: </h2>"; 
    echo "<input type = 'radio' checked='checked' name = 'radio' value  = 'Short' required>Short-term Parking <br>"; 
    echo "<input type = 'radio' name = 'radio' value  = 'Long'>Long-term Parking <br>"; 
    echo "<input type = 'radio' name = 'radio' value  = 'Economy'>Economy-term Parking <br>"; 
    echo "</form>"; 
} 
function selectNum($name,$first,$last,$val) 
{ 
    echo"<select name=\"$name\" required>"; 
   echo "<option>$name </option>"; 
   echo "<option selected>$val </option>"; 
   for ($i=$first; $i<=$last; $i++) 
      echo "<option>$i</option>"; 
   echo "</select>"; 
} 


function calcCharge($month,$month1,$day,$day1,$year,$year1,$radio,$hour,$hour1,$minute,$minute1) 
{ 
    $currDate = mktime($hour,$minute,0,$month,$day,$year); 
    $endDate =mktime($hour1,$minute1,0,$month1,$day1,$year1); 
    $time = (($endDate-$currDate)/3600); 
     
        $charge =0; 
        $charge = calculate($time,$charge,$radio); 
         
        return $charge; 
     
     
} 

function calculate($time,&$charge,$radio) 
{ 
    if($radio == "Short") 
    {  
        if ($time >= 24) 
        {     
            $charge = (floor($time/24) * 18)+(($time%24)*2); 
            return $charge; 
        } 
        elseif($time < 24) 
        { 
            $charge =$time*2; 
            return $charge; 
        } 
    } 
    elseif ($radio == "Long") 
    { 
        if ($time >= 24 and $time<168) 
        {     
            $charge = (floor($time/24) * 8)+(($time%24)*2); 

            return $charge; 
        } 
        elseif($time < 24) 
        { 
            $charge =$time*2; 
            return $charge; 
        } 
        elseif($time >=168) 
        { 
            $remWeek = floor($time/168); 
            $remDay = floor(($time-(168*($remWeek)))/24); 
            $remHour  = $time-((168*$remWeek)+(24*$remDay)); 
            $charge = $remWeek*48+$remDay*8+$remHour*2; 
            return $charge; 
             
        } 
     
    } 

    elseif ($radio == "Economy")  
    { 
                     
        if ($time >= 24 and $time<168) 
        {     
            $charge = (floor($time/24) * 6)+(($time%24)*2); 
            return $charge; 
        } 
        elseif($time < 24) 
        { 
            $charge =$time*2; 
            return $charge; 
        } 
        elseif($time >=168) 
        { 
            $remWeek = floor($time/168); 
            $remDay = floor(($time-(168*($remWeek)))/24); 
            $remHour  = $time-((168*$remWeek)+(24*$remDay)); 
            $charge = $remWeek*36+$remDay*6+$remHour*2; 
            return $charge; 
             
        } 
         
     
    } 
} 
?> 
<h5><input type="button" onclick="location.href='http://puff.mnstate.edu/~dn2061er/private';" value=" Main Menu" /></h5> 
<h6>CODE HERE:<br><input type="button" onclick="location.href='http://puff.mnstate.edu/~dn2061er/private/assignment8/codeForPark.php';" value="Code" /></h6> 

</form> 


</fieldset>


</body>
