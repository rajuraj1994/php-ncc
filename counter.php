<?php require('./database/database_connection.php');?>

<?php
$select  = "select * from counter";
$show = mysqli_query($con,$select);
$visitors = 1;

while($row = mysqli_fetch_assoc($show)){
    $visitors = $row['counter'];
}
$visitors = $visitors+1;

mysqli_query($con,"update counter set counter = '$visitors'");

$counter_select = "select * from counter";
$counter_show = mysqli_query($con,$counter_select);
$counter = mysqli_fetch_assoc($counter_show);

?>