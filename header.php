<!DOCTYPE html>
<html>
<head>
<?php include 'INCLUDE_PATH' . 'meta_inc.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="<?=THEME_PATH; ?>css/style.css" type="text/css" rel="stylesheet" />
<link href="<?=THEME_PATH; ?>css/layout.css" type="text/css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
<!--[if lte IE 6]>
<script type="text/javascript">
    window.location = "http://www.browsehappy.com";
</script>
<![endif]-->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]--> 
<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<style>
	 
</style>

</head>
<body>

<div id="wrapper">
	<header>
    	<hgroup>
        	<h1><?=$config->banner;?></h1>
            <h3>Space Theme</h3>
        </hgroup>
        <div id="utilites">
        	<ul>
            	<li><a href="javascript:;">Login</a></li>
                <li><a href="javascript:;">FAQ</a></li>
            </ul>
        </div><!--/END UTILITES-->
    </header>
    
    
    
    <nav class="clear">
    	<ul>
        <?php 
				echo makeLinks($config->nav1,'<li>','</li>'); #link arrays are created in config_inc.php file
			?>
        	<!--<li><a href="javascript:;">Home</a></li>
            <li><a href="javascript:;">About</a></li>
            <li><a href="javascript:;">Portfolio</a></li>
            <li><a href="javascript:;">Blog</a></li>
            <li><a href="javascript:;">Contact</a></li>-->
        </ul>
        <form id="searchform" class="floatright">
        	<input type="search" placeholder="Search">
        </form>
    </nav>
    <div id="content">
    <?=showFeedback();?>
    
    <!--HEADER ENDS HERE-->