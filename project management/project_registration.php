<!doctype html>
<html>
<head>
    <title>project registraion</title>
    <script src="https://unpkg.com/ionicons@4.5.0/dist/ionicons.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="fullpage.js"></script>
<link rel="stylecheet" href="fullpage.css">
<style>
    #s1{
        background-color: #9f2bfbf5;
    }
    #s2{
        background-color: #F51D09;
    }
    #s3{
        background-color: #CE30B4;
    }
    #s4{
        background-color: #444444;
        color:white;
    }
    #s5{
        background-color: #1BFF00;
    }
    #guide_title{
  border-radius: 10px;
  position: absolute;
  left: 100px;
  top: 180px;
  width: 400px;
  height: 200px;
  z-index: 2;
  background-color: white;
  padding:40px 20px 20px 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  font-size: 20px;
  color: #707070;

    }
#abstract_con{
    border-radius: 10px;
  position: relative;
  left: 300px;
  top: 150px;
  width: 600px;
  height: 300px;
  z-index: 2;
  background-color: white;
  padding:30px 20px 20px 50px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  font-size: 20px;
  color: #707070;
  display: inline-block;
}    
#module_con{
    border-radius: 10px;
  position: relative;
  left: 180px;
  top: 100px;
  width: 900px;
  height: 400px;
  z-index: 2;
  background-color: white;
  padding:40px 20px 20px 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  font-size: 20px;
  color: #707070;
}
#fend{
    border-radius: 10px;
  position: relative;
  left: 150px;
  top: 100px;
  width: 400px;
  height: 300px;
  z-index: 2;
  background-color: white;
  padding:40px 20px 20px 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  font-size: 20px;
  color: #707070;
}
#bend{
    border-radius: 10px;
  position: relative;
  left: 800px;
  top: -250px;
  width: 400px;
  height: 300px;
  z-index: 2;
  background-color: white;
  padding:40px 20px 20px 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  font-size: 20px;
  color: #707070;
  display:block; 
}
#guide_title input[type=text], select {
     border:0;
  background: none;
  display: block;
  margin: 2px auto;
  text-align: center;
  border: 2px solid #B2B2B2;
  padding: 10px 10px;
  width: 200px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
}
#module_con input[type=text]{
    border-color: 1px solid #727272;
}
textarea{
margin-top:10px;
border-radius: 10px;
}
.next_gt{
    height:40px;
    width:40px;
    background-color: #9f2bfbf5;
    position: relative;
    left:340px;
    top:28px;
    border-radius: 50px;
    padding-left:18px;
    padding-top: 12px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.next_a{
    height:40px;
    width:40px;
    background-color: #F51D09;
    position: relative;
    left:540px;
    top:10px;
    border-radius: 50px;
    padding-left:18px;
    padding-top: 12px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.next_m{
    height:40px;
    width:40px;
    background-color: #CE30B4;
    position: relative;
    left:840px;
    top:28px;
    border-radius: 50px;
    padding-left:18px;
    padding-top: 12px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.next_e{
    height:40px;
    width:40px;
    background-color: #444444;
    position: relative;
    left:345px;
    top:135px;
    border-radius: 50px;
    padding-left:18px;
    padding-top: 12px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

ion-icon {
  font-size:30px;
  color:white;
}
input[type=submit]{
    border:0;
  background:white;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid white;
  padding: 14px 26px;
  outline: none;
  color: #6B6B6B;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
   position:relative;
   font-size:17px;
   font-weight:lighter;
   float:left;
    left:1127px;
    top:492px;
    box-shadow: 8px 8px 8px rgba(0, 0, 0, .4);
    font-family: 'Fredoka One', cursive;
}
#purple{
    height:500px;
    width:500px;
    position: relative;
    left:700px;
    top:85px;
}
#orange{
    height:300px;
    width:300px;
    position:relative;
    left:120px;
    top:150px;
    display: inline-block;
}
#angular{
    position:relative;
    top:30px;
    left:30px;
    font-size:50px;
    color: #F10D13;
}
#css3{
position:relative;
    top:100px;
    left:-25px;
    font-size:50px;
    color: #0094FF;    
}
#html5{
position:relative;
    top:175px;
    left:-78px;
    font-size:50px;
    color: #4800FF; 
}
#nodejs{
 position:relative;
    top:255px;
    left:-130px;
    font-size:50px;
    color: #EDE211;    
}
#python{
    position:relative;
    top:330px;
    left:-185px;
    font-size:50px;
    color: #982FCF;   
}
#android{
 position:relative;
    top:405px;
    left:-240px;
    font-size:53px;
    color:#00FF00;      
}
#penguin{
 position:relative;
    top:480px;
    left:-300px;
    font-size:53px;
    color:#FF7A00;   
}
#github{
 position:relative;
    top:560px;
    left:-358px;
    font-size:53px;
    color:white;   
}
</style>
</head>
<body>
    <div id="wrapper">
 <form  action="project_action.php" method="post" enctype="multipart/form-data" autocomplete="off">
