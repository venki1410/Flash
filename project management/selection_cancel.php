<?php
$id=$_POST['id'];
$connect = mysqli_connect("localhost", "root", "", "flash");
$query = "UPDATE project SET status='rejected' WHERE id=$id";
if(mysqli_query($connect, $query))
  {
   echo 'Updated Sucessful !';
  }
  else
  {
    echo '! Please Try Again';
  }

?>