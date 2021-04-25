<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji|Courgette|Fredoka+One" rel="stylesheet"><style>
#card{
  height:460px;
  width:90%;
  border-radius:20px;
  box-shadow: 0 20px 40px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  
}
#head{
  height:55px;
  width:100%;
  color:black;
  background-color:white;
  border-radius: 15px 15px 0 0;
}

.idimage{
  border-radius:50%;
  height:40px;
  width:10%;
  margin-top:4px;
  margin-left:7px;
  float:left;
  position:relative;
  border:1px solid cyan;
  padding: 3px;

}
.idlabel{
  padding: 5px 15px;
  margin-top:10px;
  margin-left:7px;
  /*background-color:yellow;*/
  float:left;
  position:relative;
  font-weight:lighter;
  color: rgb(70, 70, 70);
  font-size:20px;
  text-align:center;
  background-color:#EEEEEE; 
  border-radius:20px;
  display: inline-block;
  font-family: 'Fredoka One', cursive;

}
.idtime
{
  height:40px;
  width:27%;
  margin-top:5px;
  margin-right:7px;
  /*background-color:blue;*/
  float:right;
  position:relative;
  text-align:right;
  padding-right:3px;
  padding-top: 2px;
  color:#b3b3b3;

}
.idtitle
{
  height:24px;
  width:100%;
  text-align:left;
  font-size:15px;
  position:relative;
  text-indent:6px;
  background-color:#EEEEEE;
  padding-top:0;
  color:#304FFE;
  font-family: 'Baloo Paaji', cursive;
  
}

#images{
  height:345px;
  width:97.5%;
  border-top: 3px solid white;
  border-left: 4px solid white;
  border-right: 4px solid white;
  border-bottom: 3px solid white;
}
#info{
  height:70px;
  width:100%;
  background-color:white;
  color:black;
  overflow:auto;
  border-radius:0 0 15px 15px;
  
}
.idinfo{

  height:35px;
  width:95.5%;
  /*background-color:lightblue;*/
  color:black;
  overflow:auto;
  margin-top:5px;
  margin-bottom:5px;
  text-align:left;
  font-family: 'Courgette', cursive;
}
</style>
</head>
<body> 
<?php
//action.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "flash");
 
                                         //FETCH DATA
 
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM tbl_images ORDER BY id DESC";
  $result = mysqli_query($connect, $query);
  $output = '
   <div>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
<div id="card">
<div id="head"> <img src="avatar.jpg" class="idimage";><div class="idlabel">'.$row["usr_id"].'</div><div class="idtime">'.$row["clock"].'</div></div>
<div id="images"><img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="350px" width="100%" class="img-thumbnail" /></div>
<div id="info" align="center"><div class="idtitle">'.$row["title"].'</div><div class="idinfo">'.$row["description"].'</div></div></div>
<br><br>
   ';
  }
  $output .= '</div>';
  echo $output;
 }
}
?>
</body>
</html>