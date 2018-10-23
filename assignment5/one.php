<html>


<head>

<?php
extract($_POST);

   echo "<b>Full Name: ";
   echo $_REQUEST["firstName"];
   echo " ";
   echo $_REQUEST["lastName"] . "<br/><br></b>";

monthsOfTheYear($month);


daysOfTheWeek($day);

years($year);

if ($season_year == "on")
{
seasonOfTheYear($month);
}

if ($zodiac_sign == "on")
{
zodiacSign($month, $day);
}

if ($chinese_animals == "on")
{
chineseAnimalSign($year);
}

if ($day_of_week == "on")
{
if(checkdate($month,$day,$year))
{
echo "<b>The day of the week is : ";
echo dayoftheweek($month, $day, $year). "</b>";
}
else
   echo "<b>$month/$day/$year is an invalid date</b><br>";
}

//-----------------------------------------------------------------------
//usage of functions starts here
//-----------------------------------------------------------------------

// function of monthsOfTheYear
function monthsOfTheYear($month)
{

if ($month == "1")
{
echo " <b> Month of birth</b> : <b>January</b><br>";
} 

else if($month == "2")
{
echo " <b> Month of birth</b> : <b>February</b><br>";
}

else if($month == "3")
{
echo " <b> Month of birth</b> : <b>March</b><br>"; 
}

else if($month == "4")
{ 
echo " <b> Month of birth</b> : <b>April</b><br>";
}

else if($month == "5")
{
echo " <b> Month of birth</b> : <b>May</b><br>";
}

else if($month == "6")
{
echo " <b> Month of birth</b> : <b>June</b><br>";
}

else if($month == "7")
{
echo " <b> Month of birth</b> : <b>July</b><br>";
}

else if($month == "8")
{
echo " <b> Month of birth</b> : <b>August</b><br>";
}

else if($month == "9")
{
echo " <b> Month of birth</b> : <b>September</b><br>";
}

else if($month == "10")
{
echo " <b> Month of birth</b> : <b>October</b><br>";
}

else if($month == "11")
{
echo " <b> Month of birth</b> : <b>November</b><br>";
}

else if($month == "12")
{
echo " <b> Month of birth</b> : <b>December</b><br>";
}

}


// function of daysOfTheWeek
function daysOfTheWeek($day)
{
if ($day == "1")
{
echo " <b>day of birth : 1</b><br>";
} 

if ($day == "2")
{
echo " <b>day of birth : 2</b><br>";
} 

if ($day == "3")
{
echo " <b>day of birth : 3</b><br>";
} 

if ($day == "4")
{
echo " <b>day of birth : 4</b><br>";
} 

if ($day == "5")
{
echo " <b>day of birth : 5</b><br>";
} 

if ($day == "6")
{
echo " <b>day of birth : 6</b><br>";
} 

if ($day == "7")
{
echo " <b>day of birth : 7</b><br>";
} 

if ($day == "8")
{
echo " <b>day of birth : 8</b><br>";
} 

if ($day == "9")
{
echo " <b>day of birth : 9</b><br>";
} 

if ($day == "10")
{
echo " <b>day of birth : 10</b><br>";
} 

if ($day == "11")
{
echo " <b>day of birth : 11</b><br>";
} 

if ($day == "12")
{
echo " <b>day of birth : 12</b><br>";
} 

if ($day == "13")
{
echo " <b>day of birth : 13</b><br>";
} 

if ($day == "14")
{
echo " <b>day of birth : 14</b><br>";
} 

if ($day == "15")
{
echo " <b>day of birth : 15</b><br>";
} 

if ($day == "16")
{
echo " <b>day of birth : 16</b><br>";
} 

if ($day == "17")
{
echo " <b>day of birth : 17</b><br>";
} 

if ($day == "18")
{
echo " <b>day of birth : 18</b><br>";
} 

if ($day == "19")
{
echo " <b>day of birth : 19</b><br>";
} 

if ($day == "20")
{
echo " <b>day of birth : 20</b><br>";
} 

if ($day == "21")
{
echo " <b>day of birth : 21</b><br>";
} 

if ($day == "22")
{
echo " <b>day of birth : 22</b><br>";
} 

if ($day == "23")
{
echo " <b>day of birth : 23</b><br>";
} 

if ($day == "24")
{
echo " <b>day of birth : 24</b><br>";
} 

if ($day == "25")
{
echo " <b>day of birth : 25</b><br>";
} 

if ($day == "26")
{
echo " <b>day of birth : 26</b><br>";
} 

if ($day == "27")
{
echo " <b>day of birth : 27</b><br>";
} 

if ($day == "28")
{
echo " <b>day of birth : 28</b><br>";
} 

if ($day == "29")
{
echo " <b>day of birth : 29</b><br>";
} 

if ($day == "30")
{
echo " <b>day of birth : 30</b><br>";
} 

if ($day == "31")
{
echo " <b>day of birth : 31</b><br>";
} 

}


