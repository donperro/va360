<?php

	add_action( 'wp_enqueue_scripts', 'cssandjs' );
	function cssandjs(){
		wp_enqueue_style( 'mdi', '//cdn.materialdesignicons.com/1.9.32/css/materialdesignicons.min.css');
		/*wp_register_script( 'cycle2', get_stylesheet_directory_uri() . '/js/jquery.cycle2.min.js', array( 'jquery' ), '', true);
		wp_enqueue_script( 'cycle2' );
		wp_register_script( 'isotope', get_stylesheet_directory_uri() . '/js/jquery.nested.js', array( 'jquery' ), '', true);
		wp_enqueue_script( 'isotope' );
		wp_register_script( 'princess', get_stylesheet_directory_uri() . '/js/js.js', array( 'jquery' ), '', true);
		wp_enqueue_script( 'princess' );*/
	}

	add_action('after_setup_theme', 'remove_admin_bar_user');
	function remove_admin_bar_user() {
		show_admin_bar(false);
	}

	function my_wp_is_mobile() {
		include_once ( get_template_directory() . '/Mobile_Detect.php');
		$detect = new Mobile_Detect;
		if( $detect->isMobile() && !$detect->isTablet() ) {
			return true;
		} else {
			return false;
		}
	}

	/* check if user using tablet device */
	function my_wp_is_tablet() {
		include_once ( get_template_directory() . '/Mobile_Detect.php');
		$detect = new Mobile_Detect;
		if( $detect->isTablet() ) {
			return true;
		} else {
			return false;
		}
	}

?>