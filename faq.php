<?php
include("includes/phpHeader.php");
$faqClass = "currentPage";
$imageNumber = rand(1,4);
$title = "Painting Contractor frequently asked questions";
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
<img src="images/windows/w250x250_65.jpg" width="250" height="250" border="0"/>
</div>
<div class="contentBox">
<h1>Frequently Asked Questions</h1>
<div class="storyBox">
<h3>How long have you been in business?</h3>   
<p>Since 1970. That's <?php echo date("Y") - 1970 ?> years!</p>
</div>
<div class="storyBox">
<h3>What type and how many references can you provide?</h3>
<p>We invite you to look at our <a href="/references.php">References Page</a> on this site. </p>
</div>
<div class="storyBox">
<h3>What type of experience do you have with the project I am considering?</h3> 
<p>We are experienced in all types of interior and   exterior Residential and light Commercial Painting. In 43 years we have run across pretty much every kind of project. Some we won't do but we can provide resources.</p>
</div>
 
<div class="storyBox">
<h3>What type of professional training do you have?</h3>
<p>Certified RRP, Licensed in Pa. Certified Binks Airless Spray, Certified Benjamin Moore Staining for Siding and Decks.
</p>
</div> 


<div class="storyBox"> 
<h3>Do you comply with all local governmental regulations?</h3>
 <p>We do comply. Our license numbers are listed on our Proposal sheet.</p>
 </div>
 
<div class="storyBox">
<h3>What type of continuing training do you provide for your crews?</h3>
<p>As members of the PDCA (Painting & Decorating Contractors of America) we engage in courses, classes, hands on activities, seminars and on-line courses so that we are all on the same page with systems and up to date on the latest advances and technology.</p>
 </div>
 

<div class="storyBox">
<h3>How long will the job take?</h3>
<p>This is an open-ended quesiton, and depends on the size of the job. A typical living room takes our painters about one and a half days. A bedroom, about a day. An exterior could take from 4 to 8 days or so.</p>
<h3>Do you use any particular kind of paint?</h3>
<p>We typically use  MAB, Sherwin Williams, or Benjamin Moore paints, all very high quality. We like to  use use low or no VOC paint</p>
<h3>How should we, the customer, prepare for the job?</h3>
<p>We ask that you move the smaller items from the rooms if  you are able. Have the color picked out well before the job  starts. Think about the sheen. Know that designer colors and deeper  tones may take an extra coat or two so we should know about this in advance.
</p>
</div>
<div class="storyBox">
<h3>What about payment?</h3>
<p>We request 1/3 deposit with a signed copy of the proposal and the balance upon completion of the job. </p>
<h3>What forms of payment do you accept?</h3>
<p>Cash or check</p>
</div>
<h3>Is your work guaranteed?</h3>
<p>All  work comes with a 2 year guarantee.</p>

<h3>What about when the job is done?</h3>
<p>We make sure the area is tidy, with no paint chips or other debris lying around. We leave the paint at the house in marked sealed  cans.</p>

<h3>Do you offer carpentry services?</h3>
<p>We offer carpentry. Mostly replacing  rotted wood, moldings, doors and windows.</p>

<h3>What about other services?</h3>
<p>Just ask us! If we don't do it, we can refer you to someone who can! </p>
<p>We also replace gutters and  spouts and clean them, too!</p>

</div>




</div><!-- end mainContent -->
<?php
include("includes/footer.php");
?>
</div><!-- end mainContainer -->
<?php
include("includes/htmlBottom.php");
?>