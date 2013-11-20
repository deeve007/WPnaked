<?php get_header(); ?> 

		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
			<article>
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</article>
			
		<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?> 