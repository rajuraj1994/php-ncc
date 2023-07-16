<?php
require 'include/header.php';
?>
<?php
$query = "select * from pitch_info";
$exec = mysqli_query($con, $query);
?>
<!-- pitch types and availability -->
<div class="container-main">
    <h2 class="text-center mb-3">
       Your search item is
    </h2>
    <div class="pitch_container">
        <?php
        if (isset($_POST['search']) && $_POST['search'] != "") {
            $search = $_POST['search'];
            $url = "http://localhost/DWPHP/restApi.php?pitch=$search";

            $client = curl_init($url);
            curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($client);

            $result = json_decode($response);
            ?>
            <div class="pitch_cards">
                <img src="assets/images/uploads/<?php echo $result->image; ?>" alt="<?php echo $result->pitch_name; ?>">
                <h2 class="pitch_heading">
                    <?php echo $result->pitch_name; ?>
                </h2>
                <h2 class="text-info">Rs.
                    <?php echo $result->price; ?> per person
                </h2>
                <h4 class="text-success">Available</h2>
                    <a href="pitchdetails.php?Id=<?php echo $result->id; ?>" class="btn btn-secondary">View Details</a>
            </div>

            <?php
        }
        ?>
    </div>
</div>
<!-- pitch types and availability -->


<?php
require 'include/footer.php';
?>