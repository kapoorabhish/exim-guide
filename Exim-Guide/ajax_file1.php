 <!DOCTYPE html>
<html lang="en">
	<head>
<style>
.nm{
color:#000;
font-size:0.7em;
 right: 10%;
  top:0.8em;
  text-align: left;
  margin-bottom: 0.1em;

  height: 0.5em;
 
  line-height:100%;
  padding:0.2em;
}
</style>
	 <link rel="stylesheet" type="text/css" href="colorbox.css" />
	
<script	type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				
				$(".ajax").colorbox();
				
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
<link rel="stylesheet" href="new.css" type="text/css" media="screen">
</head>
<?php 
function callme($para){
			
			$item=$para;
			mysql_connect("localhost","username","password");
			@mysql_select_db("dbname") or die("unable to select database");
			$sql = "SELECT * FROM divya WHERE chapter = $item";
			$result=mysql_query($sql);
			$num=mysql_numrows($result);
			$i=0;
echo"<div id='container' class='super-list variable-sizes clearfix'>";
			while ($row=mysql_fetch_array($result)) 
				{

  
 
  

				$field1=$row['itc'];
				$field2=$row['description'];?>
				<a href="4.php?name=<?php echo  $field1 ?>" class="ajax">
				<?php echo"<div class='element other-nonmetal '>";
				//echo"  <h2 class='number'>$field1</h2>";
				echo"  <h3 class='nm'>$field2</h3>";
				
				echo" </div>";
				echo" </a>";?>
				

                               <!-- <div style="display: none;">
                                        <div id="test-content ">
                                                 <h1><?php echo $field1 ?></h1>
                                                  <p><?php echo $field2 ?> </p>
                                         </div>
                                </div>-->
				<?php }
				
}

$val=(int) $_GET['name'];

callme($val);

?>

</html>
