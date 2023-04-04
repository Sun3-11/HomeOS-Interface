<?php
include('../connection.php');
$email1 = $_GET['email1'];
$pwd1 = $_GET['pwd1'];
$sql = "SELECT `email`, `pwd` FROM `user` WHERE `email` = '$email1' AND `pwd`='$pwd1'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    #print_r($row);
    $count= $result->num_rows;
     }
#echo $count;
if($count > 0){
    session_start();
    $_SESSION['useremail'] = $email1;
    header('Location:http://localhost/Home/index.php');
}else{
header('Location:http://localhost/Home/login/login.php');
}
?> 