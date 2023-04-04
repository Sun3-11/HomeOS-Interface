<?php
include('../connection.php');
$name = $_GET['name'];
#echo "$name";
$email = $_GET['email'];
$sql = "SELECT `email` FROM `user` WHERE `email` = '$email'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    $count= $result->num_rows;
     }

if($count > 0){  
    header('Location:http://localhost/Home/signUp/signUp.php ?q1=1');
    exit();
}else{
$pwd = $_GET['pwd'];
$sql = "INSERT INTO `user` (`name`, `email`, `pwd`, `status`) VALUES ('$name', '$email', '$pwd', 'مستخدم')";
$result = $conn->query($sql);
header('Location:http://localhost/Home/index.php');
}
?>