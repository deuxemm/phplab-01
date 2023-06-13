<?php
$title = 'String Functions';
include 'includes/header.php';
?>

<body>
  <h2>
    <?php echo $title ?>
  </h2>

  <?php
  // Concatenation of strings
  $phrase1 = "Students who came late";
  $phrase2 = "into class, go stand with Rocky.";
  $name = "marc mc rae";

  echo $phrase1 . " " . $phrase2;
  echo '<br/>';
  echo '<hr/>';

  // String transformation
  echo 'Uppercase first letter: ' . ucfirst($name) . '<br/>';
  echo 'Uppercase of each word: ' . ucwords($name) . '<br/>';
  echo 'ALL to uppercase: ' . strtoupper($name) . '<br/>';
  echo 'ALL to lowercase: ' . strtolower("THIS WAS ALL UPPER CASE") . '<br/>';
  echo 'Repeat String: ' . str_repeat('a', 10) . '<br/>';
  echo 'Repeat String: ' . strtoupper(str_repeat('a', 10)) . '<br/>';
  echo 'Get a Substring: ' . substr($name, 5, 10) . '<br/>';

  // Returns NULL
  echo 'Get position in string of char r: ' . strpos($name, 'r') . '<br/>';

  // echo 'Get position in string: ' . strpos()
  
  echo 'Get position of string of char w: ' . strpos($name, 'w') . '<br/>';
  echo 'show where 1st occurence of character "r" starts: ' . strchr($name, 'r') . '<br/>';

  echo 'find the length of a string: ' . strlen($name) . '<br/>';

  echo 'Without Trim: ' . "A" . " B C D " . "E" . '<br/>';
  echo 'Trim spaces on both sides of B C D: ' . "A" . trim(" B C D") . "E" . '<br/>';
  echo 'Trim spaces to the left of B C D: ' . "A" . ltrim(" B C D ") . "E" . '<br/>';
  echo 'Trim spaces to the right of B C D: ' . "A" . rtrim(" B C D ") . "E" . '<br/>';

  echo 'Replace string with another: ' . str_replace("stand", "sit", $phrase2) . '<br/>';

  ?>


  <?php
  require 'includes/footer.php'
    ?>