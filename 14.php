<?php
echo "function in php <br>";

// function processmarks($marksarry){
//     $sum = 0;
//     foreach($marksarry as $value){
//         // $sum += $value;
//         $sum = $sum + $value;
//     }
//     return $sum;
// }

// $suniltotal = [90,80,70,60,88];
// $function1 = processmarks($suniltotal);
// echo $function1;



function avgmarks($markarry){
    $sum = 0;
    $i  = 1;
    foreach($markarry as $value){
        // $sum += $value;
        $sum = $sum + $value;
        $i++;
    }
    return $sum/$i;
}
$prakashtotal =  [99,98,97,98,96];
$function2 = avgmarks($prakashtotal);
echo $function2;

?>