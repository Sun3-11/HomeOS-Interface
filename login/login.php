<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
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
        <link rel="stylesheet" href="css/login.css">
        <?php
        session_start();//يفتح
        session_unset();//يفضي 
        session_destroy();//يمسح
        ?>

      </head>
<style>
    .bg{
        background-image: url("imgs/bg.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

    }
    .register{
      text-align: center;
    color: antiquewhite;
    }
    .register .singup{
      color: #3fd2b7;
    text-decoration: none;
    margin-left: 8px;
    border-bottom: 1px solid #00fff3;
}
    }

</style>
<body class="bg"> 
    <div class="jumbotron container">
         <form method="get" action="../server/login.php">
            <div class="form-group">
              <legend ><img src="imgs/user.png " alt="..." class="img-circle img-responsive" width="100" ></legend> 
              <div class="box-h1">	
                <h1 class="h1">sign in</h1>
                <hr>
                </div>
              <input type="email"name ="email1" class="form-control" id="exampleInputEmail1" placeholder="Email address"/>
            </div>
            <div class="form-group">
              <input type="password" name="pwd1" class="form-control pass" id="exampleInputPassword1" placeholder="Password" style="margin-left: 30%;"/>
              <button><img src="imgs/right.webp" alt="" width="30"></button>
            </div>
            
            
          </form>
          <div class="register">Register a New Account<a href="../signUp/signUp.php ?q1=" class="singup">Signup</a></div>
    </div>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
          crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

               
</body>
</html>