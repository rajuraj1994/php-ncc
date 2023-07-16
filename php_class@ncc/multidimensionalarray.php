<style>
    ul{
       background-color:dodgerblue;
       display:flex;
       justify-content:space-evenly;
       list-style-type:none;
       flex-wrap:wrap;
    }
    ul li a{
        color:white;
        text-decoration:none;
        font-size:20px;
        padding:20px;
        display:inline-block;
        text-transform:capitalize;
    }
    ul li ul{
        background-color:green;
        width:120px;
        position: absolute;
        display:flex;
        flex-direction:column;
        display:none;
    }
    ul li:hover ul{
        display:block;
    }
    ul li a:hover{
        background-color:orange;
    }

</style>

<?php 
$vehicles=array(
    "bike"=>array('Pulsar','honda','yamaha','suzuki','asianwings'),
    "car"=>array('bmw','mercedes','nexon','tesla','maruti'),
    "train"=>array('bullet','metro','steam','light','tram','mono'),
    "plane"=>array('boeing','airbus','atr','twin','jet')
);
echo $vehicles['bike'][0];
echo '<br>';
echo $vehicles['train'][3];
echo '<br>';

echo '<ul>';
foreach($vehicles as $name => $brand){
    echo "<li><a href='#'>".$name."</a>";
    echo '<ul>';
    foreach($brand as $brandName){
        echo "<li> <a href='#'>".$brandName."</a></li>";
    }
    echo '</ul>';
    echo '</li>';
}
echo '</ul>';



?>