<?php
//operator in php
// 1.arithmetic  operators
// 2.assignment operators 
// 3.comparison operators
// 4.logical operators

// 1.arithmetic  operators


$a = 45;
$b = 8;

echo "a and b added value is ".($a+$b)."<br>";
echo "a and  b devided value is " .($a-$b)."<br>";
echo "a and  b multi value is " .($a*$b)."<br>";
echo "a and  b div value is " .($a/$b)."<br>";
echo "a and  b modular value is " .($a%$b)."<br>";
echo "a and  b power value is " .($a**$b)."<br>";

// 2.assignment operators 
// $x = $a;
// echo "for x,the value is ".$x."<br>";

// $a +=6;
// echo "for a,the value is ".$a."<br>";

// $a -= 6;
// echo "for a,the value is ".$a."<br>";

// $a *= 6;
// echo "for a,the value is ".$a."<br>";

// $a /= 5;
// echo "for a,the value is ".$a."<br>";

// $a %= 6;
// echo "for a,the value is ".$a."<br>";

// 3.comparison operators
$x = 7;
$y = 8;

echo "for x == y,the result  is ";
echo var_dump($x == $y);
echo "<br>";

echo "for x < y,the result  is ";
echo var_dump($x < $y);
echo "<br>";

echo "for x > y,the result  is ";
echo var_dump($x > $y);
echo "<br>";

echo "for x <> y,the result  is ";
echo var_dump($x <> $y);
echo "<br>";

echo "for x <= y,the result  is ";
echo var_dump($x <= $y);
echo "<br>";

echo "for x >= y,the result  is ";
echo var_dump($x >= $y);
echo "<br>";

// 4.logical operators
$m = true;
$n = false; 

echo "for m and n,the result  is ";
echo var_dump($m and $n);
echo "<br>";

echo "for m and n,the result  is ";
echo var_dump($m && $n);
echo "<br>";

echo "for m or n,the result  is ";
echo var_dump($m or $n);
echo "<br>";

echo "for m or n,the result  is ";
echo var_dump($m || $n);
echo "<br>";

echo "for !m ,the result  is ";
echo var_dump(!$m);
echo "<br>";



?>