<!doctype html>
<html>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<style>
@import url(http://weloveiconfonts.com/api/?family=entypo);
* {
  box-sizing: border-box;
}

body {
  background-color: #2E0072;
  padding: 0px;
}

.phone {
  width: 400px;
  height: 640px;
  background: #221c37;
  position: absolute;
  overflow:hidden;
  right:2px;


}
.phone .header {
  width: 100%;
  height: 70px;
  background: #9f1cfb;
  top: 0;
  padding: 20px;
  position: relative;
}
.phone .header .search {
  margin: 0 auto;
  width: 140px;
  border-radius: 20px;
  height: 35px;
  background: #b552ff;
}
.phone .header .like {
  position: absolute;
  height: 16px;
  width: 16px;
  right: 20px;
  top: 30px;
}
.phone .header .like svg {
  width: 100%;
  position: relative;
  left: 0;
  height: 16px;
  fill: #E8D1F9;
}
.phone .footer {
  position: absolute;
  bottom: 0;
  padding: 25px;
  width: 100%;
  left: 0;
  text-align: center;
}
.phone .footer i {
  position: relative;
  width: 100%;
}
.phone .footer .button {
  width: 70px;
  height: 70px;
  border-radius: 100%;
  display: inline-block;
  margin: 0 10px;
  cursor: pointer;
}
.phone .footer .delete {
  cursor: pointer;
  background-color: #4a4559;
  background-repeat: no-repeat;
  background-position: center;
  position: relative;
}
.phone .footer .delete svg {
  position: absolute;
  fill: white;
  left: 50%;
  margin-left: -15px;
  width: 30px;
  height: 30px;
  display: inline-block;
  top: 50%;
  margin-top: -15px;
}
.phone .footer .like {
  cursor: pointer;
  background-color: #ff2a64;
  background-repeat: no-repeat;
  background-position: center;
  position: relative;
}
.phone .footer .like svg {
  position: absolute;
  fill: white;
  left: 50%;
  margin-left: -15px;
  width: 30px;
  height: 30px;
  display: inline-block;
  top: 50%;
  margin-top: -15px;
}

.cards-wrapper {
  position: absolute;
  top: 110px;
  -webkit-perspective: 1500px;
          perspective: 1500px;
  left: 0;
  right: 0;
  margin-left: auto;
  margin-right: auto;
  width: 300px;
  z-index: 50;
}
.cards-wrapper li {
  background: white;
  width: 300px;
  height: 330px;
  position: absolute;
  left: 0;
  right: 0;
  margin-left: auto;
  margin-right: auto;
  cursor: pointer;
  border-radius: 10px;
}
.cards-wrapper li.open {
  cursor: default;
}
.cards-wrapper li:nth-child(1) {
  -webkit-transform: scale(0.6) translateY(-115px);
          transform: scale(0.6) translateY(-115px);
}
.cards-wrapper li:nth-child(2) {
  -webkit-transform: scale(0.7) translateY(-60px);
          transform: scale(0.7) translateY(-60px);
}
.cards-wrapper li:nth-child(3) {
  -webkit-transform: scale(0.8) translateY(-15px);
          transform: scale(0.8) translateY(-15px);
}
.cards-wrapper li:nth-child(4) {
  -webkit-transform: scale(0.9) translateY(25px);
          transform: scale(0.9) translateY(25px);
}
.cards-wrapper li:nth-child(5) {
  -webkit-transform: scale(1) translateY(60px);
          transform: scale(1) translateY(60px);
}
.cards-wrapper .card-header {
  top: 0;
  width: 100%;
  height: 95px;
  display: table;
  padding: 10px 16px;
  border-radius: 5px 5px 0 0;

}
.cards-wrapper .card-header .menu {
  display: table-cell;
  vertical-align: middle;
  color: white;
  opacity: 0;
  visibility: hidden;
}
.cards-wrapper .card-header .close {
  display: table-cell;
  color: white;
  text-align: right;
  vertical-align: middle;
  opacity: 0;
}
.cards-wrapper .card-header .close svg {
  position: relative;
  width: 16px;
  height: 16px;
  fill: white;
  cursor: pointer;
}
.cards-wrapper .card-content {
  text-align: center;
  overflow-y: : auto;
}
.cards-wrapper .card-content .abstract {
  width: 280px;
  height: 150px;
  background: #d2d2d2;
  margin-bottom: 35px;
  margin: 0 auto;
  border-radius: 20px;

}

.cards-wrapper .card-content .text {
  height: 0px;
  border-radius: 50px;
  background: #d2d2d2;
  margin: 10px auto;
  width: 340px;
  overflow: auto;
}
.cards-wrapper .card-content .text:last-child {
  max-width: 250px;
  overflow: auto;
}
.cards-wrapper .yellow .card-header {
  background-image: linear-gradient(to right bottom,#00a2ff,#9F1CFB);
}
.cards-wrapper .sky .card-header {
  background: #21ccff;
}
.cards-wrapper .blue .card-header {
  background: #0d0de9;
}
.cards-wrapper .green .card-header {
  background: #0edfb5;
}
.cards-wrapper .pink .card-header {
  background: #ef03fc;
}
#u_name{
  background-color: #FF2A64;
  box-shadow: 0 5px 20px rgba(41, 244, 153, 0.3);
    font-family: 'Fredoka One', cursive;
    color: white;
    padding: 4px 8px;
    text-align: center;
    text-decoration: none;
    outline: none;
    display: inline-block;
    font-size: 17px;
    font-weight:lighter;
    position:relative;
    margin-left: -15px;
    margin-top: -11.5px;
    border-radius:0px 0px 10px 0px;
}
#u_title{
  position: relative;
  top:-9px;
  color:white;
  font-weight: bold;
  height: 40px;
}
.abstract_label{
  position: relative;
  text-align: left;
  left:5px;
  color:#595959;
  margin-top:8px;
  margin-bottom: 8px;
  margin-left:5px;
}
#p_guide{
position:relative;
left:210px;
top:-28px;
color:#05F91B;
}
#ends{
  text-align:right;
  position:relative;
  right:-50px;
  background-color: #1BEA14;
  top:10px;
  border-radius:10px 0px 0px 0px;
}
#main{
  position: absolute;
  width:950px;
  height:640px;
  background-color: #221C37;

}
#m_header{
  position: absolute;
  width:950px;
  height:70px;
  background-color:#9F1CFB;
}
#m_content{
  position: absolute;
  width:950px;
  height: 570px;
  top:70px;
  overflow-y: auto;
  overflow-x:hidden;
  padding-left: 27px;
}
.pmcard_wraper{
  height:190px;
  width:240px;
  background-color: white;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}
