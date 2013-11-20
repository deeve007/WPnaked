<?php get_header(); ?> 

		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
			<article>
				<h1 class="page-title"><?php the_title(); ?></h1>
				<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_date(); ?> <?php the_time(); ?></time>
				<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
				<?php the_content(); ?>
				
				<?php if ( get_the_author_meta( 'description' ) ) : ?>
					<footer class="author">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
						<h3>About <?php echo get_the_author() ; ?></h3>
						<p><?php the_author_meta( 'description' ); ?></p>
					</footer>
				<?php endif; ?>
				
				<?php previous_post_link(); ?>
				<?php next_post_link(); ?>
				
				<?php comments_template(); ?>
			</article>
			
		<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?> 