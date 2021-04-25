<!DOCTYPE html>
<html>
 <head>
  <title>Forum</title>
<script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <link
  type="text/css"
  rel="stylesheet"
  href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css"
/>
 <style type="text/css">
   *{
    outline: none;
   }
   #topic{
    height:200px;
    width:85%;
    border: 2px solid #C0C0C0;

    }
   .d_userid{
   color:white;
   border-radius:0 0 20px 0 ;
   background-color:#33cc33;
   padding-right:12px;
   padding-left:8px;
   float:left;
   font-size:17px;
   font-weight:bold;
   }
   .d_time{
    border-radius:0 0 0 25px;
   background-color:#ffbf00;
   float:right;
   padding-right:8px;
   padding-left: 12px;
   color:white;
   }
   .d_topic{
    color:black;
     font-size:25px;
     float:left;
     padding-top:20px;
     font-weight:bold;
}
.d_def{
    border: 2px solid #F2F2F2;
    margin-top: 69px;
    padding-top: 3px;
    padding-bottom: 3px;
    padding-left: 8px;
    padding-right: 8px;
    font-size: 20px;
    text-align: left;
}
#d_rply{
  width:58%;
  float:left;
}
#d_msgstg{
width:40%;
float:right;
}
#forum_header{
  position:relative;
  height:50px;
  width:100%;
  text-align:left;
  font-size:25px;
  color:white;
  background-color:orange;
  padding-top: 10px;
  padding-left:30px;
  font-weight:bolder;
}
.home{
  float:right;
  text-decoration:none;
  outline: none;
  color:white;
  padding-right: 10px;
}
.forum_home{
  font-size:30px;
  color:white;
}
 </style>
 </head>
 <body>
  <?php
  //error_reporting(E_ERROR | E_PARSE);
  $connect = mysqli_connect("localhost", "root", "", "flash");
  $id = $_GET['id'];
  ?>
  <div id="forum_header">FLASH FORUM<div class="home" style="text-decoration":"none"><a href="index.php"><ion-icon name="arrow-round-back" class="forum_home"></ion-icon></a></div></div>
  <br />
  <center>
  <div id="topic">
      <?php
      session_start();
$query = "SELECT * FROM tbl_topic WHERE id='$id'";
  $result = mysqli_query($connect, $query);
  $output = '
   <div>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
<div class="d_userid">'.$row["userid"].'</div><div class="d_time">'.$row["clock"].'</div><br><div class="d_topic">'.$row["topic"].'</div></div>';


$output .='<div id="info" align="center"><div class="d_def">
'.$row["description"].'</div></div></div>
<br><br><div></div></div>
 ';
   }

  $output .= '</div>';
  echo $output;

?>
     </div>
</center>
<div><pre style="margin-right: 110px;margin-left: 110px;padding: 20px;">
  <?php
$query = "SELECT * FROM tbl_topic WHERE id='$id'";
  $result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result)){
highlight_file('../project management/project_files/'.$row['directory'].'');
}

?></pre></div>
  <div class="container">
<div id="d_rply">
  <div id="display_cmt"></div>
  </div>
<div id="d_msgstg">
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="hidden" name="comment_name" id="comment_name" value="<?php  echo $_SESSION['si']; ?>""/>
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
      <input type="hidden" name="topic_id" id="topic_id" value="<?php echo $id?>" />
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class=" btn btn-info" value="Submit" />
    </div>
    
    </form>
    <div class="panel panel-warning">
  <div class="panel-heading">TIPS</div>
  <div class="panel-body">
  Panel Content
  Panel Content
  Panel Content
  Panel Content
  Panel Content
  Panel Content
  Panel Content
</div>
</div>

   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_topic();
 load_comment();
 
function load_topic()
 {
  $.ajax({
   url:"fetch_topic.php",
   method:"POST",
   data:{
    tpid :"<?php print $id; ?>"
   },
   dataType:"JSON",
   success:function(data)
   {
    $('#display_topic').html(data);
   }
  })
 }


 function load_comment()
 {
  var id =<?php echo $id;?>;
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   data:{id:id},
   success:function(data)
   {
    $('#display_cmt').html(data);
   }
  })

 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_content').focus();
 });
 
});
</script>