.pmcard_wraper:hover{
 box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
.pm_title{
  position: absolute;
  height:135px;
  width:240px;
  padding: 10px;
  text-transform: uppercase;
  font-size:18px;
  font-weight: bolder;
  box-sizing: border-box;
  background-color:white;
  color: #797979;
  border-radius: 5px 5px 0px 0px;
}
.end{
  position:relative;
  height:55px;
  width:240px;
background-color: #4A4559;
  bottom: -135px;
  padding: 5px;
  color:white;
  font-weight: bold;
  box-sizing: border-box;
}
.u{
  position: absolute;
  bottom:0px;
  right:0px;
  margin: 5px;
  color: white;
  font-weight:normal;
  font-size: 14px;
  background-color: #55D002;
  padding:1px 6px 1px 6px;
  border-radius: 20px;
  text-transform: capitalize;
}
#piechart{
  padding-left: -40px;
  float: right;
  position: relative;
  top:-300px;
  right: -120px;
}
.uu{
  padding:10px;
  font-size: 20px;
  background-color:#B552FF;
  border-radius: 20px;
  display: inline;
  margin: 5px;
  position: absolute;
  top:6px;
  left:6px; 
  color: white;
}
</style>
<script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
</head>
<body>

  <div id="main">
    <div id="m_header">
      <div class="uu">
        hareesh
      </div>
      <div style="float:right;font-size: 40px;"><a href="../layout.php"><ion-icon name="home" class="forum_home"></ion-icon></a></div>
    </div>
    <div id="m_content">
    
    
    <div id="line_top_x"></div>
    <div id="piechart"></div>
<?php
$connect = mysqli_connect("localhost", "root", "", "flash");
$query = "SELECT * FROM project ORDER BY id DESC LIMIT 20";
  $result = mysqli_query($connect, $query);
  $i=0;
  $output = '
   <table cellpadding="25"><div>
  ';
  while($row = mysqli_fetch_array($result))
  {

    if($i%3==0){

      $output .= '<tr><td><a href="source_discuss.php?piid=' . $row["id"] . '"><div class="pmcard_wraper"><div class="pm_title">' . $row["p_title"] . '<div class="u">' . $row["usr_id"] . '</div></div><div class="end">' . $row["f_end"] . ' / ' . $row["b_end"] . '</div></div></a></td>
';
 

    }else{

      $output .= '<td><a href="source_discuss.php?piid=' . $row["id"] . '"><div class="pmcard_wraper"><div class="pm_title">' . $row["p_title"] . '<div class="u">' . $row["usr_id"] . '</div></div><div class="end">' . $row["f_end"] . ' / ' . $row["b_end"] . '</div></div></a></td>
';

    }
$i++;

   
  }
  $output .= '</tr></table>';
  echo $output;
