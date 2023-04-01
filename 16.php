<?php 
echo "welcome to associative arrays in php ";

//this called indexed arrays

// $arr  =  array('prakash',"sunil","rahul",'sumit','hiren');
// echo "<br>";
// echo $arr[0];
// echo "<br>";
// echo $arr[1];
// echo "<br>";
// echo $arr[2];
// echo "<br>";
// echo $arr[3];
// echo "<br>";
// echo $arr[4];

//associative arrays

$arr1 = array('prakash'=> 'red',
'sunil'=>'green',
'dharmik'=>'brown');

// echo "<br>";
// echo $arr1["prakash"];
// echo "<br>";
// echo $arr1["sunil"];
// echo "<br>";
// echo $arr1["dharmik"];

foreach ($arr1 as $key => $value) {
    echo "favourite color of $key is $value";
    echo "<br>";
};
?>