<?php
// servehost name, name by deafult root, passwod null , database name
$connect = mysqli_connect('localhost','root','','connection_1');
if (!$connect) {
     die("connection fail");
}


?>