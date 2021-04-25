<?php
$con=mysqli_connect('localhost','root','','flash');
session_start();
if(isset($_POST['submit'])){
$si=$_POST['si'];
$pwd=$_POST['pwd'];
$result=mysqli_query($con,'select * from staff where staff_id="'.$si.'" and password="'.$pwd.'"');
}
if(mysqli_num_rows($result)==1)
{
	$_SESSION['si']= $si;
	header("Location:layout.php");
    
}
else
{
	echo"INVALID ACCOUNT";

}

?>
