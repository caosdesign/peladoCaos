<?php 

	// remove o status de versão do wp
	remove_action('wp_head', 'wp_generator');

	// adiciona logo personalizada na area administrativa
	add_action('admin_head', 'logo_personalizada');
	function logo_personalizada() {
		echo '<style type="text/css"> #header-logo { background-image: url('.get_bloginfo('template_directory').'/img/admin-logo.gif) !important; } </style>';
	}

	// adiciona link para o favicon automaticamente
	add_action('wp_head', 'blog_favicon');
	function blog_favicon() {
	  echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
	}

	// Admin footer modification
	function remove_footer_admin () {
		echo '<span id="footer-thankyou">Developed by <a href="http://www.caosdesign.com.br" target="_blank">caos! design</a> under wordpress</span>';
	}
	add_filter('admin_footer_text', 'remove_footer_admin');

	//disble admin toolbar
	add_filter( 'show_admin_bar', '__return_false' );

	// substring
	function give_me_sub($txt, $limite) {
		if(strlen($txt) > $limite){
		 $txt_final = substr($txt, 0, $limite);
		 $txt3 = "...";
		 $txt_final = $txt_final.$txt3;
		 return $txt_final;
		}
		else{
		 return $txt;	
		}
	}
?>