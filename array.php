<?php
$title = 'Arrays';
include 'includes/header.php';
?>

<body>
  <h2>
    <?php echo $title ?>
  </h2>

  <?php
  // Arrays are a bunch of variables stored in an array
  // in PHP it allows arrays of mixed type
  $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 435, 85, 32, 98);

  echo $numbers[5];

  echo "<p>$numbers[9]</p>";

  $size = count($numbers);
  echo "<p>Array: numbers, has $size elements</p>";

  for ($count = 0; $count < $size; $count++) {
    echo "$numbers[$count]<br/>";
  }


  ?>


  <?php
  require 'includes/footer.php'
    ?>