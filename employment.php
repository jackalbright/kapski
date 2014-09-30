<?php
include("includes/phpHeader.php");
$validLicense="No";
$usCitizen = "Yes";
$reliableCar="Yes";
//include("lib/commonFunctions.php");
$employmentClass = "currentPage";
$imageNumber = rand(1,4);
$title = "Kapski Painting Employment Application";
include("includes/htmlTop.php");
?>
<script language="javascript" type="text/javascript">
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
	if (isset($_POST['mobileAreaCode'])){
		$mobileAreaCode = $_POST['mobileAreaCode'];
	}else{
		$mobileAreaCode = "";
	}
	if (isset($_POST['mobilePhone'])){
		$mobilePhone = $_POST['mobilePhone'];
	}else{
		$mobilePhone = "";
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
		$zip = "not provided";
	}
	if (isset($_POST['dob'])){
		$dob = $_POST['dob'];
	}else{
		$dob = "not provided";
	}
	if (isset($_POST['emergencyContact'])){
		$emergencyContact = $_POST['emergencyContact'];
	}else{
		$emergencyContact = "not provided";
	}
	if (isset($_POST['emergencyAreaCode'])){
		$emergencyAreaCode = $_POST['emergencyAreaCode'];
	}else{
		$emergencyAreaCode = "not provided";
	}
	if (isset($_POST['emergencyPhone'])){
		$emergencyPhone = $_POST['emergencyPhone'];
	}else{
		$emergencyPhone = "not provided";
	}
	if (isset($_POST['reliableCar'])){
		$reliableCar = $_POST['reliableCar'];
	}else{
		$reliableCar = "not answered";
	}
	if (isset($_POST['validLicense'])){
		$validLicense = $_POST['validLicense'];
	}else{
		$validLicense = "validLicense";
	}
	
	if (isset($_POST['usCitizen'])){
		$usCitizen = $_POST['usCitizen'];
	}else{
		$usCitizen = "usCitizen";
	}
	if (isset($_POST['referenceName1'])){
		$referenceName1 = $_POST['referenceName1'];
	}else{
		$referenceName1 = "";
	}
	if (isset($_POST['referencePhone1'])){
		$referencePhone1 = $_POST['referencePhone1'];
	}else{
		$referencePhone1 = "";
	}
	if (isset($_POST['referenceRelationship1'])){
		$referenceRelationship1 = $_POST['referenceRelationship1'];
	}else{
		$referenceRelationship1 = "";
	}
		if (isset($_POST['referenceName2'])){
		$referenceName2 = $_POST['referenceName2'];
	}else{
		$referenceName2 = "";
	}
	if (isset($_POST['referencePhone2'])){
		$referencePhone2 = $_POST['referencePhone2'];
	}else{
		$referencePhone2 = "";
	}
	if (isset($_POST['referenceRelationship2'])){
		$referenceRelationship2 = $_POST['referenceRelationship2'];
	}else{
		$referenceRelationship2 = "";
	}
	
	if (isset($_POST['positionDesired'])){
		$positionDesired = $_POST['positionDesired'];
	}else{
		$positionDesired = "";
	}
	if (isset($_POST['highSchool'])){
		$highSchool = $_POST['highSchool'];
	}else{
		$highSchool = "";
	}
	if (isset($_POST['college'])){
		$college = $_POST['college'];
	}else{
		$college = "not specified";
	}
	if (isset($_POST['vocational'])){
		$vocational = $_POST['vocational'];
	}else{
		$vocational = "not specified";
	}
	if (isset($_POST['currentEmployer'])){
		$currentEmployer = $_POST['currentEmployer'];
	}else{
		$currentEmployer = "not specified";
	}
	if (isset($_POST['currentEmpPhone'])){
		$currentEmpPhone = $_POST['currentEmpPhone'];
	}else{
		$currentEmpPhone = "not specified";
	}
	if (isset($_POST['currentPostion'])){
		$currentPostion = $_POST['currentPostion'];
	}else{
		$currentPostion = "not specified";
	}
	if (isset($_POST['currentResponsibilities'])){
		$currentResponsibilities = $_POST['currentResponsibilities'];
	}else{
		$currentResponsibilities = "not specified";
	}
	if (isset($_POST['employedFrom'])){
		$employedFrom = $_POST['employedFrom'];
	}else{
		$employedFrom = "not specified";
	}
	if (isset($_POST['employedTo'])){
		$employedTo = $_POST['employedTo'];
	}else{
		$employedTo = "not specified";
	}
	if (isset($_POST['currentSalary'])){
		$currentSalary = $_POST['currentSalary'];
	}else{
		$currentSalary = "not specified";
	}
	if (isset($_POST['currentLength'])){
		$currentLength = $_POST['currentLength'];
	}else{
		$currentLength = "not specified";
	}
	if (isset($_POST['reasonLeaving'])){
		$reasonLeaving = $_POST['reasonLeaving'];
	}else{
		$reasonLeaving = "not specified";
	}
	if (isset($_POST['previousEmployer1'])){
		$previousEmployer1 = $_POST['previousEmployer1'];
	}else{
		$previousEmployer1 = "not specified";
	}
	if (isset($_POST['previousPostion1'])){
		$previousPostion1 = $_POST['previousPostion1'];
	}else{
		$previousPostion1 = "not specified";
	}
	if (isset($_POST['previousEmpPhone1'])){
		$previousEmpPhone1 = $_POST['previousEmpPhone1'];
	}else{
		$previousEmpPhone1 = "not specified";
	}
	
	if (isset($_POST['previousResponsibilities1'])){
		$previousResponsibilities1 = $_POST['previousResponsibilities1'];
	}else{
		$previousResponsibilities1 = "not specified";
	}
	if (isset($_POST['employedFrom1'])){
		$employedFrom1 = $_POST['employedFrom1'];
	}else{
		$employedFrom1 = "not specified";
	}
	if (isset($_POST['employedTo1'])){
		$employedTo1 = $_POST['employedTo1'];
	}else{
		$employedTo1 = "not specified";
	}
	if (isset($_POST['previousSalary1'])){
		$previousSalary1 = $_POST['previousSalary1'];
	}else{
		$previousSalary1 = "not specified";
	}
	if (isset($_POST['reasonLeaving1'])){
		$reasonLeaving1 = $_POST['reasonLeaving1'];
	}else{
		$reasonLeaving1 = "not specified";
	}
	
	
	if (isset($_POST['previousEmployer2'])){
		$previousEmployer2 = $_POST['previousEmployer2'];
	}else{
		$previousEmployer2 = "not specified";
	}
	if (isset($_POST['previousEmpPhone2'])){
		$previousEmpPhone2 = htmlentities($_POST['previousEmpPhone2']);
	}else{
		$previousEmpPhone2 = "not specified";
	}
	if (isset($_POST['previousPostion2'])){
		$previousPostion2 = $_POST['previousPostion2'];
	}else{
		$previousPostion2 = "not specified";
	}
	if (isset($_POST['previousResponsibilities2'])){
		$previousResponsibilities2 = $_POST['previousResponsibilities1'];
	}else{
		$previousResponsibilities2 = "not specified";
	}
	if (isset($_POST['employedFrom2'])){
		$employedFrom2 = $_POST['employedFrom2'];
	}else{
		$employedFrom2 = "not specified";
	}
	if (isset($_POST['employedTo2'])){
		$employedTo2 = $_POST['employedTo2'];
	}else{
		$employedTo2 = "not specified";
	}
	if (isset($_POST['previousSalary2'])){
		$previousSalary2 = $_POST['previousSalary2'];
	}else{
		$previousSalary2 = "not specified";
	}
	if (isset($_POST['reasonLeaving2'])){
		$reasonLeaving2 = $_POST['reasonLeaving2'];
	}else{
		$reasonLeaving2 = "not specified";
	}
	

	

