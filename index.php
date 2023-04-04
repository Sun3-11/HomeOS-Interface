  <!DOCTYPE html>
	<html>
	<head>
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
		<?php
          error_reporting(0);

          include('connection.php');
          session_start();
       
        ?>	
		<style>
		
			body{
                
				background:#fff ;
			}
			.bg-light{
				background-color: rgba(62, 155, 210, 0.41);
			}
			.navbar-default {
				background-color: #4b13f74f;
                border-color: #a578c7;
				letter-spacing: 1px;
		    }
			.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
                background-color:#704b9252;
			}
			.dir{
				float: left;
				margin-top: 30px;
				display: block;
			}
			.pdir{
				float:left;
			}
	        .bg-header{
				margin: 85px auto;
			}
			.char{
				color: #572cbf;
				font-size: 34px;
				font-family: cursive;
			}
			.jumbotron{
				width: 100%;
				background-color: #fff;

			}
			.btn-primary {
				color: #fff;
				background-color: #2927a7bf;
				border-color: #732da775;
				margin-top: 10px;
			}	
			.btn-primary:hover {
				color: #fff;
				background-color: #332890;
				border-color: #542074;
			}
			.line{
				margin: 30px;
			
			}
            .navbar-right .username{
                float: right;
                margin-top: 9px;
                border: 2px solid #886f92;
                padding: 5px;
                border-radius: 11px;
            }
			.imgme{
				width: 100px;
				height: 100px;
				border-radius: 50px;
			}
			footer{
				text-align: center;
				color: #ece3e3;
				font-size: medium;
				background: #252424;
				padding: 20px;
			}
			
	    </style>
	</head>
	<body>

		 <!--_____________________Header__________________-->
		 
		 <nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><strong style="font-size: 24px;">W</strong>indows</a>
			  </div>
			  <div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
				  <li class="active"><a href="#section1">Home</a></li>
				  <li><a href="#section3">About</a></li>
				  <li><a href="#section2">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
                    
                  <?php
                    if(isset($_SESSION['useremail'])){
                        $email1 = $_SESSION['useremail'];
                        # echo $email1;
                        # $sql = "SELECT `email` FROM `user` WHERE `email` = '$email1' ";
                        $sql = "SELECT * FROM `user` WHERE `email` = '$email1' ";
                          
                        $result = $conn->query($sql);
                         while($row = $result->fetch_assoc()) {
                             $status = $row['status'];
                            echo $status;
                        ?>
                        <li class="username"> <?php  echo $row['name'] ;?></li>
                        <a href="
                        <?php if ($status == 'مستخدم'):?>
                            us/us.php
                        <?php endif ?>
                        <?php if($status == 'مدير'): ?>
                            ad/admainPage.php
                            <?php endif ?>
                        "><button></button></a>
                        <li><a href="login/login.php">Logout <i class="fa fa-user"></i></a></li>
                   
                        <?php
                    }}else{
                        ?>
                        <!--<li><a href="signUp/signUp.php ?q1=">Signup  <i class="fa fa-user-plus"></i></a></li>-->
                        <li><a href="login/login.php ">Login  <i class="fa fa-user"></i></a></li>
                    <?php
                    }
                  
                  ?>
				  
                </ul>

			  </div>
			</div>
		   </nav>
		 

		  <!--_________________Main____________________-->
		
		  <section class="jumbotron" id="canvasWindow">
			<div class="bg-header" id="section1"> 
			  <h2><strong class="char"> Welcome To Windows 10 Interface</strong></h2>
		    </div>
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-6">
					<img class="img-fluid img-responsive" src="img/undraw_programming_2svr.svg" alt="">
				</div>
				<div class="col-lg-7 col-md-6">
					<div id="headingGroup" class="text-white text-center d-none d-lg-block mt-5 lead">
						<p style="margin-top: 40px;">
							Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis nulla alias obcaecati 
							voluptates optio ea ratione nisi unde sapiente blanditiis nemo, vel dolorem, eos eaque vero vitae. Odit, eius sit!
						</p>
						</div>
				</div>
			</div>

            <hr class="line">

			<div class="row align-items-center" id="section2">
				<div class="col-lg-7 col-md-6">
					<div id="headingGroup" class="text-white text-center d-none d-lg-block mt-5 lead">
						<p style="margin-top: 40px;">
							Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis nulla alias obcaecati 
							voluptates optio ea ratione nisi unde sapiente blanditiis nemo, vel dolorem, eos eaque vero vitae. Odit, eius sit!
                            
						</p>
						<button type="button" class="btn btn-primary btn-lg">Enter The Icon > </button>
						<?php
                   			 if(isset($_SESSION['useremail'])){
								$email1 = $_SESSION['useremail'];
								# echo $email1;
								# $sql = "SELECT `email` FROM `user` WHERE `email` = '$email1' ";
								$sql = "SELECT * FROM `user` WHERE `email` = '$email1' ";
								
								$result = $conn->query($sql);
								while($row = $result->fetch_assoc()) {
									
								?>
								
								<a href="homeos/homeos.php"><img style="filter: hue-rotate(45deg);margin-top: 5px;" src="img/icons8-windows-10-64.png"width="40"> </a>
							
								<?php
							}}else{
								?>
								<a href="login/login.php ">Login  <i class="fa fa-user"></i></a>
							<?php
							}
						
						?>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<img class="img-fluid img-responsive" src="img/undraw_online_wishes_dlmr.svg" alt="">
				</div>
			</div>

			<hr class="line">

			<div class="row align-items-center" id="section3">
				<div class="col-lg-7 col-md-6"style="margin-left:250px;">
					<div id="headingGroup" class="text-white text-center d-none d-lg-block mt-5 lead">
					     <img src="img/sun.jpg" alt="" class="imgme">
						<p style="margin-top: 40px;">
						    Shams Al-tahri <br>
						 I am a student of computer science <br>
						 This is my first site, I hope you like it
						</p>
						<p>More Information</p>
						<a href="#"><img style="filter: hue-rotate(45deg);margin-top: 5px;" src="imgco/Twitter_logo_blue.png"width="40"> </a>
						<a href="#"><img style="filter: hue-rotate(45deg);margin-top: 5px; border-radius: 20px;" src="imgco/git.png"width="40"> </a>
					</div>
				</div>
				
			</div>
			<!--_______________Footer____________-->

		</section>

      <footer >
	    Copyright © 2020-2021
		
	  </footer>
	
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
			crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
			crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
			crossorigin="anonymous"></script>
			
		
		
       
			<!--___________________js_________________-->
			</body>
	</html>
