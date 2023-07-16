<?php 
// An array contains multiple values in a variable 

$fruits=array('apple','orange','grapes','mango','pineaple');
echo $fruits[0];
echo '<br>';
echo $fruits[3];
echo '<br>';


// foreach loop 
foreach($fruits as $name){
    echo $name.'&nbsp;';
}
echo '<br>';
//count 
echo count($fruits);
echo '<br>';
for($i=0;$i<count($fruits);$i++){
    echo $fruits[$i].'&nbsp;';
}
echo '<br>';
// associative array 
$students=array(
    "Arjun"=>"Bhaktapur",
    "Neelam"=>"Basundhara",
    "Binod"=>"Hattigauda",
    "Abinash"=>"Gogabu",
    "Abhisek"=>"Baluwatar"
);
echo $students['Arjun'];
echo '<br>';
foreach($students as $name => $address){
    echo $name .' lives in '.$address.'<br>';
}

?>