$textMessage	="The following employment application was submitted on Kapski Painting website contact form:\n\n";
$textMessage	.=	 "Name: $realName\n";
$textMessage	.=	 "Phone: $areaCode-$phone\n";
$textMessage	.=	 "Mobile Phone: $mobileAreaCode-$mobilePhone\n";
$textMessage	.=	 "Email: $email\n";
$textMessage	.=	 "Address: $street\n";
$textMessage	.=	 "$city, $state $zip\n";
$textMessage	.=	 "Date of Birth: $dob\n";
$textMessage	.=  "Emergency Contact: $emergencyContact\n";
$textMessage	.=  "Emergency Phone: $emergencyAreaCode - $emergencyPhone\n\n";
$textMessage	.=  "Own a reliable car? $reliableCar\n";
$textMessage	.=  "Have valid PA driver's license? $validLicense\n\n";
$textMessage	.=	 "US Citizen?  $usCitizen \n\n";
$textMessage	.=  "References\n";
$textMessage	.=  "Name:$referenceName1\nPhone:$referencePhone1\nRelationship:$referenceRelationship1\n";
$textMessage	.=  "Name:$referenceName2\nPhone:$referencePhone2\nRelationship:$referenceRelationship2\n";
$textMessage	.=  "Position desired:$positionDesired\n";
$textMessage	.=  "Educational Background\n";
$textMessage	.=  "High School: $highSchool\nCollege:$college\nVocational:$vocational\n";
$textMessage	.=  "Employment History";
$textMessage	.=  "Current employer:$currentEmployer\n";
$textMessage	.=  "Phone: $currentEmpPhone\n";
$textMessage	.=  "Current position:$currentPostion\n";
$textMessage	.=  "Current responsibilities:$currentResponsibilities\n";
$textMessage	.=  "Employed from:$employedFrom  to:$employedTo\n";
$textMessage	.=  "Current salary:$currentSalary \n";
$textMessage	.=  "How long with this company:$currentLength \n";
$textMessage	.=  "Reason for leaving:$reasonLeaving \n";
$textMessage	.=  "\nPrevious Employer[s] \n";
$textMessage	.=  "Employer:$previousEmployer1\n";
$textMessage	.=  "Position: $previousPostion1\n";
$textMessage	.=  "Responsibilities:$previousResponsibilities1\n";
$textMessage	.=  "Employed from:$employedFrom1  to:$employedTo1\n";
$textMessage	.=  "Previous salary:$previousSalary1\n";
$textMessage	.=  "Reason for leaving:$reasonLeaving1 \n";

