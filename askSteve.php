<?php
include("includes/phpHeader.php");
define('NUM_QUESTIONS',19);

$imageNumber = rand(1,NUM_IMAGES);
$title = "Painting Contractor in Delaware County PA and Northern Delaware";
include("includes/htmlTop.php");
if(isset( $_REQUEST['a']  )){
	$qaNumber=intval($_REQUEST['a']);
}else{
	$qaNumber=1;
}
$qaNumber=($qaNumber >0 && $qaNumber <= NUM_QUESTIONS ? $qaNumber : 1 );
$theQA = "qa".$qaNumber.".php";
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
<div class="leftContentBox">
<h2>Have a question?</h2>
<h1>&nbsp;Ask Steve</h1>
<p> Hey Steve:  <form method="post" action="<?php $_SERVER['PHP_SELF']?>" name="qaPicker" id="qaPicker">
<select name="a" onChange="submit(this)">

<option value="1"<?php echo ($qaNumber ==1?" selected='selected'":'');?> >How can I rejuvenate my old paint?</option>

<option value="2"<?php echo ($qaNumber ==2?"selected='selected'":'');?>>Recommendations for fall home-checkup</option>

<option value="3"<?php echo ($qaNumber ==3?"selected='selected'":'');?>>We want to do some of the work ourselves. Are there any groundrules?</option>

<option value="4"<?php echo ($qaNumber ==4?"selected='selected'":'');?>>Any advice on Real Estate Appraisals? </option>

<option value="5"<?php echo ($qaNumber ==5?"selected='selected'":'');?>>What can you tell us about interior paint pricing?</option>

<option value="6"<?php echo ($qaNumber ==6?"selected='selected'":'');?>>Can you give me a price over the phone on wallpapering my Kitchen?</option>

<option value="7"<?php echo ($qaNumber ==7?"selected='selected'":'');?>>Are there Eco-Friendly paint colors that aren't  boring?</option>

<option value="8"<?php echo ($qaNumber ==8?"selected='selected'":'');?>> What's the best way to refinish a wood deck?</option>

<option value="9"<?php echo ($qaNumber ==9?"selected='selected'":'');?>>Can mold and mildew shorten the lifespan of my shingles?</option>

<option value="10"<?php echo ($qaNumber ==10?"selected='selected'":'');?>>What are our options for switching from papered to painted walls?</option>

<option value="11"<?php echo ($qaNumber ==11?"selected='selected'":'');?>> I have mold issues but don't want to use bleach. Are there  options?</option>
<option value="12"<?php echo ($qaNumber ==12?"selected='selected'":'');?>>What's new in the paint industry?</option>
<option value="13"<?php echo ($qaNumber ==13?"selected='selected'":'');?>>Should I wait until Spring or Summer to paint the interior?</option>

<option value="14"<?php echo ($qaNumber ==14?"selected='selected'":'');?>>Do you paint outside in the winter?</option>
<option value="15"<?php echo ($qaNumber ==15?"selected='selected'":'');?>>What are those black streaks on my roof?</option>
<option value="16"<?php echo ($qaNumber ==16?"selected='selected'":'');?>>Any suggtestions for cleaning walls?</option>
<option value="17"<?php echo ($qaNumber ==17?"selected='selected'":'');?>>Any advice about Low VOC paint?</option>
<option value="18"<?php echo ($qaNumber ==18?"selected='selected'":'');?>>What are our options for switching from papered to painted walls?</option>
<option value="18"<?php echo ($qaNumber ==19?"selected='selected'":'');?>>How to Prepare Your Home for Painting</option>

</select>
</form></p>
<?php
include("ask/".$theQA );
?>

</div><!--leftContentBox-->
<div class="rightSidebar">

<img src="images/kapshot5_spring.jpg" width="190" height="249" border="0" >

<h1>ABOUT Steve Kapski</h1>

<p>Steve is a longtime member of the PDCA, which was
started in 1884 as the national educational and information
resource of residential painting contractors. He also is certified
by Binks Inc. as a certified spray applicator, participates in the
pdca contractor college and encourages all employees to take
continuing education in the pdca courses available.</p>

<p>He enjoys working with people, is very customer oriented
and  loves his work.</p>

<p>To provide peace of mind he carries the most comprehensive
insurance including general liability, workman's comprehensive
and casualty.</p>

<p>Steve produces an on-time, in-depth proposal listing the scope of work,
preparation  recommendations and application of the appropriate
paint needed for a beautiful finish and long lasting job.</p>

<p>Complementing his talented crews, there are carpenters, paperhangers
and associates available to do roofing, siding, gutters, electric and plumbing.</p>


</div><!--rightSidebar-->





</div><!-- end mainContent -->
<br style="clear:both">
<?php
include("includes/footer.php");
?>
</div><!-- end mainContainer -->
<?php
include("includes/htmlBottom.php");
?>