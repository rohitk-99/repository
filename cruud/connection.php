<?php
$username="root";
$password="";
$server='localhost';
$db='employees';

$con = mysqli_connect($server, $username, $password);
if(!$con) {
    die("Connection failed: " . mysqli_connect_error());
    return;
}

echo 'Connection successfull';

?>