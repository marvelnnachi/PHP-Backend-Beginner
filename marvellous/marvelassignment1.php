<?php

//creating variables

echo "<h3>Creating Variables</h3>";

$name="Marvellous";
$age=19;
$country="Nigeria";

echo "My name is ". $name . " I am " . $age . " years old. ". " I am from " . $country . ". I love PHP";
echo "<br><br>";

//defining constants
echo "<h3>Defining Constants</h3>";

define('population', 18000000);

echo "The population of Lagos is ". population;
echo "<br><br>";

//Data types
echo "<h3>Data Types</h3>";

$name1="Bolanle";
$num1=287;
$float=28.7;
$bool = false;

echo $name1. " is a string <br>". $num1. " Is an integer<br>". $float. " Is a float<br>". $bool. " Is a boolean datatype";
echo "<br><br>";

//operations 
echo "<h3>Operations</h3>";

$x= 108;
$y = 54;

echo "The values of X and Y are ". $x." and ".$y ."<br>";
//sum
$sum= $x + $y;
echo "The sum of X and Y is ".$sum."<br>";

//product of the square of x and half of y
$squareOfX = $x * $x;
$halfOfY = $y/2;
$product = $squareOfX * $halfOfY;

echo " The product of the square of X and half of Y is " .$product. "<br>";

//remainder
$remainder=$x % $y;

echo "The remainder when X is divided by Y is ". $remainder. "<br>";

?>