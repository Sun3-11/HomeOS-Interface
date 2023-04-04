<?php
include('../../connection.php');
session_start();
error_reporting(E_ALL);

if(isset($_GET['submit'])){
    $name = $_GET['username'];
    $email1 = $_GET['useremail1'];
    $pwd = $_GET['userpwd'];
    
    if (!empty($name) && !empty($email1) && !empty($pwd)) {
       
        $loggedInUser = $_SESSION['useremail'];

        $sql = "UPDATE `user` SET  `email`= '$email1', `name`= '$name', `pwd`= '$pwd' WHERE `email` = '$loggedInUser'";
        $result = $conn->query($sql);
        header('Location:http://localhost/Home/us/us.php?success=userUpdated');
        exit;

    }else{
        header('Location:http://localhost/Home/us/us.php?error=emptyNameAndEmail');
        exit;
    }

}
?>