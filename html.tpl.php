<?php 

#    Responsive Bricks
#    (c) 2012 Giovanni Canzio <giovanni.canzio@gmail.com>
#    
#    This file is part of Responsive Bricks
#
#    This is free software: you can redistribute it and/or modify
#    it under the terms of the GNU General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    (at your option) any later version.
#
#    Responsive Bricks is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU General Public License for more details.
# 

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en" > <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en" > <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en" > <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php print $head_title; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->

        <?php 
        
        print $styles;
        
        
        ?>
        
        <!--[if IE ]>
            <style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/css/ie_patches.css";</style>
        <![endif]-->
        
        <!--[if IE 7]>
            <style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/css/ie7_patches.css";</style>
        <![endif]-->
        
        <!--[if IE 8]>
            <style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/css/ie8_patches.css";</style>
        <![endif]-->
        
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        
        <!-- JS
  ================================================ -->
        <?php 
        
        print $scripts;
        
        ?>

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
