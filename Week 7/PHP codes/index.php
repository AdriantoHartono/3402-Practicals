<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <body>
<h1>This is PHP Demo</h1>

<?php
// Echo
echo "Hello to everyone from PHP"
?>

<?php
// Decisions
$number = 10;

if ($number > 20) {
    echo "The number is greater than 20.";
} else {
    echo "The number is not greater than 20.";
}
?>

<?php
// Repetition

// For Loop
echo "<ul>";
for ($i = 1; $i <= 5; $i++) {
    echo "<li>Item $i</li>";
}
echo "</ul>";

// While loop
echo "<ul>";
$j = 1;
while ($j <= 5) {
    echo "<li>Item $j</li>";
    $j++;
}
echo "</ul>";

// Foreach (with an array)
$colors = array("red", "green", "blue");
echo "<ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";
?>

<?php
// Functions (with parameters)
function greet($name) {
    echo "Hello, $name!";
}

greet("John");
?>

    </body>
</html>