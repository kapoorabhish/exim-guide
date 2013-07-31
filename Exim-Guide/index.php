        <!DOCTYPE html>
<html lang="en">
	<head>
	<title>Exim Guide</title>
	<link rel="icon" href="img/slogo.gif" type="image/x-icon">
	<link rel="shortcut icon" href="img/slogo.gif" type="image/x-icon" />
    <link rel="stylesheet" href="new.css" type="text/css" media="screen">
  	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/tables.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script src="assets/js/jquery.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap-typeahead.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>	  
	<script type="text/javascript" src="js/touchTouch.jquery.js"></script>
	<script type="text/javascript" src="js/typeahead.js"></script>
    <script  src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
     
     
     <link rel="stylesheet" type="text/css" href="css/colorbox.css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
<script type="text/javascript">
    $("#test-link").colorbox({width:"60%", height:"300px", inline:true, href:"#test-content"});
</script>
     
     
     
     
     
    <script>		
		 jQuery(window).load(function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();    }	
		 
     jQuery('.magnifier').touchTouch();			
    jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});	
  		  }); 
			
	</script>
    
 <script src="assets/js/jquery.js" type="text/javascript"></script>
<style>
.img-circle {
  -webkit-border-radius: 10px;
  -moz-border-radius:10px;
  border-radius: 10px;
 }
.top {opacity:0.2; }
.top:hover { opacity:1.0; }
.number {
color: #111;
}

</style>
</head>
	

</head>	

 <!--============================== content =================================-->

<body class="homepage">
 
  <script>
/************************************************************************/
$('.new').click(function(){
    		$('.my1').toggle('slow');
    	});
/**********************************************************************/
$("a.new1").live("click", function(){ 
	var name_id = $(this).find('h5.number').html();
	$.get("ajax_file1.php", { name: name_id})
	.done(function(data) {
		$('#here'+name_id).html(data);
	});
	$('#here'+name_id).show();
 }); 
/**********************************************************************/
$(document).ready(function(){
	$('a.new').click(function() {
		var name_id = $(this).find('p').html();
		$.get("ajax_file.php", { name: name_id})
		.done(function(data) {
			$('#my'+name_id).html(data);
		});
		$('.showdata').hide();
		$('#my'+name_id).show();
	});
});
/***********************************************************************/
</script>

 <!--============================== header =================================-->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="index.php"><img alt="" src="img/logo.jpg"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
              <li class="act"><a href="index.php">Home</a></li>
		<li ><a href="about.php">About</a></li>
		
                <li><a href="service.php">Services</a></li>
                     
                  
                  <li ><a href="help.php">Help</a></li>
                </li>
              </ul>
                  
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
 <!---------------------------------------------------------------------->   
	<div id=""><h2></h2></div>
<div class="grid">
	 <a  class="new" href="#" >     
        <div class="element alkaline-earth metal  " >
        <p class="number">1</p>
        <img class="img-circle"src="imgs/1.jpeg" height=80px width=80px  >
        </div>
	</a>   
 <div id="my1" class="showdata"><h2></h2></div>  
</div>


	<a class="new" href="#">
	<div class="element post-transition metal ">
  <p class="number">2</p>
 <img class="img-circle"src="imgs/2.jpeg" height=80px width=80px  >
</div>
        </a>   
<div id="my2" class="showdata"><h2></h2></div>


	<a class="new" href="#">    
	<div class="element lanthanoid metal inner-transition ">
       	<p class="number">3</p>
	<img class="img-circle"src="imgs/3.jpeg" height=80px width=80px >
	</div>
	</a>  
<div id="my3" class="showdata"><h2></h2></div>
 
    
        <a  class="new" href="#">     
        <div class="element metalloid">
        <p class="number">4</p>
	<img class="img-circle"src="imgs/4.jpeg" height=80px width=80px  >
	</div>
        </a>  
<div id="my4" class="showdata"><h2></h2></div>

      
        <a  class="new" href="#">     
        <div class="element actinoid ">
	<p class="number">5</p>
        <img class="img-circle"src="imgs/5.jpg" height=80px width=80px  >
	</div>
        </a>   
 <div id="my5" class="showdata"><h2></h2></div>

     
        <a  class="new" href="#">     
        <div class="element alkali " >
        <p class="number">6</p>
	<img class="img-circle"src="imgs/6.jpeg" height=80px width=80px  >
	</div>
	</a>   
<div id="my6" class="showdata"><h2></h2></div>
 
   
    <a class="new"  href="#">     
  <div class="element noble-gas nonmetal " >
    <p class="number">7</p>
    <img class="img-circle"src="imgs/7.jpeg" height=80px width=80px  >
    </div>
    </a>
<div id="my7" class="showdata"><h2></h2></div>
   
    
        <a  class="new" href="#" >     
       <div class="element alkaline-earth metal  " >
        <p class="number">8</p>
       <img class="img-circle"src="imgs/8.jpeg" height=80px width=80px  >
        </div>
	</a> 
 <div id="my8" class="showdata"><h2></h2></div>
 

      <a  class="new" href="#">
      <div class="element post-transition metal   " >
      <p class="number">9</p>
     <img class="img-circle"src="imgs/9.jpeg" height=80px width=80px  > 
      </div>
      </a>  
