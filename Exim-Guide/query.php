<!DOCTYPE html>
<html>
<?php include 'header.tpl.php'; ?>
	</head>
<style>
.top {opacity:0.2; }
.top:hover { opacity:1.0; }
</style>

	<body>
    <div class="spinner"></div></html>
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
                <li ><a href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		
                <li class="sub-menu, active"><a href="service.php">Services</a>
                      <ul>
                    <li><a href="trade.php">Trade</a></li>
                   <li><a href="tarrif.php">Tarrif</a></li>
                     <li><a href="iec.php">IEC Codes</a></li>
                  </ul>
                    </li>
                 <li class="sub-menu"><a href="help.php">Help</a>
               <ul>
                    <li><a href="weblink.php">Web-Links</a></li>
                   <li><a href="asso.php">Trade Associations</a></li>
                   
                  </u</ul> <li class="act"><a href="3-click.html">3-Click </a></li>
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

 <!--============================== content =================================-->
      
<?php

$itc= $_POST ["code"];
include 'connect.php';

$count=strlen((string)$itc);

if(($count==2)||($count==1))
{        if (($itc>0)&&($itc<99))
	{
	$chap=mysql_fetch_array(mysql_query("select chapter_name,chapter_no from chapter where chapter_no=$itc "));
		echo "<b>Chapter-".$itc."--------"."<i>".$chap['chapter_name']."</i>"."</b>";
		echo "<br>";
                               if($itc<10)
		{
			echo"<center><a  href=http://dgftcom.nic.in/licasp/itchs2012/"."0".$chap['chapter_no']."head.pdf><h5 style = 'color: #e85356' > Chapter Notes</h5></a>";
			//echo"<br>";
			echo"<a  href=http://dgftcom.nic.in/licasp/itchs2012/"."0".$chap['chapter_no']."foot.pdf><h5 style = 'color: #e85356'>Policy Notes</h5></a></center>";
			//echo"<br>";
		}
		else
		{
			echo"<center><a  href=http://dgftcom.nic.in/licasp/itchs2012/".$chap['chapter_no']."head.pdf><h5 style = 'color: #e85356' >Chapter Notes</h5></a>";
			//echo "<br>";
			echo"<a href=http://dgftcom.nic.in/licasp/itchs2012/".$chap['chapter_no']."foot.pdf><h5 style = 'color: #e85356'>Policy Notes</h5></a></center>";
			echo"<br>";
		}
		
		$query1=mysql_query("select hs4_no, hs4_des from hs4  ");
		while($row1=mysql_fetch_array($query1))
		{
			if((int)($row1['hs4_no']/100)==$itc)
			{
			echo"<br>";
			echo "Subheading"."    &nbsp; ".$row1['hs4_no']."    &nbsp; "."   &nbsp;"."<br>".$row1['hs4_des'];
			echo"<br>";
			$hs4=$row1['hs4_no'];
			$query2=mysql_query("select hs6_no, hs6_des from hs6  ");
			
			while($row2=mysql_fetch_array($query2))
			{
				if((int)($row2[hs6_no]/100)==$row1['hs4_no'])
				{
				
				echo"<br>";
				echo"<br>";
				echo "HS6"."    &nbsp; ".$row2['hs6_no']."    &nbsp; "."   &nbsp;".$row2['hs6_des'];
				
				$hs6=$row2['hs6_no'];
			
				$query3=mysql_query("select itc,hs8_des,policy,conditions from master where hs6_no=$hs6 ");
				
				echo "<div id='no-more-tables'><table class='table table-hover'>";
				echo "<div id='no-more-tables'> <thead>";
				echo"<div id='no-more-tables'><th >ITC(HS)</th>";
				echo"<div id='no-more-tables'><th >Item Description</th>";
				echo"<div id='no-more-tables'><th>Policy</th>";
				echo"<div id='no-more-tables'><th >Condition</th>";
				echo "</thead>";		
				while($row3=mysql_fetch_array($query3))
				{
					echo "<div id='no-more-tables'><tr><td:before>";
					echo "<div id='no-more-tables'><td data-title='ITC(HS)'>".$row3['itc']."</td>";
					echo "<div id='no-more-tables'><td data-title='HS(8)'>".$row3['hs8_des']."</td>";
					if($row3['policy']=="")
						echo"<div id='no-more-tables'><td data-title='Policy'>N/A</td>";
					elseif(trim($row3['policy'])=="Free")
					echo"<div id='no-more-tables'><td data-title='Policy'>Permitted</td>";
					else
						echo "<div id='no-more-tables'><td data-title='Policy'>".$row3['policy']."</td>";
					if($row3['conditions']=="")
						echo"<div id='no-more-tables'><td data-title='Condition'>N/A</td>";
					else
						echo "<div id='no-more-tables'><td data-title='Condition'>".$row3['conditions']."</td>";
					echo "</tr>";
				}
				echo"</table>";
				}
			}
		}
	}
		
		
		
	}
	else {
	echo "<br>";
	echo "<h3>Please Enter A Valid Two digit Level code</h3>";
	echo "<br>";
	echo"<a href ='trade.php'>&lt;&lt;Go BACK</a>";
	}
	
}

