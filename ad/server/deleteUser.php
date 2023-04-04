<?php
include('../../connection.php');
$n1= $_GET['n1'];

$sql = "DELETE FROM `user` WHERE `id` = '$n1'";
$result = $conn->query($sql);
header('Location:http://localhost/Home/ad/admain.php?n1=');

?>