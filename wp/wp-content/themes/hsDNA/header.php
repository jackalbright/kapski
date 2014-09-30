<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<!--BLOG TITLE, ADD SITE NAME BEFORE INCLUDES IF DESIRED-->
<title>Kapski Painting :: <?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<!--SITE GLOBAL CSS, THIS SHOULD NOT CHANGE-->
<link rel="stylesheet" href="../../../../css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../../../../css/navMenu.css" type="text/css" media="screen" />
<!--ADD ANY ADDITIONAL CSS FILES HERE THAT YOUR SITE NEEDS BESIDES STYLE.CSS-->
<link href="../../../../css/fonts/ptSans/fonts.css" rel="stylesheet" type="text/css" media="screen" />

<!--BLOG CSS, RSS & PINGBACK, DO NOT CHANGE-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--YOUR SITE'S SHORTCUT ICON, CHANGE PATH IF NECESSARY-->
<link rel="shortcut icon" href="../../../../images/favicon.png">

<!--IE STYLES & JS ONLY-->
<!--[if lte IE 7]>
<link href="../../../../css/IE7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if lte IE 6]>
<link href="../../../../css/IE6.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../../../js/sfhover.js"></script>
<![endif]-->


<?php wp_head(); ?>

</head>

<!--BEGIN SITE BODY & STRUCTURE-->

<body id="body_blog">

<div id="mainContainer">

	<!--<div id="header">-->
		
<?php 
include("../includes/header.php"); 
include("../includes/menu.php");
?>
 <!--   </div>-->
    
    <div id="mainContent">
    

    
    <!--BEGIN BLOG STRUCTURE-->

	<div id="blogContainer">
    
    
