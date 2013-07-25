 <!DOCTYPE html>
<html lang="en">
	<head>
<link rel="stylesheet" href="style.css" type="text/css" media="screen">
</head>


</head>

<?php 
function call($para){
			
			$item=$para;
			mysql_connect("localhost","ClassyCleats","ClassyCleats");
			@mysql_select_db("ClassyCleats") or die("unable to select database");
			$sql = "SELECT * FROM new_chapter WHERE section_no = $item";
			$result=mysql_query($sql);
			$num=mysql_numrows($result);
			$i=0; 
echo"<div id='container' class='super-list variable-sizes clearfix' style='background:#FFFDEB;'>"; ?>
  

			<?php while ($row=mysql_fetch_array($result)) 
				{

				$field1=$row['chapter_no'];
				$field2=$row['chapter_name'];?>
				 <a  href="#" onclick="loadXMLDoc1('ajax_file1.php','<?php echo $field1 ?>')" id="here<?php echo $field1 ?>" >    
				<!--<div id="here<?php echo $field1 ?>">Chapters</div>-->
				<?php echo"   <div class='element feature halogen width2 height2 '>";
				echo"  <h2 class='number'>".$field1."</h2>";
				echo"  <h3 class='name'>".$field2."</h3>";
				
				echo" </div>";;
				echo" </a>";
				}
	
	
echo"</div>";							
}

$val=(int) $_GET['name'];

call($val);

?>
</html>