<div id="my9" class="showdata"><h2></h2></div>    

 
      <a  class="new" href="#" >    
     <div class="element lanthanoid metal inner-transition   ">
      <p class="number">10</p>
      <img class="img-circle"src="imgs/10.jpeg" height=80px width=80px  >
      </div>
      </a>  
<div id="my10" class="showdata"><h2></h2></div>    

  
     <a  class="new" href="#">   
     <div class="element metalloid   ">
     <p class="number">11</p>
     <img class="img-circle"src="imgs/11.jpeg" height=80px width=80px  >
     </div>
     </a>  
<div id="my11" class="showdata"><h2></h2></div> 

 
      <a  class="new" href="#">    
      <div class="element actinoid  ">
      <p class="number">12</p>
      <img class="img-circle"src="imgs/12.jpeg" height=80px width=80px  >
      </div>
      </a>  
<div id="my12" class="showdata"><h2></h2></div> 
     
      
      <a  class="new" href="#">
      <div class="element alkali ">
      <p class="number">13</p>
     <img class="img-circle"src="imgs/13.jpeg" height=80px width=80px  > 
      </div>
      </a> 
<div id="my13" class="showdata"><h2></h2></div> 

 
      <a class="new"  href="#">    
      <div class="element noble-gas nonmetal   ">
      <p class="number">14</p>
      <img class="img-circle"src="imgs/14.jpeg" height=80px width=80px>
      </div>
      </a>   
<div id="my14" class="showdata"><h2></h2></div> 

 
      <a  class="new" href="#">   
      <div class="element alkaline-earth metal  ">
      <p class="number">15</p>
      <img class="img-circle"src="imgs/15.jpeg" height=80px width=80px > 
      </div>
      </a>
<div id="my15" class="showdata"><h2></h2></div>  

 
      <a class="new"  href="#">   
      <div class="element post-transition metal   ">
      <p class="number">16</p>
      <img class="img-circle"src="imgs/16.jpeg" height=80px width=80px >
 <h2 class="name">Machines & Accessories</h2>
      </div>
      </a>  
<div id="my16" class="showdata"><h2></h2></div> 

 
      <a class="new"  href="#" >  
      <div class="element lanthanoid metal inner-transition  ">
      <p class="number">17</p>
      <img class="img-circle"src="imgs/17.jpeg" height=80px width=80px >
      </div>
      </a> 
 <div id="my17" class="showdata"><h2></h2></div> 
 
  
      <a  class="new" href="#" >     
      <div class="element metalloid  ">
      <p class="number">18</p>
      <img class="img-circle"src="imgs/18.jpeg" height=80px width=80px > 
      </div>
      </a> 
<div id="my18" class="showdata"><h2></h2></div>   

 
      <a  class="new" href="#" >    
      <div class="element actinoid   ">
      <p class="number">19</p>
      <img class="img-circle"src="imgs/19.jpeg" height=80px width=80px>  
      </div>
      </a> 
 <div id="my19" class="showdata"><h2></h2></div> 
 
  
       <a class="new"  href="#">   
      <div class="element alkali ">
      <p class="number">20</p>
     <img class="img-circle"src="imgs/20.jpeg" height=80px width=80px>  
      </div>
      </a>  
 <div id="my20" class="showdata"><h2></h2></div> 
 
  
      <a  class="new" href="#">     
      <div class="element noble-gas nonmetal  " >
      <p class="number">21</p>
     <img class="img-circle"src="imgs/21.jpeg" height=80px width=80px>   
      </div>
      </a>  
 <div id="my21" class="showdata"><h2></h2></div> 
      </div>     </div>     </div>     </div>    
 
<!--============================== footer =================================-->
<footer>
      <div class="container clearfix">
    <ul class="list-social pull-right">
    	  <li><a href="http://data.gov.in"><img  src="imgs/data_gov.jpg" alt=""></a></li>
          <li><a class="icon-1" href="#" onclick="
window.open(
'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
'facebook-share-dialog',
'width=626,height=436');
return false;"></a></li>
          
          <li><a class="icon-3" href="https://twitter.com/EximGuide" class="twitter-follow-button"
data-show-count="true" data-lang="en"></a></li>
          <li><a class="icon-4" href="#"></a></li>
	  <li><a class="icon-5" href="#"></a></li>
        </ul>
   
  </div>
    </footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!------------------------------------------------------------------------------------------------------->
<div class="top "><a style="position: fixed; bottom:3px;right:3px;img-cicle-webkit-border-radius: 500px;
  -moz-border-radius: 500px;
  border-radius: 500px;" href="#" title="Back to Top"><img style="border: none; width:50px; height:50px;" src="imgs/arrow.jpg"/></a></div>


<!------------------------------------------------------------------------------------------------------->

<!------------------------------------------------------------------------------------------------------->

</body>
</html>
