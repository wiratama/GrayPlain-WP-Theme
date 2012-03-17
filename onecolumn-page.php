<?php 
/**
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>
	<div class="grid_12">
		<div class="one_pad">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h1 class="blog_title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>
	
	<script type="text/javascript" >
		jQuery('#about_nav').click(function() {
			jQuery('#card_about').slideDown();
			jQuery('#card_social').slideUp();
			jQuery('#about_nav').css("color", "#41BAE4");
			jQuery('#social_nav').css("color", "#333");
		})
		
		jQuery('#social_nav').click(function() {
			jQuery('#card_about').slideUp();
			jQuery('#card_social').slideDown();
			jQuery('#about_nav').css("color", "#333");
			jQuery('#social_nav').css("color", "#41BAE4");
		})
	</script>
<?php get_footer(); ?>