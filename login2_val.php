<?php
$con=mysqli_connect('localhost','root','','flash');
session_start();
if(isset($_POST['submit'])){
$si=$_POST['si'];
$pwd=$_POST['pwd'];
$result=mysqli_query($con,'select * from student where idno="'.$si.'" and password="'.$pwd.'"');
}
if(mysqli_num_rows($result)==1)
{
	$_SESSION['si']= $si;
	$_SESSION['u']="student";
	header("Location:layout2.php");
    
}
else
{
	echo"INVALID ACCOUNT";

}

?>
