<!DOCTYPE html>
<html>
<head>
	<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
	<link rel="stylesheet" href="p.css">

</head>
<body>

<?php
  
  $connect = mysqli_connect("localhost", "root", "", "flash");
   session_start();
   $id = $_SESSION['si']; 
  ?>
  

  <div id="topic">
      <?php
  $query = "SELECT * FROM staff WHERE staff_id='$id'";
  $result = mysqli_query($connect, $query);
  $output = '
   <div>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   
<img src="us.png" class="usimage";><div class="p_id">ID :'.$row["staff_id"].'</div><div class="p_email">Email : '.$row["email_id"].'</div><br><div class="p_major">Major : '.$row["qualification"].'</div></div>
<br><br>
 ';
  }
  $output .= '</div>';
  echo $output;

?>
     </div>
     <div id="canvas">
     

<div class="icon-cards">
	<div class="icon-cards__content">
		<div class="icon-cards__item" style="background-image: linear-gradient(to right top, #ee5c5c, #f6476c, #fa3082, #f7189d, #eb12bc);"><h3>Rejected Project</h3><h1>10</h1></div>
		<div class="icon-cards__item" style="background-image: linear-gradient(to right top, #ee5ce1, #db49e2, #c636e4, #ac23e7, #8d12eb);"><h3>Pending Projects</h3><h1>7</h1></div>
		<div class="icon-cards__item" style="background-image: linear-gradient(to right top, #825cee, #0090ff, #00b5ff, #00d3ff, #12ebeb);"><h3>Granted project</h3><h1>26</h1></div>
		<div class="icon-cards__item"  style="background-image: linear-gradient(to right top, #eff900, #f9d200, #fbac00, #f78500, #eb5d12);"></div>
		<div class="icon-cards__item" style="background-image: linear-gradient(to right top, #69ee5c, #8fef49, #b0ee36, #ceed23, #ebeb12);"><h3>Unregistered Project</h3><h1>1K</h1></div>
	</div>
</div>

     </div>
</body>
</html>