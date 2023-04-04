<!DOCTYPE html>
<html style="background-color:#333;">
  <head>
  <title>Windows View</title>
  <link href = "css/all.css" rel = " stylesheet" />
  <meta charset="utf-8">
  <link rel="shortcut icon" href="home/icon/icons8-windows-10-96.png" />
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

      <link rel="stylesheet" href="css/all.css">
      <?php
          error_reporting(0);
          include('connection.php');
          session_start();
       
        ?>	

  <!--<link rel="stylesheet" href="css/style.css">
  <script src="script.js"></script>-->
  <style>
    body,html{
    margin:0;
    padding:0;
    display: block;
    overflow: hidden;
    background:#000;
  }
  .background{
    background: url("imgs/bg1.jpg");
    width: 100%;
    height: 100vh;
    background-position: bottom;
    background-size: cover;
  }
  .taskbar{
    position: fixed;
    bottom: 0px;
    height: 40px;
    width: 100%;
    background: #272626;
  }
  .task-icon{
    width: 50px;
    height: 46px;
    display: inline-block;
    transition: all 0.3s ease;
    margin-left: -4px;
  }
  .task-icon:hover{
    background:rgba(255, 255, 255, 0.151);
  
  }
  .task-icon:hover  img{
   
    filter: grayscale(1) brightness(3);
  }
  .task-icon.c{
   
    position: relative;

  }
  .task-icon.c img{
    width: 50%;
    position: absolute;
    margin-left: 12px; 
    margin-top: -3px;
    transition: all 0.3s ease;
  }
  .desktop{
    width: 100%;
    position: absolute;
    top: 40px;
    padding: 7px;
  }
  .disk-icon{
    width: 74px;
    height: 58px;
    box-sizing: border-box;
    margin-bottom: 10px;
  }
  .disk-icon:hover{
    background: #387d7a4a;
    border: 1px solid #b3b3b34d;
  }
  
  .disk-icon img{
    width: 54%;
    margin-left: 16px;
  }
  .disk-icone{
    width: 74px;
    height: 58px;
    box-sizing: border-box;
    margin-bottom: 10px;
  }
  .disk-icone img{
    width: 54%;
    margin-left: 16px;
  }
  .icon-name{
    width: 100%;
    color: #fff;
    text-align: center;
    font-size: 11px;
  }
  .taskbar-panel{
    width: 700px;
    height: 500px;
    position: absolute;
    bottom: 0px;
    background: #191919;
    left: 0px;
    opacity: 0;
    transform: translateY(200px);
    transition: all 0.3s ease;
    display: flex;
 
  }
  .taskbar-panel .cols{
    width: 100%;
    color: #fff;
  }
  .taskbar-panel .cols .icon{
   
    width: 18px;
    padding: 17px;
    font-size: 16px;
  }
  .taskbar-panel .cols .icon.d{
    position: absolute;
    bottom: 39px;

  }
  .taskbar-panel .cols .icon:hover{
    background: #4a4a4a60;

  }
 .taskbar-panel .cols .dd{
    padding:8px;
    margin: 6px;
    transition-duration: .3s;
  }
  .taskbar-panel .cols .dd:hover{
    background-color:#525151;
  
  }
  .taskbar-panel .cols .ddd{
    padding: 10px;
  font-size: large;
  }
 
  .taskbar-panel .cols .imge{
    margin: 10px;
    width: 128px;
    padding: 11px;
    background-color: #1775bf;
    box-sizing: border-box;
    float:left;
    transition-duration: .4s;
  }
  .taskbar-panel .cols .imge:hover,.imge-ico:hover{
    background-color:#2084d4;
    border:2px solid #8acbff;
    
  }
  .taskbar-panel .cols .box-so{
    width: 270px;
    height:127px;
    text-align:center;
  }
  .taskbar-panel .cols .box-so .pra{
    margin-top:3px;
  }
  .so-imge{
    margin:10px;	   
  }
  .taskbar-panel .cols .imge-ico{
    background-color:#1775bf;
    float: right;
    width: 120px;
    height: 122px;
    padding: 10px;
    box-sizing: border-box;
    margin: 15px;
  }
