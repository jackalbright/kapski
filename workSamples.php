<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("includes/phpHeader.php");
$workSamplesClass = "currentPage";
$imageNumber = rand(1,4);
$title = "Painting Contractor Delaware County PA, Chester County PA, New Castle County DE";
include("includes/htmlTop.php");
?>
<script language="javascript">
var imageIndex 	= 1;
var  maxImages = new Array();
maxImages[1] 	= 11; // number of interior images
maxImages[2] 	= 12;// number of exterior images
maxImages[3] 	= 2;// number of floor images
var imageSet		=	1;
var up						= 1;
var down				=	-1;
var theText = new Array();
theText[1] ="<p>Whether residential, commercial or new home construction, we can match any color sample to your requirements.</p><p>We have all the latest color charts and fan decks from top manufacturers, featuring non-toxic, low and no-<a href='http://en.wikipedia.org/wiki/Volatile_organic_compound' title='Volatile Organic Compound' target='_blank'>VOC</a> paints</p>";
theText[2] ="<p>Selecting the appropriate color and sheen for your home's exterior is an important component to the overall success of the project.</p><p>We will be happy to assist you in the selection of your colors.</p> ";

 theText[3] ="Durability is the key to a good floor finish. ";
/*
var interiorTrimFolder		= 1;
var interiorBodyFolder		= 2;
var exteriorTrimFolder		= 3;
var exteriorBodyFolder	= 4;
var floorFolder					= 4;
*/
function changePicture(upDown){

var direction = parseInt(upDown);
if(direction < 0 ){
	if (imageIndex >1){
		imageIndex = imageIndex -1;
		document.getElementById('thePicture').src = "images/samples/"+ imageSet + "/" + "sample" + imageIndex +".jpg";
	}
	//alert("images/samples/sample" + imageIndex  +".jpg" );
}else{
	if(direction > 0 ){
		if (imageIndex < (maxImages[imageSet])){
			imageIndex = imageIndex +1;
			document.getElementById('thePicture').src = "images/samples/"+ imageSet + "/" + "sample" + imageIndex +".jpg";
		}
		//alert("images/samples/sample" + imageIndex  +".jpg" );
	}
}
} // end of function

function setFolder(theFolderID){
theID =theFolderID.value;
imageSet = theID;
imageIndex = 0;

document.getElementById('wordCandy').innerHTML   = theText[theID];
changePicture(up);

//alert("theID:" + theID);
return true;
}

</script>
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
<p>&nbsp;</p>
<img src="images/siteShots/250x250_65_<?=$imageNumber?>.jpg" width="250" height="250" border="0"/>
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
<div class="serviceBox">
<table width="100%" border="1" class="pictureBoxTable">
<tr>
<td  class="formLabel" width="50%">
<span class="stepNumber">1</span> Choose area of Interest
</td>
<td>
<form>
<select name="sampleType" id="sampleType" onChange="setFolder(this);">
<option value="1">Interior</option>
<option value="2">Exterior</option>
<option value="3">Floors</option>
</select>
</form>

</td>
</tr>
<tr>
<td class="pictureDescription"><span id="wordCandy"></span></td>
<td align="center" class="pictureCell">
<img src="images/samples/1/sample1.jpg" border="0" id="thePicture" />
</td>

</tr>
<tr>

<td  class="formLabel"><span class="stepNumber">2</span> Click through the photo album</td>
<td align="center">
<br />
<span class="pictureNav"><a href="javascript:changePicture(-1);">< previous</a></span> - <span class="pictureNav"><a href="javascript:changePicture(1);">next
></a></span>
<br /><br /></td>

</tr>
</table>


</div><!-- end serviceBox -->



</div><!-- end contentBox -->




</div><!-- end mainContent -->
<script language ="javascript" type="text/javascript">
document.getElementById('wordCandy').innerHTML   = theText[1];
</script>
<?php
include("includes/footer.php");
?>
</div><!-- end mainContainer -->
<?php
include("includes/htmlBottom.php");
?>