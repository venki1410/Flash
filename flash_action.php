<?php
//action.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "flash");
 
                                         //FETCH DATA
 
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM flash ORDER BY id DESC LIMIT 1; ";
  $result = mysqli_query($connect, $query);
  while($row = mysqli_fetch_array($result)){
  $output= $row['announcement'];
}
echo'**   '.$output.'   **';
}
}
?>