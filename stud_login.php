<!DOCTYPE html>
<html>
    <head>
        <title>
            login
        </title>
		<link rel="stylesheet" type="text/css" href="login.css">
		<style>

  .btn, .btn2
  {
     position:relative;
     float:left;
     top:250px;
     left:20%;
     width :250px;
     height :100px;
     font-size :30px;
     text-align :center;
     line-height :100px;
     color :rgba(255,255,255,0.9);
     border-radius :50px;
     background:linear-gradient(-45deg, #ff395e, #ff39dc, #dc39ff, #393eff,#39f8ff,green,black,black,black);
     /*-45deg, #FFA63D, #FF3D77, #338AFF, #3CF0C5,yellow*/
     background-size :600%;
     -webkit-animation : anime 80s linear infinite;
  }
  .btn2
  {
     position: absolute;
     margin-top :-200px;
     z-index :0;
     filter :blur(30px);
     opacity :0.2;
 }
    
     @-webkit-keyframes anime
  
     {
      0%{background-position :0% 50%;}
     50%{background-position :100% 50%;}
     100%{background-position :0% 50%;}
   }
  
   body{
    background-color:black;
}
input[type=text],input[type=password]{
  width:200px;
  height:20px;
  border-radius:5px;
}
#con{
  position: absolute;
  top:180px;
  left:800px;
}
</style>

    </head>
<body>
	<div class="btn">ADMIN 
  <div class="btn2"></div>
</div>
<center>
<div id="con">
<form  class ="box" action="admin_val.php" method="post" autocomplete="off">
<table>
<tr><td>
<h1>STUDENT LOGIN</h1>
</td></tr>
<tr><td><input type="text" name="si" placeholder="ID" required></td></tr><tr></tr><tr></tr><tr></tr>
<tr><td><input type="password" name="pwd" placeholder="password" required></td></tr><tr></tr><tr></tr><tr></tr>
<tr><td><input type="submit" name="submit" value="LOGIN"></td></tr>
</table>
</form>
</center>
</div>
</body>
</html>