// function of years
function years($year)
{
if ($year == "1990")
{
echo " <b>year of birth : 1990</b><br>";
}

if ($year == "1991")
{
echo " <b>year of birth : 1991</b><br>";
}

if ($year == "1992")
{
echo " <b>year of birth : 1992</b><br>";
}

if ($year == "1993")
{
echo " <b>year of birth : 1993</b><br>";
}

if ($year == "1994")
{
echo " <b>year of birth : 1994</b><br>";
}

if ($year == "1995")
{
echo " <b>year of birth : 1995</b><br>";
}

if ($year == "1996")
{
echo " <b>year of birth : 1996</b><br>";
}

if ($year == "1997")
{
echo " <b>year of birth : 1997</b><br>";
}

if ($year == "1998")
{
echo " <b>year of birth : 1998</b><br>";
}

if ($year == "1999")
{
echo " <b>year of birth : 1999</b><br>";
}

if ($year == "2000")
{
echo " <b>year of birth : 2000</b><br>";
}

if ($year == "2001")
{
echo " <b>year of birth : 2001</b><br>";
}

if ($year == "2002")
{
echo " <b>year of birth : 2002</b><br>";
}

if ($year == "2003")
{
echo " <b>year of birth : 2003</b><br>";
}

if ($year == "2004")
{
echo " <b>year of birth : 2004</b><br>";
}

if ($year == "2005")
{
echo " <b>year of birth : 2005</b><br>";
}

if ($year == "2006")
{
echo " <b>year of birth : 2006</b><br>";
}

if ($year == "2007")
{
echo " <b>year of birth : 2007</b><br>";
}

if ($year == "2008")
{
echo " <b>year of birth : 2008</b><br>";
}

if ($year == "2009")
{
echo " <b>year of birth : 2009</b><br>";
}

if ($year == "2010")
{
echo " <b>year of birth : 2010</b><br>";
}

if ($year == "2011")
{
echo " <b>year of birth : 2011</b><br>";
}

if ($year == "2012")
{
echo " <b>year of birth : 2012</b><br>";
}

if ($year == "2013")
{
echo " <b>year of birth : 2013</b><br>";
}

if ($year == "2014")
{
echo " <b>year of birth : 2014</b><br>";
}

}


// function of seasonOfTheYear
function seasonOfTheYear($month)
{

if(($month == "3") || ($month == "4") || ($month == "5"))
{
echo "<b>The season of this date is on : Spring</b><br>";
}

if(($month == "6") || ($month == "7") || ($month == "8"))
{
echo "<b>The season of this date is on : Summer</b><br>";
}

if(($month == "9") || ($month == "10") || ($month == "11"))
{
echo "<b>The season of this date is on : Autumn</b><br>";
}

if(($month == "12") || ($month == "1") || ($month == "2"))
{
echo "<b>The season of this date is on : Winter</b><br>";
}

}

