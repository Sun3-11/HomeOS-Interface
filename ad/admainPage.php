<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    html {
  height:100%;
}
    body {
  margin:0;
}

.bg {
  animation:slide 3s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, #b48fc3 50%, #84c5f1 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:4s;
}

.bg3 {
  animation-duration:5s;
}

.content {
  background-color:rgba(255,255,255,.8);
  border-radius:.25em;
  box-shadow:0 0 .25em rgba(0,0,0,.25);
  box-sizing:border-box;
  left:50%;
  padding:10vmin;
  position:fixed;
  text-align:center;
  top:50%;
  transform:translate(-50%, -50%);
}

h1 {
  font-family:monospace;
}

@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}
    .ahp{
        margin: 10px;
        border-radius: 5px;
        background: #dac7e0;
        height: 40px;
        border: 1px solid #cb8ed4;
        cursor: not-allowed;
    }
    .ap{
        margin: 10px;
        border-radius: 5px;
        background: #c2dbe0;
        height: 40px;
        border: 1px solid #64b3cade;
        cursor: pointer;
    }
 </style>
</head>
<body>

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

<div class="content">
<h1>Admain Page Control</h1>
    <a href="admain.php?n1="><button class="ap">User Control</button></a>
    <a href="admainhomepage.php?n1="><button class="ahp">Update Content Home Page</button></a>
    <form method="post" action="admainhomepage.php">
    <select name="lag" id="">
       <option value="ar">ar</option>
       <option value="en">en</option>
    </select>
    <input type="submit">
    </form>
    </div>    
</body>
</html>