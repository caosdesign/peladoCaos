<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	
	<meta name="description" content="">
  	<meta name="keywords" content="" />
	<meta name="author" content="caos! design">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" />

    <!-- Favicon --><link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />
	
	<!-- RSS -->
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	
	<!-- RSS 2.0 -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	
	<!-- Modernizr -->
	<script src="js/libs/modernizr-2.0.6.min.js"></script>

	<?php  wp_head();  ?>

</head>

<body <?php body_class(); ?>>

<div id="page">

<div id="header">
	<div id="titulo">
		<h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
	</div>
    <div id="descricao"><?php bloginfo('description'); ?></div>
</div>

<?php 
  /* 
   * Hooks que podem te auxiliar na hora de importar css, js e imagens 
   * 
   * URL do site = bloginfo('url');
   * Caminho do tema = bloginfo('template_directory'); 
   * Nome do site = bloginfo('name');
   */ 
?>