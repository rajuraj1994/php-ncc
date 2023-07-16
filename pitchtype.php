<?php require 'include/header.php'; ?>

<?php
$select = "Select * from pitch_info";
$run = mysqli_query($con, $select);
?>

<div class="pitch_container">
<?php
    while ($row = mysqli_fetch_assoc($run)) {
      ?>
    <div class="pitch_cards">
        <img src="assets/images/uploads/<?php echo $row['image']; ?>" alt="<?php echo $row['pitch_name']; ?>">
        <h2 class="pitch_heading"><?php echo $row['pitch_name']; ?></h2>
        <h2 class="text-info">Rs. <?php echo $row['price'];?> per person</h2>
        <h4 class="text-success">Available</h2>
        <a href="pitchdetails.php?Id=<?php echo $row['id']; ?>" class="btn btn-secondary">View Details</a>
    </div>
    <?php
    }
    ?>
</div>

<?php require 'include/footer.php'; ?>