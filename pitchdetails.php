<?php require 'include/header.php'; ?>

<?php
if (isset($_GET['Id'])) {
    $id = $_GET['Id'];
    $data = "select * from pitch_info where id='$id'";
    $exec = mysqli_query($con, $data);
    $row = mysqli_fetch_assoc($exec);
}
?>

<div class="pitch_container">
    <div class="pitch_cards_details">
        <img src="assets/images/uploads/<?php echo $row['image']; ?>" alt="<?php echo $row['pitch_name']; ?>">
        <h2 class="pitch_heading"><?php echo $row['pitch_name']; ?></h2>
        <h2 class="text-info">Rs. <?php echo $row['price'];?> per person</h2>
        <h4 class="text-muted">Location: <?php echo $row['location']; ?></h2>
        <div class="pitch_text">
            <p class="pitch_pa">
            <?php echo $row['description']; ?>
            </p>
        </div>
        <a href="pitchdetails.php?Id=<?php echo $row['id']; ?>" class="btn btn-secondary">Book Now</a>
        
    </div>
</div>

<?php require 'include/footer.php'; ?>