<?php 
for($x=1;$x<=15;$x++){
    echo $x.'&nbsp;';
}
echo '<br>';
for($x=1;$x<=15;++$x){
    echo 'Ram &nbsp;';
}
echo '<br>';
for($y=15;$y>=1;$y--){
    echo $y.'&nbsp;';
}
echo '<br>';

//nested loop -> loop inside loop 
for($i=1;$i<=10;$i++){
    for($j=1;$j<=5;$j++){
        echo $i.'*'.$j.'='.$i*$j.'<br>';
    }
    echo '<hr>';
}

echo '<br>';
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo '*';
    }
    echo '<br>';
}
echo '<br>';

//pyramid 


?>