<!DOCTYPE html>

<html lang="en">
<style>
.typeahead,
.tt-query,
.tt-hint {
  width: 205px;
  height: 30px;
  padding: 8px 1px;
  font-size: 24px;
  line-height: 30px;
  border: 2px solid #ccc;
  -webkit-border-radius: 8px;
     -moz-border-radius: 8px;
          border-radius: 8px;
  outline: none;
}

.typeahead {
  background-color: #fff;
}

.typeahead:focus {
  border: 2px solid #e85356;
}

.tt-query {
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
     -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

.tt-hint {
  color: #999
}

.tt-dropdown-menu {
  width: 215px;
  margin-top: 12px;
  padding: 8px 0;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-border-radius: 8px;
     -moz-border-radius: 8px;
          border-radius: 8px;
  -webkit-box-shadow: 0 5px 5px rgba(0,0,0,.2);
     -moz-box-shadow: 0 5px 5px rgba(0,0,0,.2);
          box-shadow: 0 5px 5px rgba(0,0,0,.2);
}

.tt-suggestion {
  padding: 5px 1px;
  font-size: 16px;
  line-height: 8px;
}

.tt-suggestion.tt-is-under-cursor {
  color: #fff;
  background-color: #e85356;

}

.tt-suggestion p {
  margin: 0;
}
</style>
<script type="text/javascript" src="js/typeahead.js"></script>
<script	type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> <?php include 'header.tpl.php'; ?>
</head>
<style>
.top {opacity:0.2; }
.top:hover { opacity:1.0; }
</style>

	
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
                   
                  </ul> <li class="star"><a href="/2/">3-Click </a></li>
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
	<div><center>
		<form id ="myform" action="query.php" method="post">
			<input type="number" placeholder="ITCHS Code" autofocus name ="code" class="form-poshytip" title="1. 2-digit : Chapter level.
2.4 digit : Sub Heading.
3. 8 digit : Exact Code" >
		<div>	<input type="submit" value="Submit"></div>
		</form></div>
		<script type="text/javascript">
 			var frmvalidator  = new Validator("myform");
 			frmvalidator.addValidation("code","req"," Please Enter an input  ");
 				frmvalidator.addValidation("code","numeric","Please Enter Numeric Value");
 			frmvalidator.addValidation("code","maxlen=8","Max length for ITC(HS) code is 8");
 		
		</script><center>
		<form id ='myform1' action="query2.php" method="post">
		<div class="example-items .typeahead">	
		<input  class="typeahead" type="text" placeholder="Items" data-provide="typeahead" name="items" class="form-poshytip" title="Enter any word">
 		</div>	
 		<input type="submit" value="Submit" autocomplete= "off">
		</form>
		<script>
		$('.example-items .typeahead').typeahead({
		name: 'items', 
		// prefetch: '../test.json',
		local: [ "Horses","gold","Plastic","Monkey","Asses","Animals","Swine","Sheep","goats",]
		});
		
		</script>
		
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
