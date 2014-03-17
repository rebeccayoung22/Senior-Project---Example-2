<!DOCTYPE html>
<head>

<title> "Sea" SS </title>
<link href='style.css' rel='stylesheet'/>

<script src='jquery-2.0.3.min.js'></script>

</head>
<body>

<header>
	<div class='center'>
		<span id='logoarea'><a href='index.php'>"Sea" SS</a></span>
		<ul id='menucontent'>
		<li><a href='#title1'>Reasons to Sign Up    |</a></li>
		<li><a href='#centercontent4'>YOYOYOYO    |</a></li>
		<li><a href='#centercontent4'>Contact Us</a></li>
		</ul>
		<a href='signup.php'><span class='buttons' id='signup'>Sign Up</span></a>
	</div>
</header>

<?php

	session_start();
	
	if(isSet($_SESSION['username'])&&!empty($_SESSION['username'])){
		echo '<script> window.location = "main.php";</script>';
	}
	
	if(isSet($_POST['username'])&&isSet($_POST['password'])){
		if(!empty($_POST['username'])&&!empty($_POST['password'])){
			$database = mysqli_connect('localhost', 'root', '', 'WebUsers');
			$result = mysqli_query($database, "SELECT * FROM Users WHERE Username = '".mysql_real_escape_string(trim($_POST['username']))."'");
			$row = mysqli_fetch_array($result);
			
			if($row['Password'] == mysql_real_escape_string(sha1(trim($_POST['password']) . 'dinos149!'))){
				$_SESSION['username'] = $_POST['username'];
				echo '<div class="overtake">You logged in foo (A.K.A. '.$_SESSION['username'].')!</div>';
				echo '<script> window.location = "main.php";</script>';
			} else if($row['Username'] == mysql_real_escape_string($_POST['username'])){
				echo '<script>$(document).ready(function(){$("#use").val("'.$_POST['username'].'");$("#phint").show();});</script>';
			} else {
				echo '<script>$(document).ready(function(){$("#uhint").show();});</script>';
			}
			
			//while ($row = mysqli_fetch_array($result)){
				//echo $row[0]." - ".$row[1]."<br>";
				//if($_POST['username'] == $row[0]&&$_POST['password'] == $row[1]){
					
					//break;
				//} 
				
			//}
			
		} else if(empty($_POST['username'])&&empty($_POST['password'])){
			echo '<script> $(document).ready(function(){$("#use").addClass("formInvalid");$("#pass").addClass("formInvalid");}); </script>';
		} else if(empty($_POST['username'])){
			echo '<script> $(document).ready(function(){$("#use").addClass("formInvalid");}); </script>';
		} else if(empty($_POST['password'])){
			echo '<script> $(document).ready(function(){$("#use").val("'.$_POST['username'].'");$("#pass").addClass("formInvalid");});</script>';
		}
	}
	
	
?>
<!--
<img id='buoy' src='buoy.png'/>
<img id='whaley' src='whale.png'/>
-->
<div id='formcontainer'>

	<form method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
	
	
	
	<h2>Log In</h2>
	<input class='write' id='use' type='text' name='username' placeholder='Username'/><br>
	<div id="uhint" class="hint"><div class="tri"></div>Wrong Username</div>
	<input class='write' id='pass' type='password' name='password' placeholder='Password'/><br>
	<div id="phint" class="hint"><div class="tri"></div>Wrong Password</div>
	<input id='submit' type='submit' value='Submit'/>
	<input id='check' type='checkbox'/> Stay Logged In<br>
	<img src='border3.png'  height='480px' width='700px' id='border2'/>
	</form>

</div>
<div id='title1contain'>
<h1 id='title1'> Why to Sign Up</h1>
</div>
<div id='centercontainer'>


<div id='centercontent1'>
<h3 id='three'>Fun and Easy</h3>
<img src='yo.jpg' height='125px' width='150px' id='img1'/>
<div id='words1'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae scelerisque orci. Nulla et libero et libero gravida consectetur ac sagittis massa. Maecenas auctor tempor.</div>
</div>

