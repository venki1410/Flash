<?php include 'db.php';?>''
<html>
<head>
	<style>
	body{
		background-image:url("bgimg.jpg");
		color:white;
		text-decoration: none;
        outline: none;
	}
</style>
</head>
<body>
<?php
session_start();
$sql="UPDATE users SET login_status='0' WHERE name='".$_SESSION['si']."';";
if($con->query($sql))
	{
		unset($_SESSION['si']);
       session_destroy();
       echo"<center>YOU ARE LOGGED OUT<center>";

	}

?>

<br><a href="sredesign.html" >LOGIN </a>
</body>
</html>