<?php
$title = 'Index';
include 'includes/header.php';
?>

<h2><?php echo $title ?></h2>

<?php
// declare variable
$name = 'Marc McRae';
$age = 61;
//echo variable
echo $name;
echo '<h2>My Name is: ' . $name . '</h2>';
echo '<h2>My Age is: ' . $age . '</h2>';

echo "<h2>My Name is: $name and my Age is: $age</h2>";

?>

<?php
require 'includes/footer.php'
?>