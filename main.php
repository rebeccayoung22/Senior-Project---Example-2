<?php

	session_start();

?>

<!DOCTYPE html>
<head>

<title>"Sea" SS</title>
<link href='style.css' rel='stylesheet'/>

</head>
<body>

<header>
	<div class='center'>
		<span id='logoarea'>Sea SS</span>
		<a href='logout.php'><span class='buttons'>logout</span></a>
	</div>
</header>

<div class='center'>
	<h2 style='margin-top: 65px; font-size: 15pt;'>What would you like to do <?php echo $_SESSION['username']; ?>?</h2>
</div>

</body>
</html>