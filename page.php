<?php get_header(); 
if ( is_front_page() ){ ?>
	<section class="uc light-gradient">
		<div class="inner">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/van-360.png">
			<span>360wellnessdance@gmail.com</span>
			<span>+52 984 807 1534</span>
			<nav>
				<a href=""><i class="mdi mdi-facebook"></i></a>
				<a href=""><i class="mdi mdi-instagram"></i></a>
				<a href=""><i class="mdi mdi-twitter"></i></a>
				<a href=""><i class="mdi mdi-youtube-play"></i></a>
			</nav>
		</div>
	</section>
<?php } else {
?>
<section class="<?php echo $post->post_name; ?>">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	$img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	
	$thumb_id = get_post_thumbnail_id($post->ID);
		if ( wp_is_mobile() ):
			$thumb_url = wp_get_attachment_image_src($thumb_id,'large');
		else:
			$thumb_url = wp_get_attachment_image_src($thumb_id,'full');
		endif;
?>
	<div class="hero" style="background-image:url(<?php echo $img; ?>);">
		<div class="inner">
			<h1 class="special-title"><?php the_title(); ?></h1>
			<?php edit_post_link(); ?>
		</div>
	</div>
	<div class="inner">
	<?php the_content(); ?>
	</div>
</section>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); } ?>