?>











    </div>
  </div>






<div class="phone">
  <div class="header">
    <div class="search"></div>
    <div class="like">
      <svg>
        <use xlink:href="#love" />
      </svg>
    </div>
  </div>
    <ul class="cards-wrapper">
      <?php
      $con=new mysqli("localhost","root","","flash");
      $query = "SELECT * FROM project WHERE status='pending' ORDER BY id ASC LIMIT 5";
      $color= array("sky","green","yellow","pink","blue");
      $colorarray=array_rand($color);
  $result = mysqli_query($con, $query);
  $output='';
   while($row = mysqli_fetch_array($result))
  {
   $output .= '
        <li class="card yellow">
        <input type="hidden" id="cardId" name="cardId" value="'.$row["id"].'">
        <input type="hidden" id="usrid" name="usrid" value="'.$row["usr_id"].'">
        <div class="card-header">
        <div id="u_name">'.$row["usr_id"].'</div>
         <div id="p_guide"> '.$row["p_guide"].'</div>
        <div id="u_title">'.$row["p_title"].'</div>
          <div id="ends">'.$row["f_end"].'/'.$row["b_end"].'</div>
          <span class="close">
            <svg>
              <use xlink:href="#cross" />
            </svg>
          </span>
        </div>
        <div class="card-content">
        <div class="abstract_label">ABSTRACT</div>
          <div class="abstract">'.$row["abstract"].'</div>
          <div class="abstract_label">MODULES</div>
          <div class="text" id="module">
          <iframe src="module_table.php"></iframe>
       </div>
        </div>
      ';
  }
  $output .= '</li>';
  echo $output;
  ?>     
    </ul>
  <div class="footer">
    <div class="delete button">
      <svg>
        <use xlink:href="#cross" />
      </svg>
    </div>
    <div class="like button">
      <svg>
        <use xlink:href="#love" />
      </svg>
    </div>
  </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg">

<symbol id="love" viewBox="0 0 510 510">
	<g id="favorite">
		<path d="M255,489.6l-35.7-35.7C86.7,336.6,0,257.55,0,160.65C0,81.6,61.2,20.4,140.25,20.4c43.35,0,86.7,20.4,114.75,53.55
			C283.05,40.8,326.4,20.4,369.75,20.4C448.8,20.4,510,81.6,510,160.65c0,96.9-86.7,175.95-219.3,293.25L255,489.6z"/>
	</g>
</symbol>

<symbol id="cross" viewBox="0 0 357 357">
	<g id="clear">
		<polygon points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3 
			214.2,178.5 		"/>
	</g>
</symbol>
</svg>

</body>
<script>
	var $delete = $('.delete'),
    $like = $('.like'),
    $header = $('.header'),
    $close = $('.close'),
    $corazon = $('.header').find('svg');
    $openCard = $('.cards-wrapper').find('.card').eq(4),
    deletecard = new TimelineMax(),
    lovecard = new TimelineMax(),
    openthecard = new TimelineMax();    
function deleteCard(){
  
  $delete.on('click', function(){
    
    var $card = $('.cards-wrapper').find('.card').eq(4);
    $card.attr('style','');
    
    var $cardContent = $card.clone().wrap('<li>').parent().html();
    $('.cards-wrapper').prepend($cardContent);
    TweenLite.fromTo($delete, 0.5, {boxShadow: '0 0 0 0 rgba(0,0,0,0.5)' }, {boxShadow: '0 0 0 20px rgba(0,0,0,0)'});
    var id= $('#cardId').val();
     
    var datatosend='id='+id;
    $.ajax({
     url:"selection_cancel.php",
     type:"POST",
     data:datatosend,
    });
    cardAnimate($card);
    refreshOpen();
    

  });  
}

function cardAnimate($card){
  
  deletecard.to($card, 0.35,  {
    rotationZ:-85, 
    transformOrigin:"0 385px",
  })
  .to($card, 0.2, {opacity:0.8, onComplete: function(){
      $card.remove();
    } }, '-=0.32')
  document.location.reload(true);
}

