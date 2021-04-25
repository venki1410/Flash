<?php include 'db.php';
session_start();
if ( !isset($_SESSION['si'])) {
  header ('location: sredesign.html'); 
  exit;
}
 
$s=$_SESSION['si'];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="newlay.css">
<script src="jquery-3.3.1.js" type="text/javascript"></script>
<link href="https://fonts.googleapis.com/css?family=Baloo+Paaji|Courgette|Fredoka+One" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
<script>  
$(document).ready(function(){
 $('#campus_feed').html('<br><br><br><br><br><br><br><br><br><br><br><br><center><img src="loader.gif"></center>');
 campus_feed();
  function campus_feed()
 {
  var action = "fetch";
  $.ajax({
   url:"fetch_action.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#campus_feed').html(data);
    $('#profile_nav').trigger("click");
  }

  });
 };
/////////////////////////////////////////////////////
 $("#profile_nav").click(function profile_nav(){
        $('#content').html('<br><br><br><br><br><br><br><br><br><br><br><br><img src="loader.gif">');
        $.ajax({
          url: "profile2.php",
          method:"POST",
          success: function(result)
          {
            $("#profile_nav").css({"color":"#0084FF"});
            $("#nofication_nav").removeAttr("style");
            $("#chat_nav").removeAttr("style");
            $("#forum_nav").removeAttr("style");
            $("#post_nav").removeAttr("style");
            $("#content").html(result);
        }
      });
    });
 ///////////////////////////////////////////////////////////
 $("#chat_nav").click(function chat_nav(){
  window.location.href='WEBSOCKET/index.php';
    });
 ///////////////////////////////////////////////////////
 $("#forum_nav").click(function forum_nav(){ 
 window.location.href='forum/index.php?uu=std';
    });
 ///////////////////////////////////////////////////////
 $("#post_nav").click(function(){
        $.ajax({
          url: "post.php",
          method:"POST",
          success: function(result)
          {
            $("#post_nav").css({"color":"#0084FF"});
            $("#nofication_nav").removeAttr("style");
            $("#chat_nav").removeAttr("style");
            $("#forum_nav").removeAttr("style");
            $("#profile_nav").removeAttr("style");
            $("#content").html(result);
        }
      });
    });
});

</script>
</head>
<body>
<?php
function error_found(){
  header("Location:sredesign.html");
}
//set_error_handler('error_found');
?>

<div id="header">

<button class="button button1" id="profile_nav" >Profile</button>
<button class="button button3" id="chat_nav">Chat</button>
<button class="button button4" id="forum_nav">Forum</button>
<button class="button button6" id="post_nav">Post</button>

<div class="branding">FLASH</div>
<?php
      $query = "SELECT * FROM project WHERE usr_id='$s'";
      $result = mysqli_query($con, $query);
     
     if(mysqli_num_rows($result)==0){
 $output = '<a href="project management/project_registration.php?usrid=' . $s . '"><ion-icon name="code"></ion-icon></a> ';
}
  
      while($row = mysqli_fetch_array($result))
  {

    if($row["status"]=="granted"){
      $_SESSION['project']=$row["id"];
      $output = '<a href="project management/developer.php?pid='.$row["id"].'"><ion-icon name="code"></ion-icon></a> ';
    }
    elseif ($row["status"]=="pending") {

      $output = '<a href="#"><ion-icon name="code"></ion-icon></a> ';
    }
    else{
     $output = '<a href="project management/project_registration.php?usrid=' . $s . '"><ion-icon name="code"></ion-icon></a> ';
    }
  }

  
echo $output;
?>

<div class="uname">
<?php

echo $_SESSION['si']; ?>
</div>
<a href="logout.php" 
style="text-decoration:none;position:absolute;right:18px;top:8px;">
<button class="button button5">logout</button></a>
</div>
<div id="flash">
<marquee><span class="blinking">**. . Flash news will goes here . .**</span></marquee>
</div>
<div id="content">
</div>
<div id="campus_feed" align="center">    </div>
</body>
</html>
