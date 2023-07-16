<?php 
// Boolean -> true or false 
// < -> less than 
// > -> greater than 
// <= -> less than or equal to 
// >= -> greater than or equal to 
// == -> equal to 
// != -> not equal to 
// === -> identical 
// !== -> not identical 
// <> -> not equal 

echo 12=='12';
echo '<br>';
echo 15==='15';
echo '<br>';
echo 20 <> 25;
echo '<br>';

// logical operator 
// or ->|| returns true if any one of the condition is true otherwise false
// and ->&& return true if all conditions are true otherwise false
// not -> !  returns opposite result 

$x=10;
$y=20;
$z=30;

echo $x<$y || $z<$y;
echo '<br>';
echo $x<$y && $z<$y;

// increment and decrement operator 
// post increment eg: x++
$x++;
echo $x.'<br>';
// pre increment eg:++x
++$x;
echo $x;
// post decrement operator eg: y--
echo '<br>';
$y--;
echo $y;

//pre decrement operator eg: --y
echo '<br>';
--$y;
echo $y;












?>