<?php include 'db.php';?>
<!DOCTYPE html>
<html>
<head>
<title>
student registration
</title>
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
<div id="h"><a href="layout.php">home</a></div>
<center>
<div id="sr">
	<br>
STUDENT REGISTRATION
<form action="stud_registration.php" method="post">
	<table>
<br>
<tr><td>Student Id:</td><td><input type="text" name="si"></td></tr>
<tr><td>Name</td><td><input type="text" name="name"></td></tr>
<tr><td>Email:</td><td><input type="email" name="eml"></td></tr>
<tr><td>Password:</td><td><input type="password" name="pwd1" id="p1"></td><td>
    <i class="error" id="pass_err"></i>
	<i class="correct" id="pass_crr"></i></td></tr>
<tr><td>Re-enter Password:</td><td><input type="password" name="pwd2" id="p2"></td><td>
    <i class="error" id="pass_err1"></i>
	<i class="correct" id="pass_crr1"></i></td>
<tr><td>Gender:</td><td><input type="text" name="gen"></td></tr>
<tr><td>Batch year:</td><td><input type="text" name="br"></td></tr>
<tr><td><br><input type="submit" name="submit" value="CREATE"></td><td><br>
	<?php
if(isset($_POST['submit']))
{
	$si=$_POST['si'];
	$nam=$_POST['name'];
	$eml=$_POST['eml'];
	$pwd1=$_POST['pwd1'];
	$pwd2=$_POST['pwd2'];
	$gen=$_POST['gen'];
	$br=$_POST['br'];
	$sql="INSERT INTO student(idno,name,email,password,gender,batch_year) VALUES('$si','$nam','$eml','$pwd2','$gen','$br')";
	if($con->query($sql))
	{
		echo "ACCOUNT CREATED";
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
</td></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
</table>
</form>
</div>
</center>
</body>
</html>
 