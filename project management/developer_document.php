<!doctype html>
<html>
<head>
  <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
  <link rel="stylesheet" href="developer.css">
<script src="jquery-3.3.1.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js">
 </script>
 <script type="text/javascript">
     $(function() {
     var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#document_preview').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('abstract.pdf');
});
});
 </script>
</head>
<body>

<div id="header">
  <ion-icon name="code" class="code_brand"></ion-icon>
  <div class="developer_label">Developer</div>
  <a href="developer_files.php"><ion-icon name="folder" class="terminal"></ion-icon></a>
  <a href="developer_document.php"><ion-icon name="document" class="document"></ion-icon></a>
  <a href="developer.php"><ion-icon name="contact" class="dashboard"></ion-icon></a>
  <a href="../layout2.php"><ion-icon name="home" class="home"></ion-icon></a>
</div>


<?php
$con=new mysqli("localhost","root","","flash");
session_start();
$pid=$_SESSION['project'];
$msg = "";
if($handle = opendir('project_files/'.$pid.'')){
 while (false !== ($file = readdir($handle)))
 {
 if (($file != ".")
 && ($file != ".."))
 {
 $msg .= '<li><ion-icon name="document" class="ff"></ion-icon><a href="developer_files.php?file='.$pid.'/'.$file.'"> '.$file.'</a></li>';
 }
 }
 closedir($handle);
}
?>


<div id="tree_view">
  <div class="project_id">
    <ion-icon name="finger-print" class="finger"></ion-icon>
    <div class="id_lable">ID:<?php echo $pid?></div>
    </div>
    <div  class="file_wraper">
      <div class="root_wraper"><ion-icon name="folder-open" class="root_folder"></ion-icon> <div class="rootfolder_title">PROJECT MANAGEMENT </div>
      <div class="subfolder">
        <?php echo $msg ?>

      </div>
    
    </div>
    </div>
</div>


<div id="enter">
  
  <form action="add.php" method="post">
    <table>
    <tr><td>TITLE</td></tr>
    <tr><td><input type="text" name="heading"></td></tr>
    <tr><td>DESCRIPTION</td></tr>
    <tr><td><textarea name="detail" rows="25" cols="80"></textarea></td>
    <tr align="right"><td><input type="submit" name="submit" value="submit"></td></tr>
    </table>
  </form>
<div id="editor"></div>
</div>

<div id="document_preview">
 <?php
      
      $query = "SELECT * FROM project WHERE id=$pid";
  $result = mysqli_query($con, $query);
  $output='<table>';
   while($row = mysqli_fetch_array($result))
  {
   $output .= '
        
        <tr><th><div contenteditable>'.$row["p_title"].'</div></th></tr>
        <tr><td><div contenteditable>'.$row["abstract"].'</div></td></tr>
      ';
  }
  $output .= '</table>';
  echo $output;
  ?>
  <br>
  <b>MODULES</b><br><br>
  <?php
  $result = mysqli_query($con,"SELECT * FROM modules WHERE prj_id=$pid");

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
      
      $query = "SELECT * FROM projectt_subtitle WHERE prj_id=$pid";
  $result = mysqli_query($con, $query);
  $output='<table>';
   while($row = mysqli_fetch_array($result))
  {
   $output .= '
        <tr><th align="left"><div contenteditable>'.$row["title"].'</div></td></tr>
        <tr></tr>
        <tr><td><div contenteditable>'.$row["description"].'</div></td></tr>
      ';
  }
  $output .= '</table>';
  echo $output;
  ?>
<br>
<?php
      
      $query = "SELECT * FROM project WHERE id=$pid";
  $result = mysqli_query($con, $query);
  $output='<table>';
   while($row = mysqli_fetch_array($result))
  {
   $output .= '
        
        <tr><th>FRONT END</th></tr>
        <tr><td><div contenteditable>'.$row["f_end"].'</div></td></tr>
        <tr><th>BACK END</th></tr>
        <tr><td><div contenteditable>'.$row["b_end"].'</div></td></tr>
      ';
  }
  $output .= '</table>';
  echo $output;
  ?>
  <a id="cmd"><ion-icon name="archive" class="download"></ion-icon></a>
  
</div>
  

  </body>
  </html>
 