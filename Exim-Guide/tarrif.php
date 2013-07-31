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

<div class="bg-content">
      <div class="container">
    <div class="row">
          <div class="span12"> 


 <!--============================== content =================================-->
   <script src="gen_validatorv4.js" type="text/javascript"></script>    
<body>
  <div id="content">
    <div class="container"<br><br><br><br>
<form id = "myform" action="" method="post">
<input type="number" placeholder="ITC(HS)" name ="code">
   

<input type="number" placeholder="Enter CIF Value" name ="value">
   
<input type="submit" value="Submit">
</form>
<script type="text/javascript">
 			var frmvalidator  = new Validator("myform");
 			frmvalidator.addValidation("code","req","Please enter an input ");
 				frmvalidator.addValidation("code","numeric","Please Enter Numeric Value");
 			
 			frmvalidator.addValidation("value","req","Please enter an input ");
 			frmvalidator.addValidation("value","numeric","Please Enter Numeric Value");
 		
		</script>
		
<?php

$value=$_POST[value];
$itc=$_POST[code];
echo "<h5>Tarrif Calculated For ITC(HS) code  $itc  with CIF value   $value  is :</h5>";
include 'connect.php';
echo "<div id='no-more-tables'><table class='table table-hover'> ";
echo "<div id='no-more-tables'> <thead>";
echo"<div id='no-more-tables'><th><center>DUTY</center></th>";
echo"<div id='no-more-tables'><th>AMOUNT</th>";
echo "</thead>";
echo "<div id='no-more-tables'><tr><td:before>";
echo "<div id='no-more-tables'><td data-title='DUTY'><center>".'Assesable Value:'."</center></td>";
$av=$value+(0.01)*$value;
echo "<div id='no-more-tables'><td>".$av."</td>";
echo "</tr>";

$query= mysql_query("select * from tarrif where code = $itc");
$row=mysql_fetch_array($query);
$bd=$row['basic_duty'];

$bd=($av*$bd)/100;

echo "<tr>";
echo "<div id='no-more-tables'><td data-title='DUTY'><center>".'Basic Duty of Customs:'."<center></td>";
echo "<div id='no-more-tables'><td >"."+ ".+$bd."</td>";
echo "</tr>";

$bd_pref=$row['basic_pref'];
$bd1=($av*$bd_pref)/100;
echo "<tr>";
echo "<div id='no-more-tables'><td data-title='DUTY'><center>".'Basic Duty Pref:'."</center></td>";
echo "<div id='no-more-tables'><td >"."+ ".$bd1."</td>";
echo "</tr>";
$bd_amt=$bd+$bd_pref;

$cvd=$row['cvd'];
$cvd_amt=($av+$bd_amt)*($cvd/100);
echo "<tr>";
echo "<div id='no-more-tables'><td data-title='DUTY'><center>".'Additional Duty of Customs(CVD):'."</center></td>";
echo "<div id='no-more-tables'><td>"."+ ".$cvd_amt."</td>";
echo "</tr>";

$edu_cess=0;
$edu_amt=$cvd_amt*($edu_cess/100);
echo "<tr>";
echo "<div id='no-more-tables'><td data-title='DUTY'><center>".'Central Excise Education Cess:'."</center></td>";
echo "<div id='no-more-tables'><td >"."+ ".$edu_amt."</td>";
echo "</tr>";
$cus_cess=$row['cess'];
$cus_amt=($bd_amt+$cvd_amt+$edu_amt)*($cus_cess/100);
echo "<tr>";
echo "<div id='no-more-tables'><td data-title='DUTY'><center>".'Customs Education Cess:'."</center></td>";
echo "<div id='no-more-tables'><td >"."+ ".$cus_amt."</td>";
echo "</tr>";

$spl_cvd=$row['spl_cvd'];
$spl_cvd_amt=($av+$bd_amt+$cvd_amt+$edu_amt+$cus_amt)*($spl_cvd/100);
echo "<tr>";
echo "<div id='no-more-tables'><td data-title='DUTY'><center>".'Special Additional Duty of Customs:'."</center></td>";
echo "<div id='no-more-tables'><td >"."+ ".$spl_cvd_amt."</td>";
echo "</tr>";

$total=$bd_amt+$cvd_amt+$edu_amt+$cus_amt+$spl_cvd_amt;

echo "<tr >";
echo "<div id='no-more-tables' ><td data-title='DUTY'><center>".'Total Customs Duty:'."</center></td>";
echo "<div id='no-more-tables'><td>"."= ".$total."</td>";
echo "</tr>";

		
		
		
	echo"</table>";

?>
</div>
</div> 
<!--============================== footer =================================-->
<?php include 'footer.tpl.php'; ?>

</body>
</html>
