<?php

//function that takes an array of numbers as a parameter and returns the number of
//values that are a multiplier of either 4 or 6 (or, of course, both)

function countMultipliers($arr)
{

$n = count($arr);// find out array lenghth
$res = 0; //initialize a counter
for ($i = 0; $i < $n; $i++) //loop to traverse the array
    {
if ($arr[$i] % 4 == 0 || $arr[$i] % 6 == 0) //condition with modulo operator to find the multiplier of 4 or 6 or both
$res++;//increment counter if condition meets
  }
return $res;//returning the value of counter
}
 
 
$arr = array(9,7,12,6,8,13,18); //define an array


echo "Count = " ,countMultipliers($arr); //calling the function to test