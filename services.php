<?php
include("includes/phpHeader.php");
$servicesClass = "currentPage";
$imageNumber1 = rand(1,NUM_IMAGES);
$imageNumber2 = rand(1,NUM_IMAGES);
while($imageNumber1 == $imageNumber2){
	$imageNumber2 = rand(1,NUM_IMAGES);
}
$title = "Painting Contractor Delaware County PA, Chester County PA, New Castle County DE";
include("includes/htmlTop.php");
?>
</head>
<body>
<div id="mainContainer">
<?php
include("includes/header.php");
?>
<?php
include("includes/menu.php");
?>
<div id="mainContent">
<div class="rightColumn">
<img src="images/siteShots/250x250_65_<?=$imageNumber1?>.jpg" width="250" height="250" border="0"/>
<br /><br />
<img src="images/sidebar/refined.jpg" width="237" height="48" border="0" />
<img src="images/siteShots/250x250_65_<?=$imageNumber2?>.jpg" width="250" height="250" border="0"/>

<?php
include("includes/sidebarBadges.php");
?>
<br/>
</div><!--rightColumn-->
<div class="contentBox">
<h1>Painting and Paperhanging Services</h1>
<div class="serviceBox">
<ul>
<li>Painting
<ul>
<li>Commercial</li>
<li>Residential</li>
<li>Interior</li>
<li>Exterior</li>
<li>No job too small, no job too large</li>
</ul>
</li>
<li>Paperhanging</li>
<li>Carpentry</li>
<li>Restoration</li>
<li>Powerwashing</li>
</ul>
</div>
<h3>Only skilled craftsmen are employed at Kapski Painting. </h3>
<p >Each job is supervised and inspected by our Lead Painter before, during and after the job to assure proper preparation, application and clean-up. We leave the jobsite clean, daily. We leave remaining paint on-site. We contain and remove debris.</p>
<p >We consult with you on colors, color placement and paint sheen.</p>

<h3>Equipped to Handle any job size</h3>
<p>We handle all your needs from one room, to your complete interior, all the way up to an entire condominium complex. We also handle company offices, store fronts, shops, and ecclesiastical work.</p>

 <h3>Drywall and Plaster Repairs</h3>
<p >We repair water damage to drywall and plaster surfaces, remove and replace paper tape and smooth out rough surfaces. We remove surface mold and mildew and seal water stains. We  apply low-odor and low-VOC coatings. We also install your wallcovering according to any manufacturer's recommendations.</p>
<h3>Carpentry &amp; Stucco Repairs</h3>
<p >We  supply and install crown and chair molding on the interior, and repair damaged soffitt and fascia and trim on the exterior. </p>
<p> We  replace damaged stucco on walls, chimneys and foundations.</p>
<h3>Gutters and Spouts</h3>
<p >We  repair, re-align and clean out gutters and spouts.</p>
<h3>Decks</h3>
<p>Gentle pressure washing, wood replacement, staining, clear coating and yearly maintenance.</p>
<br>
<div class="serviceBox" >
<p>If you have other home remodeling or repair needs not mentioned here, just ask us! <br/>Call day or night at 610-565-8571, or use the convenient <a href="contact.php">Contact
Form</a> on this site.</p>
</div>

</div><!-- contentBox -->




</div><!-- end mainContent -->
<?php
include("includes/footer.php");
?>
</div><!-- end mainContainer -->
<?php
include("includes/htmlBottom.php");
?>