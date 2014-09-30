<?php
include("includes/phpHeader.php");
$workSamplesClass = "currentPage";
$imageNumber = rand(1,4);
$title = "Professional painting and paperhanging work samples in Delaware County PA and Northern Delaware";
include("includes/htmlTop.php");
?>

<!--<link href="css/galleria.css" rel="stylesheet" type="text/css" media="screen"> -->
<script type="text/javascript" src='js/jquery-1.4.3.min.js'></script>
<script type="text/javascript" src='js/fancybox/jquery.fancybox-1.3.3.js'></script>
<script type="text/javascript" src='js/fancybox/jquery.easing-1.3.pack.js'></script>
<script type="text/javascript" src='/fancybox/jquery.mousewheel-3.0.4.pack.js'></script>
<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />

<script type="text/javascript" src="js/cycle.js"></script>

<script type="text/javascript">
$(document).ready(function() {

	/* This is basic - uses default settings */
	
	$("a#single_image").fancybox();
	
	/* Using custom settings */
	
	$("a#inline").fancybox({
		'hideOnContentClick': true
	});

	/* Apply fancybox to multiple items */
	
	$("a.grouped_elements").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
	
});

</script>





</head>
<!--<body onLoad="setGalleryIMages();">-->
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
<p>&nbsp;</p>
<img src="images/windows/w250x250_65_2.jpg" width="250" height="250" border="0"  align="right"/>
<p>&nbsp;</p>
<h2>Helpful Links ...</h2>
<p>Tools to assist you with color selection:</p>
<ul>
<li><a href="http://www.sherwin.com/visualizer/" target="_blank">Sherwin Williams Color Visualizer</a>  </li>
<li><a href="http://picario.lucrasoft.eu/site-pqi/?lang=en-US" target="_blank">The Paint Quality Institute Online Designer</a></li>
<li><a href="http://www.paintquality.com/diy/content/design_4.htm" target="_blank">The Paint Quality Institute Design Tips</a></li>

</ul>
</div> 
<!--end pictureBox -->
<div class="contentBox">
<h1>Some Examples of our Work</h1>
<p>We invite you to examine the attention to detail, the craftsmanship and care that we apply to our work.</p>



<!--<div id="slideshow1" class="home_imgs">
<img src='images/samples/1/sample1.jpg' title='image1' alt='image1'  width="250" height="250">
<img src='images/samples/1/sample2.jpg' title='image2' alt='image2'  width="250" height="250">
<img src='images/samples/1/sample3.jpg' title='image3' alt='image3'  width="250" height="250">
<img src='images/samples/1/sample4.jpg' title='image4' alt='image4'  width="250" height="250">
<img src='images/samples/1/sample5.jpg' title='image5' alt='image5' width="250" height="250">
<img src="images/siteShots/250x250_65_1.jpg" title='image5' alt='image5'  width="250" height="250">
<img src="images/siteShots/250x250_65_2.jpg" title='image5' alt='image5' width="250" height="250" >
<img src="images/siteShots/250x250_65_3.jpg" title='image5' alt='image5'  width="250" height="250">
<img src="images/siteShots/250x250_65_4.jpg" title='image5' alt='image5' width="250" height="250" >
<img src="images/siteShots/250x250_65_5.jpg" title='image5' alt='image5'  width="250" height="250">
<img src="images/siteShots/250x250_65_6.jpg" title='image5' alt='image5'  width="250" height="250">
<img src="images/siteShots/250x250_65_7.jpg" title='image5' alt='image5'  width="250" height="250">
<img src="images/siteShots/250x250_65_8.jpg" title='image5' alt='image5' width="250" height="250" >

</div>-->
<!--slideshow1-->
<ul>
<li><a class="grouped_elements" rel="group1" href="images/galleries/wenderoth/large_1.jpg"><img src="images/galleries/wenderoth/medium_1.jpg" alt=""/></a></li>
<li><a class="grouped_elements" rel="group1" href="images/galleries/wenderoth/large_2.jpg"><img src="images/galleries/wenderoth/medium_2.jpg" alt=""/></a></li>
<li><a class="grouped_elements" rel="group1" href="images/galleries/wenderoth/large_3.jpg"><img src="images/galleries/wenderoth/medium_3.jpg" alt=""/></a></li>
<li><a class="grouped_elements" rel="group1" href="images/galleries/wenderoth/large_4.jpg"><img src="images/galleries/wenderoth/medium_4.jpg" alt=""/></a></li>
<li><a class="grouped_elements" rel="group1" href="images/galleries/wenderoth/large_5.jpg"><img src="images/galleries/wenderoth/medium_5.jpg" alt=""/></a></li>
<li><a class="grouped_elements" rel="group1" href="images/galleries/wenderoth/large_6.jpg"><img src="images/galleries/wenderoth/medium_6.jpg" alt=""/></a></li>
<li><a class="grouped_elements" rel="group1" href="images/galleries/wenderoth/large_7.jpg"><img src="images/galleries/wenderoth/medium_7.jpg" alt=""/></a></li>
<li><a class="grouped_elements" rel="group1" href="images/galleries/wenderoth/large_8.jpg"><img src="images/galleries/wenderoth/medium_8.jpg" alt=""/></a></li>




</ul>



<!-- end contentBox -->
<br style="clear:both">


<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<p><span id="next">NEXT</span> <span id="prev">PREV</span></div></p>
</div><!-- end mainContent -->
<script language ="javascript" type="text/javascript">
//document.getElementById('wordCandy').innerHTML   = theText[1];
</script>
<?php
include("includes/footer.php");
?>
</div><!-- end mainContainer -->

<?php
include("includes/htmlBottom.php");
?>