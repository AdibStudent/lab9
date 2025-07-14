<?php
// Exercise 1.5 - Strict typed function (must be at the TOP of the file)
declare(strict_types=1); // This must be the FIRST line before any output

function addNumbers(int $a, int $b) {
    return $a + $b;
}

echo "5 + 5 = " . addNumbers(5, 5) . "<br>";

// Uncomment the line below to test fatal error
// echo addNumbers(5, "5 days"); // This will throw an error due to strict typing
?>

<?php
// Exercise 1.1 - Basic user-defined function
function writeMsg() {
    echo "Hello world!<br><br>";
}
writeMsg();

// Exercise 1.4 - Function with arguments
function familyName($name, $year) {
    echo "$name born in $year <br>";
}
familyName("Candy", "1975");
familyName("Azrin", "1978");
familyName("Bernard", "1983");

echo "<br><br>";
?>
