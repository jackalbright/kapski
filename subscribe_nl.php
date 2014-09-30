<?php
include("includes/phpHeader.php");
$homeClass = "currentPage firstItem";
$imageNumber = rand(1,NUM_IMAGES);
$title = "Kapski Painting Contractor in Southeastern PA Delaware County PA and Northern Delaware";
include("includes/htmlTop.php");
?>


<link rel="stylesheet" type="text/css" href="https://www.dm-mailinglist.com/subscribe_forms/embed.css?f=d1c43d4e&sbg=1" media="all">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="https://www.dm-mailinglist.com/subscribe_forms/localized.js" charset="UTF-8"></script>
<script src="https://www.dm-mailinglist.com/subscribe_forms/subscribe_embed.js" charset="UTF-8"></script>
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

<!-- BEGIN DIRECT MAIL SUBSCRIBE FORM -->
<h1>Kapski Painting Monthly Newsletter</h1>


<div>
	<form method="post" action="https://www.dm-mailinglist.com/subscribe" data-directmail-use-ajax="1" data-form-id="d1c43d4e" class="directmail-subscribe-form" accept-charset="UTF-8">
		<input type="hidden" name="email"></input>
		<input type="hidden" name="form_id" value="d1c43d4e"></input>
		<table class="directmail-main-table">
		
		<tr>
			<td class="directmail-form-description" colspan=1>Subscribe to the montly newsletter from Kapski Painting, Inc. </td>
		</tr>
		<tr>
			<td>
			<label class="directmail-form-label directmail-default-no-label" for="directmail-d1c43d4e-first_name">First Name:</label>
			<input type="text" id="directmail-d1c43d4e-first_name" name="first_name" value="" placeholder="First Name" class="" ></input>
			</td>
		</tr>
		<tr>
			<td>
			<label class="directmail-form-label directmail-default-no-label" for="directmail-d1c43d4e-last_name">Last Name:</label>
			<input type="text" id="directmail-d1c43d4e-last_name" name="last_name" value="" placeholder="Last Name" class="" ></input>
			</td>
		</tr>
		<tr>
			<td>
			<label class="directmail-form-label directmail-default-no-label" for="directmail-d1c43d4e-subscriber_email">Email Address*:</label>
			<input type="email" id="directmail-d1c43d4e-subscriber_email" name="subscriber_email" value="" placeholder="Email Address*" class="directmail-required-field" required></input>
			</td>
		</tr>
		<tr> 
			<td>                                 
				<input type="submit" value="Subscribe"></input>
			</td>
		</tr>
		</table>
	</form>    
</div>

<!-- END DIRECT MAIL SUBSCRIBE FORM -->

</div><!--contentBox-->
<div id="contentBox">
    <p>Take a look at the past newsletters. </p>
    
  
<table class="listTable">
<?php
$theYear = date("Y");
$theMonth = date("m");
echo "<p><strong>" . $theYear . "</strong></p>";
while($theYear >= 2009 ){
	$dateString = $theMonth ."/01/" . $theYear;
	$monthName  = date("F", strtotime($dateString));
	$monthNumber = date("m", strtotime($dateString)); // this will handle the leading zero, which is lost once we decrement the month number from 10 to 9. Why? because the NL filenames use leading zero for month
	echo "<p><a href='mailings/" . $theYear . $monthNumber . ".php'>" . $monthName . " " . $theYear . " Kapski Painting Newsletter</a></p>";
	
	$theMonth--;
	if($theMonth == 0){
		$theMonth = 12;
		$theYear--;
		if($theYear > 2008){
		echo "<p><strong>" . $theYear ."</strong></p>";
		}
	}
?>

<?php
}
?>

</table>
    
</div><!-- end contentBox -->

<?php
include("includes/footer.php");
?>
</div><!-- end mainContainer -->
<?php
include("includes/htmlBottom.php");
?>



