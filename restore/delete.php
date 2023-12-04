<?php
include('connection.php');

$user_id = $_GET['id']; 

$del = "delete from mystd where id = '$user_id'";

$rest = mysqli_query($connect , $del);

if (!$rest) {
     die("connection failed");
}

header('location:http://localhost:82/restore/trah.php');

?>