else if(($count==3)||($count==4))
{ 
$query=mysql_query("select hs4_no from hs4 where hs4_no=$itc");
if(!mysql_num_rows($query))
  {     echo "<br>";
	echo "<h3>Please Enter A Valid 2-4-6-8 digit Level code</h3>";
	echo "<br>";
	echo"<a href ='trade.php'>&lt;&lt;Go BACK</a>";
  }	
else {
      
      
      $chap=(int)($itc/100);
	$chapter_note=(string)($chap);
	$row=mysql_fetch_array(mysql_query("select chapter_name from chapter where chapter_no=$chap "));
	echo "<b>Chapter-".$chap."--------"."<i>".$row['chapter_name']."</i>"."</b>";
	echo "<br>";
	
	echo "<br>";
	if($chap<10)
		{
		echo"<center><a  href=http://dgftcom.nic.in/licasp/itchs2012/"."0".$chapter_note."head.pdf><h5 style = 'color: #e85356' > Chapter Notes</h5></a>";
			//echo"<br>";
			echo"<a  href=http://dgftcom.nic.in/licasp/itchs2012/"."0".$chapter_note."foot.pdf><h5 style = 'color: #e85356'>Policy Notes</h5></a></center>";
			//echo"<br>";
		}
		else
		{
			echo"<center><a  href=http://dgftcom.nic.in/licasp/itchs2012/".$chapter_note."head.pdf><h5 style = 'color: #e85356' >Chapter Notes</h5></a>";
			//echo "<br>";
			echo"<a href=http://dgftcom.nic.in/licasp/itchs2012/".$chapter_note."foot.pdf><h5 style = 'color: #e85356'>Policy Notes</h5></a></center>";
			echo"<br>";
		}
	
	
	$query1=mysql_query("select hs4_no, hs4_des from hs4 where hs4_no=$itc");
	while($row1=mysql_fetch_array($query1))
		{
			echo "Subheading"."    &nbsp; ".$row1['hs4_no']."    &nbsp; "."   &nbsp;"."<br>".$row1['hs4_des'];
			echo"<br>";
			$hs4=$row1['hs4_no'];
			$query2=mysql_query("select hs6_no,hs6_des from hs6");
			while($row2=mysql_fetch_array($query2))
			{
				
				if((int)($row2[hs6_no]/100)==$row1['hs4_no'])
				{
				echo"<br>";
				echo"<br>";
				echo "HS6"."    &nbsp; ".$row2['hs6_no']."    &nbsp; "."   &nbsp;".$row2['hs6_des'];
				
				$hs6=$row2['hs6_no'];
				$query3=mysql_query("select itc,hs8_des,policy,conditions from master where hs6_no=$hs6 ");
				echo "<div id='no-more-tables'><table class='table table-hover'>";
				echo "<div id='no-more-tables'> <thead>";
				echo"<div id='no-more-tables'><th >ITC(HS)</th>";
				echo"<div id='no-more-tables'><th >Item Description</th>";
				echo"<div id='no-more-tables'><th>Policy</th>";
				echo"<div id='no-more-tables'><th >Condition</th>";
				echo "</thead>";		
				while($row3=mysql_fetch_array($query3))
				{
					echo "<div id='no-more-tables'><tr><td:before>";
					echo "<div id='no-more-tables'><td data-title='ITC(HS)'>".$row3['itc']."</td>";
					echo "<div id='no-more-tables'><td data-title='HS(8)'>".$row3['hs8_des']."</td>";
					if($row3['policy']=="")
						echo"<div id='no-more-tables'><td data-title='Policy'>N/A</td>";
					elseif(trim($row3['policy'])=="Free")
					echo"<div id='no-more-tables'><td data-title='Policy'>Permitted</td>";
					else
						echo "<div id='no-more-tables'><td data-title='Policy'>".$row3['policy']."</td>";
					if($row3['conditions']=="")
						echo"<div id='no-more-tables'><td data-title='Condition'>N/A</td>";
					else
						echo "<div id='no-more-tables'><td data-title='Condition'>".$row3['conditions']."</td>";
					echo "</tr>";
				}
				echo"</table>";
			}
		   }
		}

	}

}