<div class="section" data-anchor="page1" id="s1">
    <img src="purple.png" id="purple">
    <div id="guide_title">
<table>
    <input type="hidden" name="action" id="action" value="insert" />
       <tr><td>Project Guide </td><td>        
        <select name="p_guide">
               <option value="pick">select </option>
                <?php
                $con = mysqli_connect("localhost", "root", "", "flash");
                   $sql = mysqli_query($con, "SELECT staff_id From staff");
                    $row = mysqli_num_rows($sql);
                    while ($row = mysqli_fetch_array($sql)){
                    echo "<option value='". $row['staff_id'] ."'>" .$row['staff_id'] ."</option>" ;
                   }
                  ?>
                </select>
            </td></tr>
            <br>
<tr><td>Project Title</td><td> <input  type="text" name="p_title"  placeholder="TITLE" required /></td></tr>
</table>
<a href="#page2"><div class="next_gt"><ion-icon name="play"></ion-icon></div></a>
</div>
</div>
<div class="section" data-anchor="page2" id="s2">
    <img src="orange.png" id="orange">
    <div id="abstract_con">
Abstract<br>
<textarea name="abstract" rows="13" cols="70">Enter your idea here.</textarea>
<a href="#page3"><div class="next_a"><ion-icon name="play"></ion-icon></div></a>
</div>
</div>
<div class="section" data-anchor="page3" id="s3">
<div id="module_con">
<table>
    MODULES<br><br>
<tr><td>
    <input type="text" name="m1" placeholder="module1"><br>
    <input type="text" name="m1s1" placeholder="submodule1"><br>
    <input type="text" name="m1s2" placeholder="submodule2"><br>
    <input type="text" name="m1s3" placeholder="submodule3"><br>
    <input type="text" name="m1s4" placeholder="submodule4"><br>
    <input type="text" name="m1s5" placeholder="submodule5"><br>
    <input type="text" name="m1s6" placeholder="submodule6"><br>
    <input type="text" name="m1s7" placeholder="submodule7"><br>
    <input type="text" name="m1s8" placeholder="submodule8"><br>
    <input type="text" name="m1s9" placeholder="submodule9"><br>
    <input type="text" name="m1s10" placeholder="submodule10"><br>
</td>
<td>
<input type="text" name="m2" placeholder="module2"><br>
    <input type="text" name="m2s1" placeholder="submodule1"><br>
    <input type="text" name="m2s2" placeholder="submodule2"><br>
    <input type="text" name="m2s3" placeholder="submodule3"><br>
    <input type="text" name="m2s4" placeholder="submodule4"><br>
    <input type="text" name="m2s5" placeholder="submodule5"><br>
    <input type="text" name="m2s6" placeholder="submodule6"><br>
    <input type="text" name="m2s7" placeholder="submodule7"><br>
    <input type="text" name="m2s8" placeholder="submodule8"><br>
    <input type="text" name="m2s9" placeholder="submodule9"><br>
    <input type="text" name="m2s10" placeholder="submodule10"><br>
</td>
<td>
<input type="text" name="m3" placeholder="module3"><br>
    <input type="text" name="m3s1" placeholder="submodule1"><br>
    <input type="text" name="m3s2" placeholder="submodule2"><br>
    <input type="text" name="m3s3" placeholder="submodule3"><br>
    <input type="text" name="m3s4" placeholder="submodule4"><br>
    <input type="text" name="m3s5" placeholder="submodule5"><br>
    <input type="text" name="m3s6" placeholder="submodule6"><br>
    <input type="text" name="m3s7" placeholder="submodule7"><br>
    <input type="text" name="m3s8" placeholder="submodule8"><br>
    <input type="text" name="m3s9" placeholder="submodule9"><br>
    <input type="text" name="m3s10" placeholder="submodule10"><br>
