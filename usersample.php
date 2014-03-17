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
		<ul id='menucontent'>
		<li><a href='#title1'>Reasons to Sign Up    |</a></li>
		<li><a href='#centercontent4'>YOYOYOYO    |</a></li>
		<li><a href='#centercontent4'>YOYOYOYO2</a></li>
		</ul>
		<a href='index.php'><span class='buttons' id='signup'>Log In</span></a>
	</div>
</header>
<div id='profilecontainer'>
<div id='profilepic'>

</div>
<div id='namecontain'>
<div id='fname'>First Name </div>
<div id='lname'>Last Name</div>

</div>


</div>

<footer id='footer3'> 

<div id='footercontain'>
<h3 id='firsttitle'>About</h3>
<h4>WORDS WORDS WORDS WORDS WORDS WORDS WORDS</h4>
<h3 id='secondtitle'>More Information</h3>
<h4 id='secondpar'>WORDS WORDS WORDS WORDS WORDS WORDS WORDS</h4>
<h3 id='thirdtitle' >More Information</h3>
<h4 id='thirdpar'>WORDS WORDS WORDS WORDS WORDS WORDS WORDS</h4>
</div>
</footer>

<canvas id="myCanvas" width="360" height="1050" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.</canvas>
<div id='waves'></div>

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