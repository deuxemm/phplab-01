<?php
$title = 'Switches';
include 'includes/header.php';
?>

<body>
  <h2>
    <?php echo $title ?>
  </h2>

  <?php

  // some explanatory text here
  echo '<h2>switch statement</h2>';

  $grade = 'C';

  switch ($grade) {
    case 'A':
      echo '<h2 style="color: green">YOU ARE A SUPERSTAR!</h2>';
      break;
    case 'B':
      echo '<h2 style="color: blue">YOU DID WELL!</h2>';
      break;
    default:
      echo '<h2 style="color: red">YOU HAVE FAILED..</h2>';
      break;
  }

  ?>

  <?php
  require 'includes/footer.php'
    ?>