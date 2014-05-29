 <!DOCTYPE html>
<html lang="en">
	<head>
<link rel="stylesheet" href="new.css" type="text/css" media="screen">
<script>
/**********************************************************************/
$(document).ready(function(){
	$('a.new1').click(function() {
		var name_id = $(this).find('p').html();
		$.get("ajax_file1.php", { name: name_id})
		.done(function(data) {
			$('#here'+name_id).html(data);
		});
		//$('.showdata1').hide();
		$('#here'+name_id).show();

	});
});
</script>

<style>
notes1{font-size: 0.5em;
  left: 0.5em;
  top: 0.5em;}
  
notes2{font-size: 0.5em;
  left: 0.5em;
  top: 1.3em;}

number{font-size: 0.7em;
  right: 0.5em;
  top: 0.5em;
  }
  </style>
</head>
<?php 
function call($para){
			
			$item=$para;
			mysql_connect("localhost","username","password");
			@mysql_select_db("dbname") or die("unable to select database");
			$sql = "SELECT * FROM new_chapter WHERE section_no = $item";
			$result=mysql_query($sql);
			$num=mysql_numrows($result);
			$i=0; 
echo"<div id='container' class='super-list variable-sizes clearfix'>"; ?>
  

			<?php while ($row=mysql_fetch_array($result)) 
				{

				$field1=$row['chapter_no'];
				$field2=$row['chapter_name'];?>
				 <a  class="new1 showdata1" href="#"  id="here<?php echo $field1 ?>" >    
				<!--<div id="here<?php echo $field1 ?>">Chapters</div>-->
				<?php echo"   <div class='element feature halogen width2 height2 '>";
				echo"  <h5 class='number' >".$field1."</h5>";
				echo"  <h3 class='name' >".$field2."</h3>";
				
				echo" </div>";
				echo" </a>";
				
				}
	
	
echo"</div>";							
}

$val=(int) $_GET['name'];

call($val);

?>
</html>