$textMessage	.=  "Employer:$previousEmployer2\n";
$textMessage	.=  "Position: $previousPostion2\n";
$textMessage	.=  "Responsibilities:$previousResponsibilities2\n";
$textMessage	.=  "Employed from:$employedFrom2  to:$employedTo2\n";
$textMessage	.=  "Previous salary:$previousSalary2\n";
$textMessage	.=  "Reason for leaving:$reasonLeaving2 \n";

$fromaddress = "website@kapskipainting.com";
$fromName = "Kapski Painting Employment Application";
$to	= "steve@kapskipainting.com";
$headers  = "From: webmaster@kapskipainting.com\n";

$headers .= "Reply-To:$email\n";
$headers .= "bcc:jacka510@mac.com\n";

$headers .= "Content-Type: text/plain;\n";
// TEXT EMAIL PART

$message = $textMessage;

$theDate = date("Y-m-d");
// SEND MAIL
$subject = "Kapski Painting Employment Application $theDate";
$mail_sent = mail($to, $subject, $message, $headers );


if($mail_sent){
	$resultCode="ok";
}else{
	$resultCode="not ok";
}

$pageHeadMessage = "<h1>Thank You</h1>
<p>Your employment application has been sent to Kapski Painting. 
Your application will be reviewed and you may be contacted if we are in need of someone with your skill set.</p>
<p>You may wish to print this page for your records.</p>";
}

else{ // end if mode = processForm
		$realName = "";
		$areaCode = "";
		$phone = "";
		$mobileAreaCode = "";
		$mobilePhone = "";
		$email = "";
		$street = "";
		$city = "";
		$state = "";
		$zip = " ";
		$dob = " ";
		$emergencyContact = "";
		$emergencyAreaCode = "";
		$emergencyPhone = "";
		$reliableCar = "";
		$referenceName1 = "";
		$referencePhone1 = "";
		$referenceRelationship1 = "";
		$referenceName2 = "";
		$referencePhone2 = "";
		$referenceRelationship2 = "";
		$positionDesired = "";
		$highSchool = "";
		$college = "";
		$vocational = " ";
		$currentEmployer = " ";
		$currentEmpPhone = " ";
		$currentPostion = " ";
		$currentResponsibilities = " ";
		$employedFrom = " ";
		$employedTo = " ";
		$currentSalary = " ";
		$currentLength = " ";
		$reasonLeaving = " ";
		$previousEmployer1 = " ";
		$previousEmpPhone1 = " ";
		$previousEmpPhone2= " ";
		$previousPostion1 = " ";
		$previousResponsibilities1 = " ";
		$employedFrom1 = " ";
		$employedTo1 = " ";
		$previousSalary1 = " ";
		$reasonLeaving1 = " ";
		$previousEmployer2 = " ";
		$previousPostion2 = " ";
		$previousResponsibilities2 = " ";
		$employedFrom2 = " ";
		$employedTo2 = " ";
		$previousSalary2 = " ";
		$reasonLeaving2 = " ";
$pageHeadMessage =	"<h1>Employment Application</h1>
<p>Please provide as much detail as you can, and thank you for your interest in working for Kapski Painting</p>
<p>All information will remain confidential</p>
<p>You may fill out this form and submit it electronically.  If you are called by Kapski Painting to come in for an interview, you will be asked to sign your application at that time.</p>";	
}

