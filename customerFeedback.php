<?php
include("includes/phpHeader.php");
//include("lib/commonFunctions.php");
$contactClass = "currentPage";
$imageNumber = rand(1,4);
$title = "Kapski Painting  - Customer Feedback";
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

if (isset($_POST['mode'])){
	$mode = $_POST['mode'];
}else{
	$mode = "";
}

if($mode == "processForm"){

	if (isset($_POST['realName'])){
		$realName = $_POST['realName'];
	}else{
		$realName = "";
	}
	if (isset($_POST['areaCode'])){
		$areaCode = $_POST['areaCode'];
	}else{
		$areaCode = "";
	}
	if (isset($_POST['phone'])){
		$phone = $_POST['phone'];
	}else{
		$phone = "";
	}
	if (isset($_POST['street'])){
		$street = $_POST['street'];
	}else{
		$street = "";
	}
	if (isset($_POST['city'])){
		$city = $_POST['city'];
	}else{
		$city = "";
	}
	if (isset($_POST['state'])){
		$state = $_POST['state'];
	}else{
		$state = "";
	}
	if (isset($_POST['zip'])){
		$zip = $_POST['zip'];
	}else{
		$zip = "";
	}

	if (isset($_POST['howSatisfied'])){
		$howSatisfied = $_POST['howSatisfied'];
	}else{
		$howSatisfied = "";
	}
	
	if (isset($_POST['whatToImprove'])){
		$whatToImprove = $_POST['whatToImprove'];
	}else{
		$whatToImprove = "Nothing stated by customer";
	}

	if (isset($_POST['comments'])){
		$comments = $_POST['comments'];
	}else{
		$comments = "Nothing stated by customer";
	}

	
$textMessage	="The following information was submitted on Kapski Painting customer feedback form:\n\n";
$textMessage	.=	 "Name: $realName\n";
$textMessage	.=	 "Phone: $areaCode-$phone\n";
$textMessage	.=	 "Address: $street\n";
$textMessage	.=	 "$city, $state $zip\n";
$textMessage	.= "How satisfied is the customer(1-5 with 5 the highest level of satisfaction): $howSatisfied\n";
$textMessage	.= "What the customer would like improved: $whatToImprove\n";

$textMessage	.= "Additional Comments: $comments\n";
$fromaddress = "website@kapskipainting.com";
$fromName = "Kapski Painting Website";
$to	= "steve@kapskipainting.com,jacka50@mac.com";
//send_mail($to, $textMessage, $subject, $fromaddress, $fromname, $attachments=false);
$headers  = "From: webmaster@kapskipainting.com\n";

$headers .= "Reply-To:jack@lemonstreetdesign.com\n";
//$headers .= "cc:\n";

$headers .= "Content-Type: text/plain;\n";
// TEXT EMAIL PART

$message = $textMessage;


// SEND MAIL
$subject = "Kapski Painting Customer Feedback";
$mail_sent = mail($to, $subject, $message, $headers );


if($mail_sent){
	$resultCode="ok";
}else{
	$resultCode="not ok";
}

?>
<div id="mainContent">
<div class="pictureBox">
<img src="images/siteShots/250x250_65_<?=$imageNumber?>.jpg" width="250" height="250" border="0"/>
</div> 
<div class="contentBox">

<h1>Thank You</h1>
<p>If you have asked to be contacted, a Kapski Painting representative will attempt to contact you by the means that you requested on the form.</p>


<?php
}else{ // end if mode = processForm

?>

<div id="mainContent">
<div class="pictureBox">
<img src="images/siteShots/250x250_65_<?=$imageNumber?>.jpg" width="250" height="250" border="0"/>
<br /><br />
<img src="images/sidebar/communication.jpg" width="237" height="53" border="0" />
</div> 
<div class="contentBox">
<h1>How Are We Doing?</h1>
<p>We want to be sure we are addressing all of our customer's concerns, and we appreciate and value your input. It is by listening to you, the customer, incorporating your ideas and suggestions, that we constantly improve our product and service.</p>
<p>Thank you from all of us at Kapski Painting</p>
<form method=POST action="<?php echo $_SERVER['PHP_SELF']?>" name="contactForm">
<input type="hidden" name="mode" value="processForm">

<table class="formTable" width="90%">
<tr>
<td class="tableHeading" colspan="2" align="right"><br /><span class="linkButton"><a href="javascript:document.forms['contactForm'].submit()">Submit This Form</a></span><br /><br /></td>
</tr>
<tr > 
<td class="formLabel">Your Name </td>
<td class="formValue"><input type="text" name="realName" id="realName" size="25"></td>
</tr>
<tr>
<td class="formLabel">Phone</td> 
<td class="formValue"><input type="text" name="areaCode" size="3">&nbsp; - <input type="text" name="phone" size="12"></td>
<tr>
<td class="formLabel">Email</td>
<td class="formValue"><input type="text" name="email" size="30"></td>
</tr>
<tr > 
<td  class="formLabel">Street </td><td class="formValue"><input type="text" name="street" size="30"></td></tr>
<tr><td  class="formLabel"> City</td> 
<td class="formValue"><input type="text" name="city"></td></tr>
<tr>
<td  class="formLabel">State</td>
<td class="formValue"><input type="text" name="state" size="5"></td>
</tr> 
<tr>
<td  class="formLabel">Zip</td>
<td class="formValue"><input type="text" name="zip" size="12"></td>
</tr>

<tr > 
<td class="formLabel" valign="top">
How satisfied are you with the recent services you received from Kapski Painting?<br>
(Using a scale of 1 to 5, with 5 representing 'very satisfied'.)
</td>
<td class="formValue">
<input type="radio" name="howSatisfied" value="5">5<br>
<input type="radio" name="howSatisfied" value="4">4<br>
<input type="radio" name="howSatisfied" value="3">3<br>
<input type="radio" name="howSatisfied" value="2">2<br>
<input type="radio" name="howSatisfied" value="1">1

</td>
</tr>

<tr > 
<td class="formLabel" valign="top"> 
If there were one thing you could improve, what would it be?
</td>
<td class="formValue"> <textarea name="whatToImprove" cols="60" rows="12"></textarea></td>
</tr>
<tr > 
<td class="formLabel"  valign="top"> 
Additional comments?
</td>
<td class="formValue"> <textarea name="comments" cols="60" rows="12"></textarea></td>
</tr>
<tr>
<td  colspan="2" align="right"><br /><span class="linkButton"><a href="javascript:document.forms['contactForm'].submit()">Submit This Form</a></span><br /><br /></td>
</tr>

  </table>
 </form>
</div>

<?php
} // end else mode not equal processForm
?>


</div><!-- end mainContent -->
<?php
include("includes/footer.php");
?>
</div><!-- end mainContainer -->
<?php
include("includes/htmlBottom.php");
?>