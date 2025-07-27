<?php 

$price = 56;
$tax = 1.5;
$total = $price + ($price * $tax);

echo "Price: $price";


echo "<br>";


$name = "Shohel";

$age = 18;

echo "My name is $name and I am $age years old.";


echo "<br>";


if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}

echo "<br>";



$txt = "Codding";
echo "I love $txt";

echo "<br>";
// Concatenation
echo " I love " . $txt . ".";

echo "<br>";

var_dump($txt);
echo "<br>";

$name = "Shohel Rana";
$age = 20;
$height = 6.4;
$weight = 55;

echo "Name: $name";
echo "<br>";
echo "Age: $age";
echo "<br>";
echo "Height: "  . $height . " ft ";
echo "<br>";
echo "Weight: $weight kg";
echo "<br>";

var_dump($name);
var_dump($age);
var_dump($height);
var_dump($weight);

echo "<br>";

$a = $b = $c = "Hello World";    
echo "<br>";

// Global variable
$s = "Sohel Rana";
function test() {
    echo "This is a $s";
}
echo "This is a $s";
echo "<br>";

//  Local Scope variable

function localTest() {
    $local = "This is a local variable";
    echo $local;
}
localTest();

echo "<br>";

$fname = "Sohel";
$lname = "Rana";
echo "My Name is " . $fname . " " . $lname;

echo "<br>";
echo "My Name is $fname $lname";


echo "<br>";

// if elese

$email = "5";

if (!empty($email)) {
    echo "Email is set.";
} else {
    echo "Email is not set.";
}

echo "<br>";

$d = date("H");

if ($d < 10) {
    echo "Good Morning";
} else if ($d < 20) {
    echo "Good Afternoon";
} else{
    echo "Good Evening";
}


echo "<br>";

// short hand if else
$t = 21;

$s = ($t <= 18) ? "Hello" : "Good Bye.";

echo $s ;
echo "<br>";

// Nested if Statement 

if ($t > 10) {
    echo "10 is over ";


    if ($t > 20) {
        echo "20 is over ";
    } else {
        echo " But 20 is not over";
    }

}
echo "<br>";

$marks = 32;

if ($marks >= 33) {
    echo "You are passed ";

    if ($marks >= 80) {
        echo " with A+";
    } 
} else {
    echo "You are failed";
}

echo "<br>";



$rolls = 1;


switch ($rolls) {
    case 1 :
        echo "Your result is 4.20";
        break;
        
    case 2 :
        echo "Your result is 3.20";
        break;
        
    case 3 :
        echo "Your result is 4.00";
        break;
        
    case 4 :
        echo "Your result is 3.80";
        break;
        
    case 5 :
        echo "Your result is 4.40";
        break;
        
    case 6 :
        echo "Your result is 4.10";
        break;
        
    case 7 :
        echo "Your result is 4.90";
        break;
        
    case 8 :
        echo "Your result is 2.20";
        break;
        
    case 9 :
        echo "Your result is 3.52";
        break;
        
    case 10 :
        echo "Your result is 3.45";
        break;
        
    case 11 :
        echo "Your result is 3.75";
        break;
        
    case 12 :
        echo "Your result is 4.11";
        break;
        
    case 13 :
        echo "Your result is 4.20";
        break;
        
    case 14 :
        echo "Your result is 4.60";
        break;
        
    case 15:
        echo "Your result is 4.70";
        break;
     default:
      echo "You are failed 123";
        
}














?>

















<style>

    body {
        background-color: #ddd;
        color: #000;
    }

    
</style>