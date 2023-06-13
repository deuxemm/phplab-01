<?php
$title = 'Conditionals';
include 'includes/header.php';
?>

<body>
  <h2>
    <?php echo $title ?>
  </h2>

  <?php

  // An if statement that will carry out an action based on the value of the variable
  echo '<h2>if, elseif, else statement</h2>';
  $grade = 80;
  if ($grade >= 50) {
    echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
  } else {
    echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
  }

  // changing variable from number to string
  $grade = 'B';
  // if-else
  if ($grade == 'A') {
    echo '<h2 style="color: green">YOU ARE A SUPERSTAR!</h2>';
  } elseif ($grade == 'B') {
    echo '<h2 style="color: blue">YOU DID WELL!</h2>';
  } else {
    echo '<h2 style="color: red">YOU HAVE FAILED..</h2>';
  }
  ?>

  <?php
  require 'includes/footer.php'
    ?>