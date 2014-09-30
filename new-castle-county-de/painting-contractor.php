<?php
include("../includes/phpHeader.php");
$imageNumber = rand(1,NUM_IMAGES);
?>
<!DOCTYPE HTML>
<html >
<head>
<title>Best Painting Contractor in New Castle County DE</title>
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1" />
<meta name="verify-v1" content="NpWA8xrEKOgXAkIV3H1eIzT6cu97VXmfpM8aKG+E67g=" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"  />
<meta name="description" content="Painting contractor in New Castle County Delaware " />
<script language="JavaScript" type="text/javascript">
navHover = function() {
	var lis = document.getElementById("navmenu").getElementsByTagName("LI");
	for (var i=0; i<lis.length; i++) {
		lis[i].onmouseover=function() {
			this.className+=" iehover";
		}
		lis[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" iehover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", navHover);
</script>

<link href="/css/style.css" rel="stylesheet" type="text/css" /> 
<link href="/css/navMenu.css" rel="stylesheet" type="text/css" />
<style>
      #map_canvas {
        width: 500px;
        height: 400px;
		border:1px solid #666;
		background-color:#ccc;
      }
</style>

<!--<link href="/css/navMenu.css" rel="stylesheet" type="text/css" />-->

<!--
<link rel="stylesheet" type="text/css" href="css/screen_styles.css" />
<link rel="stylesheet" type="text/css" href="css/screen_layout_large.css" />
<link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:500px)"   href="css/screen_layout_small.css">
<link rel="stylesheet" type="text/css" media="only screen and (min-width:501px) and (max-width:800px)"  href="css/screen_layout_medium.css">
 -->       
        
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-1369047-2");
pageTracker._trackPageview();
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

</head>

<body>

<div id="mainContainer">

<?php
include("../includes/header.php");
include("../includes/menu.php");
?>
<div id="mainContent">
<div class="rightColumn">
<img src="../images/siteShots/250x250_65_<?=$imageNumber?>.jpg" width="250" height="250" border="0"/>

<a href="http://ethreemail.com/e3ds/s.php?g=59b48659" target="_blank" title="Subscribe to our monthly newsletter"><h3>Subscribe to our Newsletter</h3></a>

<?php
//include("includes/sidebarBadges.php");
?>

</div><!--rightColumn-->

<div class="contentBox">

<div class="storyBox">
<h1>Kapski Painting, Inc.</h1>
<h2>New Castle County's Premier Painting Contractor</h2>
<p>Looking for a painting contractor in New Castle County, PA? Why not choose the best?  
 From Newark to Wilmington, Hockessin to Claymont and all points in between, Kapski Painting has been providing quality painting contractor services in New Castle County, Delaware for over 40 years. </p> 
 
<h1><a href="javascript:" onClick="contact('New Castle County Landing Page');" class='contactLink'>Contact Kapski Painting</a></h1>

</div><!--storyBox-->
<div id="map_canvas">

</div>
<div id="footer">
Kapski Painting, Inc
</div>
</div><!--contentBox-->
</div><!--mainContent-->
</div><!--mainContainer-->
<form action="/contact.php" method="post" id="contactform" name="contactform">
<input type="hidden" id="geotarget" name="geotarget" value="">
</form>
<script language="javascript" type="text/javascript">
$(document).ready(function() {
 initialize();
});
// delco Latitude: 40.0003885 - Longitude: -75.3749148
// chesco lat 40.1253776550 LONGITUDE	-75.8749389648
// 39.958442 - Longitude: -75.604377


function initialize() {
    var mapCanvas = document.getElementById('map_canvas');
    var map_options = {
      center: new google.maps.LatLng(39.679351, -75.759925),
      zoom: 10,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, map_options);
}

function contact(geotarget){
	$("#geotarget").val(geotarget);
	$("#contactform").submit();
}

</script>
<?php
require_once('../includes/htmlBottom.php');
?>