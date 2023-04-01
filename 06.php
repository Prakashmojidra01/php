<?php
$name =  "prakash is good boy";
echo $name;

echo "the length of  my  string is ".strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name,"good");//word kai length thi start thay 6e teni mate
echo "<br>";
echo str_replace("prakash","sunil",$name);
echo "<br>";
echo str_repeat($name,5);
echo "<br>";
echo "<pre>";
echo rtrim("   prakash is  good boy     ");
echo "<br>";
echo ltrim("   prakash is  good boy     ");
echo "</pre>";
?>