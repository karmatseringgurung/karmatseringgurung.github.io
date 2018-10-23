            background-image: url("back.jpeg"); 
    height: auto;  
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: cover; 
    margin-right: 200px; 
    background-attachment: fixed; 

    } 
    h1{ 
        font-size: 24pt; 
        font-family: timesnewroman; 
        position: fixed; 
        right:50%; 

    } 
    h2{ 
        font-size: 16pt; 

    } 
    h5{ 

        position: fixed; 
        bottom: 0%; 
        right:50%; 

    } 
    div.createDate{ 

    position: fixed; 
    top: 20%; 
    right:50%; 
    } 
    div.login{ 

    position: fixed; 
    top: 40%; 
    left:40%; 
    } 

    div.radio{ 

    position: fixed; 
    top: 30%; 
    right:10%; 
    } 

    h3 
    { 
    position: fixed; 
    top: 70%; 
    right:50%; 
    } 
    h4 
    { 
        font-size: 24pt; 
    position: fixed; 
    top: 20%; 
    right:50%; 
    } 
    h6 
    { 
        font-size: 12pt; 
    position: fixed; 
    top:0; 
    left:90%; 
    } 

    input[type = text] 
    { 
    padding:5px;  
    border:2px solid #ccc;  
    -webkit-border-radius: 2px; 
    border-radius: 5px; 
    } 


    input[type = submit] 
    { 
    padding:5px 15px;  
    width: 7em; height:5em; 
    border:0 none; 
    cursor:pointer; 
    font-family: calibri; 
    -webkit-border-radius: 5px; 
    border-radius: 5px;  
    } 
</style> 
<form method="POST"> 
<?php 
extract($_REQUEST); 


if($button == NULL ) 
{ 
    echo "<h1>Select Your time :</h1>"; 
        echo "<div class = 'createDate'>"; 
        displayform(); 
            echo '</div>'; 

} 


elseif ($button == "Submit") 
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
   $yr = date('Y'); 
   $d = date('d'); 
   $m = date('m'); 
   echo "<form>"; 
   echo "<h2>Current Date: </h2>"; 
   selectNum("day",1,31,$d); 
   selectNum("month",1,12,$m); 
   selectNum("year",$yr-5,$yr+5,$yr); 
   echo "<br>"; 
   selectNum("hour",1,23,0); 
   selectNum("minute",1,59,0); 
      echo "<h2>End Date: </h2>"; 
     selectNum("day1",1,31,$d); 
   selectNum("month1",1,12,$m); 
   selectNum("year1",$yr-5,$yr+5,$yr); 
      echo "<br>"; 
   selectNum("hour1",1,23,0); 
   selectNum("minute1",1,59,0); 

   
     

   echo <<< HERE 
   <p></p> 
   <h3><input type="submit" style = "font-size:15px" name="button" value="Submit"></h3> 


HERE; 

    
           echo "<div class = 'radio'>"; 
    echo "<h2>Select your preference: </h2>"; 
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
        $charge = calculator($time,$charge,$radio); 
         
        return $charge; 
     
     
} 

function calculator($time,&$charge,$radio) 
{ 
     //echo $time; 
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
<h5><input type="button" onclick="location.href='http://puff.mnstate.edu/~bb6844uv/private/';" value="Back to Main" /></h5> 
<h6>Click Me for Code!!!!<br><input type="button" onclick="location.href='http://puff.mnstate.edu/~bb6844uv/private/Assignment8/code.php';" value="Code" /></h6> 

</form> 



</body>
