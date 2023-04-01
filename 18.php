<?php
echo "welcome to scope and local/global vars in php<br>";
$a =  98;//globle variable
$b = 9;

function printvalue(){
    // $a = 97;//local varaible
    global $a,$b;//give me the accesss to this  global varaible
    $a  = 1000;
    $b = 100;
    echo "<br>the value of your variable a is $a and  b is $b";
}
echo $a;
printvalue();
// echo  var_dump($GLOBALS);//print all the  globle variable
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);
?>