.window{

    z-index: 1;
    width: 700px;
    height: 400px;
    top: 17%;
    left: 19%;
    position: fixed;
    background: white;
    z-index: 9999;
    border: 1px solid #000;
    /*transition: all 1s ease;*/
    opacity:0;
    
    transform: translateY(1000px);
  
}
.window .header{
    background: #272626;
    color: #fff;
    height: 30px;
}
.window .body{

    padding: 10px;
 
}
.window .header .title{
    float: left;
    padding: 6px;
}
.window .header .icons{
    float: right;
    display: inline-flex;
}
.window .header .icons .ic{
    text-align: center;
    padding: 6px;
    width: 47px;
}
.window .header .icons .ic.close{
    transition: all 1s ease;
}
.window .header .icons .ic.min{
         
}
.window .header .icons .ic.big{
   
}
.window .header .icons .ic.close:hover{
   background:rgb(218, 15, 15);
}
.window .header .icons .ic.min:hover{
   background:rgb(51, 51, 51);
}
.window .header .icons .ic.big:hover{
   background:rgb(51, 51, 51);
}
.window .footer{
    bottom: 0px;
    position: absolute;
    background: #e0e0e0;
    width: 100%;
    padding-bottom: 3px;
    padding-top: 3px;
    font-size: 11px;
}
.body #ms-edge{
    box-sizing: border-box;
    background-color: #deeaea;
    width: 127px;
    margin: 8px;
    padding: 12px;
    float:left;
    clear:both;
}
.body #ms-edge:hover{
    background-color: #bfffff;
    border:1px solid #6493ce;
}
.body .video{
    background-color: #deeaea;
    width: 324px;
    width: 319px;
    padding: 10px;
    float: right;
    margin-right: 150px;
}
.taskbar-panel2{
    width: 330px;
    height: 100vh;
    position: absolute;
    position: absolute;
    bottom: 0px;
    background: #333;
    right: 0px;
    opacity: 0;
    transition: all 0.3s ease;
    display: flex; 
  }
  .boxpanel2{
    display:inline-flex;
    background: #717171;
    width: 60px;
    height: 56px;
    color: #fff;
    margin: 10px -11px -16px 10px;
    box-sizing:border-box;
 }
 .row1{
    margin-top: 27px;

}
  
 .row2{
   margin-top:15px;
   
  }
 .bp2h:hover{
   border:1px solid #222;
   
 
 } 
 .activee{
  background: #007eff;
 }
 
  /*click rigt */

  #menu {
  visibility: hidden;
  opacity: 0;
  position: fixed;
  background: #fff;
  color: #555;
  font-family: sans-serif;
  font-size: 11px;
  -webkit-transition: opacity .5s ease-in-out;
  -moz-transition: opacity .5s ease-in-out;
  -ms-transition: opacity .5s ease-in-out;
  -o-transition: opacity .5s ease-in-out;
  transition: opacity .5s ease-in-out;
  -webkit-box-shadow: 2px 2px 2px 0px rgba(143, 144, 145, 1);
  -moz-box-shadow: 2px 2px 2px 0px rgba(143, 144, 145, 1);
  box-shadow: 2px 2px 2px 0px rgba(143, 144, 145, 1);
  padding: 0px;
  border: 1px solid #C6C6C6;
}

#menu a {
  display: block;
  color: #555;
  text-decoration: none;
  padding: 6px 8px 6px 30px;
  width: 250px;
  position: relative;
}

#menu a img,
#menu a i.fa {
  height: 20px;
  font-size: 17px;
  width: 20px;
  position: absolute;
  left: 5px;
  top: 2px;
}

#menu a span {
  color: #BCB1B3;
  float: right;
}

#menu a:hover {
  color: #fff;
  background: #3879D9;
}

#menu hr {
  border: 1px solid #EBEBEB;
  border-bottom: 0;
}
  </style>
		<?php
          error_reporting(0);
          include('../connection.php');
          session_start();
       
        ?>	
</head>

  <body>
<!--____________click rigt menu___________-->
<div id="menu">
  
  <a href="#">
    <img src="http://puu.sh/nr5Z6/4360098fc1.png" /> Copy<span>Ctrl + ?!</span>
  </a>

  <a href="#" class="ref">
    Refresh<span>Ctrl + ?!</span>
  </a>
  <hr />
  <a href="#" >
    
    <i class="fa fa-fort-awesome"></i> Change Background<span><input type=file></span>
  </a>
 
