<?php
// function is a block of code to perform the particular task 

// define the function 
function demoFunction(){
    echo 'Hello Function';
}


// call the function 
demoFunction();

echo '<br>';

// function with argument 

function function_args($first_num,$second_num){
    print($first_num+$second_num);
}

// call the function 
function_args(20,100);

echo '<br>';

// function with return type 

function subFunction($a,$b){
    return $a-$b;

}

//call the function 
$result=subFunction(100,50);
echo $result;
echo '<br>';
$test=subFunction(20,10);
echo $test;

?>