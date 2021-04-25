<?php
 $con=new mysqli("localhost","root","","flash");
 if($con->connect_errno)
 {
	 echo $con->connect_error;
	 die("Sorry database connection fails..");
 }
 ?>