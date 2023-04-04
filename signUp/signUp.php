<!DOCTYPE html>
  <html>
    <head>
	    <link rel="stylesheet" href="normalize.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>sign up</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins|Roboto+Slab&amp;display=swap" rel="stylesheet">
		  <!-- Required meta tags -->
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  
		  <!-- Google Font -->
		  <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
	  
		  <!-- Bootstrap CSS -->
		  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
			  crossorigin="anonymous"> 
		<style>
       body{
	       font-family:Roboto, sans-serif;
		   text-transform:capitalize;
		   padding:0px;
		   margin:0;
		   background-image: url("img4.jpg");
		   background-repeat: no-repeat;
		   background-size: cover;
		   background-position: center;
	   }
       .main-box{
	       
	       max-width:700px;
		   height:650px;
		   line-height:30px;
		   background-color:#e3e8efd4;
		   -webkit-box-shadow:10px 10px 10px  #94b0da7d;
		   border-radius:15px; 
		   margin: 50px auto;
		}
	   

		.box-of-forms {
			width: 350px;
			height: 18px;
			line-height: 5px;
			float: left;
			margin: 5px 10px 58px 10px;
	   }
	   .h1{
	      padding:30px;
		  font-weight: 700;
		  color: #6c63ff;
	   }
	   .box-h1{
	      font-size:30px;
          font-weight:bold;		  
		  line-height:30px;
	   }
	   .boxa-line{
	      display:inline-black;
	      width:72px;
		  height:10px;
		  margin:-37px auto 50px 30px;
		  background-color:#176be0ba;
	   }
	   .box-signwithgoogle{
	       height:50px;
		   line-height:5px;
		   padding:13px;
		   text-align:center;
		   max-width:270px;
		   margin:-15px auto auto 20px;
		   background-color:#fff;
		   font-weight:bold;
		   box-sizing:border-box;
		   /*list-style-position:inside;*/
		   border:2px solid #f2f2f2; 
		   -webkit-box-shadow:5px 5px 5px  #888888;
		   border-radius:25px;
		   transition-duration:.3s;
		   
	   }
	   .box-signwithgoogle:hover{
	       -webkit-box-shadow:7px 7px 7px  #999;
		   border-radius:25px;
	   }
	   .a-icon{
	       text-decoration:none;
	       color:#9C9999;
		   vertical-align: middle;
		   display:inline-black;
	   }   
	   .a-icon:hover{
		   color: #9ca3ab;
		   text-decoration: none;
	   }
	   #icongoogle{
           style-image:url('google-icon.png');
           vertical-align: middle;
           margin:0 7px 0 0;			 
            }
	  .span-or::after{
	      content:"_________";
		  margin:18px 10px 18px 10px;
		  display:flex;
	  }
	  .span-or::before{
	      content:"_________";
		  margin:18px 10px 10px 26px;
		  display:flex;
		  
	  }
	  span{
		  display:flex;
		  color:#999;
	  }
	  .main-img{
		float: left;
		margin-left: 280px;
		margin-bottom: 75px;
		height: 610px;
		/* padding-bottom: 103px; */
		width: 390px;
		height: unset;
	  }
	  .form-or{
	       margin:25px 30px 30px;
		   
	  }
	  .box-email,.box-name,.box-password{ 
	       width:250px;
		   height:30px;
	       padding:7px;
	       margin:10px 13px 13px 13px;
	       color:#777;
		   border-radius:25px;
		   border-color: #d19bdc;
	  }
	  .box-password{
	       background-color:#E3EDF1;
		   padding: 19px; 
	  }
	  .box-name{
		border: 2px solid #d43fcf69;
        padding: 19px;  
	  }
	  .textofforms{
	      /* color:#AF9F8B;*/
		  color:#888;
		  font-size:14px;
		  font-weight:bold;
		  margin:10px 10px 10px 25px;
	  }
	  .box-submit{
		width: 260px;
		height: 43px;
		border-radius: 25px;
		margin: 10px 7px;
		background-image: linear-gradient(-90deg ,#221fff9c, #34a5c7ad, #149ed2c4);
		border: none;
		color: #fff;
		font-size: 18px;
		font-weight: bold;
		font-family: Roboto, sans-serif;
		text-transform: capitalize;
		-webkit-box-shadow: 5px 5px 5px #3462b785;
		transition-duration: .5s;
	 
	  }
	  .box-submit:hover{
	       font-size:19px;
           -webkit-box-shadow:5px 5px 5px  #888;	    
	  }
	  .span2{
	    margin:15px 15px 15px 20px;
		
	  }
	  .log-in{
	     color:#0AAEF0;
	  }
	</style>
    </head>
    <body class="row">
		<div class="main-box col-sm-3 Jumbotron container">
	     <div class="box-of-forms  col-sm-12">
		  <div class="box-h1">	
            <h1 class="h1">Sign up</h1>
			</div>
			<div class="boxa-line col-lg-6"></div>
			 <div class="box-signwithgoogle">
			  <img src="google-icon.png" alt="google icon" id="icongoogle" ><a href="#" class="a-icon">sign up with google</a></li>
			 </div>
			 <span class="span-or"id="or">
			   <form class="form-or">OR</form>
			 </span>
             <p style="text-align:center; color:red;">
             <?php
              $q1 = isset( $_GET['q1']) ? $_GET['q1'] : "";
               if($q1 == 1){  
                echo "This Account Already Exists!";
                
            }
             
             ?>
             </p>
		<form method="get" action="../server/signUp.php" name="myForm">
		  <label for="nameTXT"class="textofforms "id="id1" >name</label><br/>
		   <input type="text" name="name" id="id1" maxlength="50" placeholder="Name" class="form-control box-name" /><br/>
		  <label for="nameTX" class="textofforms">email address</label><br/>
		   <input type="email" name="email" id="nameTX" maxlength="50" placeholder="Email"  class="form-control box-name"/><br/>
		  <label for="nameTX" class="textofforms">password</label><br/>
		   <input type="password" name="pwd" id="nameTX" placeholder="Password" maxlength="50" class=" form-control box-password"/><br/>
		   <button type="submit" class="box-submit" onclick="myFunction()">sign up</button> 
	   </form>
	   <span class="span2">already have an account?<a href="../login/login.php" class="log-in">log in</a></span>
	   </div>
	   <img src="file:///C:/Users/sun/Downloads/undraw_add_document_0hek.svg" class="
	   d-none d-lg-block mt-5 main-img  d-none d-md-block d-lg-none" alt="">
	    <!--<div class="col-lg-6  d-none d-lg-block mt-5">
	      <img src="file:///C:/Users/sun/Downloads/undraw_add_document_0hek.svg"   id="main-img">
		</div>-->
	   </div>
	   
	   
	    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    </body>
</html>