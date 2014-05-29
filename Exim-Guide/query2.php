

<!DOCTYPE html>
<html lang="en">
	<?php include 'header.tpl.php'; ?>
	</head>
<style>
.chap{
color:#e6e6e6;
font-size: 1.3em;
}
.subhd{
color:#d8d8d8;
font-size:1.2em;
}
.hs{
color:#bdbdbd;
font-size:1.0em;
}
</style>

	<body>
    <div class="spinner"></div></html>

<div class="bg-content">
      <div class="container">
    <div class="row">
          <div class="span12"> 

 <!--============================== content =================================-->
 
<! siteground.com/tutorials/php-mysql/execute_server_commands.htm>
<body>
<?php
include 'connect.php';
$item=$_POST ["items"];
//$search_term_esc = AddSlashes($item);

$query1=mysql_query("SELECT * FROM master WHERE description LIKE '%$item%'");

$chaptest=-1;
$sub=-1;
$hs6=-1;
$hs8=-1;
while($row1=mysql_fetch_array($query1))
{
	$chap=(int)($row1['itc']/1000000);
	$chapter_note=(string)$chap;
	$row2=mysql_fetch_array(mysql_query("select chapter_no,chapter_name from chapter where chapter_no=$chap"));
	if($row2['chapter_no']!=$chaptest)
	{
		echo"<br>";
		echo "<center><b class='chap'>Chapter-".$row2['chapter_no']." : "."<i>".$row2['chapter_name']."</i>"."</b></center>";
		
		if($chap<10)
		{
			echo"<center><a target=_blank href=http://dgftcom.nic.in/licasp/itchs2012/"."0".$chapter_note."head.pdf><h5 style = 'color: #e85356' > Chapter Notes</h5></a>";
			//echo"<br>";
			echo"<a  target=_blank href=http://dgftcom.nic.in/licasp/itchs2012/"."0".$chapter_note."foot.pdf><h5 style = 'color: #e85356'>Policy Notes</h5></a></center>";
			echo"<br>";
		}
		else
		{
			echo"<center><a target=_blank href=http://dgftcom.nic.in/licasp/itchs2012/".$chapter_note."head.pdf><h5 style = 'color: #e85356' >Chapter Notes</h5></a>";
			//echo "<br>";
			echo"<a target=_blank href=http://dgftcom.nic.in/licasp/itchs2012/".$chapter_note."foot.pdf><h5 style = 'color: #e85356'>Policy Notes</h5></a></center>";
			echo"<br>";
			
		}
		
	}
	$chaptest=$chap;
	if($sub!=$row1['hs4_no'])
	{
		echo "<div class='subhd'>"."Subheading "."    &nbsp; ".$row1['hs4_no']."  &nbsp; "."     &nbsp;"."  :  ".$row1['hs4_des'];
		echo "</div>";	
		
		
		
	}
	$sub=$row1['hs4_no'];
	
	
		
	if($hs6!=$row1['$hs6_no'])
	{
		
		echo "<td><b class='hs'>"."HS6"."    &nbsp; ".$row1['hs6_no']."    &nbsp; : "."   &nbsp;".$row1['hs6_des']."</b></td>";
		
	}
	
		echo "<div id='no-more-tables'><table class='table table-hover'>";
		echo "<div id='no-more-tables'> <thead>";
		
		echo"<div id='no-more-tables'><th>ITC(HS)</th>";
		echo"<div id='no-more-tables'><th>Item Description</th>";
		echo"<div id='no-more-tables'><th>Policy</th>";
		echo"<div id='no-more-tables'><th>Condition</th>";
	echo "</thead>";
	if($hs8!=$row1['$hs8_no'])
	{	
		echo "<div id='no-more-tables'><tr><td:before>";
		
		echo "<div id='no-more-tables'><td data-title='ITC(HS)'>".$row1['itc']."</td>";
		echo "<div id='no-more-tables'><td data-title='HS(8)'>".$row1['hs8_des']."</td>";
		if(trim($row1['policy'])=="Free")
		echo"<div id='no-more-tables'><td data-title='Policy'>Permitted</td>";
		elseif($row1['policy']=="")
		echo"<div id='no-more-tables'><td data-title='Policy'>N/A</td>";
		else
		echo "<div id='no-more-tables'><td data-title='Policy'>".$row1['policy']."</td>";
		if($row1['conditions']=="")
		echo"<div id='no-more-tables'><td data-title='Condition'>N/A</td>";
		else
		echo "<div id='no-more-tables'><td data-title='Condition'>".$row1['conditions']."</td>";
		echo "</tr>";
echo "<br>";
		
		
	}	
	echo"</table>";
	echo"<br>";

}




?>
<!--============================== footer =================================-->
<?php include 'footer.tpl.php'; ?>

</body>
</html>
