<?php
//action.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "flash");

                                          //INSERT DATA

 if($_POST["action"] == "insert")
 {
 
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $name=$_POST['title'];
  $des= $_POST['description'];
  $clock=$_POST['clock'];
  $usr_id=$_POST['usr_id'];
  $query = "INSERT INTO tbl_images(name,title,description,clock,usr_id) VALUES ('$file','$name','$des','$clock','$usr_id')";
  if(mysqli_query($connect, $query))
  {
   echo 'Post Sucessful !';
  }
  else
  {
    echo '! Please Try Again';
  }
 
 }

}
?>