<?php include 'db.php';?>
<!DOCTYPE html>
<html>
<head>
	 <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
<title>
staff registration
</title>
<style>
#container{
	width:600px;
	border:2px solid grey;
	border-radius: 20px;
}
.home{
    color:grey;
    font-size:40px;
    position:fixed;
    right:30px;
    top:20px;

  }
</style>
<link rel="stylesheet" type="text/css" href="card.css">
<script src="jquery-3.3.1.js" type="text/javascript"></script>
<script>
	$(document).ready(function(){
		

		$("#p2").bind("blur",password_check);

	});

	function password_check()
	{
		var p1=$("#p1").val();
		var p2=$("#p2").val();
		if(p1!=p2)
		{
			$("#pass_crr").html("");
			$("#pass_crr1").html("");
			$("#pass_err").html("Mismatch");
			$("#pass_err1").html("Mismatch");
		}
		else
		{
			$("#pass_err").html("");
			$("#pass_err1").html("");
		    $("#pass_crr").html("Matched");
		    $("#pass_crr1").html("Matched");	
		}

	}
	
</script>
</head>
<body>
	<a href="admin/admin.php"><ion-icon name="home" class="home"></ion-icon></a>
<center>
	<br>
<div id="container">
	<br>
STAFF REGISTRATION<br><br>
<form action="staff_registration.php" method="post" autocomplete="off">
<table>
<tr></tr>
<tr><td>Staff Id</td><td><input type="text" name="si" required></td></tr>
<tr><td>Password</td><td><input type="password" name="pwd1" id="p1" required></td>
<td>
	<i class="error" id="pass_err"></i>
	<i class="correct" id="pass_crr"></i>
</td></tr>
<tr><td>Re-enter Password</td><td><input type="password" name="pwd2" id="p2" required></td>
<td>
	<i class="error" id="pass_err1"></i>
	<i class="correct" id="pass_crr1"></i>

</td></tr>
<tr><td>Email</td><td><input type="email" name="eml" required></td></tr>
<tr><td>Gender</td><td><input type="text" name="gen" required></td></tr>
<tr><td>Qualification</td><td><input type="text" name="qal" required></td></tr>
<tr><td>Course 1</td><td><input type="text" name="c1"></td></tr>
<tr><td>Course 2</td><td><input type="text" name="c2"></td></tr>
<tr><td>Course 3</td><td><input type="text" name="c3"></td></tr>
<tr><td>
	<?php
if(isset($_POST['submit']))
{
	$si=$_POST['si'];
	$pwd1=$_POST['pwd1'];
	$pwd2=$_POST['pwd2'];
	$eml=$_POST['eml'];
	$gen=$_POST['gen'];
	$qal=$_POST['qal'];
	$c1=$_POST['c1'];
	$c2=$_POST['c2'];
	$c3=$_POST['c3'];
	$sql1="INSERT INTO staff(staff_id,password,email_id,gender,qualification,course_1,course_2,course_3) VALUES('$si','$pwd2','$eml','$gen','$qal','$c1','$c2','$c3')";
	$sql2="INSERT INTO users(name,email) VALUES ('$si','$pwd2')";
	if($con->query($sql1))
	{
		if($con->query($sql2))
		{
		echo "ACCOUNT CREATED";
	}
	}
	else
	{
		echo"insertion failed";
	}
	
}
else
{
	echo"PLEASE ENTER ALL DATA";
}
?>
</td><td><center><input type="submit" name="submit" value="CREATE"></center></td>
</form>
</table>
<a href="staff_login.php" style="text-decoration:none;color:green;">Already a user ?</a>
<br><br>
</div>
</center>
</body>
</html>
 