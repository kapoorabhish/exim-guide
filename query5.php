<! siteground.com/tutorials/php-mysql/execute_server_commands.htm>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Navik-Import</title>
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
                <li><a href="navik.html">Home</a></li>
		<li><a href="about.html">About</a></li>
		
                <li class="sub-menu, active"><a href="service.html">Services</a>
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


<body bgcolor="white" text="black">
<?php
$itc= $_POST ["code"];
$count=strlen(((string)$itc));
mysql_connect("phpmyadmin","root","12345");
@mysql_select_db("test") or die("unable to select database");
if(($count==2&&$itc<=98)||($count==1&&$itc<=98))
{
	
		$chap=mysql_fetch_array(mysql_query("select chapter_name from chapter where chapter_no=$itc "));
		echo "<b>Chapter-".$itc."--------"."<i>".$chap['chapter_name']."</i>"."</b>";
		echo "<br>";
		echo "<br>";
		$query1=mysql_query("select hs4_no,hs4_des from master where itc like '$itc%' ");
		while($row1=mysql_fetch_array($query1))
		{
			echo "Subheading"."    &nbsp; ".$row1['hs4_no']."    &nbsp; "."   &nbsp;"."<br>".$row1['hs4_des'];
			echo"<br>";
			$query2=mysql_query("select hs6_no,hs6_des from master where itc like '$itc%' ");
			while($row2=mysql_fetch_array($query2))
			{
				echo"<br>";
				echo"<br>";
				echo "HS6"."    &nbsp; ".$row2['hs6_no']."    &nbsp; "."   &nbsp;".$row2['hs6_des'];
				
				$last=$row2['hs6_no'];
			
				$query3=mysql_query("select itc,hs8_des,policy,conditions from master where itc like '$last%' ");
				echo "<table border='1' bgcolor='#98fb98'>";
						echo"<th width=200>ITC(HS)</th>";
						echo"<th width=800>Item Description</th>";
						echo"<th width=200>Policy</th>";
						echo"<th width=200>Condition</th>";
						
				while($row3=mysql_fetch_array($query3))
				{
					echo "<tr>";
					echo "<td>".$row3['itc']."</td>";
					echo "<td>".$row3['hs8_des']."</td>";
					echo "<td>".$row3['policy']."</td>";
					echo "<td>".$row3['conditions']."</td>";
					echo "</tr>";
				}
				echo"</table>";
			
			}
			
		}
}



else if(($count==3&&$itc<=910)||($count==4&&$itc<=9805))
{
	$chap=(int)($itc/100);
	$row=mysql_fetch_array(mysql_query("select chapter_name from chapter where chapter_no=$chap "));
	echo "<b>Chapter-".$chap."--------"."<i>".$row['chapter_name']."</i>"."</b>";
	echo "<br>";
	echo "<br>";
	$query1=mysql_query("select hs4_no,hs4_des from master where hs4_no=$itc");
	while($row1=mysql_fetch_array($query1))
		{
			echo "Subheading"."    &nbsp; ".$row1['hs4_no']."    &nbsp; "."   &nbsp;"."<br>".$row1['hs4_des'];
			echo"<br>";
			$query2=mysql_query("select hs6_no,hs6_des from master where itc like '$itc%' ");
			while($row2=mysql_fetch_array($query2))
			{
				echo"<br>";
				echo"<br>";
				echo "HS6"."    &nbsp; ".$row2['hs6_no']."    &nbsp; "."   &nbsp;".$row2['hs6_des'];
				$last=$row2['hs6_no'];
				$query3=mysql_query("select itc,hs8_des,policy,conditions from master where itc like '$last%' ");
				echo "<table border='1' bgcolor='#98fb98'>";
						echo"<th width=200>ITC(HS)</th>";
						echo"<th width=800>Item Description</th>";
						echo"<th width=200>Policy</th>";
						echo"<th width=200>Condition</th>";
						
				while($row3=mysql_fetch_array($query3))
				{
					echo "<tr>";
					echo "<td>".$row3['itc']."</td>";
					echo "<td>".$row3['hs8_des']."</td>";
					echo "<td>".$row3['policy']."</td>";
					echo "<td>".$row3['conditions']."</td>";
					echo "</tr>";
				}
				echo"</table>";
			}
	}

	
}




