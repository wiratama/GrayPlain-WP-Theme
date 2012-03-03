<div class="grid_9 alpha">
						<div class="one_pad">

<?php if ( ! have_posts() ) : ?>
		<h1><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
		<?php get_search_form(); ?>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
		<?php /* How to display posts in the Gallery category. */ ?>
		<?php if ( in_category( _x('gallery', 'gallery category slug', 'twentyten') ) ) : ?>
			<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<?php twentyten_posted_on(); ?>

			<?php if ( post_password_required() ) : ?>
					<?php the_content(); ?>
			<?php else : ?>
				<?php
					$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
					$total_images = count( $images );
					$image = array_shift( $images );
					$image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' );
				?>
				<a href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>
				<p><?php printf( __( 'This gallery contains <a %1$s>%2$s photos</a>.', 'twentyten' ), 'href="' . get_permalink() . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"', $total_images); ?></p>
				<?php the_excerpt(); ?>
			<?php endif; ?>

			<a href="<?php echo get_term_link( _x('gallery', 'gallery category slug', 'twentyten'), 'category' ); ?>" title="<?php esc_attr_e( 'View posts in the Gallery category', 'twentyten' ); ?>"><?php _e( 'More Galleries', 'twentyten' ); ?></a>
			|
			<?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?>
			<?php edit_post_link( __( 'Edit', 'twentyten' ), '|', '' ); ?>

		<?php /* How to display posts in the asides category */ ?>
		<?php elseif ( in_category( _x('asides', 'asides category slug', 'twentyten') ) ) : ?>
			<?php if ( is_archive() || is_search() ) : // Display excerpts for archives and search. ?>
				<?php the_excerpt(); ?>
			<?php else : ?>
				<?php the_content( __( 'Continue reading &rarr;', 'twentyten' ) ); ?>
			<?php endif; ?>

			<?php twentyten_posted_on(); ?>
			|
			<?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?>
			<?php edit_post_link( __( 'Edit', 'twentyten' ), '| ', '' ); ?>

		<?php /* How to display all other posts. */ ?>
		<?php else : ?>
		
							<article class="entries">
									<section class="blog_info">
											<h1 class="blog_title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
											<time class="blog_date"><?php twentyten_posted_on(); ?></time>
									</section>

									<section class="blog_content">
										<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
											<p><?php the_excerpt(); ?></p>
										<?php else : ?>
											<p><?php the_content( __( 'Continue reading &rarr;', 'twentyten' ) ); ?></p>
											<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
										<?php endif; ?>
									</section>
							</article>
			<?php comments_template( '', true ); ?>
		<?php endif; // This was the if statement that broke the loop into three parts based on categories. ?>
	<?php endwhile; // End the loop. Whew. ?>
	
</div>
</div>
