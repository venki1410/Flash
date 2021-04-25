<!DOCTYPE html>
<html>
    <head>
        <title>
            login
        </title>
    </head>
    <style>

  #login_container {
  border-radius: 115px;
  background-color: rgb(246, 246, 246);
  box-shadow: 0px 5px 4.8px 2px rgba(0, 0, 0, 0.05);
  position: absolute;
  left: 650px;
  top: 88px;
  width: 400px;
  height: 500px;
  z-index: 2;
}

   body{
    background-color:white;
    font-family:'Roboto';
}

.container    { 
  font-family:'Roboto';
  width:600px; 
  margin:30px auto 0; 
  display:block; 
  background:#FFF;
  padding:10px 50px 50px;
}
h2     { 
  text-align:center; 
  margin-bottom:50px; 
}
h2 small { 
  font-weight:normal; 
  color:#888; 
  display:block; 
}
.footer   { text-align:center; }
.footer a  { color:#53B2C8; }

/* form starting stylings ------------------------------- */
.group        { 
  position:relative; 
  margin-bottom:45px; 
}
input         {
  font-size:18px;
  padding:10px 10px 10px 5px;
  display:block;
  width:300px;
  border:none;
  border-bottom:1px solid #757575;
}
input:focus     { outline:none; }

/* LABEL ======================================= */
label          {
  color:#999; 
  font-size:18px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:5px;
  top:10px;
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}

/* active state */
input:focus ~ label, input:valid ~ label    {
  top:-20px;
  font-size:14px;
  color:#5264AE;
}

/* BOTTOM BARS ================================= */
.bar  { position:relative; display:block; width:300px; }
.bar:before, .bar:after   {
  content:'';
  height:2px; 
  width:0;
  bottom:1px; 
  position:absolute;
  background:#5264AE; 
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}
.bar:before {
  left:50%;
}
.bar:after {
  right:50%; 
}

/* active state */
input:focus ~ .bar:before, input:focus ~ .bar:after {
  width:50%;
}

/* HIGHLIGHTER ================================== */
.highlight {
  position:absolute;
  height:60%; 
  width:100px; 
  top:25%; 
  left:0;
  pointer-events:none;
  opacity:0.5;
}

/* active state */
input:focus ~ .highlight {
  -webkit-animation:inputHighlighter 0.3s ease;
  -moz-animation:inputHighlighter 0.3s ease;
  animation:inputHighlighter 0.3s ease;
}

/* ANIMATIONS ================ */
@-webkit-keyframes inputHighlighter {
  from { background:#5264AE; }
  to  { width:0; background:transparent; }
}
@-moz-keyframes inputHighlighter {
  from { background:#5264AE; }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlighter {
  from { background:#5264AE; }
  to  { width:0; background:transparent; }
}
  </style>
<body>
<div id="login_container">
<center>
<form  action="login_val.php" method="post" autocomplete="off">
<table>
<tr><td><h1>STAFF LOGIN</h1></td></tr>
<tr><td><input type="text" name="si" placeholder="ID" required ></td></tr>
<tr><td><input type="password" name="pwd" placeholder="password" required ></td></tr>
<tr><td><input type="submit" name="submit" value="LOGIN"></td></tr>
<tr><td><a href="staff_registration.php" style="text-decoration:none;color:#282828;">REGISTER</a></td></tr>
</table>
</form>
 <div class="group">      
      <input type="text" name="si" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Name</label>
    </div>
      
    <div class="group">      
      <input type="text" name="pwd" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Email</label>
    </div>
    
  </form>

</center>
</div>
<br>
</center>
</body>
</html>

