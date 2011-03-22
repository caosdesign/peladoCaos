<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- Favicon --><link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />
	<!-- CSS --><link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!-- RSS --><link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<!-- RSS 2.0 --><link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

	<!-- Chamando css e js dos plugins -->
	<?php 
	remove_action('wp_head', 'wp_generator'); // Remove display da atual versao do wordpress
	remove_action('wp_head', 'rsd_link'); // Remove o link para o servico Really Simple Discovery
    remove_action('wp_head', 'wlwmanifest_link'); // Remove o link para o servico Windows Live Writer
	remove_action('wp_head', 'index_rel_link'); // Remove o link para o index
    remove_action('wp_head', 'parent_post_rel_link');
    remove_action('wp_head', 'start_post_rel_link');
    remove_action('wp_head', 'adjacent_posts_rel_link');
    remove_action('wp_head', 'wp_get_archives');
	wp_head(); 
	?>

</head>

<body <?php body_class(); ?>>

<div id="page">

<div id="header">
	<div id="titulo"><h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1></div>
    <div id="descricao"><?php bloginfo('description'); ?></div>
</div>

<?php /* URL do site = bloginfo('url'); */ ?>
<?php /* Nome do site = bloginfo('name'); */ ?>
<?php /* Descri??o do site = bloginfo('description'); */ ?>
<?php /* Caminho do tema = bloginfo('template_directory'); */ ?>