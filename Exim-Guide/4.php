<html>
<head>
<style>
.boxtitle{
color:#e85356;
font-weight:bold;
}
</style>

</head>
<?php
function callme($para){
			
			$item=$para;
			mysql_connect("localhost","username","password");
			@mysql_select_db("dbname") or die("unable to select database");
			$sql = "SELECT * FROM master WHERE itc = $item";
			$result=mysql_query($sql);
			$num=mysql_numrows($result);
			$i=0;
echo"<div id='container' class='super-list variable-sizes clearfix'>";
			while ($row=mysql_fetch_array($result)) 
				{

  
 
  

				$field1=$row['itc'];
				$field2=$row['description'];
				$field3=$row['policy'];
				$field4=$row['condition'];?>
				
				<?php 
				echo" <p class='boxtitle'> ITC(HS): ".$field1." <br> <p class='boxtitle'> Description: ".$field2."<br><p class='boxtitle'> Policy:".$field3."<br><p class='boxtitle'> Condition: ".$field4."</p>";
				
				
				
				
				echo" </a>";?>
				

                              
				<?php }
				
}

$val=(int) $_GET['name'];

callme($val);
?></html>