</div>

             <!--___________________-->

    <div class="background background2" id="backgroun"></div>
    <div class="desktop desktop2">
      <div class="disk-icon" onclick="

          var win = document.getElementById('pcwindow');
          win.style.opacity = 1;
          win.style.filter = 'blur(0px) ';
          win.style.transform = 'scale(1)';
        ">
        <img src="imgs/pc.png" />
        <div class="icon-name">This Pc</div>
      </div>
      <div class="disk-icon" onclick="

        var win = document.getElementById('musicwindow');
        win.style.opacity = 1 ;
        win.style.filter = 'blur(0px) ';
        win.style.transform = 'scale(1)';
    ">
        <img src="imgs/music.png" />
        <div class="icon-name">Music File</div>
      </div>

      </div>
    </div>
	  <!--____________________*start-panel*__________________-->
    <div id="start-panel" class="taskbar-panel">
          <!--__________cols1__________---->
	  <div class="cols" style="width: 18%;">
        <div class="icon"style="width:40px;">
        <?php
                    if(isset($_SESSION['useremail'])){
                        $email1 = $_SESSION['useremail'];
                        # echo $email1;
                        # $sql = "SELECT `email` FROM `user` WHERE `email` = '$email1' ";
                        $sql = "SELECT * FROM `user` WHERE `email` = '$email1' ";
                          
                        $result = $conn->query($sql);
                         while($row = $result->fetch_assoc()) {
                        ?>
                        <p style="text-align: center;margin: 0px;text-transform:capitalize;"> <?php  echo $row['name'] ;?></p>
           
                  </div>
                  <?php
                       }}
                  
                  ?>
         
        <div class="icon" name="nameUser">
            <a href="../us/us.php"><i class="fas fa-id-card"></i></a>
        </div>

        <div class="icon">
            <i class="fas fa-id-card"></i>
        </div>
        <div class="icon d">
            <a href="../index.php"style="text-decoration: none;"><i class="fas fa-power-off"></i></a>
		   </div>
    </div>
	    <!--__________cols2_____________-->
      <div class="cols" style="width: 40%;" >
        <div class="dd">Recently added</div>
        <div class="dd"><img src="imgs/coding.png"width="34"height="30" alt="coding"><p style="    display: inline-block; margin: 7px;height: 13px;float: right;position: absolute;">coding</p></div>
        <div class="dd"><img src="imgs/read-message.png"width="34"height="30"title="read-message"><p style="    display: inline-block; margin: 7px;height: 13px;float: right;position: absolute;">read-message</p></div>
        <div class="dd">Expand</div>
        <div class="dd"><img src="imgs/messenger.png"width="30"height="30"title="messenger"><p style="    display: inline-block; margin: 7px;height: 13px;float: right;position: absolute;">messenger</p></div>
        <div class="dd"><img src="imgs/globe.png"width="30"height="30"title="GLOBE"><p style="    display: inline-block; margin: 7px;height: 13px;float: right;position: absolute;">globe</p></div>
        <div class="dd">C</div>
        <div class="dd"><img src="imgs/camera.png"width="30"height="30"title="camera"><p style="    display: inline-block; margin: 7px;height: 13px;float: right;position: absolute;">camera</p></div>
      </div>
	    <!---___________cols3_____________--->
      <div class="cols" >
        <div class="ddd">Creat</div>
        <div class="imge"><img src="imgs/Paint.png" alt="Paint"width="100"height="100"></div>
        <div class="imge box-so"><p class="pra">See all your mail in one place</p><img src="imgs/fb.jpg" alt="facebook"width="25"height="25"class="so-imge"><img src="imgs/google-icon.png" alt="google-icon"width="25"height="25"class="so-imge"><img src="imgs/instagram-logo.png" alt="instagram-logo"width="25"height="25"class="so-imge"></div>
        <div class="ddd">Operation</div>
        <div class="imge"style="margin-right:4px;"><img src="imgs/music.png" alt="music"width="100"height="100"></div>
        <div class="imge-ico"><img src="imgs/play.png" alt="player"width="80"height="60"class="so-imge"></div> 
		<div class="imge-ico"style="background-color:green;"><img src="imgs/angrybirds.png" alt="angrybirds"width="90"height="80" class="so-imge"></div>      
	  </div>
    </div>
	
	     <!--____________________*start-panel2*__________________---->
	
	<div id="start-panel2" class="taskbar-panel2">
     
    	 <!--_________________rows_____________---->	
	 
	 <div class="appicon">
       <p style="color:#a5a1a1;height: 258px;margin: 20px;width: 305px;">
	        No new notifications
	     </p>	
        
		<div class="boxpanel2 row1 bp2h">
		<p>Collapse</p>
		</div>
	   <div class="boxpanel2 row1 bp2h">
	    <p>Airplane mode</p>
	   </div>
	   <div class="boxpanel2 row1 bp2h">
	    <p>Connect</p>
	   </div>
	   <div class="boxpanel2 row2 bp2h">
	    <p>Network</p>
	   </div>
	   <div class="boxpanel2 row2 bp2h">
	    <p>0%</p>
	   </div>
	   <div class="boxpanel2 row2 bp2h">
	    <p>Night light</p>
	   </div>
	   <div class="boxpanel2 row2 bp2h activee"style="margin: 20px -11px -5px 10px;">
	   <p ></p>Bluetooth</p>
	   </div>
	   <div class="boxpanel2 row2 bp2h">
	   <p>VPN<p>
	   </div>
	 </div>
	 	   
	 </div> 
	 
    <!--____________________*main-panel*__________________-->
    <div class="taskbar taskbar2">
              
      <div id="start" class="task-icon c"style="height: 55px;">
        <img src="imgs/winlogo.png"style="    margin-top: 4px;"/>
      </div>
	  
	  
      <div class="task-icon">
         <img src="imgs/search.png" style="margin-bottom: 29px;margin-left: 12px;padding-top: 10px;"/>
      </div>
      <div class="task-icon ">
      
      <div class="disk-icone" onclick="
 
      var win = document.getElementById('painter');
          win.style.opacity = 1 ;
          win.style.filter = 'blur(0px) ';
          win.style.transform = 'scale(1)';
          win.style.transform = 'scale(0.8)';
      ">
    <!--class="disk-icon"-->
	<img src="imgs/img1.jfif"width="35"height="35"style="margin-bottom: 17px; margin-left: 10px;">
      </div>

	  </div>
	  
	  
	   <div id="start2" class="task-icon"style="float:right;margin-right:10px;width: 44px">
         <img src="imgs/message.png"width="35"height="35"style="margin-bottom:7px;margin-top:0;padding:2px;border-right: ridge;">
      </div>
	  
	  
      <div class="task-icon"style="color: #fff;float: right;margin-right: 10px;width: 55px;border-right: inset;margin-left: 1px;">
       <pre class="time">11:17AM
	   </pre>
      </div>
    </div>
    <div id="windows" class="winodws">
        <div  class="window" id="pcwindow" onclick="click" >
            <div class="header">
              <div class="title">This Pc</div>
              <div class="icons">
                <div class="ic min">
                    <i class="fas fa-window-minimize"></i>
                </div>
                <div class="ic big" onclick="

                var win = document.getElementById('pcwindow');
                if(!win.isBig){
                  win.isBig = true;
                  win.style.width = '100%';
                  win.style.height = '100%';
                  win.style.top = '0px';
                  win.style.left = '0px';
                }else{
                  win.isBig = false;
                  win.style.width = '700px';
                  win.style.height = '400px';
                  win.style.top = '17%';
                  win.style.left = '19%';
                }
                                                        
              ">
                    <i class="fa fa-window-maximize"></i>
                </div>
                
                <div class="ic close " onclick="

                    var win = document.getElementById('pcwindow');
                    win.style.opacity = 0;
                    win.style.filter = 'blur(28px) ';
                    win.style.transform = ' translateY(1000px)';
                    //win.style.transform = 'scale(0.8)';
                  ">
                    <i class="fa fa-times"></i>
                </div>
              </div>
            </div>
            <div class="body" >
	          <div id="ms-edge" ><a href="project/index.html" target="_blank">
			  <img src="imgs/ms-edge.png"width="50"height="50"style="padding: 10px;">
			  </a>
			   <p>my project</p>
			  </div>
               	<!--<div><video width="320" height="240" controls style="width:200px;height:0px;">
				  <source src="movie/Data Structures.mp4" type="video/mp4">
				   Data Structures
				</video></div>-->
				<div class="video"><video width="320"height="200" controls style="padding: 3px;border-radius: 20px">
			  <source src="movie/m3.mp4" type="video/mp4">
			  Data Structures
			</video>
			</div>
            <div class="footer"></div>
          </div>
		  </div>
          <div  class="window" id="musicwindow" onclick="click">
              <div class="header">
                <div class="title">Music Folder</div>
                <div class="icons">
                  <div class="ic min">
                      <i class="fas fa-window-minimize"></i>
                  </div>
                  <div class="ic big" onclick="
                             
                  var win = document.getElementById('musicwindow');
                  if(!win.isBig){
                    win.isBig = true;
                    win.style.width = '100%';
                    win.style.height = '100%';
                    win.style.top = '0px';
                    win.style.left = '0px';
                  }else{
                    win.isBig = false;
                    win.style.width = '700px';
                    win.style.height = '400px';
                    win.style.top = '17%';
                    win.style.left = '19%';
                  }
                  
                ">
                      <i class="fa fa-window-maximize"></i>
                  </div>
                  
                  <div class="ic close " onclick="
  
                      var win = document.getElementById('musicwindow');
                      win.style.opacity = 0;
                      win.style.filter = 'blur(28px) ';
                     	win.style.transform = ' translateY(1000px)';				  
                    ">
                      <i class="fa fa-times"></i>
                  </div>
                </div>
              </div>

              <!--__________________Music Section_____________-->

              <div class="body "style="display:inline-block;">
                <div class="music1 r "style=
                    "text-align: center;
                    background-color: #5a6cec;
                    padding: 5px;
                    height: 112px;
                    color: #fff;
                    border-radius: 25px;

                    ">
                      
                    <p>When Can I See You Again</p>
                    <img src="imgs/music.png"width="60"height="60"> 
                     <audio controls > 
				              <source src="music/mu1.mp3" type="audio/mpeg">
     	 
           </audio>
        </div>
        <div class="music2 "style=
               "text-align: center;
                background-color: #5a6cec;
                padding: 5px;
                height: 112px;
                color: #fff;
                border-radius: 25px;
             ">
            <p>Yanni Keys To Imagination</p>
            <img src="imgs/music.png"width="60"height="60">
            <audio controls>
              <source src="music/mu2.mp3" type="audio/mpeg">
      
            </audio>
        </div>
        <div class="music3 "style=
                "text-align: center;
                 background-color: #5a6cec;
                 padding: 5px;
                 height: 112px;
                 color: #fff;
                 border-radius: 25px;
                  ">
                   <p>العالم كما أراه - للفيلسوف البريطاني برتراند راسل</p>
                   <img src="imgs/music.png"width="50"height="50">
                <audio controls>
                  <source src="music/mu3.mp3" type="audio/mpeg">
      
               </audio>
       </div>
			 </div>
        <div class="footer">&copy;</div>
      </div>
  
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    -->
   
     <script>
        //_________________________panel1_________________ 
	  
	  // BUTTONS
      var start = document.getElementById("start");

      // panels
      var startpanel = document.getElementById("start-panel");
      var desktop = document.getElementsByClassName("desktop")[0];
      var taskbar = document.getElementsByClassName("taskbar")[0];
      var background = document.getElementsByClassName("background")[0];

      // vars
      var IsClicked = false;

      start.addEventListener("click", function (e){
        e.stopPropagation();
        if(!IsClicked){
          IsClicked = true;
          startpanel.style.opacity = 1;
          startpanel.style.transform = "translateY(0px)";
        }else{
          IsClicked = false;
          startpanel.style.opacity = 0;
          startpanel.style.transform = "translateY(200px)";
        }
      
      });
      desktop.addEventListener("click", function (){
        IsClicked = false;
        startpanel.style.opacity = 0;
        startpanel.style.transform = "translateY(200px)";
      });
      background.addEventListener("click", function (){
        IsClicked = false;
        startpanel.style.opacity = 0;
        startpanel.style.transform = "translateY(200px)";
      });
      taskbar.addEventListener("click", function (){
        IsClicked = false;
        startpanel.style.opacity = 0;
        startpanel.style.transform = "translateY(200px)";
      }); 


      //_________________________panel2_________________

      // BUTTONS2
      var start2 = document.getElementById("start2");

      //panels2
      var startpanel2 = document.getElementById("start-panel2");
      var desktop2 =  document.getElementsByClassName("desktop2")[0];
      var taskbar2 = document.getElementsByClassName("taskbar2")[0];
      var background2 = document.getElementsByClassName("background2")[0];
      //vars2
      var IsClicked = false;

      start2.addEventListener("click" , function(a){
      a.stopPropagation();
      if(!IsClicked){
      IsClicked = true;
      startpanel2.style.opacity = 1;
      startpanel2.style.transform = "translateX(0)";
      }else{
      IsClicked = false;
      startpanel2.style.opacity = 0.2;
      startpanel2.style.transform = "translateX(330px)";
      }
      });	  
      desktop2.addEventListener("click", function (){
        IsClicked = false;
        startpanel2.style.opacity = 0;
        startpanel2.style.transform = "translateX(330px)";
      });
      background2.addEventListener("click", function (){
        IsClicked = false;
        startpanel2.style.opacity = 0;
        startpanel2.style.transform = "translateX(330px)";
      });
      taskbar2.addEventListener("click", function (){
        IsClicked = false;
        startpanel2.style.opacity = 0;
        startpanel2.style.transform = "translateX(330px)";
      });

      //___________window-move1______________________

      var arr = [0,0];
      var movwin = document.getElementById("musicwindow");
      var isdown = false;
      movwin.addEventListener('mousedown',function(e){
        isdown = true;
      arr = [
                movwin.offsetLeft - e.clientX ,
              movwin.offsetTop - e.clientY
          ];
            
      });

      document.addEventListener('mouseup',function(){
        isdown = false; 

      });

      document.addEventListener('mousemove',function(e){ 
        event.preventDefault();
        if (isdown) {
        movwin.style.left = (e.clientX + arr[0]) + 'px';
        movwin.style.top  = (e.clientY + arr[1]) + 'px';
      }

      });


      //___________window-move2______________________

      var arr = [0,0];
      var movwind = document.getElementById("pcwindow");
      var isdow = false;
      movwind.addEventListener('mousedown',function(e){
      isdow = true;
      arr = [
              movwind.offsetLeft - e.clientX ,
              movwind.offsetTop - e.clientY
          ];
            
      });

      document.addEventListener('mouseup',function(){
        isdow = false; 

      });

      document.addEventListener('mousemove',function(e){ 
        event.preventDefault();
        if (isdow) {
        movwind.style.left = (e.clientX + arr[0]) + 'px';
        movwind.style.top  = (e.clientY + arr[1]) + 'px';
      }

      });


      //list item when click rigt 
      
      var i = document.getElementById("menu").style;
        if (document.addEventListener) {
          document.addEventListener('contextmenu', function(e) {
            var posX = e.clientX;
            var posY = e.clientY;
            menu(posX, posY);
            e.preventDefault();
          }, false);
          document.addEventListener('click', function(e) {
            i.opacity = "0";
            setTimeout(function() {
              i.visibility = "hidden";
            }, 501);
          }, false);
        } else {
          document.attachEvent('oncontextmenu', function(e) {
            var posX = e.clientX;
            var posY = e.clientY;
            menu(posX, posY);
            e.preventDefault();
          });
          document.attachEvent('onclick', function(e) {
            i.opacity = "0";
            setTimeout(function() {
              i.visibility = "hidden";
            }, 501);
          });
        }

        function menu(x, y) {
          i.top = y + "px";
          i.left = x + "px";
          i.visibility = "visible";
          i.opacity = "1";
        }
          //_____Image change..._____________ 
          function uploadImage(input){
                if (input.files && input.files[0]) {
                var url = URL.createObjectURL(input.files[0]);
                $('.background').attr('style', 'background-image:url(' + url + ')');
                }
            }

            document.querySelector("input").onchange = function(){uploadImage(this)};
       /*_____Refresh..._____________*/ 
          const refresh = document.querySelector(".ref");

          refresh.addEventListener('click',  function refresh() {
              

              setTimeout(function () {
                  location.reload()
              }, 100);
              });      
        
      </script>
  </body>
</html>