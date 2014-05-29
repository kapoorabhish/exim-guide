<!DOCTYPE html>
<html lang="en">
	<?php include 'header.tpl.php'; ?>
	<body>
    <div class="spinner"></div> 
<!--============================== header =================================-->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="index.php"><img alt="" src="imgs/logo.gif"> </a></h1>
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
                   
                </ul> <li class="act"><a href="3-click.html">3-Click </a></li>
                </li>
               
              
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

 <!--============================== content =================================-->
 <script src="gen_validatorv4.js" type="text/javascript"></script>
<div id="content">
	<div class="container">
	<h3>EXPORT</h3>
		<form id ="myform" action="query.php" method="post">
			<input type="number" placeholder="ITCHS Code" autofocus name ="code" >
			<input type="submit" value="Submit">
		</form>
		<script type="text/javascript">
 			var frmvalidator  = new Validator("myform");
 			frmvalidator.addValidation("code","req","Please enter an input ");
 				frmvalidator.addValidation("code","numeric","Please Enter Numeric Value");
 			frmvalidator.addValidation("code","maxlen=8","Max length for ITC(HS) code is 8");
 		
		</script>
		<form id ='myform1' action="query2.php" method="post">
			<input type="text" data-provide="typeahead" autocomplete="on" placeholder="Items" autofocus name="goods" >
 			<input type="submit" value="Submit">
		</form>
		<div class="clear"></div>
        	<ul class="thumbnails thumbnails-1 list-services">
        		<li class="span4 offset3">
        			<div class="thumbnail thumbnail-1"><h3>Notes:</h3>
        				<h6 style="color:#fff;font-family: 'Roboto Slab', serif;font-weight:400; font-size:100%; word-spacing:5px;" >
        				<li>Please Enter 2-4-6-8 digit numeric code in "ITCHS code" field.
        				<li>You can search by any word through "Item field". 
        				
        				</h6>
        								
        								
        			</div>
        		</li>
        	</ul>
		<script type="text/javascript">
			 var frmvalidator  = new Validator("myform1");
  			 frmvalidator.addValidation("goods","req","Please enter an input ");
 			 frmvalidator.addValidation("goods","alpha_s","Please Enter Text Only ");
       		</script>
	</div>
</div>
<!--============================== footer =================================-->
<?php include 'footer.tpl.php'; ?>
</body>
</html>
