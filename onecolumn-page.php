<?php get_header(); ?>
	<div class="grid_12">
		<div class="one_pad">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h1 class="blog_title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>
<?php get_footer(); ?>