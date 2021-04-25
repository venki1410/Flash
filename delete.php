<?php
$connect = mysqli_connect("localhost", "root", "", "flash");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM staff WHERE SINO = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>