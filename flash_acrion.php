<?php
//action.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "flash");
 
                                         //FETCH DATA
 
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT announcement FROM flash ORDER BY id DESC LIMIT 1; ";
  $result = mysqli_query($connect, $query);
  echo $result;
}
}
?>