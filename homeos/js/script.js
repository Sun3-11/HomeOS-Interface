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
		  