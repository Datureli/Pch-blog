<?php get_header(); ?>

<div class="nav">
	<div class="nav__links">
		<?php wp_nav_menu( $args ); ?>
	</div>
</div>

<?php if ( have_posts() ) : ?>
	<?php 
	while ( have_posts() ) :
		the_post(); 
		?>
<div style="display: flex; margin-left: 30px;">
<div>
		<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'thumbnail' ); ?>	
			   </a>		
			   <?php endif; ?>
<h2><?php the_title(); ?></h2>
		<?php the_excerpt(); ?> 
</div>
 
</div>

		<?php 
endwhile;
	wp_reset_postdata(); 
	?>
<?php else : ?>
<p><?php _e( 'There is no users' ); ?></p>
<?php endif; ?>


<?php
get_footer();
