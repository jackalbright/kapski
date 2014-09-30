<?php
include("includes/phpHeader.php");
//include("lib/commonFunctions.php");
$contactClass = "currentPage";
$imageNumber = rand(1,4);
$title = "Kapski Painting Contractor Delaware and Chester County PA, New Castle County DE";
require_once('lib/recaptchalib.php');
$publicKey="6LfOBQUAAAAAAH2w1_iOaNYjM6Ogb2U2S3vSO4wg";
$privateKey="6LfOBQUAAAAAAN2hM7c-sfwZumsD07SbV-aC1uH0";
if (isset($_POST['mode'])){
	$mode = $_POST['mode'];
}else{
	$mode = "";
}
if($mode == "processForm"){
$resp = recaptcha_check_answer ($privateKey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

}
if($mode == "processForm" && $resp->is_valid){






	if (isset($_POST['realName'])){
		$realName = $_POST['realName'];
	}else{
		$realName = "not specified";
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
	if (isset($_POST['email'])){
		$email = $_POST['email'];
	}else{
		$email = "";
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
	if (isset($_POST['typeWork'])){
		$typeWork = $_POST['typeWork'];
	}else{
		$typeWork = "";
	}

	if (isset($_POST['howContact'])){
		$howContact = $_POST['howContact'];
	}else{
		$howContact = "";
	}
	if (isset($_POST['addToMailingList'])){
		$mailingListMsg = "\nThis person would like to be added to your mailing list.\n";
	}else{
		$mailingListMsg == "";
	}
	if (isset($_POST['comments'])){
		$comments = $_POST['comments'];
	}else{
		$comments = "";
	}
		if (isset($_POST['needEstimate'])){
		$estimateMsg = "\nThis person would like an estimate.\n";
		$subject = "A request for an estimate from website";
	}else{
		$subject = "General communication from website";
		$estimateMsg = "";
	}
$textMessage	="The following information was submitted on Kapski Painting website contact form:\n\n";
$textMessage	.=	 "Name: $realName\n";
$textMessage	.=	 "Phone: $areaCode-$phone\n";
$textMessage	.=	 "Address: $street\n";
$textMessage	.=	 "$city, $state $zip\n";
$textMessage	.=	 "Email address: $email\n";
$textMessage	.= "Type of Work: $typeWork\n";
$textMessage	.= "How to Contact: $howContact\n";
$textMessage	.=  $mailingListMsg ;
$textMessage	.= $estimateMsg ;

$textMessage	.= "\nFrom GeoTarget Landing Page: " . $geoTarget . "\n";
$textMessage	.= "Additional Comments: $comments\n";
$fromaddress = "website@kapskipainting.com";
$fromName = "Kapski Painting Website";
$to	= "steve@kapskipainting.com";
//send_mail($to, $textMessage, $subject, $fromaddress, $fromname, $attachments=false);
$headers  = "From: webmaster@kapskipainting.com\n";

$headers .= "Reply-To:$email\n";
$headers .= "bcc:jacka510@mac.com\n";


$headers .= "Content-Type: text/plain;\n";
// TEXT EMAIL PART

$message = $textMessage;


// SEND MAIL

$mail_sent = mail($to, $subject, $message, $headers );


if($mail_sent){
	$resultCode="ok";
}else{
	$resultCode="not ok";
}
header("location:contactThankyou.php");
}else{ // end if mode = processForm







include("includes/htmlTop.php");

if(isset($_POST['geotarget'] )){
	$geoTarget = htmlentities($_POST['geotarget']);
}else{
	$geoTarget = 'not from geoTarget landing page';
}

?>
 
<script language="javascript" type="text/javascript">
 var RecaptchaOptions = {
    theme : 'white'
 };
 
function validateForm(){
var theName 	= document.getElementById('realName');
var theEmail 	=	 document.getElementById('email');
var thePhone	=	document.getElementById('phone');

var errorMessage = "";

if (theName.value == ""){
	errorMessage += "Please tell us your name\n";
}
if (theEmail.value == "" && thePhone.value == ""){
	errorMessage += "Please provide Email Address OR a Phone Number\n";
}
if(errorMessage == ""){
	return true;
}else{
	alert (errorMessage);
	return false;
}
}
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
<br /><br />
<img src="images/sidebar/communication.jpg" width="237" height="53" border="0" />
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
Click <a href="http://www.delawarecountypabusinesslist.com">here</a> to find businesses in Delaware County, PA!
</div> 
<div class="contentBox">
<h1>Contact Us</h1>

<p>It is our goal at Kapski Painting  to address customer concerns, answer questions, and provide estimates, as quickly as possible. We know how important your time is to you. </p>
<p>If you are a recent customer, and would like to fill out our Customer Satisfaction Form, it is available <a href="customerFeedback.php">here.</a></p>
<p>Call us now at <strong>610.565.8571</strong>, or email at <a href="mailto:steve@kapskipainting.com">steve@kapskipainting.com</a></p>
<p><strong>OR</strong></p>
<p>If you need a price quote, please fill out the form below providing us with general information about your requirements.</p>
<form method=POST action="<?php echo $_SERVER['PHP_SELF']?>" name="contactForm" onSubmit="return validateForm();">
<input type="hidden" name="mode" value="processForm">
<input type="hidden" name="geoTarget" value="<?php echo $geoTarget ?>">
<table class="formTable" width="90%">
<tr>
<td class="tableHeading" colspan="2" ><br />
<!--<span class="linkButton"><a href="javascript:document.forms['contactForm'].submit()">Submit This Form</a></span> -->
<button class="linkButton" type="submit">Submit This Form</button><br /><br />
</td>
</tr>
<tr > 
<td class="formLabel">Your Name </td>
<td class="formValue"><input type="text" name="realName" id="realName"size="30"></td>
</tr>
<tr>
<td class="formLabel">Phone</td> 
<td class="formValue"><input type="text" name="areaCode" id="areaCode"size="3" maxlength="3">&nbsp; - <input type="text" name="phone" id="phone"size="12"></td>
<tr>
<td class="formLabel">Email</td>
<td class="formValue"><input type="text" name="email" id="email"size="30"></td>
</tr>
<tr > 
<td  class="formLabel">Street </td><td class="formValue"><input type="text" name="street" id="street"size="30"></td></tr>
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
<td class="formLabel" valign="top">What is the nature of your project?<br />(please check all that apply)</td>
<td class="formValue"><input type="checkbox" name="typeWork" value="Interior paint">Interior paint<br>
<input type="checkbox" name="typeWork" value="Exterior Paint">Exterior Paint<br />
<input type="checkbox" name="typeWork" value="Powerwash">Powerwash<br>
<input type="checkbox" name="typeWork" value="Wallcovering Installation">Wallcovering Installation<br>
<input type="checkbox" name="typeWork" value="Wallcovering Removal">Wallcovering Removal<br>
<input type="checkbox" name="typeWork" value="Deck Restoration">Deck Restoration<br />
<input type="checkbox" name="typeWork" value="Other">Other ( Please specify below in comments )<br />
</td>
</tr>


<tr > 
<td class="formLabel" valign="top">How would you like to be contacted?</td>
<td class="formValue"><input type="radio" name="howContact" value="Phone">Phone<br />
<input type="radio" name="howContact" value="EMail">Email<br />
<input type="radio" name="howContact" value="EMail or Phone">No Preference ( Email or Phone )<br />
</td>
</tr>
<tr>
<td class="formLabel">Do you need an estimate?</td> 
<td class="formValue" ><input type="checkbox" name="needEstimate" id="needEstimate" value="Yes"></td>
</tr>
<tr>
<td class="formLabel">Would like to be on our email list?</td> 
<td class="formValue" ><input type="checkbox" name="addToMailingList" id="addToMailingList" value="Yes"></td>
</tr>

<tr > 
<td class="formLabel"> 
Additional Comments or Special Instructions
</td>
<td class="formValue"> <textarea name="comments" cols="60" rows="12" ></textarea></td>
</tr>
<tr>
<td class="formLabel"></td>
<td><?php echo recaptcha_get_html($publicKey); ?></td>
</tr>
<tr>
<td  colspan="2" align="right"><br /><button class="linkButton" type="submit">Submit This Form</button><br /><br /></td>
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