?>

<div id="mainContent">
<div class="pictureBox">
<br />
<img src="images/siteShots/250x250_65_<?=$imageNumber?>.jpg" width="250" height="250" border="0"/>
<br /><br />
<img src="images/sidebar/communication.jpg" width="237" height="53" border="0" />
</div> 
<div class="contentBox">

<?php echo  $pageHeadMessage;?>
<form method=POST action="<?php echo $_SERVER['PHP_SELF']?>" name="contactForm" onSubmit="return validateForm();">
<input type="hidden" name="mode" value="processForm">

<table class="formTable" width="90%">
<tr>
<td class="tableHeading" colspan="2" align="right"><br />
<button class="linkButton" type="submit">Submit Employment Application</button>
<br /><br /></td>
</tr>
<tr > 
<td class="formLabel"><span id="realnameLabel">Your Name</span></td>
<td class="formValue"><input type="text" name="realName" id="realName"size="25" value="<?php echo $realName;?>"></td>
</tr>
<tr>
<td class="formLabel"><span id="phoneLabel">Phone</span></td> 
<td class="formValue"><input type="text" name="areaCode" id="areaCode" size="3" value="<?php echo $areaCode;?>">&nbsp; - <input type="text" name="phone" id="phone" size="12" value="<?php echo $phone;?>"></td>
</tr>
<tr>
<td class="formLabel"><span id="phoneLabel">Mobile Phone</span></td> 
<td class="formValue"><input type="text" name="mobileAreaCode" size="3" value="<?php echo $mobileAreaCode;?>">&nbsp; - <input type="text" name="mobilePhone" size="12" value="<?php echo $mobilePhone;?>"></td>
</tr>
<tr>
<td class="formLabel">Email</td>
<td class="formValue"><input type="text" name="email" id="email"size="30" value="<?php echo $email;?>"></td>
</tr>
<tr > 
<td  class="formLabel"><span id="streetLabel">Street</span></td><td class="formValue"><input type="text" name="street" size="30" value="<?php echo $street; ?>"></td></tr>
<tr><td  class="formLabel"><span id="cityLabel">City</span></td> 
<td class="formValue"><input type="text" name="city" value="<?php echo $city;?>"></td>
</tr>
<tr>
<td  class="formLabel"><span id="stateLabel">State</span></td>
<td class="formValue"><input type="text" name="state" size="5" value="<?php echo $state;?>"></td>
</tr> 
<tr>
<td  class="formLabel"><span id="zipLabel">Zip</span></td>
<td class="formValue"><input type="text" name="zip" size="12" value="<?php echo $zip;?>"></td>
</tr>
<tr>
<td  class="formLabel" ><span id="dobLabel">Date of Birth</span></td>
<td class="formValue"><input type="text" name="dob" size="12" value="<?php echo $dob;?>"></td>
</tr>


<tr > 
<td class="formLabel" valign="top">Emergency Contact</td>
<td class="formValue"><input type="text" name="emergencyContact" size="40">
</td>
</tr>
<tr > 
<td class="formLabel" valign="top">Relationship</td>
<td class="formValue"><input type="text" name="relationship" size="20" value="<?php echo $emergencyContact;?>">
</td>
</tr>
<tr>
<td class="formLabel"><span id="phoneLabel">Emergency Contact Phone</span></td> 
<td class="formValue"><input type="text" name="emergencyAreaCode" size="3">&nbsp; - <input type="text" name="emergencyPhone" size="12" value="<?php echo $emergencyAreaCode;?>"></td>
</tr>
<tr>
<td class="formLabel">Do you own a reliable car?</td> 
<td class="formValue" >Yes
<input type="radio" name="reliableCar" id="reliableCar" value="Yes"  
<?php
if($reliableCar == 'Yes'){
	echo "checked='checked'";
}
?>
>&nbsp; 

