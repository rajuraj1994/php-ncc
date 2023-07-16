<?php  require('db_connection.php'); ?>

<?php 
$select="select * from counter";
$show=mysqli_query($con,$select);
$visitors=0;

while($row=mysqli_fetch_assoc($show)){
  $visitors=$row['count_visitor'];
}
$visitors=$visitors+1;
mysqli_query($con,"update counter set count_visitor='$visitors'");

?>