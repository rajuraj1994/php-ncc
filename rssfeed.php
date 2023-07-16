<?php require 'database/database_connection.php' ?>
<?php
$sql=mysqli_query($con,"select * from pitch_info");
header("content-type:text/xml;");
echo '<?xml version="1.0"?>';
echo '<wild-swimming-camping>';
while ($data=mysqli_fetch_array($sql)){
	echo '<gwsc id="'.$data[0].'">';
	echo "<name>".$data[1]."</name>";
	echo "<location>".$data[2]."</location>";
	echo "<description>".$data[3]."</description>";
	echo "<image>".$data[4]."</image>";
	echo "<price>".$data[5]."</price>";
	echo "<type>".$data[6]."</type>";
	
	echo "</gwsc>";
}

echo '</wild-swimming-camping>';


?>