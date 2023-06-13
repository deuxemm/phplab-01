<?php
$title = 'Do While Loops';
include 'includes/header.php';
?>

<body>

  <body>
    <h2>
      <?php echo $title ?>
    </h2>

    <?php
    $grade = 0;

    // Infinite Loop
    // SO WE NEED AN END CONDITION!!
    // while ($grade < 10) {
    //     echo '<p>I am less than 10!</p>';
    // }
    
    // Pre-condition Loop
    while ($grade < 10) {
      echo '<p>I am less than 10!</p>';
      $grade++;
    }
    echo 'EXITED LOOP';

    ?>


    <h2>Do While Loops</h2>
    <?php
    // Post-condition Loop
    do {
      echo '<p>I am DO WHILE LOOP</p>';
      $grade++;
    } while ($grade < 10);
    echo 'EXITED LOOP';
    ?>


    <?php
    require 'includes/footer.php'
      ?>