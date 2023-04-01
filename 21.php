<?php
//connecting to database

$servername  = "localhost";
$username =  "root";
$password =  "";

$conn  =  mysqli_connect($servername,$username,$password);

//die was connection was not successful
if(!$conn){
    die("sorry we dfailed to connect ".mysqli_connect_error());
}
else{
    echo "connection  was successful";
}

// create a db

$sql = "CREATE DATABASE  PRAKASHDB1";
$result  = mysqli_query($conn,$sql);

// echo "the result  is";
// echo var_dump($result);
// echo "<br>";

if($result){
    echo "your database created successful";
}
else{
    echo "database  not created because of this error --->".mysqli_error($conn);
}

?>