<?php
echo  "welcome in multi daimensoinal arrays in php <br>";
// creating a 2 dimensional arrays
$multidim  = array(array(2,5,7,8),
array(1,2,3,5),
array(4,5,0,8));

// echo $multidim[0][3];
// echo "<br>";
// echo $multidim[1][2];

// for ($i = 0;$i<count($multidim);$i++){
//      echo var_dump($multidim[$i]);
// }

for($i = 0;$i < count($multidim);$i++){
    for($j = 0;$j<count($multidim[$i]);$j++){
        // echo "<br>";
        echo $multidim[$i][$j];
        echo " ";
    }
    echo "<br>";
}
?>