// function of zodiacSign
function zodiacSign($month, $day)
{
if(($month == "1" && $day >= "20")) 
{ 
echo "<b>The Zodiac sign for this date is: Aquarius. </b><br>";
}
if(($month == "2" && $day <= "18"))
{ 
echo "<b>The Zodiac sign for this date is: Aquarius. </b><br>";
}


if(($month == "2" && $day >= "19"))  
{ 
echo "<b>The Zodiac sign for this date is: Pisces. </b><br>";
}
if(($month == "3" && $day <= "20"))
{ 
echo "<b>The Zodiac sign for this date is: Pisces. </b><br>";
}


if(($month == "3" && $day >= "21"))  
{ 
echo "<b>The Zodiac sign for this date is: Aries. </b><br>";
}
if(($month == "4" && $day <= "19"))
{ 
echo "<b>The Zodiac sign for this date is: Aries. </b><br>";
}


if(($month == "4" && $day >= "20"))  
{ 
echo "<b>The Zodiac sign for this date is: Taurus. </b><br>";
}
if(($month == "5" && $day <= "20"))
{ 
echo "<b>The Zodiac sign for this date is: Taurus. </b><br>";
}


if(($month == "5" && $day >= "21"))  
{ 
echo "<b>The Zodiac sign for this date is: Gemini. </b><br>";
}
if(($month == "6" && $day <= "20"))
{
echo "<b>The Zodiac sign for this date is: Gemini. </b><br>";
}


if(($month == "6" && $day >= "21"))  
{ 
echo "<b>The Zodiac sign for this date is: Cancer. </b><br>";
}
if(($month == "7" && $day <= "22"))
{ 
echo "<b>The Zodiac sign for this date is: Cancer. </b><br>";
}


if(($month == "7" && $day >= "23")) 
{ 
echo "<b>The Zodiac sign for this date is: Leo. </b><br>";
}
if(($month == "8" && $day <= "22"))
{ 
echo "<b>The Zodiac sign for this date is: Leo. </b><br>";
}


if(($month == "8" && $day >= "23")) 
{ 
echo "<b>The Zodiac sign for this date is: Virgo. </b><br>";
}
if(($month == "9" && $day <= "22"))
{ 
echo "<b>The Zodiac sign for this date is: Virgo. </b><br>";
}


if(($month == "9" && $day >= "23"))
{ 
echo "<b>The Zodiac sign for this date is: Libra. </b><br>";
}
if(($month == "10" && $day <= "22"))
{ 
echo "<b>The Zodiac sign for this date is: Libra. </b><br>";
}


if(($month == "10" && $day >= "23")) 
{ 
echo "<b>The Zodiac sign for this date is: Scorpio. </b><br>";
}
if(($month == "11" && $day <= "21"))
{ 
echo "<b>The Zodiac sign for this date is: Scorpio. </b><br>";
}


if(($month == "11" && $day >= "22"))
{ 
echo "<b>The Zodiac sign for this date is: Sagittarius. </b><br>";
}
if(($month == "12" && $day <= "21"))
{ 
echo "<b>The Zodiac sign for this date is: Sagittarius. </b><br>";
}


if(($month == "12" && $day >= "22")) 
{ 
echo "<b>The Zodiac sign for this date is: Capricon. </b><br>";
}
if(($month == "1" && $day <= "19"))
{ 
echo "<b>The Zodiac sign for this date is: Capricon. </b><br>";
}

}

// function of chineseAnimalSign
function chineseAnimalSign($year)
{
if (($year == "1990") || ($year == "2002") || ($year == "2014"))
 {  
  echo "<b>The chinese animal for this year is : HORSE.</b><br>";
 }

else if (($year == "1991") || ($year == "2003"))
 {  
  echo "<b>The chinese animal for this year is : SHEEP(GOAT).</b><br>";
 }

else if (($year == "1992") || ($year == "2004"))
 {  
  echo "<b>The chinese animal for this year is : MONKEY.</b><br>";
 }

else if (($year == "1993") || ($year == "2005"))
 { 
  echo "<b>The chinese animal for this year is : ROOSTER.</b><br>";
 }

else if (($year == "1994") || ($year == "2006"))
 {
  echo "<b>The chinese animal for this year is : DOG.</b><br>";
 }

else if (($year == "1995") || ($year == "2007"))
 {
  echo "<b>The chinese animal for this year is : PIG.</b><br>";
 }

else if (($year == "1996") || ($year == "2008"))
 {
  echo "<b>The chinese animal for this year is : RAT.</b><br>";
 }

else if (($year == "1997") || ($year == "2009"))
 {
  echo "<b>The chinese animal for this year is : OX.</b><br>";
 }

else if (($year == "1998") || ($year == "2010"))
 {
  echo "<b>The chinese animal for this year is : TIGER.</b><br>";
 }

else if (($year == "1999") || ($year == "2011"))
 {
  echo "<b>The chinese animal for this year is : RABBIT.</b><br>";
 }

else if (($year == "2000") || ($year == "2012"))
 {
  echo "<b>The chinese animal for this year is : DRAGON.</b><br>";
 }

else if (($year == "2001") || ($year == "2013"))
 {
  echo "<b>The chinese animal for this year is : SNAKE.</b><br>";
 }
}
   
// function of dayoftheweek
function dayoftheweek($m,$d,$y)
{
   $datestring = "$y-$m-$d";
   $datestamp = strtotime($datestring);
   $weekday = date('l',$datestamp);
   return $weekday;
}


//-----------------------------------------------------------------------
//END OF FUNCTIONS
//-----------------------------------------------------------------------


?>



<?php
echo "<hr><br>";
highlight_file("one.php");
?>



<form action="http://puff.mnstate.edu/~dn2061er/private/Assignment5">
<input type="submit" value="Go back to Assignment 5 sheet">
</form>

</div> <br>


</body>
</html>

