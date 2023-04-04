<?php
include('../../connection.php');
$lag = $_POST['lag'];
$name =$_POST['name'];
$line1 = $_POST['line1'];
$line2 = $_POST['line2'];
$line3 = $_POST['line3'];
$line4 = $_POST['line4'];
$line5 = $_POST['line5'];
$line6 = $_POST['line6'];

$butt1 = $_POST['butt1'];
$butt2 = $_POST['butt2'];
$butt3 = $_POST['butt3'];
$butt4 = $_POST['butt4'];
$butt5 = $_POST['butt5'];
$butt6 = $_POST['butt6'];
$butt7 = $_POST['butt7'];
$butt8 = $_POST['butt8'];

$img1 = $_FILES['img1'];
/*if ($img1 == null) {
    $img1 = $_POST['oldimg'];

}else{
    unlink("../file/"$_POST['oldimg']);
    $wat = $_FILES['img1'];
    $upload_file ='..file';
    move_uploaded_file($wat, $upload_file.$img1);
}*/
$img2 = $_FILES['img2'];
$img3 = $_FILES['img3'];
$img4 = $_FILES['img4'];
$img5 = $_FILES['img5'];

$sql = "
UPDATE `info` SET 
`name`='$name',
`line1`='$line1',
`line2`='$line2',
`line3`='$line3',
`line4`='$line4',
`line5`='$line5',
`line6`='$line6',
`butt1`='$butt1',
`butt2`='$butt2',
`butt3`='$butt3',
`butt4`='$butt4',
`butt5`='$butt5',
`butt6`='$butt6',
`butt7`='$butt7',
`butt8`='$butt8',
`img1`='$img1',
`img2`='$img2',
`img3`='$img3',
`img4`='$img4',
`img5`='$img5'
 WHERE `lag`= '$lag'";
 $result = $conn->query($sql);
 header('Location:http://localhost/Home/ad/admainhomepage.php');
        
?>