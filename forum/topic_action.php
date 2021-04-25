<!DOCTYPE html>
<html>
<head>
  <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
  <style>
  *{
    outline: none;
  }
#question_wrapper{

background-color: #F8F8F8;
border-radius:10px;
border:2px solid #F4F4F4;
}
.topic{
  padding-top:13px;
  padding-bottom:12px; 
  padding-left:15px;
  font-size:20px;
  font-weight: bold;
}
.userid{
  margin-top:7px;
  margin-left:7px;
  color:white;
  border-radius:20px;
  background-color:#33cc33;
  padding-right:8px;
  padding-left:8px;
  float:left;
}
.t_time{
  border-radius:20px;
  background-color:#F2F2F2;
  float:right;
  padding-right:8px;
  padding-left: 8px;
}
.answer{
  font-size:17px;
  height:27px;
  width:70px;
  background-color:#0084FF;
  color:white;
  text-align: center;
  text-decoration: none;
  outline: none;
  display: inline-block;
  border-radius:20px;
  float: right;
  margin-top:5px;
 }
.create_button{
font-size:25px;
}
</style>
</head>
<body>
<?php
//action.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "flash");

                                          //INSERT DATA

 if($_POST["action"] == "insert")
 {
  $topic=$_POST['title'];
  $des= $_POST['description'];
  $clock=$_POST['clock'];
  $usr_id=$_POST['usr_id'];
  $directory=$_POST['directory'];
  $query = "INSERT INTO tbl_topic(userid,topic,description,directory,clock) VALUES ('$usr_id','$topic','$des','$directory','$clock')";
  if(mysqli_query($connect, $query))
  {
   echo 'Post Sucessful !';
  }
  else
  {
    echo '! Please Try Again';
  }
 
 };


 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM tbl_topic ORDER BY id DESC";
  $result = mysqli_query($connect, $query);
  $output = '
   <div>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
<div id="question_wrapper">
<div class="userid">'.$row["userid"].'</div><div class="t_time">'.$row["clock"].'</div><br><div class="topic">'.$row["topic"].'</div>
<a href="discuss.php?id=' . $row["id"] . '"><div class="answer"><ion-icon name="create" class="create_button"></ion-icon></div></a>
</div><br><br>
 ';
  }
  $output .= '</div>';
  echo $output;
 }
}
?>
</body>
</html>