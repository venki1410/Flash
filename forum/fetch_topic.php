<!DOCTYPE html>
<html>
<head>
  <style>
  #question_wrapper{
    height:50px;
    width:80%;
    background-color:grey;
    border-color:grey;
  }
  #cover{
    color:grey;
  }
  </style>
</head>
<body>
<?php

//fetch_comment.php

$connect = mysqli_connect("localhost", "root", "", "flash");
$id=$_GET['id'];

$query = "SELECT * FROM tbl_topic WHERE id ='.$id.'";
  $result = mysqli_query($connect, $query);
  $output = '
   <div>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <div id="cover">
 <div>'.$row["userid"].'</div><div class="idtime">'.$row["topic"].'</div></div>
<div id="info" align="center"><div class="idtitle" style="background-color:lightblue">'.$row["description"].'</div><div class="idinfo">'.$row["clock"].'</div></div></div></div>
<br><br>
 ';
  }
  $output .= '</div>';
  echo $output;
 

?>
</body>
</html>