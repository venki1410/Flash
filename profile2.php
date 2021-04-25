<!DOCTYPE html>
<html>
<head>
	<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
	<style>
	#profile_cardwrap{
		position:relative;
		float:left;
		top:120px;
		left:20px;
		width:50%;
		height:300px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
    .usimage{
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius:50%;
  height:100px;
  width:8%;
  margin-top:10px;
  margin-left:10px;
  float:left;
  position:absolute;
  border:8px solid #0084FF;
  padding: 3px;

}
.p_id{
  padding: 5px 15px;
  position:absolute;
  color:white;
  float:left;
  left:110px;
  top:110px;
  background-color:#0084FF; 
  border-radius:20px;
  display: inline-block;
  font-weight: bold;
  font-size:18px;
}
.p_email{
	padding: 5px 15px;
	border-radius: 20px;
	background-color:orange;
	position:absolute;
	top:147px;
	left:130px;
	color:white;
	font-weight: bold;
	border-left:5px solid #0084FF;
}
.p_major{
	padding: 5px 15px;
	border-radius: 20px;
	background-color:#00e600;
	position:absolute;
	top:181.5px;
	left:119px;
	color:white;
	font-weight: bold;
	border-left:5px solid #0084FF;
}
.course_bisciut1{
    position: absolute;
    top:257px;
    left:30px;
	background-color:yellow;
	border-radius:100%;
	color:black;
	padding:20px;
	font-weight: bold;
}
.course_bisciut2{
	position: absolute;
    top:250px;
	background-color:#ff00bf;
	border-radius:100%;
	color:black;
	padding:20px;
	font-weight: bold;
	margin-top:5px;
	left:105px;
}
.course_bisciut3{
	float: left;
	position: absolute;
    top:250px;
    left:180px;
	background-color:#ff3300;
	border-radius:100%;
	color:black;
	padding:20px;
	font-weight: bold;
	margin-top:5px;
}
#canvas{
	position: relative;
	top:100px;
	height:395px;
	width:100%;
	box-sizing: border-box;
	
}
#token{
    height:200px;
	width:400px;
	background-image: linear-gradient(to right top, #ff6f00, #ff493c, #ff1466, #ff0091, #eb12bc);
	box-shadow: 16px 19px 31px -4px rgba(201,201,201,1);
	position:relative;
	left:0px;
	margin:20px;
	border-radius: 20px;
}
#token_code{
	position:absolute;
	color:#FF1D5E;
	background-color: white;
	left:1px;
	top:15px;
}
.project_id{
	position: absolute;
	background-color: white;
	color:#F30BAB;
	top:20px;
	right: 20px;
	padding:8px;
	font-weight: bold;
	border-radius: 10px;
}
#status{
	position: absolute;
	top:150px;
	right:157px;
	color:white;
	font-size: 20px;
	font-weight: bold;
}
.response{
	font-size: 24px;
	font-weight: bolder;
	position: absolute;
	top:110px;
	right:10px;
	text-transform: uppercase;
}
.tokenp_title{
	position: absolute;
	top:75px;
	left:25px;
	font-size:25px;
	font-weight: bold;
	color:#FFFFFF;
	text-transform: uppercase;

}
</style>

</head>
<body>
<?php
  $connect = mysqli_connect("localhost", "root", "", "flash");
  session_start(); 
  $id = $_SESSION['si']; 
?>
  

  <div id="topic">
      <?php
  $query = "SELECT * FROM student WHERE idno='$id'";
  $result = mysqli_query($connect, $query);
  $output = '
   <div>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   
<img src="us.png" class="usimage";><div class="p_id">ID :'.$row["idno"].'</div><div class="p_email">Email : '.$row["email"].'</div><br><div class="p_major">Batch Year : '.$row["batch_year"].'</div></div>
<br><br>
 ';
  }
  $output .= '</div>';
  echo $output;

?>
     </div>
     <div id="canvas">
     	<?php
     	$query = "SELECT * FROM project WHERE usr_id='$id'";
     	$result = mysqli_query($connect, $query);
  $output = '
   <div>
  ';
  while($row = mysqli_fetch_array($result))
  {
  	if($row["status"]=="granted"){
  		$color='<img src="project management\approval.png" height="110" width="125" >';
  	}
  	elseif ($row["status"]=="rejected") {
        $color='<img src="project management\rejected.png" height="130" width="155" style="top:20px;">';  		# code...
  	}
  	else{
  	$color='<img src="project management\pending.png" height="70" width="120" >';	
  	}
  	
   $output .= '

     	<div id="token">
     		<ion-icon id="token_code" name="code"></ion-icon>
            <div class="project_id">PROJECT ID:'.$row["id"].'</div>
            <div class="tokenp_title">'.$row["p_title"].'</div>
            <div id="status">STATUS :</div>
            <div class="response">'.$color.'</div>
     	</div>
     	';
  }
  $output .= '</div>';
  echo $output;
?>
     </div>
</body>
</html>