<div id='centercontent2'>
<h3 id='three'>Comprehensive <div id='yo'>Tests</div></h3>
<img src='yo.jpg' height='125px' width='150px' id='img2'/>
<div id='words4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae scelerisque orci. Nulla et libero et libero gravida consectetur ac sagittis massa. Maecenas auctor tempor.</div>
</div>

<div id='centercontent3'>
<h3 id='three'>Large Design <div id='yo2'>Database</div></h3>
<img src='yo.jpg' height='125px' width='150px'id='img2'/>
<div id='words4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae scelerisque orci. Nulla et libero et libero gravida consectetur ac sagittis massa. Maecenas auctor tempor.</div>
</div>

<div id='title1contain2'>
<h2 id='title2'> Words Words Words</h2>
</div>

<div id='title1contain3'>
<h2 id='title3'> Words Words Words</h2>
</div>

<div id='centercontent4'>
<div id='words2'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean adipiscing interdum tincidunt. Nunc quis fermentum nisi. Sed placerat arcu ac posuere aliquam. Donec ut tristique nisi, a egestas urna. Suspendisse adipiscing purus ac dolor dignissim porta. Duis iaculis tortor eu nulla blandit ornare. Duis hendrerit sem ac lobortis egestas. Suspendisse.
</div>

</div>

<div id='centercontent5'>

</div>
<div id='centercontent6'>
<div id='words3'> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque justo.</div>
</div>
<div id='centercontent7'>
<div id='words3'> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque justo.</div>
</div>
<div id='centercontent8'>
<div id='words3'> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque justo.</div>
</div>

<div id='centercontent9'>

</div>

<div id='centercontent10'>

</div>


</div>



<footer> 

<div id='footercontain'>
<h3 id='firsttitle'>About</h3>
<h4>WORDS WORDS WORDS WORDS WORDS WORDS WORDS</h4>
<h3 id='secondtitle'>More Information</h3>
<h4 id='secondpar'>WORDS WORDS WORDS WORDS WORDS WORDS WORDS</h4>
<h3 id='thirdtitle' >More Information</h3>
<h4 id='thirdpar'>WORDS WORDS WORDS WORDS WORDS WORDS WORDS</h4>
</div>
</footer>

<canvas id="myCanvas" width="360" height="1750" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.</canvas>

<div id='wavescontain'>
<div id='waves'></div>
</div>

<script>

$(document).ready(function(){
	
	var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");


//500/25

var move = 0*Math.PI/180/200;
alt = 5;
var length = 25;

setInterval(function(){
    ctx.clearRect( 0, 0, 500, 200);
    for(var i = 0; i<2000; i++){
        ctx.beginPath();
        ctx.fillStyle="#53C0C6";
        ctx.moveTo((i*25), alt*Math.sin(((i*length)/180*Math.PI)+move)+100);
        ctx.lineTo(((i+1)*25), alt*Math.sin((((i+1)*length)/180*Math.PI)+move)+100);
        ctx.lineTo(((i+1)*25), 2000);
        ctx.lineTo(((i)*25), 2000);
        ctx.closePath();
        ctx.fill();
    
    }
    
    move++;    

}, 100);


$('canvas').css('border', 'none');
setInterval(function(){
    var img = c.toDataURL("image/png");
    //$('img').attr('src', img);
    $('#waves').css('background', 'url("'+img+'") repeat-x');
}, 100);


$('#raise').click(function(){
    var countt = 0;
    
    var intervall = setInterval(function(){
        
        //$('canvas').attr('height', ''+((countt)+200)+'px');
    
        $('#waves').css('height', ''+((countt)+200)+'px');
        alt = 15;        
        
        if(countt>400){
            clearInterval(intervall);   
            alt = 5;
        }
        
        countt++;
    }, 5);
    
});

});

</script>



</body>
</html>