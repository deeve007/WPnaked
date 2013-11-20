<?php get_header(); ?> 

	<?php if ( have_posts() ) : ?>
		
		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
			<article>
				<h2 class="entry-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_date(); ?> <?php the_time(); ?></time>
				<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
				<?php the_excerpt(); ?>
			</article>
			
		<?php endwhile; ?>
		
	<?php else : ?>
		<h2>Sorry, nothing to display</h2>
	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?> 