<!DOCTYPE html>  
<html>  
 <head>  
  <title>Forum</title>  
  <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<style>
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
  text-decoration:none;
}
#question_bag{
color:black;
width:100%;
background-color:white;
float:left;
margin-top:1px; 
overflow:auto;
padding-right:10px;
padding-left: 10px;

}

input[type=text]{
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 20px;
    box-sizing: border-box;
    color:black;
}
input[type=text]:hover,:focus{
  border: 2px solid #00A8FF;
}
input[type=submit]{
  position: relative;
  background-color:#FFA500;
  color:white;
  font-weight: bolder;
  border-radius: 20px;
  border:none;
  padding-left:15px;
  padding-right:15px;


}
#q{
  width:57%;
  float:left;
}
#a{
  width:40%;
  float:right;
}
.home{
  float:right;
  text-decoration:none;
  outline: none;
  color:white;
  padding-right: 10px;
}
body{
  font-family: 'Roboto', sans-serif;
}
.forum_home{
  font-size:30px;
  color:white;
}
#title:hover~ #directory{
  border:2px solid orange;
}
.t{
  margin-top:35px;
  margin-right:35px;
}
</style>
 </head>  
 <body>  

  <!--<div class="container" style="width:900px;">-->  
<div id="forum_header">FLASH FORUM<div class="home" style="text-decoration":"none">
<?php
if(isset($_GET['uu'])){
  echo '<a href="../layout2.php"><ion-icon name="home" class="forum_home"></ion-icon></a></div></div>';
}else{
  echo '<a href="../layout.php"><ion-icon name="home" class="forum_home"></ion-icon></a></div></div>';
}
?>
</div>
<div id="question_bag">
  <h1>FAQ</h1>
  <div id="q"><div id="image_data">
   <!--ALL QUESTIONS LISTED HERE--> 
   </div></div>
   <div id="a">
  
  <h1>Ask Question </h1><br>
  <form id="image_form" method="post" enctype="multipart/form-data" autocomplete="off">
     <input  type="text" name="title" id="title"  placeholder="TITLE" required />
     <input  type="text" name="directory" id="directory"  placeholder="DIRECTORY(opt)" /><br>
     <input  style="top:210px; width:500px; height:200px;" type="text"
       cols="60" 
       rows="5"
       name="description" 
       id="description" 
       placeholder="Say Something.." required /><br>
       <input type="hidden" name="clock" id="clock" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly="readonly" >
       <input type="hidden" name="action" id="action" value="insert" />
       <input type="hidden" name="usr_id" id="usr_id" value="<?php session_start(); echo $_SESSION['si']; ?>""/>
       <input type="submit" name="insert" id="insert" value="POST" class="btn btn-warning" />
 </form>
<div class="panel panel-warning t">
  <div class="panel-heading">HINTS</div>
  <div class="panel-body">If you want to add any files inside your query, please enter the directory of the file inside the <b>DIRECTORY</b> field.</div>
</div>
<div class="panel panel-info t">
  <div class="panel-heading">HINTS</div>
  <div class="panel-body">you can you <b>HTML</b> syntax to hightlight your sentences for better experiences.</div>
</div>
<div class="panel panel-success t">
  <div class="panel-heading">HINTS</div>
  <div class="panel-body">you can use <b>&lt;code&gt; .. &lt;/code&gt;</b> to define any language syntax in your query.
   </div>

</div>
</div></div>
  
 </body>  
</html>


    
<script>  
$(document).ready(function(){
 
 fetch_data();

 function fetch_data()
 {
  var action = "fetch";
  $.ajax({
   url:"topic_action.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#image_data').html(data);
   }
  })
 }
});

 $('#image_form').submit(function(event){
  $.ajax({
     url:"topic_action.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
     success:function(data)
     {
      alert(data);
      $('#image_form')[0].reset();
     }
   })
});
      
</script>
