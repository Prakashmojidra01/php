<?php         
$name ="harry";
$income ="200";

// <!-- php data types
// 1. string
// 2. interger
// 3. float
// 4. boolean
// 5. object
// 6. array
// 7. null -->

// 1.string -sequence  of characters
$name ="prakash";
$friend = "sunil";
echo "$name best friend is $friend";

// 2.interger-non desimal number
$income =455;
$debts=-655;
echo "<br>";
echo "$income";
echo "<br>";
echo "$debts";

// 3.float-desimal point number
$income =45.5;
$debts=-65.5;
echo "<br>";
echo "$income";
echo "<br>";
echo "$debts";

// 4.blooean-can be either true or false
$p=true;
$q=false;

echo "<br>";
echo var_dump($p);
echo "<br>";
var_dump($q);

// 5.object-intances of classes
// employee is class ---> harry can be object

// 6.array- used to store  multiple  values  in  a single variables
$friend =array("prakash","sunil","sumit","rx maniya");
var_dump($friend);
echo "<br>";
echo $friend[0];
echo "<br>";
echo $friend[1];
echo "<br>";
echo $friend[2];
echo "<br>";
echo $friend[3];

// 7.null
$name = null;
var_dump($name);
?>