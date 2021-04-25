<?php include 'db.php';?>
<!DOCTYPE html>
<html>
<head>  
  <title>Post</title> 
  <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji|Courgette|Fredoka+One" rel="stylesheet"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <style>
/*  #post_wraper{
    height: 350px;
    width:60%;
    margin-top:90px;
    border: 2px solid #b30000; 
    border-radius: 24px;
    box-shadow: 6px 6px 6px rgba(0, 0, 0, .9);
  }*/
  #t{
    font-family: 'Fredoka One', cursive;
    position:absolute;
    font-size:25px;
    font-weight:normal;
    top:120px;
    left:50px;
    color:#616161;
  }
  #d{
    font-family: 'Fredoka One', cursive;
    position:absolute;
    font-size:25px;
    font-weight:normal;
    top:240px;
    left:50px;
    color:#616161;
  }
label{
    font-family: 'Fredoka One', cursive;
    padding: 10px;
    background-color:#EEEEEE; 
    display: table;
    color: grey;
    border:2px;
    border: 2px solid grey; 
     position:absolute;
    left:60px;
    top:550px;
    border-radius: 24px;
    box-shadow: 4px 4px 4px rgba(0, 0, 0, .1);
    width:200px;
    transition: 0.70s;
    font-weight:lighter;
    font-size:20px; 
         }
  label:hover{
    width:400px;
    border: 2px solid #0084FF;
    color:green;
  }
label.box input[type="file"] {
    display:none;
}
.box input[type = "text"]{
  font-family: 'Fredoka One', cursive;
  border:0;
  background-color:#EEEEEE;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid grey;
  padding: 14px 10px;
  width: 250px;
  outline: none;
  color:black;
  border-radius: 24px;
  transition: 0.70s;
   position:absolute;
    left:50px;
    top:150px;
    box-shadow: .5px .5px .5px rgba(0, 0, 0, .4);
}
.box input[type = "text"]:focus{
  width: 295px;
  border-color:#0084FF;
}
/*.box input[type = "text"]:hover,.box input[type = ""]:hover{
  -webkit-filter: drop-shadow(0px 0px 15px rgba(0, 231, 255, 0.8));
  border-color:white;
}*/
.box input[type = "submit"]{
  border:0;
  background:#2962FF;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid white;
  padding: 14px 26px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
   position:relative;
   font-size:17px;
   font-weight:lighter;
   float:left;
    left:750px;
    top:430px;
    box-shadow: 8px 8px 8px rgba(0, 0, 0, .4);
    font-family: 'Fredoka One', cursive;
}
.box input[type = "submit"]:hover{
  background: #2ecc71;
  border: none;
  box-shadow: 1px 1px 8px rgba(0, 255, 0, 0.4);
}
::placeholder {
  color: #E0E0E0;
 font-family: 'Fredoka One', cursive;
}

  </style>
  </head> 
<body>
  <div id="post_wraper">
    <br>
	<form class="box" id="image_form" method="post" enctype="multipart/form-data" autocomplete="off">
     <div id="t">Title</div>
     <input  type="text" name="title" id="title" placeholder="TITLE" required />
     <div id="d">Description</div>
     <input  style="top:273px; width:500px; height:200px;" type="text"
       cols="60" 
       rows="5"
       name="description" 
       id="description" 
       placeholder="Say Something.." required />
       <input type="hidden" name="clock" id="clock" value="<?php echo date('Y-m-d H:i:sa'); ?>" readonly="readonly" >
      <label> Upload Image   <input type="file" name="image" id="image" style="display:none;" /></label>
     <input type="hidden" name="action" id="action" value="insert" />
     <input type="hidden" name="image_id" id="image_id" />
     <input type="hidden" name="usr_id" id="usr_id" value="<?php session_start(); echo $_SESSION['si']; ?>""/>
     <input type="submit" name="insert" id="insert" value="POST" class="btn btn-info" />
 </form>
 </div>
 </body>
 </html>
<script>  
$(document).ready(function(){

$('#image_form').submit(function(event){
  event.preventDefault();
  var image_name = $('#image').val();
  if(image_name == '')
  {
   alert("Please Select Image");
   return false;
  }
  else
  {
   var extension = $('#image').val().split('.').pop().toLowerCase();
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#image').val('');
    return false;
   }
   else
   {
    $.ajax({
     url:"insert_action.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
     success:function(data)
     {
      alert(data);
      $('#image_form')[0].reset();
     }
    });
   }
  }
 });
});
</script>