else if(($count==5)||($count==6))
{ 
$query=mysql_query("select hs6_no from hs6 where hs6_no=$itc");
if(!mysql_num_rows($query))
  {     echo "<br>";
	echo "<h3>Please Enter A Valid 2-4-6-8 digit Level code</h3>";
	echo "<br>";
	echo"<a href ='trade.php'>&lt;&lt;Go BACK</a>";
  }	
else {
	
	$chap=(int)($itc/10000);
	$chapter_note=(string)($chap);
	$row=mysql_fetch_array(mysql_query("select chapter_name from chapter where chapter_no=$chap"));
	echo "<b>Chapter-".$chap."--------"."<i>".$row['chapter_name']."</i>"."</b>";
	echo "<br>";
	if($chap<10)
		{
			echo"<center><a  href=http://dgftcom.nic.in/licasp/itchs2012/"."0".$chapter_note."head.pdf><h5 style = 'color: #e85356' > Chapter Notes</h5></a>";
			//echo"<br>";
			echo"<a  href=http://dgftcom.nic.in/licasp/itchs2012/"."0".$chapter_note."foot.pdf><h5 style = 'color: #e85356'>Policy Notes</h5></a></center>";
			//echo"<br>";
		}
		else
		{
			echo"<center><a  href=http://dgftcom.nic.in/licasp/itchs2012/".$chapter_note."head.pdf><h5 style = 'color: #e85356' >Chapter Notes</h5></a>";
			//echo "<br>";
			echo"<a href=http://dgftcom.nic.in/licasp/itchs2012/".$chapter_note."foot.pdf><h5 style = 'color: #e85356'>Policy Notes</h5></a></center>";
			echo"<br>";
		}
		echo "<br>";
	$sub=(int)($itc/100);
	$query1=mysql_query("select hs4_no,hs4_des from hs4 where hs4_no=$sub");
	$row1=mysql_fetch_array($query1);
		
	echo "Subheading"."    &nbsp; ".$row1['hs4_no']."    &nbsp; "."   &nbsp;"."<br>".$row1['hs4_des'];
	echo"<br>";
	$query2=mysql_query("select hs6_no,hs6_des from hs6 where hs6_no=$itc ");
	$row2=mysql_fetch_array($query2);
			
	echo"<br>";
	echo"<br>";
	echo "HS6"."    &nbsp; ".$row2['hs6_no']."    &nbsp; "."   &nbsp;".$row2['hs6_des'];
	$last=$row2['hs6_no'];
	$query3=mysql_query("select itc,hs8_des,policy,conditions from master where hs6_no=$last ");
	echo "<div id='no-more-tables'><table class='table table-hover'>";
				echo "<div id='no-more-tables'> <thead>";
				echo"<div id='no-more-tables'><th >ITC(HS)</th>";
				echo"<div id='no-more-tables'><th >Item Description</th>";
				echo"<div id='no-more-tables'><th>Policy</th>";
				echo"<div id='no-more-tables'><th >Condition</th>";
				echo "</thead>";		
				while($row3=mysql_fetch_array($query3))
				{
					echo "<div id='no-more-tables'><tr><td:before>";
					echo "<div id='no-more-tables'><td data-title='ITC(HS)'>".$row3['itc']."</td>";
					echo "<div id='no-more-tables'><td data-title='HS(8)'>".$row3['hs8_des']."</td>";
					if($row3['policy']=="")
						echo"<div id='no-more-tables'><td data-title='Policy'>N/A</td>";
					elseif(trim($row3['policy'])=="Free")
					echo"<div id='no-more-tables'><td data-title='Policy'>Permitted</td>";
					else
						echo "<div id='no-more-tables'><td data-title='Policy'>".$row3['policy']."</td>";
					if($row3['conditions']=="")
						echo"<div id='no-more-tables'><td data-title='Condition'>N/A</td>";
					else
						echo "<div id='no-more-tables'><td data-title='Condition'>".$row3['conditions']."</td>";
					echo "</tr>";
	}
	echo"</table>";
					
	
	}

	
	
}

