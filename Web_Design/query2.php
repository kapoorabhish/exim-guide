<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Navik-About Us</title>
	<meta charset="utf-8">
	<link rel="icon" href="imgs/slogo.ico" type="image/x-icon">
	<link rel="shortcut icon" href="imgs/slogo.ico" type="image/x-icon" />
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>	  
	<script type="text/javascript" src="js/touchTouch.jquery.js"></script>
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>

	<script>		
		 jQuery(window).load(function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();    }	
		 
     jQuery('.magnifier').touchTouch();			
    jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});	
  		  }); 
				
	</script>

	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
	<!--<![endif]-->
	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <![endif]-->
	</head>

	<body>
    <div class="spinner"></div> 
<!--============================== header =================================-->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="navik.html"><img alt="" src="imgs/logo.gif"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li ><a href="navik.html">Home</a></li>
		<li class="active"><a href="about.html">About</a></li>
		
                <li class="sub-menu"><a href="service.html">Services</a>
                      <ul>
                    <li><a href="import.html">Import</a></li>
                    <li><a href="export.html">Export</a></li>
                    <li><a href="map.html">Maps</a></li>
                  </ul>
                    </li>
                <li><a href="help.html">Help</a></li>
               
                <li><a href="data.html">Data</a></li>
              </ul>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
    </header>
<div class="bg-content">
      <div class="container">
    <div class="row">
          <div class="span12"> 

<! siteground.com/tutorials/php-mysql/execute_server_commands.htm>
<body>
<?php

$item=$_POST ["goods"];
$search_term_esc = AddSlashes($item);

mysql_connect("phpmyadmin","root","12345");
@mysql_select_db("test") or die("unable to select database");
$sql = "SELECT * FROM final2 WHERE Description LIKE '%$search_term_esc%'";
$result=mysql_query($sql);
$num=mysql_numrows($result);
$i=0;
echo "<table border='3' bgcolor='yellow'>";
echo"<th>ITC(HS)</th>";
echo"<th>Item Description</th>";
echo"<th>hs(4)</th>";
echo"<th>hs(5)</th>";
echo"<th>hs(6)</th>";
echo"<th>hs(8)</th>";
echo"<th>Policy</th>";
echo"<th>Condition</th>";
while ($i<$num) {
$field1=mysql_result($result,$i,"itc");
$field2=mysql_result($result,$i,"description");
$field3=mysql_result($result,$i,"hs4");
$field4=mysql_result($result,$i,"hs5");
$field5=mysql_result($result,$i,"hs6");
$field6=mysql_result($result,$i,"hs8");
$field7=mysql_result($result,$i,"policy");
$field8=mysql_result($result,$i,"conditions");
echo "<tr>";
echo "<td>".$field1."</td>";
echo "<td>".$field2."</td>";
echo "<td>".$field3."</td>";
echo "<td>".$field4."</td>";
echo "<td>".$field5."</td>";
echo "<td>".$field6."</td>";
echo "<td>".$field7."</td>";
echo "<td>".$field8."</td>";
echo "</tr>";

//echo $field1;
//echo " ";
//echo $field2;
//echo "<br>";


$i++;
}


?>
</body>
</html>
