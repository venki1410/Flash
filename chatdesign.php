<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <style>
 body{

 	background-color: #F8F8F8;
 }
 #frame{
 width:90%;
 height:570px;
 border:2px solid #E6E6E6;
 background-color:white;
 position:absolute;
 top:40px;
 left:65px;
 }
#user_data{
	width:25%;
	height:100px;
	border-right:1px solid #E6E6E6;
	border-bottom:1px solid #E6E6E6; 

}
.csimage{
  box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.2), 0 3px 3px 0 rgba(0, 0, 0, 0.19);
  border-radius:50%;
  height:50px;
  width:11%;
  margin-top:17px;
  margin-left:28px;
  float:left;
  position:relative;
  border:1px solid #0084FF;
  padding: 3px;
  }
 .cu_name{ 
    position: absolute;
    top: 30px;
    left: 90px;
    color: white;
    font-size: 25px;
    font-weight: bold;
    padding: 5px;
    border-radius: 20px;
    background-color: #3eea3e;
 }

    

#user_list{
	width:25%;
	height:470px;
	border-right:1px solid #E6E6E6;
}
#chat_label{
	position: absolute;
	top:0;
	left:308px;
	width:50.1%;
	height:60px;
	border-right: 1px solid #E6E6E6;
	border-bottom: 1px solid #E6E6E6;
	background-color: #00B0FF;

}
#message_stage{
	position: absolute;
    top:60px;
    left:310px;
   	width:50%;
	height:440px;
	border-bottom: 1px solid #E6E6E6;
}
#pen{
	position: absolute;
    top:500px;
    left:310px;
   	width:50%;
   	height:70px;
}
#message_wrap{
    position: absolute;
    top:0;
    left:310px;
   	width:50%;
	height:570px;
	border-right:1px solid #E6E6E6;
}

</style>
</head>
<body>
	<?php
	session_start();
	if(!isset($_SESSION['user'])){
		header("location:index.php");
	}
	require("db/users.php");
	require("db/chatrooms.php");

	$objChatrooms = new chatrooms;
	$chatrooms = $objChatrooms->getAllChatRooms();

	$objUser = new users;
	$users = $objUser->getAllUsers();
    ?>
   
    		<?php
    		foreach($_SESSION['user'] as $key => $user){
    			$userId = $key;
    			echo'<input type="hidden" name="userId" id="userId"
    		        value="'.$key.'">';
    			//echo"<div>".$user['name']."</div>";

    		}
    		?>	
	<div id='frame'>
		<div id="user_data"><img src="us.png" class="csimage";><div class="cu_name">
			<?php echo $user['name']; ?>
		</div></div>
		





		<div id="user_list">
			<?php
    		foreach($users as $key => $user){
    			$color = "color:red";
                $status = "offline";
    			if($user['login_status']==1){
    				$color ="color:green";
                    $status ="online";
    			}
    			if(!isset($_SESSION['user'][$user['id']])){
    			echo"<tr><td>".$user['name']."</td>";
    			//echo"<td><span style=".$color.">$status</span></td>";
    			//echo"<td>".$user['last_login']."</td></tr>";

    		}
    	}
    		?>

		</div>


		<div id="chat_label"></div>
		<div id="message_wrap"></div>
		<div id="message_stage">
			<?php
    		foreach ($chatrooms as $key => $chatroom){
                 if($userId == $chatroom['userid']){
                 	$from = "Me";
                 }else{
                 	$from = $chatroom['name'];
                 }
                 echo '<tr><td><div id="from"><strong>'.$from.'</strong></div><div>'.$chatroom['msg'].'</div><td><div>'.date("d-m-Y h:i:s A",strtotime($chatroom['created_on'])).'</div></td></tr>';
    		}

    		?>


		</div>
		<div id="pen">
			
        <form id="chat-room-frm" method="post" action="">
    	<div>
    		<textarea id="msg" name="msg" placeholder="Enter Message"></textarea>
    	</div>
    	<div>
    		<input type="button" value="send" id="send" name="send">
    	</div>
        </form>


		</div> 

	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
	     //var conn = new WebSocket('ws://localhost:8080');
        var conn = new WebSocket('ws://192.168.43.185:8080');
		conn.onopen = function(e){
			console.log("Connection established!");
		};

		conn.onmessage = function(e){
			console.log(e.data);
			var data = JSON.parse(e.data);
			var row = '<tr><td><div id="from"><strong>'+ data.from +'</strong></div><div>'+data.msg+'</div><td><div>'+data.dt+'</div></td></tr>';
			$('#chats > tbody').prepend(row);
		};

	conn.onclose = function(e){
		console.log("Connection Closed!");
	}

		$("#send").click(function(){
			var userId  = $("#userId").val();
			var msg     = $("#msg").val();
			var data ={

				userId:userId,
				msg:msg
			};
            conn.send(JSON.stringify(data));
            $("#msg").val("");
		});

		$("#leave-chat").click(function(){
			var userId  = $("#userId").val();
			$.ajax({
				url:"action.php",
				method:"post",
				data:"userId="+userId+"&action=leave"
			}).done(function(result){
            
            var data = JSON.parse(result);
            if(data.status == 1 ){
            	conn.close();
            	location = "index.php";
            }else{
            console.log(data.msg);	
            }
            
			});
			
		})
	})
</script>
</html>