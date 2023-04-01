<?php
echo "while  loop in php ";
$num = 0;
$x = 5;

// while($num<=50){
//     echo $num;
//     echo "<br>";
//     $num = $num+3;
// }

while($num<=5000 && $x <=60){
    echo "the value  of num is ";
    echo $num;
    echo "<br>";
    $num+=3;
    $x+=5;
}


?>