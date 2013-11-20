
		<aside class="sidebar" role="complementary">
		<?php if ( is_active_sidebar( 'Sidebar 1' ) ) { ?>
			<?php dynamic_sidebar( 'Sidebar 1' ); ?>
		<?php } else { ?>
			<section>
				<?php get_search_form(); ?>
			</section>
		<?php } ?>
		</aside>
		