</td>
<td>
<input type="text" name="m4" placeholder="module4"><br>
    <input type="text" name="m4s1" placeholder="submodule1"><br>
    <input type="text" name="m4s2" placeholder="submodule2"><br>
    <input type="text" name="m4s3" placeholder="submodule3"><br>
    <input type="text" name="m4s4" placeholder="submodule4"><br>
    <input type="text" name="m4s5" placeholder="submodule5"><br>
    <input type="text" name="m4s6" placeholder="submodule6"><br>
    <input type="text" name="m4s7" placeholder="submodule7"><br>
    <input type="text" name="m4s8" placeholder="submodule8"><br>
    <input type="text" name="m4s9" placeholder="submodule9"><br>
    <input type="text" name="m4s10" placeholder="submodule10"><br>
</td>
<td>
<input type="text" name="m5" placeholder="module5"><br>
    <input type="text" name="m5s1" placeholder="submodule1"><br>
    <input type="text" name="m5s2" placeholder="submodule2"><br>
    <input type="text" name="m5s3" placeholder="submodule3"><br>
    <input type="text" name="m5s4" placeholder="submodule4"><br>
    <input type="text" name="m5s5" placeholder="submodule5"><br>
    <input type="text" name="m5s6" placeholder="submodule6"><br>
    <input type="text" name="m5s7" placeholder="submodule7"><br>
    <input type="text" name="m5s8" placeholder="submodule8"><br>
    <input type="text" name="m5s9" placeholder="submodule9"><br>
    <input type="text" name="m5s10" placeholder="submodule10"><br>
</td>
</table>
<a href="#page4"><div class="next_m"><ion-icon name="play"></ion-icon></div></a>
</div>
</div>
<div class="section" id="s4" data-anchor="page4">
      <ion-icon name="logo-angular" id="angular"></ion-icon>
       <ion-icon name="logo-css3" id="css3"></ion-icon>
       <ion-icon name="logo-html5" id="html5"></ion-icon>
       <ion-icon name="logo-nodejs" id="nodejs"></ion-icon>
       <ion-icon name="logo-python" id="python"></ion-icon>
       <ion-icon name="logo-android" id="android"></ion-icon>
       <ion-icon name="logo-tux" id="penguin"></ion-icon>
       <ion-icon name="logo-github" id="github"></ion-icon>
       <div id="fend">
            <table>  
   <tr>  
      <td colspan="2">Select Technolgy:</td>  
   </tr>
   <tr>  
      <td>Html</td>  
      <td><input type="checkbox" name="techno[]" value="Html"></td>  
   </tr>  
   <tr>  
      <td>PHP</td>  
      <td><input type="checkbox" name="techno[]" value="PHP"></td>  
   </tr>  
   <tr>  
      <td>.Net</td>  
      <td><input type="checkbox" name="techno[]" value=".Net"></td>  
   </tr>  
   <tr>  
      <td>Java</td>  
      <td><input type="checkbox" name="techno[]" value="Java"></td>  
   </tr>  
   <tr>  
      <td>Javascript</td>  
      <td><input type="checkbox" name="techno[]" value="javascript"></td>  
   </tr>  
   <tr>  
      <td>C#</td>  
      <td><input type="checkbox" name="techno[]" value="PHP"></td>  
   </tr>
    <tr>  
      <td>C++</td>  
      <td><input type="checkbox" name="techno[]" value="PHP"></td>  
   </tr>
   <tr>  
      <td>CSS</td>  
      <td><input type="checkbox" name="techno[]" value="PHP"></td>  
   </tr>
   <tr>  
      <td>Python</td>  
      <td><input type="checkbox" name="techno[]" value="PHP"></td>  
   </tr>
</table>
</div>
<div id="bend">
BACK END<br>
<table>
    <input type="radio" name="b_end" value="oracle"> Oracle<br>
<input type="radio" name="b_end" value="mangodb"> MangoDB<br>
<input type="radio" name="b_end" value="mysql"> MySql<br>
<input type="radio" name="b_end" value="microsoft sql"> Microsoft SQL<br>
</table>
<a href="#page5"><div class="next_e"><ion-icon name="play"></ion-icon></div></a>
</div>
</div>
<div class="section" data-anchor="page5" id="s5">
        <table>

        <tr>

    <td> 
      <input type="hidden" name="usr_id" id="usr_id" value="<?php  echo $_GET['usrid']; ?>""/>
       <input type="submit" name="submit"  value="Register"  /></td>
       </table>
        </form>
    </div>
    </div>
    <script>
    $(document).ready(function(){
        $('#wrapper').fullpage();
    });
    </script>
    </body>
    </html>

