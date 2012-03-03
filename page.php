<?php get_header(); ?>

<div class="grid_9 alpha">
	<div class="one_pad">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<article class="entries">
				<section class="blog_info">
						<h1 class="blog_title"><?php the_title(); ?></h1>
				</section>

				<section class="blog_content">
					<?php the_content(); ?>
				</section>
<?php endwhile; ?>
	</div>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>