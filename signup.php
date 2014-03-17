<!DOCTYPE html>
<head>

<title> "Sea" SS </title>
<link href='style.css' rel='stylesheet'/>

<script src='jquery-1.10.1.min.js'></script>

</head>
<body>

<header>
	<div class='center'>
		<span id='logoarea'><a href='index.php'>"Sea" SS</a></span>
		<ul id='menucontent2'>
		<li><a href='#title1'>Home   |</a></li>
		<li><a href='#centercontent4'>Login   |</a></li>
		<li><a href='#centercontent4'>Contact Us</a></li>
		</ul>
		<a href='index.php'><span class='buttons' id='signup'>Log In</span></a>
	</div>
</header>

<?php

	
	
	if(isSet($_POST['username'])&&isSet($_POST['password'])&&isSet($_POST['password2'])&&isSet($_POST['email'])){
		if(!empty($_POST['username'])&&!empty($_POST['password'])&&!empty($_POST['password2'])&&!empty($_POST['email'])){
			
			if($_POST['password'] == $_POST['password2']){
				$database = mysqli_connect('localhost', 'root', '', 'WebUsers');
				$result = mysqli_query($database, "INSERT INTO Users(Username, Password, Email)VALUES ('".mysql_real_escape_string(trim($_POST['username']))."','".mysql_real_escape_string(sha1(trim($_POST['password']) . 'dinos149!'))."','".mysql_real_escape_string(trim($_POST['email']))."')");
				//$row = mysqli_fetch_array($result);
				mkdir('users/'.$_POST['username'], 0644);
				
				//mkdir('users/'.$_POST['username'], 0777, true);
				
				//$ourFileName = "posts.html";
				//$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
				//fwrite($ourFileHandle, '<br />');
				//fclose($ourFileHandle);
				//copy ('posts.html',  
				//	"users/" . $_POST['username'] . "/" . 'posts.html')  
				//	or die ("Could not copy");  
				echo '<script> window.location = "index.php";</script>';
			} else {
				echo '<script>$(document).ready(function(){$("#use").val("'.$_POST['username'].'");$("#email").val("'.$_POST['email'].'");$("#pahint").show();});</script>';
			}
			
		} else if(empty($_POST['username'])&&empty($_POST['password'])&&empty($_POST['password2'])&&empty($_POST['email'])){
			echo '<script> $(document).ready(function(){$("#email").addClass("formInvalid");$("#pass2").addClass("formInvalid");$("#use").addClass("formInvalid");$("#pass").addClass("formInvalid");}); </script>';
		} else if(empty($_POST['username'])&&empty($_POST['password'])&&empty($_POST['email'])){
			echo '<script> $(document).ready(function(){$("#email").addClass("formInvalid");$("#use").addClass("formInvalid");$("#pass").addClass("formInvalid");}); </script>';
		} else if(empty($_POST['username'])&&empty($_POST['password2'])&&empty($_POST['email'])){
			echo '<script> $(document).ready(function(){$("#email").addClass("formInvalid");$("#pass2").addClass("formInvalid");$("#use").addClass("formInvalid"); </script>';
		} else if(empty($_POST['password'])&&empty($_POST['password2'])&&empty($_POST['email'])){
			echo '<script> $(document).ready(function(){$("#use").val("'.$_POST['username'].'");$("#email").addClass("formInvalid");$("#pass2").addClass("formInvalid");$("#pass").addClass("formInvalid");}); </script>';
		} else if(empty($_POST['username'])&&empty($_POST['password'])&&empty($_POST['password2'])){
			echo '<script> $(document).ready(function(){$("#email").val("'.$_POST['email'].'");$("#pass2").addClass("formInvalid");$("#use").addClass("formInvalid");$("#pass").addClass("formInvalid");}); </script>';
		} else if(empty($_POST['username'])&&empty($_POST['email'])){
			echo '<script> $(document).ready(function(){$("#email").addClass("formInvalid");$("#use").addClass("formInvalid");}); </script>';
		} else if(empty($_POST['password'])&&empty($_POST['email'])){
			echo '<script> $(document).ready(function(){$("#use").val("'.$_POST['username'].'");$("#email").addClass("formInvalid");$("#pass").addClass("formInvalid");}); </script>';
		} else if(empty($_POST['password2'])&&empty($_POST['email'])){
			echo '<script> $(document).ready(function(){$("#use").val("'.$_POST['username'].'");$("#email").addClass("formInvalid");$("#pass2").addClass("formInvalid");}); </script>';
		} else if(empty($_POST['password2'])&&empty($_POST['username'])){
			echo '<script> $(document).ready(function(){$("#email").val("'.$_POST['email'].'");$("#use").addClass("formInvalid");$("#pass2").addClass("formInvalid");}); </script>';
		} else if(empty($_POST['username'])&&empty($_POST['password'])){
			echo '<script> $(document).ready(function(){$("#email").val("'.$_POST['email'].'");$("#use").addClass("formInvalid");$("#pass").addClass("formInvalid");}); </script>';
		} else if(empty($_POST['password'])&&empty($_POST['password2'])){
			echo '<script> $(document).ready(function(){$("#use").val("'.$_POST['username'].'");$("#email").val("'.$_POST['email'].'");$("#pass").addClass("formInvalid");$("#pass2").addClass("formInvalid");}); </script>';
		} else if(empty($_POST['username'])){
			echo '<script> $(document).ready(function(){$("#email").val("'.$_POST['email'].'");$("#use").addClass("formInvalid");}); </script>';
		} else if(empty($_POST['email'])){
			echo '<script> $(document).ready(function(){$("#use").val("'.$_POST['username'].'");$("#email").addClass("formInvalid");}); </script>';
		} else if(empty($_POST['password'])){
			echo '<script> $(document).ready(function(){$("#email").val("'.$_POST['email'].'");$("#use").val("'.$_POST['username'].'");$("#pass").addClass("formInvalid");});</script>';
		} else if(empty($_POST['password2'])){
			echo '<script> $(document).ready(function(){$("#email").val("'.$_POST['email'].'");$("#use").val("'.$_POST['username'].'");$("#pass2").addClass("formInvalid");});</script>';
		} 
	}
	
	
