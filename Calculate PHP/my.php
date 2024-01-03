<?php

define('DB_SERVER', 'localhost');
define('DB_PASSWORD', 'root');
define('DB_USERNAME', 'root');


// This is test variable
echo "\n";
$t = 'Anny';
echo $t;
echo "\n";
echo "\n";


// practing Printf and Sprintf with placeholder (%s , %d , %f, %c) start here
$freeText = "is a numaric valo of 50 in ASCII";
$ascii = 50;
printf("%c %s", $ascii, $freeText);
// ASCII value of %c placeholder for printf()

// This is printf with % and %d and %x %s

$name = 'Pappu';
$age = 27;
$lo = 'Gazipur';
// \n is a line brack like \n
printf('My name is %s i am %d\n and I live in %s', $name, $age, $lo);
echo '\n';
$hexValue = 255;
printf("Hex Value: %x", $hexValue);

echo '\n';
$price = 19.99;
printf("Price: %.2f", $price);

echo '\n';
echo '\n';

// This is Sprintf
$a = 'is';
$b = 'Dog';
$d = 15.69;

$c = sprintf('there %s a %s %.2f Pound ', $a, $b, $d);
echo $c;
echo '\n';
// practing Printf and Sprintf with placeholder (%s , %d , %f, %c) start here


// This is Variable scope Raf start
$name = "John";
function greet()
{
    global $name;
    echo "Hello, $name!";
}
greet();
echo "\n";

// global scope with const
$myVar = "This can be a global scope";
define("GLO_VAB", "This is allways a global scope");

function testFunction()
{
    global $myVar;
    echo "$myVar";
    echo "\n";
    echo GLO_VAB;
}
testFunction();
echo "\n";
// This is Variable scope Raf end

// concatenation . oparator
$firstName = "Nur";
$lastName = "Mohammad:";
$age = 27;
$fullName = $firstName . " " . $lastName . " " . $age;
echo $fullName;
echo "\n";

$text = "Hello";
$text .= "World!";
$myNote = "I am a php learner";
echo $text . " " . $myNote;
echo "\n";
// concatenataion my experimant
// PHP Operators start here
// logic of IF else

$age = 18;

if ($age < 13) {
    echo "You are a child.";
} else if ($age >= 13 && $age < 20) {
    echo "You are a teenager.";
} else {
    echo "You are an adult.";
}
echo "\n";
$age = 30;

if ($age >= 25) {
    echo "You will win the Property";
}
echo "\n";

// Use of Comparison Operators

$age = "20";
if ($age == 20) {
    echo "Entry Excepted";
    echo "\n";
}
if ($age < 21) {
    echo "Entry not Excepted";
    echo "<br><br>";
}
if ($age > 19) {
    echo "You can enter";
    echo "<br><br>";
}
if ($age != 18) {
    echo "Still you are a kid";
    echo "<br><br>";
}
if ($age >= 19) {
    echo "Please get in";
    echo "<br><br>";
}
if ($age <= 20) {
    echo "get in";
    echo "<br><br>";
} // Use of Comparison Operators ends here

// logical oparators

$thisIsaVar = true;
$thisIsNotaVer = true;

if ($thisIsaVar && $thisIsNotaVer) {
    echo "Show the result";
    echo "<br><br>";
}

$a = "GO";
$b = "Dont go";
if ($a == "GO" && $b == "Dont go") {
    echo "Do";
    echo "<br><br>";
}

$g = 15;
$h = 20;

if ($g >= 12 && $h <= 19) {
    echo "Run this code";
    echo "<br><br>";
}


if ($g != 14 || $h < 20) {
    echo "Run thid code again";
    echo "<br><br>";
}
if ($g != 10) {
    echo "Run thid code once again";
    echo "<br><br>";
} // logical oparators ends here

// Conditional Assignment Operators
// 	Ternary Oparator

$id = false;
$status = ($id == true) ? "Has Id" : "No Id";
echo $status;
echo "<br><br>";

// nested ternary oparator
$var = 50;
$getResult = $var >= 30 ? "Getter than 30" : "Less than 30";
echo $getResult;
echo "<br><br>";

// my code
$busTime = 10;
$atOffice = $busTime > 10 ? ($busTime < 11 ? "will be at office on time" : "won't be at office on time.") : ($busTime < 9 ? "Can read newspaper at the bus stop" : "won't be late for the bus at least");

echo $atOffice;
echo "<br><br>";
// help of gpt
$busTime = 10;
$atOffice = $busTime >= 11 ? "won't be at office on time." : ($busTime >= 10 ? "will be at office on time" : ($busTime >= 9 ? "won't be late for the bus at least" : "Can read newspaper at the bus stop"));

echo $atOffice;

// PHP Operators ends here

echo "<br><br>";

// Switch case 

$day = 2;
switch ($day) {
    case 1:
        echo "{$day} is Saturday, the first day of a week";
        break;
    case 2:
        echo "{$day} is Sunday,  the 2nd day of a week";
        break;
    case 3:
        echo "{$day} is Munday, the 3rd day of a week";
        break;
    case 4:
        echo "{$dayTusday} is Twesday, the 4th day of a week";
        break;
    case 5:
        echo "{$day} is Wednesday, the 5th day of a week";
        break;
    default:
        echo "Number is not valid";
}
// Switch case ends here
// Switch case ends here


// \n \t \' \"" \\ have to learn this 
echo "<br><br>";
$y = 20;
$n = 8;
echo $y % $n;
echo "<br><br>";
echo $n + $y;
echo "<br><br>";
echo $n * $y;
echo "<br><br>";
echo $y - $n;
echo "<br><br>";
echo $y / $n;
echo "<br><br>";
echo $y ** $n;
echo "<br><br>";
echo ($n + $y) * 3; // Now addition is evaluated first,
echo "<br><br>";
echo $y - $n * 2; // Multiplication will be evaluated first,