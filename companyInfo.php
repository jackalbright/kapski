<?php
include("includes/phpHeader.php");
$companyInfoClass = "currentPage";
$imageNumber = rand(1,4);
$title = "Painting Contractor | Delaware County PA and Northern Delaware";
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
<br><br>
<img src="images/sidebar/green.jpg"  width="237" height="53" border="0" />
<br/>

<br>
</div>
<div class="contentBox">
<h1>A Full Service Painting Contractor </h1>

<p>Kapski Painting is a family owned and operated business offering quality painting services since the 60's.
Our blend of old school craftsmanship and the latest technology has earned us high acclaim within the community.</p>

<p>In 1968 almost 1 year after completing a 4 year Painting Apprenticeship we started Kapski Painting. We were fortunate to  have enough work to tide us over the inevitable slow times but  with support and hard work we were able to build the business, and with it  a good reference list.</p>

<p>Over the years we learned that the PDCA, our trade organization, would be an integral part in our success, so we became members, attended meetings and seminars, and continue to this day to benefit from the relationship.</p>

<p>We owe a lot of our success to our employees, many of whom have  worked for us for 15 years or more. Our people are expertly trained, and have been largely responsible for the satisfied  client list we have.</p>
<p>Over the years we have incorporated <a href="services.php">other services</a> , to round out  and compliment
  our painting and paperhanging core business.</p>
 
  <p>We strive to please our loyal, as well as our new customers, and adhere to our long term
  goals of sustainable green practices and responsible community involvement.</p>

<p>Kapski Painting is dedicated to providing the highest quality painting services to our clients. We always listen carefully to your concerns. </p>
<p>&nbsp;</p>
</div>




</div><!-- end mainContent -->
<?php
include("includes/footer.php");
?>
</div><!-- end mainContainer -->
<?php
include("includes/htmlBottom.php");
?>