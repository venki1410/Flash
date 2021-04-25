<?php
$connect = mysqli_connect("localhost", "root", "", "flash");
if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 $query = "UPDATE staff SET ".$_POST["column_name"]."='".$value."' WHERE sino = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}
?>