function likeAnimate($card){
  lovecard.to($card, 0.5,  {
    y:'-=100',
    scale:0.5,
  })
  .to($card, 0.4, {
    opacity:0.5, 
    scale:0, 
    x: '175',
    y:'-=150',
    onComplete: function(){
      $card.remove();
    } }, "-=0.2")
  .to( $corazon, 0.5, {fill: '#ff2a64', onComplete: function(){
    TweenMax.to($corazon, 0.5, {fill:'#E8D1F9'});
    document.location.reload(true); 
  } } );
}


function refreshOpen(){
  
  $open = $('.cards-wrapper').find('.card').eq(4);
  $close = $('.close');
  
  $openCard = $open;
  openCard($openCard);
  closeCard($close);

}

function openCard(){
  $openCard.on('click', function(e) {
    
    var el = $(this); 
    var close = el.find('.card-header .close');
    var text = el.find('.card-content .text').eq(0);
    if( !(el.hasClass('open')) ){
      
      openthecard.to( $openCard, 0.3, {y:'-=100', scale: 1.33, height: 511} ) 
                .to( $header, 0.3, {y: '-=70'}, '-=0.3' )
                .to(text, 0.3, {borderRadius:'15px',height:150,width:580}, '-=0.3')        
                .to(close, 0.3, {opacity:1})
               
      el.addClass('open')
    }
 
  });
}

function closeCard(){
  
  $close.on('click', function(e) {
    e.stopPropagation();
    var el = $(this);
    var openCard = el.parents('.card');
    var text = openCard.find('.card-content .text').eq(0);
    var $card = $('.cards-wrapper').find('.card').eq(4);
    openCard.removeClass('open');
    openthecard.to( $header, 0.3, {y: '0'} )
    .to(text, 0.3, {borderRadius:'50px',height:0}, '-=0.3')  
    .to( el, 0.2, { opacity:0 }, '-=0.3' )
    .to( $openCard, 0.3, {y:'60', scale: 1, height: 330,  onComplete: function(){
      TweenMax.set($card, {clearProps:'all'}); 
    }}, '-=0.3' )
  });
}

function likeCard(){
  
  $like.on('click', function(e) {
    var el = $(this);
    var $card = $('.cards-wrapper').find('.card').eq(4);
    TweenLite.set($card, {clearProps:'all'}); 
    
    var $cardContent = $card.clone().wrap('<li>').parent().html();
    $('.cards-wrapper').prepend($cardContent);
    TweenLite.fromTo(el, 0.5, {boxShadow: '0 0 0 0 rgba(0,0,0,0.5)' }, {boxShadow: '0 0 0 20px rgba(0,0,0,0)'});
    var id= $('#cardId').val(); 
    var usrid= $('#usrid').val();
    var datatosend='id='+id;
    $.ajax({
     url:"selection_ok.php",
     type:"POST",
     data:datatosend,
    });
    likeAnimate($card);
    refreshOpen();
      
  });
  
}

likeCard();
closeCard();
openCard();
deleteCard();
  </script>
</html>
<div id="dummy" style="display: none">
  <?php 
  $result = mysqli_query($con,"SELECT * FROM modules WHERE prj_id=1");

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
  </div>
  <script>
    $(document).ready(function() {
  $("#dummy").html($("#module").html());
});
</script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['PENDING', 8],
  ['GRANTED', 2],
  ['REJECTED', 2],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'', 'width':550, 'height':400,colors: ['#D3D100','#6DD300','#FF0000'],backgroundColor: '',
  titleTextStyle: { color: '#FFF' },
  legendTextStyle: { color: '#FFF' },

};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Day');
      data.addColumn('number', 'Guardians of the Galaxy');
      data.addColumn('number', 'The Avengers');
      data.addColumn('number', 'Transformers: Age of Extinction');

      data.addRows([
        [1,  37.8, 80.8, 41.8],
        [2,  30.9, 69.5, 32.4],
        [3,  25.4,   57, 25.7],
        [4,  11.7, 18.8, 10.5],
        [5,  11.9, 17.6, 10.4],
        [6,   8.8, 13.6,  7.7],
        [7,   7.6, 12.3,  9.6],
        [8,  12.3, 29.2, 10.6],
        [9,  16.9, 42.9, 14.8],
        [10, 12.8, 30.9, 11.6],
        [11,  5.3,  7.9,  4.7],
        [12,  6.6,  8.4,  5.2],
        [13,  4.8,  6.3,  3.6],
        [14,  4.2,  6.2,  3.4]
      ]);

      var options = {
        chart: {
          title: '',
          subtitle: 'PROJECT STATUS'
        },
        width: 900,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        },
        backgroundColor: ''
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>