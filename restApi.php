<?php
header("Content-Type:application/json");
include('database/database_connection.php');
if (isset($_GET['pitch']) && $_GET['pitch'] != "") {
    $name = $_GET['pitch'];
    $result = mysqli_query(
        $con, "SELECT * FROM `pitch_info` WHERE pitch_name LIKE '%$name%'"
    );
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $id = $row['id'];
        $name = $row['pitch_name'];
        $price = $row['price'];
        $description = $row['description'];
        $image = $row['image'];
        response($id,$name, $price, $description, $image);
        mysqli_close($con);
    } else {
        response(NULL,NULL, NULL, 200, "No Record Found");
    }
} else {
    response(NULL,NULL, NULL, 400, "Invalid Request");
}

function response($id,$name, $price, $description, $image)
{
    $response['id'] = $id;
    $response['pitch_name'] = $name;
    $response['price'] = $price;
    $response['description'] = $description;
    $response['image'] = $image;

    $json_response = json_encode($response);
    echo $json_response;
}

?>