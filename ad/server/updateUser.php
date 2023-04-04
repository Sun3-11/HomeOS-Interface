<?php
include('../../connection.php');
$status = $_GET['status'];
$id = $_GET['id'];
$sql = "UPDATE `user` SET `status`= '$status' WHERE `id` = '$id'";
$result = $conn->query($sql);
header('Location:http://localhost/Home/ad/admain.php?n1=');

?>