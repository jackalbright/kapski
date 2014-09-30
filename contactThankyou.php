<?php
include("includes/phpHeader.php");
//include("lib/commonFunctions.php");
$contactClass = "currentPage";
$imageNumber = rand(1,4);
$title = "Kapski Painting ";

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
<div class="pictureBox">
<img src="images/siteShots/250x250_65_<?=$imageNumber?>.jpg" width="250" height="250" border="0"/>
</div> 
<div class="contentBox">

<h1>Thank You</h1>
<p>If you have asked to be contacted, a Kapski Painting representative will attempt to contact you by the means that you requested on the form.</p>

</div><!--contentBox-->

</div><!-- end mainContent -->

<?php
include("includes/footer.php");
?>
</div><!-- end mainContainer -->
<?php
include("includes/htmlBottom.php");
?>