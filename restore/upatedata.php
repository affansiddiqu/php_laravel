<?php

include('connection.php');

$userid = $_POST['id'];
$username = $_POST['name'];
$userage = $_POST['age'];
$usergender = $_POST['gender'];

$update = "update mystd set name = '$username' , age = '$userage', gender = '$usergender' where id = $userid";


$res = mysqli_query($connect , $update);
if (!$res) {
     die("connection failed");
}

header('location:http://localhost:82/restore/alluser.php');

?>