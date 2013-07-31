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
.typeahead.tt-query{
margin: -1px 0 0;
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
  width: 217px;
  margin-top:-8px;
  padding: 0;
  background-color: #fff;
  border: 1px solid #CCCCCC;
}

.tt-suggestion {
  padding: 5px 1px;
  font-size: 16px;
  line-height: 8px;
}

.tt-suggestion.tt-is-under-cursor {
  color: #666;
  background-color: #e7e7e7;
  transition:background 0.5s;

}

.tt-suggestion p {
 padding:8px 10px;
}

/*********************** Tab ********************************/

ul.tabs {
	margin: 0;
	padding: 0;
	float: left;
	list-style: none;
	height: 32px;
	border-bottom: 1px solid #999;
	width: 100%;
}
ul.tabs li {
	float: left;
	margin: 0;
	padding: 0;
	height: 31px;
	line-height: 31px;
	border: 1px solid #424242;
	border-left: none;
	margin-bottom: -1px;
	background: #2e2e2e;
	overflow: hidden;
	position: relative;
}
ul.tabs li a {
	text-decoration: none;
	color: #7f7f7f;
	display: block;
	font-size: 14px;
	padding: 0 10px;
	outline: none;
}
ul.tabs li a:hover {
	background: #1c1c1c;
}	
html ul.tabs li.active, html ul.tabs li.active a:hover  {
	background: #fff;
	border-bottom: 1px solid #fff;
}

li.active a{
	color:#333333 !important;
}

.tab_container {
	border-top: none;
	clear: both;
	float: left; 
	width: 100%;
	background: #fff;
}
.tab_content {
	padding: 20px;
	font-size: 1.2em;
}
.tab_content h2 {
	font-weight: normal;
	padding-bottom: 10px;
	border-bottom: 1px dashed #ddd;
	font-size: 1.8em;
}
.tab_content h3 a{
	color: #254588;
}
.tab_content img {
	float: left;
	margin: 0 20px 20px 0;
	border: 1px solid #ddd;
	padding: 5px;
}

.formStyle{
	border:1px solid #9e9e9e !important;
	border-radius:0 !important;
	-moz-border-radius:0 !important;
	-webkit-border-radius:0 !important;
	color:#999999 !important;
	margin-bottom:10px !important;
}

.submitButton{
	border:1px solid #d3373b;
	background:#e85356;
	color:#fff;
	padding:5px;
	width:100px !important;
	display:block;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
}

.submitButton:hover{
	background:#b32225;
	transition:background 1s;
}

</style>


</style>
<script type="text/javascript" src="js/typeahead.js"></script>
<script	type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> 

<script type="text/javascript">

$(document).ready(function() {

	//Default Action
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});

});
</script>

<?php include 'header.tpl.php'; ?>
	<body>
    <div class="spinner"></div> 

<div class="bg-content">
      <div class="container">
    <div class="row">
          <div class="span12"> 

 <!--============================== content =================================-->
 <script src="gen_validatorv4.js" type="text/javascript"></script>
