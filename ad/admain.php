<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>البحث في المستخدمين</title>
    <style>
    body{
            /* width: 100%; */
        /* min-height: 100vh; */
        background: #c4d3f6;
        /* display: -webkit-box; */
        /* display: -webkit-flex; */
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        /* align-items: center; */
        justify-content: center;
        flex-wrap: wrap;
        padding: 33px 30px;
    }
    table{
        width: 960px;
        border-radius: 10px;
        overflow: hidden;
        width: 100%!important;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
        display: table;
        margin: 0;
        text-align:center;
    }
        table, tr, th, td{
           /* border:1px solid black;*/
        }
        .header{
         color: #fff;
         background: #6c7ae0;
         width: 100%!important;
        }
        td{
            background:#fff;
        }
        .inputf{
            border-radius: 20px;
            border: 1px solid #8100ff;
            width: 240px;
            height: 29px;
        }
        .inputs{
            border-radius: 7px;
            color: blueviolet;
            background: #fff;
            font-size: large;
            width: 60px;
            border: 1px solid #8100ff;
            height: 29px;
        }
        
        
    </style>
</head>
<body>
    <form method="get" action="admain.php">
        <input type=""name ="na1"class="inputf">
        <input type="submit" name=""class="inputs">

    </form>
    <table>
        <tr class="header">
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Status</th>
            <th>Save</th>
            <th>Delete</th>
        </tr>
        <?php
        include('../connection.php');
        $na1 = isset( $_GET['na1']) ? $_GET['na1'] : "";
        $sql = "SELECT *FROM `user` WHERE `email` like '%$na1%' OR `name` like'%$na1%'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['pwd'] ?></td>
            <td>
            <form method="get" action="server/updateUser.php">
            
              <select name="status" id=""style = "width:70%; font-size:15px" >
                
                <option value="<?php echo $row['status'] ?>"></option>
                <option value ="مستخدم">مستخدم</option>
                <option value = "مدير">مدير</option>
              </select> 
            </td>
            <td><input type="submit" name="" value="Save"></td>
             <input type="hidden" name = "id" value="<?php echo $row['id'] ?>"> 
            </form>
            <td ><a href="server/deleteUser.php?n1=<?php echo $row['id'] ?>">delete</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>