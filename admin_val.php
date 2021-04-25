<?php
$con=mysqli_connect('localhost','root','','flash');
session_start();
if(isset($_POST['submit'])){
$si=$_POST['aduser'];
$pwd=$_POST['adpwd'];
$result=mysqli_query($con,'select * from admin where admin="'.$si.'" and password="'.$pwd.'"');
}
if(mysqli_num_rows($result)==1)
{
	$_SESSION['si']= $si;
	header("Location:adminnav.php");
}
else
{
	echo"INVALID ACCOUNT";
}
?>
