<?php
echo "welcome to the stage where wwe are ready  to get connected  to a dabase<br>";
// ways  to mysql database
// 1.mysqli extension
// 2.PDO

//CREATE A CONNESTION

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
?>