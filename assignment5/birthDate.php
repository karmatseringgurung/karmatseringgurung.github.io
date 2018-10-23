
<?php

$months = array("January", "February", "March", "April", "May",
                   "June", "July", "August", "September",
                   "October", "November", "December");

extract($_REQUEST);



function Season($month )
{
if ($month== "March" or $month == "April" or $Month == "May" )
    echo "<h4>You were born in Spring</h4>";
elseif ($month== "June" or $month == "July" or $Month == "August" )
    echo "<h4>You were born in Summer</h4>";
elseif ($month== "September" or $month == "October" or $Month == "November" )
    echo "<h4>You were born in Fall</h4>";
elseif ($month== "December" or $month == "January" or $Month == "February" )
    echo "<h4>You were born in Winter</h4>";
else
    echo "<h4>ERROR!!!-----ERROR</h4>";
}

function Zodiac($month, $Day)
{
if (($month=="March" && $Day>20) || ($month=="April" && $Day < 20)){
	   return "Aries";
}
elseif (($month=="April" && $Day>19) || ($month=="May" && $Day < 21)){
      return "Tarus";
}
elseif (($month=="May" && $Day>20) || ($month=="June" && $Day < 21)){
        return "Gemini";
}

elseif (($month=="June" && $Day>20) || ($month=="July" && $Day < 23)){
        return "Cancer";
}

elseif (($month=="July" && $Day>22) || ($month=="August" && $Day < 23)){
        return "Leo";
}


elseif (($month=="August" && $Day>22) || ($month=="Spetember" && $Day < 23)){
        return "Virgo";
}

elseif (($month=="September" && $Day>22) || ($month=="October" && $Day < 23)){
        return "Libra";
}
elseif (($month=="October" && $Day>22) || ($month=="November" && $Day < 22)){
        return "Scorpio";
}

elseif (($month=="November" && $Day>21) || ($month=="December" && $Day < 22)){
        return "Sagittarius";
}

elseif (($month=="December" && $Day>21) || ($month=="January" && $Day < 20)){
        return "Caprisorn";
}
elseif (($month=="January" && $Day>19) || ($month=="February" && $Day <19)){
        return "Aquarius";
}

elseif (($month=="February" && $Day>18) || ($month=="March" && $Day < 21)){
        return "Pisces";
}

else
	return "ERROR--ERROR!!!!";

}

function animal($Year)
{
        switch (($Year - 4) % 12) 
        {
            case  0: $zodiac = "Rat";       break;
            case  1: $zodiac = "Ox";        break;
            case  2: $zodiac = "Tiger";     break;
            case  3: $zodiac = "Rabbit";    break;
            case  4: $zodiac = "Dragon";    break;
            case  5: $zodiac = "Snake";     break;
            case  6: $zodiac = "Horse";     break;
            case  7: $zodiac = "Goat";      break;
            case  8: $zodiac = "Monkey";    break;
            case  9: $zodiac = "Rooster";   break;
            case 10: $zodiac = "Dog";       break;
            case 11: $zodiac = "Pig";       break;
        }
        echo "{$Year} is the year of the {$zodiac}.<br />";
}

function days($Month, $Day)

{

$days = floor(($bday-$today)/86400)+1;
return $days;

}

if ($button==NULL or $button=="submit")
     $number = 0;
  else
     if (isset($season))
        echo "<h3>You were born in " . season($Month) . "</h3>";

     if (isset($Zodiac))
    echo "<h3>Your zodiac sign is " . Zodiac($Month, $Day) . "</h3>";

    if (isset($animal))
    echo "<h3>You were born in the chinese year of the " . animal($Year) . "</h3>";

    if (isset($age))
    echo "<h3>You are " . age($Month, $Day,$Year) . "</h3>";

    if (isset($week))
    echo "<h3>You were born on a  " . week($Month, $Day, $Year) . "</h3>";

    if (isset($nextBirthday))
    echo "<h3>Your next birthday in on a  " . nextBirthday($Month, $Day, $Year) . "</h3>";

    if (isset($days))
    echo "<h3>THe number of days untill your next birthday is" . days($Month, $Day) . "</h3>";


echo <<< HERE

<h2>Enter Your Birthday</h2>
<form action = "birthDate.php">
<table border = "2">

<tr>
   <th>Month</th>
   <th>Day</th>
   <th>Year</th>
</tr>

<tr>
    <th> 
    <input type="radio" name="month" value="January">January<br/>
    <input type="radio" name="month" value="February">February<br/>
    <input type="radio" name="month" value="March" checked>March<br/> 
    <input type="radio" name="month" value="April">April<br/>
    <input type="radio" name="month" value="May">May<br/>
    <input type="radio" name="month" value="June">June<br/>
    <input type="radio" name="month" value="July">July<br/>
    <input type="radio" name="month" value="August">August<br/>
    <input type="radio" name="month" value="September">September<br/>
    <input type="radio" name="month" value="October">October<br/>
    <input type="radio" name="month" value="November">November<br/>
    <input type="radio" name="month" value="December">December<br/> </th>
   


    <th> 
    <!--   <select name="Day" size="3"> -->
   <select name="Day">
      <option>1</option>
      <option>2</option>
<!--      <option selected>3</option> -->
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      <option>13</option>
      <option>14</option>
      <option>15</option>
      <option>16</option>
      <option>17</option>
      <option>18</option>
      <option>19</option>
      <option>20</option>
      <option>21</option>
      <option>22</option>
      <option>23</option>
      <option>24</option>
      <option>25</option>
      <option>26</option>
      <option>27</option>
      <option>28</option>
      <option>29</option>
      <option>30</option>
      <option>31</option>

   </select>   </th>



    <th> 
    <!--   <select name="Year" size="3"> -->
   <select name="Year">
      <option>1990</option>
      <option>1991</option>
      <option>1992</option>
      <option>1993</option>
      <option>1994</option>
<!--      <option selected>1995</option> -->
      <option>1995</option>
      <option>1996</option>
      <option>1997</option>
      <option>1998</option>
      <option>1999</option>
      <option>2000</option>
      <option>2001</option>
      <option>2002</option>
      <option>2003</option>
      <option>2004</option>
      <option>2005</option>
      <option>2006</option>
      <option>2007</option>
      <option>2008</option>
      <option>2009</option>
      <option>2010</option>
      <option>2011</option>
      <option>2012</option>
      <option>2013</option>
      <option>2014</option>
      <option>2015</option>
      <option>2016</option>
      <option>2017</option>
      

   </select>   </th>
  


</tr>

</table>


<h3>What do you want to know about your birthday?</h3><br/>


<input type="checkbox" name="season" >Season of the year<br/>
   <input type="checkbox" name="Zodiac" >Zodiac Sign<br/>
   <input type="checkbox" name="animal" >Chinese animal sign<br/>
   <input type="checkbox" name="age" >How old am I?<br/>
   <input type="checkbox" name="week" >What day of the week was I born on?<br/>
   <input type="checkbox" name="nextBirthday" >What day of the week is my birthday?<br/>
   <input type="checkbox" name="days" >How many days until my next birthday?<br/>

   <br/>
   <input type="submit" name="button" value="submit">
   




   <form>
HERE;






?>
<h5><input type="button" onclick="location.href='http://puff.mnstate.edu/~dn2061er/private';" value=" Return to Main Menu" /></h5> 

<h6>CODE HERE:<br><input type="button" onclick="location.href='http://puff.mnstate.edu/~dn2061er/private/assignment5/code.php';" value="Code" /></h6> 