<div id="content">
	<div class="container">
	<h3>SEARCH</h3>
    
    	<div class="container">

            <ul class="tabs">
                <li><a href="#tab1">By Code</a></li>
                <li><a href="#tab2">By Description</a></li>
            </ul>
    
            <div class="tab_container">
                <div id="tab1" class="tab_content">
                <form id ="myform" action="query.php" method="post">
                    <input type="number" placeholder="ITCHS Code" autofocus name ="code" class="formStyle">
                	<input type="submit" value="Submit" class="submitButton">
                </form>
                <script type="text/javascript">
                    var frmvalidator  = new Validator("myform");
                    frmvalidator.addValidation("code","req"," Please Enter an input  ");
                    frmvalidator.addValidation("code","numeric","Please Enter Numeric Value");
                    frmvalidator.addValidation("code","maxlen=8","Max length for ITC(HS) code is 8");
                </script>
                </div>
                <div id="tab2" class="tab_content">
                    <form id ='myform1' action="query2.php" method="post">
                <div class="example-items .typeahead">	
                    <input  class="typeahead formStyle" type="text" placeholder="Items" data-provide="typeahead" name="items" />
                    <input type="submit" value="Submit" autocomplete= "off" class="submitButton">
                </div>	
                
                </form>
                <script>
                $('.example-items .typeahead').typeahead({
                name: 'items', 
                // prefetch: '../test.json',
                //local: [ "Horses","gold","Plastic","Monkey","Asses","Animals","Swine","Sheep","goats",]
                local: ["Breeding Animals","Horses for Polo","Other","Livestock","Mules and hinnies ","Livestock","Bulls","Cows","Calves", "Sheep","Lamb" ,"Goats","Fowls ","Turkeys","Ducks","Geese","Primates","Whales", "Dolphins ","Porpoises  ", "Manatees","Dugongs ","Seals", "Sea lions", "Walruses ","Camels ","Rabbits ","Hares","Reptiles ","Snakes", "Turtles","Birds ","Psittaciformes "," Parrots", "Parakeets", "Macaws ","Cockatoos","Ostriches"," Emus ","Pureline Stock","Carcasses","Boneless","Hams", "Shoulders " ,"Carcasses of lamb","Meat of goats","Meat of horses", "Meat of Asses","Tongues","Livers","Swine","Cuts and offal", "Fatty livers","Guinea fowls","Guinea fowls rabbit","Guinea fowls hares"," Guinea fowls Of primates","Guinea fowls Of reptiles "," Guinea fowls Of Wild ","Swivel Seats","Seats","Bamboo","Upholstered","Cabinetware","Bed stead","Wooden Furniture","Plasctic Furniture","Guinea fowls Of pigs","Bellies ","Meat of bovine animals","Freshwater","Trout ","Eels","Carp ","Atlantic and Pacific bluefin tunas  ","Atlantic salmon"," Danube salmon","Halibut ","Plaice ","Sole ","Turbots ","Albacore ","Longfinned tunas","Yellowfin tunas ","Gold", "Spring interior","Hanging lamps","Wall lamps","Table lamps", "Fittings","Lighting Sets","Searchlights","Sportlights","Hurricane lanterns","Kerosene Lanterns","Solar Lanterns","Lamps","Lawn-tennis Rackets","Squash Rackets","Lawn-tennis Ball" ,"Football","Volley Ball","Basket Ball","Hockey Ball","Cricket Ball","Golf Ball","Rugby Ball","Ice Skates","Roller Skates","Skating Boots","Boxing Equipment","Shuttle Cocks","Leg Pads","Bats","Hockey Stick","Polo Sticks " ,"Shafts","Sports net","Tennis Racket", "Badminton Racket","Shin-guards", "Shoulders Pads" , "Protective Equipments","Travelling Circuses", "Travelling Menageries","Zip fasteners","High Value Pens","Ball Point Pens ", "Precious metal ","Pencils","Liquid Ink ","Nib Points", "Markers","Pen Nibs","Pen holders", "Pencil Holders","Sanitary towels ","Tampons","Napkins","Diapers","Madhubani Paintings","Kalamkari Paintings","Rajasthani Paintings","Domestic articles of wood","Plax Decoration" ,"Engravings" ,"Prints","lithographs","Metal Sculptures"," Metal Statuary","Stone Sculptures" ," Stone Statuary","Used Postal Stamp","Philately","Industrial Plant roject","Irrigation Plant","Power Project","Mining Project","Components","Spare parts" ,"Raw Materials", "Semi-finished Materials" ,"Consumable Stores" ,"Laboratory Chemicals","All dutiable articles", "Drugs" ,"Medicines","Prepared or Preserved Meat", "Prepared or Preserved Fish", "Prepared or Preserved Vegetables", "Dairy Products", "Fresh Fruits","Fuel", "Lubricating Oil", "Alcoholic Drinks" ,"Tobacco","Yams","Yarn Dyed","Yarn Spun", "Dental Floss","Yarn waste ","Yautia","Yellow","Yellow Ochre","Yellowfin Tunas","Ylang Oil","Yogurt","Zari Bordered Sarees","Zari Borders","Zedovary Roots","Zinc dust","Zinc oxide","Zinc peroxide","Zinc Scrap","Automotive Grills ","Scrap Zinc", "Zinc Clippings ", "Die Cast Slabs","Zineb","Zip Fasteners","Zircon ","Zirconium dioxide","Zirconium Ores ","Toxaphene", "Captafol ","Chlordane ", "Chlordimeform","Chlorobensilate"," DDT", "Dieldrin"  ,"Dinoseb", "Esters","Dibromoethane","Dichlorethane" ,"Fluroacetamide", "Heptachlor" ,"Hexachlorobenzene ", "Lindane","Display  Tubes","Sewing Machines","Knitted","Lroko","Butyl Acetate"," Coir Jute","Phenyl Phenols","Xylene","Sterile Laminaria"," Surgical Haemostatics ", "Dental Haemostatics" ,"Sterile Surgical  Barriers","Dental Adhesion Barriers",  "Video Cassettes","Agarbatti", "Weaving Yarn","Blended Fabrics", "Fabrics","Woven Fabrics","Terry Fabrics","Chenille Fabrics","Woven Textiles","Wrenches","Writing blocks","Wrought manganese","X 25 pads","X-ray Generators","X-ray Tubes","X-ray Valves","Xanthium gum","Xylidines","Xylole","Yak Hair"]
                });
                
                </script>
                </div>
            </div>
		</div>
    
    
		
		
		<div class="clear"></div>
        	
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
