<?php
include 'database/database_connection.php';
$sql = mysqli_query($con, "select * from pitch_info");
header("Content-type: application/xml");
echo'<?xml version="1.0"?>';
echo'<ws_camping_site>';
echo'<pitch_info>';
while ($data = mysqli_fetch_array($sql)) {
    echo'<pitch id="' . $data[0] . '">';
    echo"<name>".$data[1]."</name>";
    echo "<location>".$data[2]."</location>";
    echo"<description>".$data[3]."</description>";
    echo"<image>".$data[4]."</image>";
    echo"<price>".$data[5]."</price>";
    echo"<pitchType>".$data[6]."</pitchType>";
    echo"</pitch>";
}
echo'</pitch_info>';
echo'</ws_camping_site>';
?>
<script>
    function createTable(xml) {
        var table;
        var elements;
        var pitch_name, price, location;
        var parser = new DOMParser();
        var xmlDoc = parser.parseFromString(xml, "text/xml");
        elements = xmlDoc.documentElement.getElementsByTagName("pitch");
        table = "<table border = \"1\">";
        table += "<tr>";
        table += "<th>Name</th>";
        table += "<th>Price</th>";
        table += "<th>Location</th>";
        table += "</tr>";
        for (i = 0; i < elements.length; i++) {
            pitch_name = elements[i].getElementsByTagName("name");
            price = elements[i].getElementsByTagName("price");
            location = elements[i].getElementsByTagName("location");
            table += "<tr>";
            table += "<td>" + pitch_name[0].textContent + "</td>";
            table += "<td>" + price[0].textContent + "</td>";
            table += "<td>" + location[0].textContent + "</td>";
            table += "</tr>";
        }
        table += "</table>";
        return table;
    }

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var table = createTable(this.responseText);
            document.getElementById("table-content").innerHTML = table;
        }
    };
    xmlhttp.open("GET", "<?php echo $_SERVER['PHP_SELF']; ?>", true);
    xmlhttp.send();
</script>

<div id="table-content"></div>
