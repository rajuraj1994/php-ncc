<?php 
$a=25;
if($a%2==0){
    echo $a.' is an even number';
}
else{
    echo $a.' is an odd number';
}

echo '<br>';
$num=25;

//leap year 
$year=2023;
if($year%4==0 && $year%100!=0 || $year%400==0){
    echo $year.' is a leap year';
}
else{
    echo $year.' is not a leap year';
}


?>