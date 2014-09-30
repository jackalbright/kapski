<?php
define('NUM_STORIES',23);
include("includes/phpHeader.php");
$imageNumber = rand(1,NUM_IMAGES);
if(  isset( $_REQUEST['storyID']  ) && is_numeric($_REQUEST['storyID']) ){	
	$storyID=$_REQUEST['storyID'];
}else{
	$storyID=1;
}
$storyID=($storyID >0 && $storyID <= NUM_STORIES ? $storyID : 1 );
$theStory = "story".$storyID.".php";
$newsletterClass = "currentPage";
//$imageNumber = rand(1,4);
$title = "Ask Steve - Painting Contractor Newsletter";
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
<img src="images/siteShots/250x250_65_<?=$imageNumber?>.jpg" width="250" height="250" border="0"/>
<?php
include("includes/sidebarBadges.php");
?>
</div><!--rightColumn-->

<div class="contentBox">
<div class="storyBox">

<h1>Steve's <em>Stories of Interest</em></h1>
<p>Every once in a while I find an interesting story online containing nuggets of wisdom  that I think my customers might enjoy and benefit from. So, I decided to make some of those stories available on this page. I hope you enjoy them. </p>

<p> Choose a Story:  <form method="post" action="<?php $_SERVER['PHP_SELF']?>" name="storyPicker" id="storyPicker">
<select name="storyID" onChange="submit(this)">

<option value="1"<?php echo ($storyID ==1?" selected='selected'":'');?> >The Promise of Green Paint</option>

<option value="2"<?php echo ($storyID ==2?"selected='selected'":'');?>>Wooster Makes "Green Painting" Possible Without Green Paint</option>

<option value="3"<?php echo ($storyID ==3?"selected='selected'":'');?>>Signs of a Strong Housing Market</option>

<option value="4"<?php echo ($storyID ==4?"selected='selected'":'');?>>What should I look for in a contractor? </option>

<option value="5"<?php echo ($storyID ==5?"selected='selected'":'');?>>Corrugated Stainless Steel Tubing: Fire hazard in new homes?</option>

<option value="6"<?php echo ($storyID ==6?"selected='selected'":'');?>>Is the Next Big Thing Really Smaller Houses?</option>

<option value="7"<?php echo ($storyID ==7?"selected='selected'":'');?>>Surviving Home Renovations</option>

<option value="8"<?php echo ($storyID ==8?"selected='selected'":'');?>>Protect  Your Home from Water Damage</option>

<option value="9"<?php echo ($storyID ==9?"selected='selected'":'');?>>Crown Molding Ideas</option>

<option value="10"<?php echo ($storyID ==10?"selected='selected'":'');?>>The 10 things consumers want in a new house</option>

<option value="11"<?php echo ($storyID ==11?"selected='selected'":'');?>>Top 10 Ways to Make Home Buyers Hate Your House</option>
<option value="12"<?php echo ($storyID ==12?"selected='selected'":'');?>>Building Products - Best Roofing Shingles</option>
<option value="13"<?php echo ($storyID ==13?"selected='selected'":'');?>>Sealing your driveway the safe way</option>
<option value="14"<?php echo ($storyID ==14?"selected='selected'":'');?>>The Secret of a Perfect Paint Job (Part 1)</option>
<option value="15"<?php echo ($storyID ==15?"selected='selected'":'');?>>Top 6 home-renovation scams to avoid</option>
<option value="16"<?php echo ($storyID ==16?"selected='selected'":'');?>>How to deal with a broken gutter in a storm</option>
<option value="17"<?php echo ($storyID ==17?"selected='selected'":'');?>>Redefining 'Green' Paint</option>
<option value="18"<?php echo ($storyID ==18?"selected='selected'":'');?>>Exterior Color Advice</option>
<option value="19"<?php echo ($storyID ==19?"selected='selected'":'');?>>Photos from the Job Site - Applebrooke Meadows</option>
<option value="20"<?php echo ($storyID ==20?"selected='selected'":'');?>>How to get ready for Kapski Painters</option>
<option value="21"<?php echo ($storyID ==21?"selected='selected'":'');?>>We're Bad At Recycling Because...</option>
<option value="22"<?php echo ($storyID ==22?"selected='selected'":'');?>>Clues to find perfect interior paint color scheme</option>
<option value="23"<?php echo ($storyID ==23?"selected='selected'":'');?>>How to Prepare Your Home for Painting</option>
</select>
</form></p>
</div>
<?php
include("stories/".$theStory );
?>

</div>








</div><!-- end mainContent -->
<?php
include("includes/footer.php");
?>
</div><!-- end mainContainer -->
<?php
include("includes/htmlBottom.php");
?>