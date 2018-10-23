<html>
<body>
<center>
<fieldset style="border: 3px black solid">



<form method="POST"> 
<?php
extract($_REQUEST);
   
if($button == NULL ) 
{ 
    frontPage(); 

} 


elseif ($button == "calculate") 
{ 
    if (checkdate($monthEntrance,$dayEntrance,$yearEntrance) and checkdate($monthExit,$dayExit,$yearExit)) 
    { 
        $money =  calcCharge($monthEntrance, $monthExit, $dayEntrance, $dayExit, $yearEntrance, $yearExit, $hourEntrance, $hourExit, $minuteEntrance, $minuteExit);
		
        echo "<h4>Parking Amount: <br>$".round($money,2)."<h4>"; 
    } 
     
     
    else 
    { 

        echo "<h1 style = 'color:red'>Incorrect date entered!!!!!!!<br>"; 
        echo"<a href = 'http://puff.mnstate.edu/~dn2061er/private/assignment8/'>Go back</a><h3>"; 
    } 
}
  $entranceDate = mktime($hourEntrance,$minuteEntrance,0,$monthEntrance,$dayEntrance,$yearEntrance);
	$exitDate = mktime($hourExit,$minuteExit,0,$monthExit,$dayExit,$yearExit);
	$time =(($exitDate-$entranceDate)/3600);
echo $time;	


function frontPage()
{	$currentYear = date('Y');
	$currentDay = date('d');
	$currentMonth = date('m');
	


echo <<< HERE
<fieldset styl="border: 1px black solid">
<h1>Parking Reservation</h1>
</fieldset>

HERE;


	echo "<form>";
	echo "<h2>Enter a Entrance Date: </h2>";
   echo "Month";
   selectNum("monthEntrance",1,12,$currentMonth);
   echo " Day";
   selectNum("dayEntrance",1,31,$currentDay);
   echo " Year";
   selectNum("yearEntrance",$currentYear-5,$currentYear+5,$currentYear);
   
   echo " Hour";
   selectNum("hourEntrance",1,23,0);
   echo " Minute";
   selectNum("minuteEntrance",1,59,0);
   
   	
	echo "<h2>Enter a Exit Date: </h2>";
   echo "Month";
   selectNum("monthExit",1,12,$currentMonth);
   echo " Day";
   selectNum("dayExit",1,31,$currentDay);
   echo " Year";
   selectNum("yearExit",$currentYear-5,$currentYear+5,$currentYear);

   echo " Hour";
   selectNum("hourExit",1,23,0);
   echo " Minute";
   selectNum("minuteExit",1,59,0);
   	
	echo <<< HERE
	<br/>
	<br/>
	<br/>
	<input type="radio" name="radio" value="short">short-term   <input type="radio" name="radio" value="long">long-term   <input type="radio" name="radio" value="economy">economy-term<br/>
	<br/>
	<input type = "submit" name="button" value="calculate">
	
	
HERE;


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


function calcCharge($monthEntrance, $monthExit, $dayEntrance, $dayExit, $yearEntrance, $yearExit, $hourEntrance, $hourExit, $minuteEntrance, $minuteExit) 
{ 
    $currDate = mktime($hourEntrance,$minuteEntrance,0,$monthEntrance,$dayEntrance,$yearEntrance);
    $endDate = mktime($hourExit,$minuteExit,0,$monthExit,$dayExit,$yearExit); 
    $time = (($endDate-$currDate)/3600); 
     
        $charge =0; 
        $charge = calculated($time,$charge,$radio); 
         
        return $charge; 
     
     
} 


function calculated($time, &$charge, $radio)
{
	
	if($radio == "short") 
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
	
	elseif ($radio == "long")
	{
		if ($time >= 24 and $time <168)
		{
			$charge = (floor($time/24) * 8) + (($time%24)*2);
			return $charge;
		}
		
		elseif ($time<24)
		{
			$charge = $time*2;
			return $charge;
		}
		elseif ($time >= 168)
		{
			$remWeek = floor($time/168);
			$remDay = floor(($time-(168*$remWeek))/24);
			$remHour = $time - ((168*remWeek)+(24*$remDay));
			$charge = $remWeek*48 + $remDay*8 + $remHour*2;
			return $charge;
		}
	}
	
	elseif ($radio == "economy")
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

</fieldset>
</form> 
</center>
</body>
</html>