?>

<style>
	#email, #pass2 {
		margin: 0;
		margin-top: 2px;
		border-radius: 0;
	}
	
	#email {
		background: white url('Mail.png') no-repeat;
		background-size: 20px;
		background-position: 10px;
		border-top-left-radius: 0; 
		border-top-right-radius: 0; 
		margin: 0;
		margin-top: 2px;
	}
	
	#pass2 {
		background: white url('Lock.png') no-repeat;
		background-size: 20px;
		background-position: 10px;
		border-top-left-radius: 0; 
		border-top-right-radius: 0; 
		margin: 0;
		margin-top: 2px;
	}
	
	#pahint {
		width: 185px;
	}
</style>

<div id='formcontainer'>

	<form method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
	
	<h2>Sign Up</h2>
	<input class='write' id='use' type='text' name='username' placeholder='Username'/><br>
	<input class='write' id='email' type='text' name='email' placeholder='Email'/><br>
	<input class='write' id='pass2' type='password' name='password2' placeholder='Password'/><br>
	<input class='write' id='pass' type='password' name='password' placeholder='Retype Password'/><br>
	<div id="pahint" class="hint"><div class="tri"></div>Passwords Are Not Same</div>
	<input id='submit' type='submit' value='Submit'/>
	<img src='border3.png'  height='490px' width='700px' id='border3'/>
	</form>

</div>


<footer id='footer2'> <div id='footercontain'>
<h3 id='firsttitle'>About</h3>
<h4>WORDS WORDS WORDS WORDS WORDS WORDS WORDS</h4>
<h3 id='secondtitle'>More Information</h3>
<h4 id='secondpar'>WORDS WORDS WORDS WORDS WORDS WORDS WORDS</h4>
<h3 id='thirdtitle' >More Information</h3>
<h4 id='thirdpar'>WORDS WORDS WORDS WORDS WORDS WORDS WORDS</h4>
</div></footer>

<canvas id="myCanvas" width="360" height="600" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.</canvas>
<div id='waves2'></div>

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
    $('#waves2').css('background', 'url("'+img+'") repeat-x');
}, 100);


$('#raise').click(function(){
    var countt = 0;
    
    var intervall = setInterval(function(){
        
        //$('canvas').attr('height', ''+((countt)+200)+'px');
    
        $('#waves2').css('height', ''+((countt)+200)+'px');
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