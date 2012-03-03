<div class="grid_3 omega">
	<div class="one_pad">
		<ul class="side_primary">
			<?php	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
				<li>
					<h1><?php _e( 'Archives', 'twentyten' ); ?></h1>
					<ul><?php wp_get_archives( 'type=monthly' ); ?></ul>
				</li>
				<li>
					<h1><?php _e( 'Meta', 'twentyten' ); ?></h1>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</li>
			<?php endif; ?>
		</ul>

		<?php if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		<?php endif; ?>
	</div>
</div>