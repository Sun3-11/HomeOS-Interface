
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #73579c;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: no-drop;
}

input[type=submit]:hover {
  background-color: #633d9a;

}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.file{
    display: block;
    margin: 7px;
    width: -webkit-fill-available;
    border: 1px solid #d8d2d2;
    height: 30px;
    background: #fff;
}
.tex{
    color: #866cf1;
    text-align: center;
}
.inputf{
            border-radius: 20px;
            border: 1px solid #8100ff;
            width: 255px;
            height: 29px;
        }
        .inputs{
            border-radius: 7px;
            color: blueviolet;
            background: #fff;
            font-size: large;
            width: 96px;
            border: 1px solid #8100ff;
            height: 38px;
        }
        .formi{
            margin: inherit;
            margin-left:35%

            
        }

</style>
</head>
<body>

<h3 class="tex">Content Home Page</h3>

<form method="post" action="server/updateInfo.php"class="formi">
        <input type=""name ="na1"class="inputf">
        <input type="submit" name=" " class="inputs"value="Search">

    </form>

<div class="container">
  
<?php
        include('../connection.php');
        $lag = $_POST['lag'];
        $sql = "SELECT *FROM `info` WHERE `lag` = '$lag' ";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
        ?>

  <form method="post" action="server/updateInfo.php">
    <label for="fname">Languge</label>
    <input type="text" id="fname" name="lag"value="<?php echo $row['lag'] ?>" >

    <label for="lname">title</label>
    <input type="text" id="lname" name="name" value="<?php echo $row['name'] ?>">
    
    <label for="lname">Name left site</label>
    <input type="text" id="lname" name="butt1" value="<?php echo $row['butt1'] ?>">
    
    <label for="lname">Home Nav Name</label>
    <input type="text" id="lname" name="butt2" value="<?php echo $row['butt2'] ?>">

    <label for="lname">About Nav Name</label>
    <input type="text" id="lname" name="butt3" value="<?php echo $row['butt3'] ?>">

    <label for="lname">Content Nav Name</label>
    <input type="text" id="lname" name="butt4" value="<?php echo $row['butt4'] ?>">

    <label for="lname">log in </label>
    <input type="text" id="lname" name="butt5" value="<?php echo $row['butt5'] ?>">

    <label for="lname">Sign Up</label>
    <input type="text" id="lname" name="butt6" value="<?php echo $row['butt6'] ?>">

    <label for="lname">Button dis</label>
    <input type="text" id="lname" name="butt7" value="<?php echo $row['butt7'] ?>">

    <label for="lname">Button to homeos</label>
    <input type="text" id="lname" name="butt8" value="<?php echo $row['butt8'] ?>">
   

    <label for="lname">Name in the mid</label>
    <input type="text" id="line6" name="line1" value="<?php echo $row['line1'] ?>">

    <label for="subject">Text top</label>
    <textarea id="subject" name="line2"style="height:200px"value="<?php echo $row['line2'] ?>"></textarea>

    <label for="subject">Text mid</label>
    <textarea id="subject" name="line3"  style="height:200px"value="<?php echo $row['line3'] ?>"></textarea>

    <label for="lname">Name In About </label>
    <input type="text" id="lname" name="line4" value="<?php echo $row['line4'] ?>">

    <label for="subject">Text Info</label>
    <textarea id="subject" name="line5"  style="height:200px"value="<?php echo $row['line5'] ?>"></textarea>

    <label for="lname">Footer</label>
    <input type="text" id="line6" name="line6" value="<?php echo $row['line6'] ?>">

    <label for="lname">Image Top </label>
    <input type="file" id="line6" name="img1" class="file"value="<?php echo $row['img1'] ?>">
    
    <label for="lname">Image mid </label>
    <input type="file" id="line6" name="img2" class="file"value="<?php echo $row['img2'] ?>">

    <label for="lname">Image person </label>
    <input type="file" id="line6" name="img3"class="file" value="<?php echo $row['img3'] ?>">

    <label for="lname">Icon twi</label>
    <input type="file" id="lname" name="img4" class="file"value="<?php echo $row['img4'] ?>">

    <label for="lname">Icon git</label>
    <input type="file" id="lname" name="img5" class="file"value="<?php echo $row['img5'] ?>">

    <input type="submit" value="Update">
  </form>
  <?php
        }
        ?>
</div>

</body>
</html>
