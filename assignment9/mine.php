<?
<html>
<body>
if ($submit=="") {
$NumMine=4;
$RowSize=5;
$ColSize=5;
$generer=1;
}
if ($generer==1) {
srand((double)microtime()*100000000);
$time_start=time();
if (($RowSize<=1) || ($ColSize<=1) || ($NumMine==0)) {
<p><br><font size=-1 color=red>Wrong number for Rows, Cols or Mines!</font>";
exit
}
if ($NumMine > $RowSize*$ColSize) {
print "<p><br><font size=-1 color=red>Too many mines!</font>";
exit;
}

for ($Row=1;$Row<=$RowSize;$Row++) {
for ($Col=1;$Col<=$ColSize;$Col++) {
$Mine[$Row][$Col]="0";
$Decouv[$Row][$Col]="0";
}
}
$index=0;
while ($index<$NumMine) {
$Row=rand(1,$RowSize);
$Col=rand(1,$ColSize);
if ($Mine[$Row][$Col]=="0") {
$Mine[$Row][$Col]="1";
$index++;
}
}
} else {
$perdu=0;
$reste=$RowSize*$ColSize;
for ($Row=1;$Row<=$RowSize;$Row++) {
for ($Col=1;$Col<=$ColSize;$Col++) {
$temp="Mine".($Row*($ColSize+1)+$Col);
$Mine[$Row][$Col]=$$temp;
$temp="Decouv".($Row*($ColSize+1)+$Col);
$Decouv[$Row][$Col]=$$temp;
if ($Decouv[$Row][$Col]=="1") {$reste=$reste-1;}
$temp="submit".($Row*($ColSize+1)+$Col);
if ($$temp=="ok") {
$reste=$reste-1;
if ($Mine[$Row][$Col]=="0") {
$Decouv[$Row][$Col]="1";
} else {
$perdu=1;
}
}
}
}
if ($perdu==1) {
print "<h2>You Lose!</h2>";
for ($i=1;$i<=$RowSize;$i++) {
for ($j=1;$j<=$ColSize;$j++) {
$Decouv[$i][$j]="1";
}
}
}
if (($reste==$NumMine)&&($perdu!=1)) {
print "<h2>You Win!</h2>";
$time_stop=time();
$time=$time_stop-$time_start;
print "<p><font size=-1><i>Your score: $time</i></font>";

for ($i=1;$i<=$RowSize;$i++) {
for ($j=1;$j<=$ColSize;$j++) {
$Decouv[$i][$j]="1";
}
}
}
}
<form method=get action=\"$PHP_SELF\">
<input type=hidden name=time_start value=$time_start>
<input type=hidden name=NumMine value=$NumMine>
<input type=hidden name=RowSize value=$RowSize>
<input type=hidden name=ColSize value=$ColSize>
<input type=hidden name=generer value=0>
<p><table border=1 cellpadding=8>
for ($Row=1; $Row<=$RowSize; $Row++) {
print "<tr>";
for ($Col=1; $Col<=$ColSize; $Col++) {
$nb=0;
for ($i=-1; $i<=1; $i++) {
for ($j=-1; $j<=1; $j++) {
if ($Mine[$Row+$i][$Col+$j] == "1") {
$nb++;
}
}
}
print "<td width=15 height=15 align=center valign=middle>";
if ($Decouv[$Row][$Col]=="1") {
if ($nb==0) {
print "&nbsp;";
} else {
if ($Mine[$Row][$Col]=="1") {
print "*";
} else {
print "$nb";
}
}
} else {
<input type=hidden name=submit value=ok>
<input type=submit name=submit".($Row*($ColSize+1)+$Col)." value=ok>
}
<input type=hidden name=Mine".($Row*($ColSize+1)+$Col)." value=".$Mine[$Row][$Col].">
<input type=hidden name=Decouv".($Row*($ColSize+1)+$Col)." value=".$Decouv[$Row][$Col].">
</td>
}
</tr>
}
</table>
</form>"
?>
<hr>
<form method=post>
Rows : &nbsp;<input type=text name=RowSize value=1 size=2 readonly>
<br>Cols : &nbsp;<input type=text name=ColSize value=5 size=2>
<br>Mines : &nbsp;<input type=text name=NumMine value=4 size=2>
<p><input type=submit name=submit value=Generate>
<input type=hidden name=generer value=1>
</form>
<p>
</font>
</center>
</body>
</html>