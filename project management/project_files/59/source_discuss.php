<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CODER</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/styles/atom-one-dark.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js"></script>
      <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/highlightjs-line-numbers.js/2.6.0/highlightjs-line-numbers.min.js"></script>
      <script>hljs.initHighlightingOnLoad();</script>
      <script>hljs.initLineNumbersOnLoad({singleLine: true});</script>


	<style type="text/css">
		.hljs-ln td.hljs-ln-numbers {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;

    text-align: center;
    color: #ccc;
    vertical-align: top;
    padding-right: 7px;

    /* your custom style here */
}

.hljs-ln td.hljs-ln-code {
    padding-left: 10px;
}
		.side_nav{
			
			height:100px;
		}
		.main{
			height:100px;
		}
		a{
        color: inherit;
        text-decoration: none; 
      }
      a:link, a:visited {
      	text-decoration: none;

      }
pre{
	overflow-x:auto; 
	outline: none;
}

	</style>
</head>
<?php
$piid=$_GET['piid'];
session_start();
$msg = "";
if($handle = opendir('project_files/'.$piid.'')){
 while (false !== ($file = readdir($handle)))
 {
 if (($file != ".")
 && ($file != ".."))
 {
 $msg .= '<tr><td><ion-icon name="document" class="ff"></ion-icon><a href="source_discuss.php?file='.$piid.'/'.$file.'&piid='.$piid.'&f='.$file.'"> '.$file.'</a></td></tr>';
 }
 }
 closedir($handle);
}
?>

<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
	<div class="navbar-header">
	<div class="navbar-brand" style="color:white;text-transform: uppercase;">Project management system</div>
	  </div>
	  <ul class="nav navbar-nav navbar-right">
      <li><?php
      if($_SESSION['u']=="student")
      {
      	echo '<li class="active"><a href="developer.php"><span class="glyphicon glyphicon-menu-left" style="font-size:20px;color:white"></span></a></li>';
      }else{
      	echo '<li class="active"><a href="selectiontest.php"><span class="glyphicon glyphicon-menu-left" style="font-size:20px;color:white"></span></a></li>';
      }

      ?>
      </li>
    </ul>
	</div>
</nav>

	<div class="col-md-2 side_nav">
		<div class="panel panel-success">
  <div class="panel-heading"><b>Repositories</b></div>
  <div class="panel-body">
  	<table class="table">
  		<?php echo $msg ?>
  	</table>
  	</div>
  </div>
</div>
	</div>
	<div class="col-md-6 main">
<pre style="line-height:13px">
<h><?php echo $_GET['f'];?></h>
	<code class="html">
<?php

highlight_file('project_files/'.$_GET['file'].'');
?>	
</code>
</pre>	
</div>

<div class="col-md-4">
<div class="panel panel-info">
  <div class="panel-heading">READ_ME.md</div>
  <div class="panel-body">
  	<?php
  	$con=new mysqli("localhost","root","","flash");  
      $query = "SELECT * FROM project WHERE id=$piid";
  $result = mysqli_query($con, $query);
  $output='<table>';
   while($row = mysqli_fetch_array($result))
  {
   $output .= '
        
        <tr><th><div>'.$row["p_title"].'</div></th></tr>
        <tr><td><div>'.$row["abstract"].'</div></td></tr>
      ';
  }
  $output .= '</table>';
  echo $output;
  ?>
  <br>
  <b>MODULES</b><br><br>
  <?php
  $result = mysqli_query($con,"SELECT * FROM modules WHERE prj_id=$piid");

echo "<table>";
while($row = mysqli_fetch_array($result))
{
echo "<tr><th>" . $row['m1'] . "</th><th>". $row['m2'] ."</th><th>". $row['m3'] ."</th><th>". $row['m4'] ."</th><th>". $row['m5'] ."</tr>";
echo "<tr><td>" . $row['m1s1'] . "</td><td>". $row['m2s1'] ."</td><td>". $row['m3s1'] ."</td><td>". $row['m4s1'] ."</td><td>". $row['m5s1'] ."</td></tr>";
echo "<tr><td>" . $row['m1s2'] . "</td><td>". $row['m2s2'] ."</td><td>". $row['m3s2'] ."</td><td>". $row['m4s2'] ."</td><td>". $row['m5s2'] ."</td></tr>";
echo "<tr><td>" . $row['m1s3'] . "</td><td>". $row['m2s3'] ."</td><td>". $row['m3s3'] ."</td><td>". $row['m4s3'] ."</td><td>". $row['m5s3'] ."</td></tr>";
echo "<tr><td>" . $row['m1s4'] . "</td><td>". $row['m2s4'] ."</td><td>". $row['m3s4'] ."</td><td>". $row['m4s4'] ."</td><td>". $row['m5s4'] ."</td></tr>";
echo "<tr><td>" . $row['m1s5'] . "</td><td>". $row['m2s5'] ."</td><td>". $row['m3s5'] ."</td><td>". $row['m4s5'] ."</td><td>". $row['m5s5'] ."</td></tr>";
echo "<tr><td>" . $row['m1s6'] . "</td><td>". $row['m2s6'] ."</td><td>". $row['m3s6'] ."</td><td>". $row['m4s6'] ."</td><td>". $row['m5s6'] ."</td></tr>";
echo "<tr><td>" . $row['m1s7'] . "</td><td>". $row['m2s7'] ."</td><td>". $row['m3s7'] ."</td><td>". $row['m4s7'] ."</td><td>". $row['m5s7'] ."</td></tr>";
echo "<tr><td>" . $row['m1s8'] . "</td><td>". $row['m2s8'] ."</td><td>". $row['m3s8'] ."</td><td>". $row['m4s8'] ."</td><td>". $row['m5s8'] ."</td></tr>";
echo "<tr><td>" . $row['m1s9'] . "</td><td>". $row['m2s9'] ."</td><td>". $row['m3s9'] ."</td><td>". $row['m4s9'] ."</td><td>". $row['m5s9'] ."</td></tr>";
echo "<tr><td>" . $row['m1s10'] . "</td><td>". $row['m2s10'] ."</td><td>". $row['m3s10'] ."</td><td>". $row['m4s10'] ."</td><td>". $row['m5s10'] ."</td></tr>";
}
echo "</table>";
?>
<?php
      
      $query = "SELECT * FROM projectt_subtitle WHERE prj_id=$piid";
  $result = mysqli_query($con, $query);
  $output='<table>';
   while($row = mysqli_fetch_array($result))
  {
   $output .= '
        <tr><th align="left"><div>'.$row["title"].'</div></td></tr>
        <tr></tr>
        <tr><td><div>'.$row["description"].'</div></td></tr>
      ';
  }
  $output .= '</table>';
  echo $output;
  ?>
<br>
<?php
      
      $query = "SELECT * FROM project WHERE id=$piid";
  $result = mysqli_query($con, $query);
  $output='<table>';
   while($row = mysqli_fetch_array($result))
  {
   $output .= '
        
        <tr><th>FRONT END</th></tr>
        <tr><td><div>'.$row["f_end"].'</div></td></tr>
        <tr><th>BACK END</th></tr>
        <tr><td><div>'.$row["b_end"].'</div></td></tr>
      ';
  }
  $output .= '</table>';
  echo $output;
  ?>
 </div>
</div>
	</div>






























<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>