<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="title" content="">
<meta name="description" content="">
<meta name="Keywords" content="">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( !is_front_page() ){ ?>
	<header>
		<div class="inner">
			<a class="logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/van-360.png">
			</a>
			<nav>
			<?php
				$args = array(
					'container'       => false,
					'echo'            => false,
					'items_wrap'      => '%3$s',
					'depth'           => 0,
				);
				echo strip_tags( wp_nav_menu($args), '<a>' ); 
			?>
			</nav>
		</div>
	</header>
	<?php } ?>