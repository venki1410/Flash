<?php
session_start();
$pid=$_SESSION['project'];
 $targetfolder = "project_files/$pid/";
if(file_exists("project_files/$pid/")) unlink("project_files/$pid/");


 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $ok=1;

$file_type=$_FILES['file']['type'];


 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 header('Location:developer_files.php');
 }

 else {

 echo "Problem uploading file";

 }



?>