else if(($count==5&&$itc<=91099)||($count==6&&$itc<=980590))
{
	$chap=(int)($itc/10000);
	$row=mysql_fetch_array(mysql_query("select chapter_name from chapter where chapter_no=$chap"));
	echo "<b>Chapter-".$chap."--------"."<i>".$row['chapter_name']."</i>"."</b>";
	echo "<br>";
	echo "<br>";
	$sub=(int)($itc/100);
	$query1=mysql_query("select hs4_no,hs4_des from master where hs4_no=$sub");
	$row1=mysql_fetch_array($query1);
		
	echo "Subheading"."    &nbsp; ".$row1['hs4_no']."    &nbsp; "."   &nbsp;"."<br>".$row1['hs4_des'];
	echo"<br>";
	$query2=mysql_query("select hs6_no,hs6_des from master where hs6_no=$itc ");
	$row2=mysql_fetch_array($query2);
			
	echo"<br>";
	echo"<br>";
	echo "HS6"."    &nbsp; ".$row2['hs6_no']."    &nbsp; "."   &nbsp;".$row2['hs6_des'];
	$last=$row2['hs6_no'];
	$query3=mysql_query("select itc,hs8_des,policy,conditions from master where itc like '$last%' ");
	echo "<table border='1' bgcolor='#98fb98'>";
	echo"<th width=200>ITC(HS)</th>";
	echo"<th width=800>Item Description</th>";
	echo"<th width=200>Policy</th>";
	echo"<th width=200>Condition</th>";
						
	while($row3=mysql_fetch_array($query3))
	{
		echo "<tr>";
		echo "<td>".$row3['itc']."</td>";
		echo "<td>".$row3['hs8_des']."</td>";
		echo "<td>".$row3['policy']."</td>";
		echo "<td>".$row3['conditions']."</td>";
		echo "</tr>";
	}
	echo"</table>";
				
				
}
else if(($count==7&&$itc<=9109990)||($count==8&&$itc<=98059000))
{
	$chap=(int)($itc/1000000);
	$row=mysql_fetch_array(mysql_query("select chapter_name from chapter where chapter_no=$chap"));
	echo "<b>Chapter-".$chap."--------"."<i>".$row['chapter_name']."</i>"."</b>";
	echo "<br>";
	echo "<br>";
	$sub=(int)($itc/10000);
	$query1=mysql_query("select hs4_no,hs4_des from master where hs4_no=$sub");
	$row1=mysql_fetch_array($query1);
		
	echo "Subheading"."    &nbsp; ".$row1['hs4_no']."    &nbsp; "."   &nbsp;"."<br>".$row1['hs4_des'];
	echo"<br>";
	$hs6=(int)($itc/100);
	$query2=mysql_query("select hs6_no,hs6_des from master where hs6_no=$hs6 ");
	$row2=mysql_fetch_array($query2);
			
	echo"<br>";
	echo"<br>";
	echo "HS6"."    &nbsp; ".$row2['hs6_no']."    &nbsp; "."   &nbsp;".$row2['hs6_des'];
	$last=$row2['hs6_no'];
	$query3=mysql_query("select itc,hs8_des,policy,conditions from master where itc=$itc ");
	echo "<table border='1' bgcolor='#98fb98'>";
	echo"<th width=200>ITC(HS)</th>";
	echo"<th width=800>Item Description</th>";
	echo"<th width=200>Policy</th>";
	echo"<th width=200>Condition</th>";
	$row3=mysql_fetch_array($query3);
	echo "<tr>";
	echo "<td>".$row3['itc']."</td>";
	echo "<td>".$row3['hs8_des']."</td>";
	echo "<td>".$row3['policy']."</td>";
	echo "<td>".$row3['conditions']."</td>";
	echo "</tr>";
	echo "</table>";
}
else
{
	echo"<h3>Sorry!! Wrong Code.</h3>";
}

?>
</body>
</html>
