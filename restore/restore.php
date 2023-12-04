<?php
include('connection.php');

$user_id = $_GET['id'];

$restore = "UPDATE `mystd` SET status = '1' where id = '$user_id' ";
$sqlconn = mysqli_query($connect, $restore);
if($sqlconn){
    
    header('location:alluser.php');
}
else{
    echo "query failed";
}
?>


?>