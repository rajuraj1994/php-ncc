<?php 
for($i=1;$i<=20;$i++){
    if($i==15){
        break;
    }
    echo $i.'&nbsp;';
}
echo '<br>';

for($i=1;$i<=20;$i++){
    if($i==15){
        continue;
    }
    echo $i.'&nbsp;';
}

?>