<?php get_header(); ?> 

	<?php if ( have_posts() ) : ?>
		
		<?php if ( !is_category() ) { ?>
			<?php if ( is_day() ) : ?>
			<h1>Archive: <?php echo  get_the_date( 'D M Y' ); ?></h1>							
			<?php elseif ( is_month() ) : ?>
			<h1>Archive: <?php echo  get_the_date( 'M Y' ); ?></h1>	
			<?php elseif ( is_year() ) : ?>
			<h1>Archive: <?php echo  get_the_date( 'Y' ); ?></h1>								
			<?php else : ?>
			<h1>Archive</h2>	
			<?php endif; ?>
		<?php } ?>
		
		<?php if ( is_category() ) { ?>
			<h1>Category: <?php echo single_cat_title( '', false ); ?></h1>
		<?php } ?>
		
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