No<input type="radio" name="reliableCar" id="reliableCar" value="No" 
<?php
if($reliableCar == 'No'){
	echo "checked='checked'";
}
?>
></td>
</tr>
<tr>
<td class="formLabel">Do you have a valid PA Drivers License?</td> 
<td class="formValue" >Yes
<input type="radio" name="validLicense" id="validLicense" value="Yes"  
<?php
if($validLicense == 'Yes'){
	echo "checked='checked'";
}
?>
>&nbsp; 

No<input type="radio" name="validLicense" id="validLicense" value="No" 
<?php
if($validLicense == 'No'){
	echo "checked='checked'";
}
?>
></td>
</tr>
<tr>
<td class="formLabel">Are you a US Citizen?</td> 
<td class="formValue" >Yes
<input type="radio" name="usCitizen" id="usCitizen" value="Yes"  
<?php
if($usCitizen == 'Yes'){
	echo "checked='checked'";
}
?>
>&nbsp; 

No<input type="radio" name="usCitizen" id="usCitizen" value="No" 
<?php
if($usCitizen == 'No'){
	echo "checked='checked'";
}
?>
></td>
</tr>
<tr>
<td class="subHeading" colspan="2">References (please provide two)</td> 
</tr>
<tr>
<td class="formLabel">Name</td> 
<td class="formValue" ><input type="text"  name="referenceName1" id="referenceName1" size="40" value="<?php echo $referenceName1;?>"></td>
</tr>
<tr>
<td class="formLabel">Phone</td> 
<td class="formValue" ><input type="text"  name="referencePhone1" id="referencePhone1" size="40" value="<?php echo $referencePhone1;?>"></td>
</tr>
<tr>
<td class="formLabel">Relationship</td> 
<td class="formValue" ><input type="text"  name="referenceRelationship1" id="referenceRelationship1" size="40" value="<?php echo $referenceRelationship1;?>"></td>
</tr>
<tr>
<td class="formLabel">Name</td> 
<td class="formValue" ><input type="text"  name="referenceName2" id="referenceName2" size="40" value="<?php echo $referenceName2;?>"></td>
</tr>
<tr>
<td class="formLabel">Phone</td> 
<td class="formValue" ><input type="text"  name="referencePhone2" id="referencePhone2" size="40" value="<?php echo $referencePhone2;?>"></td>
</tr>
<tr>
<td class="formLabel">Relationship</td> 
<td class="formValue" ><input type="text"  name="referenceRelationship2" id="referenceRelationship2" size="40" value="<?php echo $referenceRelationship2;?>"></td>
</tr>
<tr>
<td class="subHeading" colspan="2">&nbsp;</td> 
</tr>
<tr > 
<td class="formLabel"><span id="positionDesiredLabel"> Position Desired</span></td>
<td class="formValue"> <input type="text"  name="positionDesired" id="positionDesired" size="40" value="<?php echo $positionDesired;?>"></td>
</tr>
<tr>
<td class="subHeading" colspan="2">Education</td> 
</tr>
<tr>
<td  class="formLabel"><span id="highSchoolLabel">High School</span></td>
<td class="formValue"><input type="text" name="highSchool" size="40"value="<?php echo $highSchool;?>"></td>
</tr>
<tr>
<td  class="formLabel"><span id="collegeLabel">College / University</span></td>
<td class="formValue"><input type="text" name="college" size="40" value="<?php echo $college;?>"></td>
</tr>
<tr>
<td  class="formLabel"><span id="vocational Label">Vocational</span></td>
<td class="formValue"><input type="text" name="vocational" size="40" value="<?php echo $vocational;?>"></td>
</tr>
<tr>
<td class="subHeading" colspan="2">Employment History</td> 
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel">Current Employer</span></td>
<td class="formValue"><input type="text" name="currentEmployer" size="30" value="<?php echo $currentEmployer;?>"> Phone <input type="text" name="currentEmpPhone" size="15" value="<?php echo $currentEmpPhone;?>"></td>
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel">Position</span></td>
<td class="formValue"><input type="text" name="currentPostion" size="30" value="<?php echo $currentPostion;?>"></td>
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel">Responsibilities</span></td>
<td class="formValue"><input type="text" name="currentResponsibilities" size="40" value="<?php echo $currentResponsibilities;?>"></td>
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel">Dates of Employment</span></td>
<td class="formValue">From: <input type="text" name="employedFrom" size="12" value="<?php echo $employedFrom;?>">To: <input type="text" name="employedTo" size="12" value="<?php echo $employedTo;?>"></td>
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel">Current Salary</span></td>
<td class="formValue"><input type="text" name="currentSalary" size="15" value="<?php echo $currentSalary;?>"> Length of Employment <input type="text" name="currentLength" size="15" value="<?php echo $currentLength;?>"></td>
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel"> Reason for Leaving</span></td>
<td class="formValue"><input type="text" name="reasonLeaving" size="40" value="<?php echo $reasonLeaving;?>"> </td>
</tr>
<tr>
<td class="subHeading" colspan="2">&nbsp;</td> 
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel">Previous Employer</span></td>
<td class="formValue"><input type="text" name="previousEmployer1" size="30" value="<?php echo $previousEmployer1;?>"> Phone <input type="text" name="previousEmpPhone1" size="15" value="<?php echo $previousEmpPhone1?>"></td>
</tr>

