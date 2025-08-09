<?php 

// Php Variable

$s = "Hello World!";
echo $s;
echo "<br>";

$txt = "W3Schools.com";
echo "I love " . $txt . "!";

echo "<br>";


// Global Variable

$x = 5;

// function mytest() {
    
// }

// mytest(); 
echo $x;

echo "<br>";

$st = 10;
$ts = 20;

function myTest() {
    global $st, $ts;
    $ts = $st + $ts;
}
myTest();
echo $ts;


echo "<br>";
$g = "Ami Tomake Bhalobashi";

echo str_replace("Tomake", "PHP Ke", $g);

echo "<br>";

$j = "Ami Tomake Bhalobashi";
$k = explode(" ", $j);
print_r($k);


echo "<br>";

echo (round(0.60));
echo "<br>";
echo (round(0.50));
echo "<br>";

define("SHOHEL", "My Name is Shohel Rana.");
echo SHOHEL;
echo "<br>";

define("RANA", "My Name is Shohel Rana.");
function hello() {
    echo RANA;
}
hello();





?>


