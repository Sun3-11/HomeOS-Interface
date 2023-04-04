<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Profile </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="icon/icons8-windows-10-96.png" />
    <link href = "css/Style.css " rel = " stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins|Roboto+Slab&amp;display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Google Font -->
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
     <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
     
      <!-- Bootstrap CSS -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
         crossorigin="anonymous">-->
         <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
         <link href="https://fonts.googleapis.com/css?family=Poppins|Roboto+Slab&amp;display=swap" rel="stylesheet">
        
         <?php
        #error_reporting(0);
          include('../connection.php');
          session_start();
         

        ?>	

        <style>
   body{
    
    margin: 0 0;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    background: #f3f2f2;
}
.session{
    display: flex;
    flex-direction: row;
    width: auto;
    height: 70%;
    margin: auto auto;
    background: #ffffff;
    border-radius: 4px;
    margin-top:75px;
    box-shadow: 0px 2px 6px -1px rgb(0 0 0 / 12%);
}
.left{
    width: 220px;
    height: auto;
    min-height: 100%;
    position: relative;
    background-image: url(https://images.pexels.com/photos/114979/pexels-photo-114979.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
    background-size: cover;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}

.left svg{
    height: 40px;
    width: auto;
    margin: 11px;
}
form{
    
    padding: 40px 30px;
    background: #fefefe;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding-bottom: 20px;
    width: 300px;
    margin-top: 9%
}
.input-group{
    position: relative;
    margin-bottom: 10px;
    width: 100%;
}
.input-group .tinput{
    width: calc(100% - 44px);
    margin-left: auto;
    display: flex;
    color: #6b6d6c;
}
.tinput{
    font-size: 16px;
    padding: 20px 0px;
    height: 56px;
    border: none;
    border-bottom: solid 1px rgba(0, 0, 0, 0.1);
    background: #fff;
    width: 280px;
    box-sizing: border-box;
    transition: all 0.3s linear;
    color: #000;
    font-weight: 400;
    -webkit-appearance: none;
}

.tinput:focus {
    border-bottom: solid 2px #b69de6;
    outline: 0;
    box-shadow: 0 2px 6px -8px rgb(182 157 230 / 45%);
}
.input-group label{
    position: absolute;
    top: calc(50% - 7px);
    left: 0;
    opacity: 0;
    transition: all 0.3s ease;
    padding-left: 44px;
}
label{
    font-size: 12.5px;
    color: #000;
    opacity: 0.8;
    font-weight: 400;
}
.input-group .icon{
    position: absolute;
    top:0;
    left:0;
    height: 56px;
    width: 44px;
    display: flex;
}
button{
    webkit-appearance: none;
    width: auto;
    min-width: 100px;
    border-radius: 24px;
    text-align: center;
    padding: 15px 40px;
    margin-top: 5px;
    background-color: #b08bf8;
    color: #fff;
    font-size: 14px;
    margin-left: auto;
    font-weight: 500;
    box-shadow: 0px 2px 6px -1px rgb(0 0 0 / 13%);
    border: none;
    transition: all 0.3s ease;
    outline: 0;
}
button:hover {
    transform: translateY(-3px);
    box-shadow: 0 2px 6px -1px rgb(182 157 230 / 65%);
}
.input-group .icon svg{
    height: 30px;
    width: 30px;
    margin: auto;
    opacity: 0.15;
    transition: all 0.3s ease;
}

.chb{
    position: absolute;
    right: 0px;
    top: 18%;
  }


  @media screen and (max-width: 330px){
    .session{
     flex-direction: row;
     width: -webkit-fill-available;
     height: -webkit-fill-available
    }
    form{
        margin-top: 19%;
    }
   
 }
 @media screen and (max-width: 450px){
    .session{
     flex-direction: row;
     width: -webkit-fill-available;
     height: -webkit-fill-available
    }
    form{
        margin-top: 19%;
    }
    
    
 }
 .EI{
    float: right;
    margin-right: 9px;
    color: white;
    font-size: larger;
    font-family: system-ui;

 }
    </style>
      </head>

<body class="bg"> 
<?php
         
           if(isset($_GET['error'])){
               ?>
               <small class="alert alert-danger">Name and Email is Required </small>
               <?php
           }
        ?>
<div class="session">
        <div class="left">
            <svg enable-background="new 0 0 300 302.5" version="1.1" viewBox="0 0 300 302.5" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                <style type="text/css">
                    .st01{fill:#fff;}
                </style>
                            <path class="st01" d="m126 302.2c-2.3 0.7-5.7 0.2-7.7-1.2l-105-71.6c-2-1.3-3.7-4.4-3.9-6.7l-9.4-126.7c-0.2-2.4 1.1-5.6 2.8-7.2l93.2-86.4c1.7-1.6 5.1-2.6 7.4-2.3l125.6 18.9c2.3 0.4 5.2 2.3 6.4 4.4l63.5 110.1c1.2 2 1.4 5.5 0.6 7.7l-46.4 118.3c-0.9 2.2-3.4 4.6-5.7 5.3l-121.4 37.4zm63.4-102.7c2.3-0.7 4.8-3.1 5.7-5.3l19.9-50.8c0.9-2.2 0.6-5.7-0.6-7.7l-27.3-47.3c-1.2-2-4.1-4-6.4-4.4l-53.9-8c-2.3-0.4-5.7 0.7-7.4 2.3l-40 37.1c-1.7 1.6-3 4.9-2.8 7.2l4.1 54.4c0.2 2.4 1.9 5.4 3.9 6.7l45.1 30.8c2 1.3 5.4 1.9 7.7 1.2l52-16.2z"></path>
             </svg>      
             <h3 class="EI">Edit Information</h3>
        </div>
      
              
    <form method="get" action="server/userUpdate.php" enctype = "multipart/form-data"> 
         <?php
                if(isset($_SESSION['useremail'])){
                    $email1 = $_SESSION['useremail'];
                    # echo $email1;
                    # $sql = "SELECT `email` FROM `user` WHERE `email` = '$email1' ";
                    $sql = "SELECT * FROM `user` WHERE `email` = '$email1' ";
                    
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {
                       
                       ?>
                         
                         <div class="input-group">

                        <input  
                        class="tinput"
                        type="text"
                        name="username"
                        value="<?php echo $row['name'] ?>"
                        >

                        <div class="icon">
                        <svg enable-background="new 0 0 100 100" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                        <style type="text/css">
                        .st0{fill:none;}
                        </style>
                        <g transform="translate(0 -952.36)"style= "filter: opacity(0.5);">
                        <path d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z"></path>
                        </g>
                        <rect class="st0" width="100" height="100"></rect>
                        </svg>
                        </div>    
                        </div>

                        <div class="input-group" >
                        <input
                        class="tinput"
                        type="email"
                        name="useremail1"
                        value="<?php echo $row['email'] ?>"
                        >

                        <div class="icon">
                        <svg enable-background="new 0 0 100 100" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                        <style type="text/css">
                        .st0{fill:none;}
                        </style>
                        <g transform="translate(0 -952.36)"style= "filter: opacity(0.5);">
                        <path d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z"></path>
                        </g>
                        <rect class="st0" width="100" height="100"></rect>
                        </svg>
                        </div>  
                        </div>
                        <div class="input-group" >
                        <input
                        class="tinput"
                        type="password"
                        name="userpwd"
                        value="<?php echo $row['pwd'] ?>"
                        >


                        <div class="icon">
                        <svg enable-background="new 0 0 24 24"style= "filter: opacity(0.5);" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                        <style type="text/css">
                            .st0{fill:none;}
                            .st1{fill:#010101;}
                        </style>
                                <rect class="st0" width="24" height="24"></rect>
                                <path class="st1" d="M19,21H5V9h14V21z M6,20h12V10H6V20z"></path>
                                <path class="st1" d="M16.5,10h-1V7c0-1.9-1.6-3.5-3.5-3.5S8.5,5.1,8.5,7v3h-1V7c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5V10z"></path>
                                <path class="st1" d="m12 16.5c-0.8 0-1.5-0.7-1.5-1.5s0.7-1.5 1.5-1.5 1.5 0.7 1.5 1.5-0.7 1.5-1.5 1.5zm0-2c-0.3 0-0.5 0.2-0.5 0.5s0.2 0.5 0.5 0.5 0.5-0.2 0.5-0.5-0.2-0.5-0.5-0.5z"></path>
                        </svg>
                        </div>

                        </div>

                        <button type="submit"name="submit">Save Change</button>

                       <?php
                         }
                     }
                 
                 ?>
         
       
      </form>
   
</body>
</html>