<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel">Position</span></td>
<td class="formValue"><input type="text" name="previousPostion1" size="30" value="<?php echo $previousPostion1;?>"></td>
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel">Responsibilities</span></td>
<td class="formValue"><input type="text" name="previousResponsibilities1" size="40" value="<?php echo $previousResponsibilities1;?>"></td>
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel">Dates of Employment</span></td>
<td class="formValue">From: <input type="text" name="employedFrom1" size="12" value="<?php echo $employedFrom1;?>">To: <input type="text" name="employedTo1" size="12" value="<?php echo $employedTo1;?>"></td>
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel"> Salary</span></td>
<td class="formValue"><input type="text" name="previousSalary1" size="15" value="<?php echo $previousSalary1?>"> </td>
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel"> Reason for Leaving</span></td>
<td class="formValue"><input type="text" name="reasonLeaving1" size="40" value="<?php echo $reasonLeaving1;?>"> </td>
</tr>
<tr>
<td class="subHeading" colspan="2">&nbsp;</td> 
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel">Previous Employer</span></td>
<td class="formValue"><input type="text" name="previousEmployer2" size="30" value="<?php echo $previousEmployer2;?>"> Phone <input type="text" name="previousEmpPhone2" size="15" value="<?php echo $previousEmpPhone2 ;?>"></td>
</tr>

<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel">Position</span></td>
<td class="formValue"><input type="text" name="previousPostion2" size="30" value="<?php echo $previousPostion2;?>"></td>
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel">Responsibilities</span></td>
<td class="formValue"><input type="text" name="previousResponsibilities2" size="40" value="<?php echo $previousResponsibilities2;?>"></td>
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel">Dates of Employment</span></td>
<td class="formValue">From: <input type="text" name="employedFrom2" size="12" value="<?php echo $employedFrom2;?>">To: <input type="text" name="employedTo2" size="12" value="<?php echo $employedTo2;?>"></td>
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel"> Salary</span></td>
<td class="formValue"><input type="text" name="previousSalary2" size="15"  value="<?php echo $previousSalary2;?>"> </td>
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel"> Reason for Leaving</span></td>
<td class="formValue"><input type="text" name="reasonLeaving2" size="40" value="<?php echo $reasonLeaving2;?>"> </td>
</tr>
<tr>
<td class="subHeading" colspan="2">&nbsp;</td> 
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel">Applicant Signature</span></td>
<td class="formValue"><p>&nbsp;</p></td>
</tr>
<tr>
<td  class="formLabel" valign="top"><span id="collegeLabel">Date</span></td>
<td class="formValue"><p>&nbsp;</p></td>
</tr>
<tr>
<td  colspan="2" align="right"><br />
<button class="linkButton" type="submit">Submit Employment Application</button>
<br /><br /></td>
</tr>

  </table>
 </form>
</div>

</div><!-- end mainContent -->
<?php
include("includes/footer.php");
?>
</div><!-- end mainContainer -->
<?php
include("includes/htmlBottom.php");
?>