<?php
$id=$_POST['id'];
$usrid=$_POST['usrid'];
$connect = mysqli_connect("localhost", "root", "", "flash");
$query = "UPDATE project SET status='granted' WHERE id=$id";
if(mysqli_query($connect, $query))
  {
   if(mkdir("project_files/{$id}")){
	echo "created sucessfully";
}
}
  else
  {
    echo '! Please Try Again';
  }

?>