<?php
$num = 5;
for($i=1; $i<=$num; $i++)
{
 for($j=1; $j<=$i; $j++)
 {
   echo $i * $j . "&nbsp;&nbsp;&nbsp;";
 }
 echo "<br>";
}
// Second Part
for($i=4; $i>=1; $i--)
{
 for($j=1; $j<=$i; $j++)
 {
    echo $i * $j. "&nbsp;&nbsp;&nbsp;";
 }
 echo "<br>";
}
