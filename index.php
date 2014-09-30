<?php
include("includes/phpHeader.php");
$homeClass = "currentPage firstItem";
$imageNumber = rand(1,NUM_IMAGES);
$title = "Kapski Painting Contractor in Delaware County PA Chester County PA and New Castle County DE";
include("includes/htmlTop.php");
?>
</head>

<body id="homepage">
<div id="mainContainer">
<?php
include("includes/header.php");
?>
<?php
include("includes/menu.php");
?>
<script language="JavaScript" type="text/javascript">
menuSelection = document.getElementById("homeID");
menuSelection.innerHTML = "<a href='#'  onclick='return false'> Home </a>";
</script>
<div id="mainContent">
<div class="rightColumn">
<img src="images/siteShots/250x250_65_<?=$imageNumber?>.jpg" width="250" height="250" border="0"/>

<a href="askSteve.php"><img src="images/askSteve.jpg" alt="Ask Steve" width="250" height="65" border="0" hspace="0" vspace="0"></a>

<a href="/subscribe_nl.php"  title="Subscribe to our monthly newsletter"><h3>Subscribe to our Newsletter</h3></a>

<?php
include("includes/sidebarBadges.php");
?>

</div><!--rightColumn-->

<div class="contentBox">
<h1>Your Premier Painting Contractor </h1>
<h2>in Southeastern Pennsylvania & Northern Delaware</h2>
<p>Painting and remodelling services throughout <a href="delaware-county-pa/painting-contractor.php">Delaware County PA</a>, <a href="chester-county-pa/painting-contractor.php">Chester County PA</a>, <a href="new-castle-county-de/painting-contractor.php">New Castle County Delaware</a>. </p>
<div class="serviceBox">
<h2 class="serviceBoxHeading">Kapski Painting Guarantees:</h2>
<ul>
<li>Morning calls are returned by 1 PM.</li>
<li>Afternoon calls are returned by 6 PM.</li>
<li>We will be on time for the estimate and for the project start.</li>
<li>We guarantee our price!</li>
<li>We don't get paid until the punch list is finished to your satisfaction.</li>
</ul>
</div>


<div class="serviceBox">

<h2 class="serviceBoxHeading">Residential and commercial painting and paperhanging experts.</h2>
<ul >
<li>- We strive to use non-polluting products</li>
<li>- We recycle</li>
<li>- We clean our hardware with bio-degradable soaps</li>
</ul>
<p >The Kapski Family are longtime residents of Media, PA. with deep roots in the community.</p>
<p >Active membership in Painters and Decorating Contractors of America, PDCA, since 1967.</p>
</div><!--serviceBox-->
<div class="serviceBox">
<h2  class="serviceBoxHeading">Kapski Painting Customer References</h2>
<p>Take a look at <a href="references.php">our satisfied customer references</a> and see what people in the area are saying about us. Our list of Satisfied Customers is growing every week! </p>
</div>
<div class="serviceBox">
<h2 class="serviceBoxHeading">Our Warranty</h2>


<p>Painting and wallcovering warranty labor and material for a period of (2)
years. If paint failure apears, we will supply labor and material to correct
the condition without cost. This warranty is in lieu of all other
warranties, expressed or implied. Our responsibility is limited to
correcting the condition as indicated above.</p>

<p> The warranty excludes, and, in
no event shall Kapski Painting be responsible for consequential or
incidental damages cause by accident or abuse, temperature
changes,settlement or moisture, ie. cracks caused by expansion and/or
contraction, or acculation of dirt or other particles causing discoloration
or change in the appearance of materials. Cracks will be properly prepared
as indicated at the time of the job, but will not be covered under this
warranty.</p>






</div><!--serviceBox-->

<div class="serviceBox">
<h2 class="serviceBoxHeading">Maximize Your Investment</h2>
<p class="quotation">"When it comes to your home's exterior, color is currency. With millions of homes across the country currently on the market, smart homeowners are differentiating their houses and wowing potential buyers with color." - Delaware County Daily Times, March 30, 2008.</p>
<p>Protect your investment and maximize your home's resale value with a  fresh, new look. <br/>Call <strong>610.565.8571</strong> now for a free, in-home estimate. Need advice on which colors to choose? No problem. We have all the latest color swatches and fan decks for you to choose from. Our representative will be happy to work with you to pick just the right color!  </p>

<a href="http://www.pennsylvaniahomes.com"><img src="http://www.pennsylvaniahomes.com/images/logos/penn/featured.png"></a>

<p>Check out my interview, <a href="http://www.pennsylvaniahomes.com/articles/how-to-paint-the-exterior-of-your-home">How to paint the exterior of your home</a> on <a href="http://www.pennsylvaniahomes.com">Pennsylvania Homes</a>
</div><!--serviceBox-->
</div>
</div><!-- end mainContent -->
<?php
include("includes/footer.php");
?>
</div><!-- end mainContainer -->
<?php
include("includes/htmlBottom.php");
?>