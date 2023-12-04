<?php
include('connection.php');

$user_id = $_GET['id']; 

$del = "update mystd set status = '0' where id = '$user_id'";

$rest = mysqli_query($connect , $del);

if (!$rest) {
     die("connection failed");
}

header('location:http://localhost:82/restore/alluser.php');

?>