else if(($count==7)||($count==8))
{ 
$query=mysql_query("select itc from master where itc=$itc");
if(!mysql_num_rows($query))
  {     echo "<br>";
	echo "<h3>Please Enter A Valid 2-4-6-8 digit Level code</h3>";
	echo "<br>";
	echo"<a href ='trade.php'>&lt;&lt;Go BACK</a>";
  }	
else {

     $chap=(int)($itc/1000000);
	$chapter_note=(string)($chap);
	$row=mysql_fetch_array(mysql_query("select chapter_name from chapter where chapter_no=$chap"));
	echo "<b>Chapter-".$chap."--------"."<i>".$row['chapter_name']."</i>"."</b>";
	echo "<br>";
	if($chap<10)
		{
			echo"<center><a  href=http://dgftcom.nic.in/licasp/itchs2012/"."0".$chapter_note."head.pdf><h5 style = 'color: #e85356' > Chapter Notes</h5></a>";
			//echo"<br>";
			echo"<a  href=http://dgftcom.nic.in/licasp/itchs2012/"."0".$chapter_note."foot.pdf><h5 style = 'color: #e85356'>Policy Notes</h5></a></center>";
			//echo"<br>";
		}
		else
		{
			echo"<center><a  href=http://dgftcom.nic.in/licasp/itchs2012/".$chapter_note."head.pdf><h5 style = 'color: #e85356' >Chapter Notes</h5></a>";
			//echo "<br>";
			echo"<a href=http://dgftcom.nic.in/licasp/itchs2012/".$chapter_note."foot.pdf><h5 style = 'color: #e85356'>Policy Notes</h5></a></center>";
			echo"<br>";
		}
	echo "<br>";
	$sub=(int)($itc/10000);
	$query1=mysql_query("select hs4_no,hs4_des from hs4 where hs4_no=$sub");
	$row1=mysql_fetch_array($query1);
		
	echo "Subheading"."    &nbsp; ".$row1['hs4_no']."    &nbsp; "."   &nbsp;"."<br>".$row1['hs4_des'];
	echo"<br>";
	$hs6=(int)($itc/100);
	$query2=mysql_query("select hs6_no,hs6_des from hs6 where hs6_no=$hs6 ");
	$row2=mysql_fetch_array($query2);
			
	echo"<br>";
	echo"<br>";
	echo "HS6"."    &nbsp; ".$row2['hs6_no']."    &nbsp; "."   &nbsp;".$row2['hs6_des'];
	$last=$row2['hs6_no'];
	$query3=mysql_query("select itc,hs8_des,policy,conditions from master where itc=$itc ");
	echo "<div id='no-more-tables'><table class='table table-hover'>";
				echo "<div id='no-more-tables'> <thead>";
				echo"<div id='no-more-tables'><th >ITC(HS)</th>";
				echo"<div id='no-more-tables'><th >Item Description</th>";
				echo"<div id='no-more-tables'><th>Policy</th>";
				echo"<div id='no-more-tables'><th >Condition</th>";
				echo "</thead>";		
				while($row3=mysql_fetch_array($query3))
				{
					echo "<div id='no-more-tables'><tr><td:before>";
					echo "<div id='no-more-tables'><td data-title='ITC(HS)'>".$row3['itc']."</td>";
					echo "<div id='no-more-tables'><td data-title='HS(8)'>".$row3['hs8_des']."</td>";
					if($row3['policy']=="")
						echo"<div id='no-more-tables'><td data-title='Policy'>N/A</td>";
					elseif(trim($row3['policy'])=="Free")
					echo"<div id='no-more-tables'><td data-title='Policy'>Permitted</td>";
					else
						echo "<div id='no-more-tables'><td data-title='Policy'>".$row3['policy']."</td>";
					if($row3['conditions']=="")
						echo"<div id='no-more-tables'><td data-title='Condition'>N/A</td>";
					else
						echo "<div id='no-more-tables'><td data-title='Condition'>".$row3['conditions']."</td>";
					echo "</tr>";
	}
	echo "</table>";

	}

}
?>

<!--============================== footer =================================-->
<?php include 'footer.tpl.php'; ?>
<!------------------------------------------------------------------------------------------------------->
<div class="top"><a style="position: fixed; bottom:5px;left:5px;" href="#" title="Back to Top"><img style="border: none; width:100px; height:100px;" src="imgs/top.jpeg"/></a></div>


<!------------------------------------------------------------------------------------------------------->
</body>
</html>
