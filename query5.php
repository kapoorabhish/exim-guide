<html>
<! siteground.com/tutorials/php-mysql/execute_server_commands.htm>
<body bgcolor="white" text="black">
<?php
$itc= $_POST ["code"];
$count=strlen(((string)$itc));
mysql_connect("phpmyadmin","root","12345");
@mysql_select_db("test") or die("unable to select database");
#code for two digits
if(($count==1)||($count==2))
{	$query2=mysql_query("select hs4_no,hs4_des from hs4");
	$query1=mysql_query("select chapter_no,chapter_name from chapter where chapter_no=$itc");
	
	while($row1=mysql_fetch_array($query1))
	{
		echo "<b>Chapter-".$row1['chapter_no']."--------"."<i>".$row1['chapter_name']."</i>"."</b>";
		echo "<br>";
		echo "<br>";
	    
	    
		while($row2=mysql_fetch_array($query2))
		{    
			if($itc==((int)($row2['hs4_no']/100)))
			{
				echo" <u>Sub-Heading</u>   &nbsp;"."<b>".$row2['hs4_no']."</b>"."<br>"."<b>".$row2['hs4_des']."</b>";
				echo "<br>";
				$query3=mysql_query("select hs6_no,hs6_des from hs6 ");
				
				while($row3=mysql_fetch_array($query3))
				{     
					
					if($itc==((int)($row3['hs6_no']/10000)) && ((int)($row3['hs6_no']/100 ))==$row2['hs4_no'])
					{       
						echo$row3['hs6_no']."------------".$row3['hs6_des'];
						
						$query4=mysql_query("select ITC_HS,Description  from final");
						echo "<table border='1' bgcolor='#98fb98'>";
						echo"<th width=100>ITC(HS)</th>";
						echo"<th width=1200>Item Description</th>";
						echo "<tr>";
						while($row4=mysql_fetch_array($query4))
						{
							
							if(((int)($row4['ITC_HS']/100))==$row3['hs6_no'])
							{
								
								echo "<td>".$row4['ITC_HS']."</td>";
								echo "<td>".$row4['Description']."</td>";
								echo "</tr>";
							}
						}
					
					echo "</table>";
					echo"<br>";
					echo"<br>";
				
					
				}
			
				
				
			}
			
		}
		
	}
}
	
	
}




else if($count==4)
{
	$chap=(int)($itc/100);
	$query1=mysql_query("select chapter_no,chapter_name from chapter where chapter_no=$chap");
	$row1=mysql_fetch_array($query1);
	echo "<b>Chapter-".$row1['chapter_no']."--------"."<i>".$row1['chapter_name']."</i>"."</b>";
	echo "<br>";
	echo "<br>";
	$query2=mysql_query("select hs4_no,hs4_des from hs4 where hs4_no=$itc");
	$row2=mysql_fetch_array($query2);
	echo" <u>Sub-Heading</u>   &nbsp;"."<b>".$row2['hs4_no']."</b>"."<br>"."<b>".$row2['hs4_des']."</b>";
	echo "<br>";
	$query3=mysql_query("select hs6_no,hs6_des from hs6 ");
	while($row3=mysql_fetch_array($query3))
	{
		if($itc==(int)($row3['hs6_no']/100))
		{
			echo$row3['hs6_no']."------------".$row3['hs6_des'];
			echo "<br>";
			echo "<br>";
		
		
			$query4=mysql_query("select ITC_HS,Description  from final");
			echo "<table border='1' bgcolor='#98fb98'>";
			echo"<th width=100>ITC(HS)</th>";
			echo"<th width=1200>Item Description</th>";
			echo "<tr>";
			while($row4=mysql_fetch_array($query4))
			{
					
				if(((int)($row4['ITC_HS']/100))==$row3['hs6_no'])
				{
								
					echo "<td>".$row4['ITC_HS']."</td>";
					echo "<td>".$row4['Description']."</td>";
					echo "</tr>";
				}
			}
					
		echo "</table>";
		echo"<br>";
		echo"<br>";
		}
	}
}
else if($count==6)
{
	$chap=(int)($itc/10000);
	$query1=mysql_query("select chapter_no,chapter_name from chapter where chapter_no=$chap");
	$row1=mysql_fetch_array($query1);
	echo "<b>Chapter-".$row1['chapter_no']."--------"."<i>".$row1['chapter_name']."</i>"."</b>";
	echo "<br>";
	echo "<br>";
	$hs4=(int)($itc/100);
	$query2=mysql_query("select hs4_no,hs4_des from hs4 where hs4_no=$hs4");
	$row2=mysql_fetch_array($query2);
	echo" <u>Sub-Heading</u>   &nbsp;"."<b>".$row2['hs4_no']."</b>"."<br>"."<b>".$row2['hs4_des']."</b>";
	echo "<br>";
	echo "<br>";
	$query3=mysql_query("select hs6_no,hs6_des from hs6 where hs6_no=$itc");
	$row3=mysql_fetch_array($query3);
	echo$row3['hs6_no']."------------".$row3['hs6_des'];
	echo "<br>";
	echo "<br>";
	$query4=mysql_query("select ITC_HS,Description  from final");
	echo "<table border='1' bgcolor='#98fb98'>";
	echo"<th width=100>ITC(HS)</th>";
	echo"<th width=1200>Item Description</th>";
	echo "<tr>";
	 while($row4=mysql_fetch_array($query4))
	{
				
		if(((int)($row4['ITC_HS']/100))==$row3['hs6_no'])
		{
				
			echo "<td>".$row4['ITC_HS']."</td>";
			echo "<td>".$row4['Description']."</td>";
			echo "</tr>";
		}
	}
					
	echo "</table>";
	echo"<br>";
	echo"<br>";
	
}
else if($count==8)
{
	$chap=(int)($itc/1000000);
	$query1=mysql_query("select chapter_no,chapter_name from chapter where chapter_no=$chap");
	$row1=mysql_fetch_array($query1);
	echo "<b>Chapter-".$row1['chapter_no']."--------"."<i>".$row1['chapter_name']."</i>"."</b>";
	echo "<br>";
	echo "<br>";	
	$hs4=(int)($itc/10000);
	$query2=mysql_query("select hs4_no,hs4_des from hs4 where hs4_no=$hs4");
	$row2=mysql_fetch_array($query2);
	echo" <u>Sub-Heading</u>   &nbsp;"."<b>".$row2['hs4_no']."</b>"."<br>"."<b>".$row2['hs4_des']."</b>";
	echo "<br>";
	echo "<br>";
	$hs6=(int)($itc/100);
	$query3=mysql_query("select hs6_no,hs6_des from hs6 where hs6_no=$hs6");
	$row3=mysql_fetch_array($query3);
	echo$row3['hs6_no']."------------".$row3['hs6_des'];
	echo "<br>";
	echo "<br>";
	
	$query4=mysql_query("select ITC_HS,Description  from final where ITC_HS=$itc");
	echo "<table border='1' bgcolor='#98fb98'>";
	echo"<th width=100>ITC(HS)</th>";
	echo"<th width=1200>Item Description</th>";
	echo "<tr>";
	$row4=mysql_fetch_array($query4);
	echo "<td>".$row4['ITC_HS']."</td>";
	echo "<td>".$row4['Description']."</td>";
	echo "</tr>";
	echo "</table>";
	echo"<br>";
	echo"<br>";
}
mysql_close();

?>
</body>
</html>





