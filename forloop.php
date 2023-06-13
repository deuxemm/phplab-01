<!DOCTYPE html>
<html lang="en">
<?php
$title = 'For Loops';
include 'includes/header.php';
?>

<body>
  <h2>
    <?php echo $title ?>
  </h2>

  <?php
  // For Loops
  for ($count = 0; $count < 10; $count++) {
    echo "<p>The count is: $count</p>";
    // prefer to wrap the text in an <p> tag
    // echo '<br/>';
  }
  ?>


  <?php
  require 'includes/footer.php'
    ?>