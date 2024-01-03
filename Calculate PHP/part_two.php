<?php
// PHP Conditions starts here
// basic if else codition 
$rabdomVar = 5;
if ($rabdomVar > 5) {
    echo "HI";
} elseif ($rabdomVar < 5) {
    echo "Hello";
} else {
    echo "Hihihi\n";
}
echo "<br><br>";
// Checking Even and Odd number by if else condition
$number = 0;
$remainder = $number % 2;
if ($number == 0) {
    echo "The number $number is zero";
} elseif ($remainder == 0) {
    echo "The number $number is even";
} else {
    echo "The number $number is odd";
}
echo "<br><br>";
// if else condition example 2
$color = "red";
if ($color == "red") {
    echo "Primary Color";
} elseif ($color == "yellow") {
    echo "Primary Color";
} elseif ($color == "blue") {
    echo "Primary Color";
} else {
    echo "Compound Color";
}
echo "<br><br>";
// if else condition example 3 using logical opratoe
$color = "red";
if ($color == "red" || $color == "yellow" || $color == "blue") {
    echo "Primary color";
} else {
    echo "Compound color";
}
echo "<br><br>";
// if else condition example 4 using logical opratoe
$colorCode = "black";
$dress = "pant";
if ($colorCode == "black" && $dress == "shirt" || $dress == "pant") {
    echo "I like this";
} elseif ($colorCode == "red" && $dress == "shirt") {
    echo "I don't like this dress";
} else {
    echo "Cool";
}
echo "<br><br>";
// Checking Even and Odd number by ternary oparator
$ammount = 20;
$remainders = $ammount % 2;
$result = ($ammount == 0) ? "the number is zero" : (($remainders == 0) ? "the number is even" : "the number is odd");
echo $result;
echo "<br><br>";
// example of match expression 
$food = "cake";
$return_value = match ($food) {
    "apple" => "This food is an apple",
    "bar" => "This food is a bar",
    "cake" => "This food is a cake",
};
var_dump($return_value);
echo "<br><br>";
// example 2 of match expression - calculateing grade points
$dish = "amrin";
$results = match ($dish) {
    "joya" => "great cake",
    "anny" => "not bad",
    "amrin" => "good enough",
    default => "shit",
};
echo $results;
echo "<br><br>";
// calculateing grade points by ternary oparators
$grade = 75;
$result = $grade <= 32 ? "fail" : ($grade >= 90 ? "A+" : ($grade >= 80 ? "A" : ($grade >= 70 ? "B" : "C")));
echo $result;
echo "<br><br>";
// raf from Ostad pre-recorded videos
$string = "This is the first line. \rThis is the second line.";
echo $string;

//string interpulation
$pappu = "It\'s me";
$nur = "$pappu again"; // string interpulation
$nur2 = 'It\'s me here, $pappu again';
echo  "\$nur2 is not string interpulation \n" . "\$nur is String interpulation";