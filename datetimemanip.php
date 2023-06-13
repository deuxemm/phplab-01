<?php
$title = 'Date/Time';
include 'includes/header.php';
?>

<body>
  <h2>
    <?php echo $title ?>
  </h2>

  <?php
  // local server/machine time
  $datenow = getdate();
  echo "the getdate() parameters: <br/>";
  echo $datenow['mday'] . '<br/>';
  echo $datenow['mon'] . '<br/>';
  echo $datenow['year'] . '<br/>';

  // using concatenation
  echo "using concatenation" . '<br/>';
  echo "Today's Date: " . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'] . '<br/>';

  echo time() . '<br/>';

  print date("m/d/y G.i:s<br>", time()) . '<br/>';
  print "Today is ";
  print date("D j F Y, \a\\t g.i a", time());
  ?>


  <?php
  require 'includes/footer.php'
    ?>