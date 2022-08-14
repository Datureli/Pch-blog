<?php if ( have_posts() && is_home() ) : ?>
 
<ul style="list-style: none;">
 
	<?php while ( have_posts() ) : the_post(); 
		?>
		<li style="display: flex;">
			
		</style> 

			   <?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'medium' ); ?>	
			   </a>		
			   <?php endif; ?>
			<div style="margin-left: 20px">
			<a href="<?php the_permalink(); ?>"><?php the_title( '<h2>', '</h2>' ); ?> </a>
			  <?php the_excerpt(); ?> 
			  <?php echo get_the_date( get_option( 'date_format' ) ); ?>
			</div>
		 
		</li>

	<?php endwhile; ?>
 
</ul>
	<?php wp_reset_postdata(); ?>
	<div style="justify-content: center; margin: auto; display: flex;">
		<h2><?php the_posts_pagination(); ?></h2> 
	</div>
   
<?php else : ?>
	<?php if ( is_home() ) : ?>
	<p><?php _e( 'Sorry, no posts here' ); ?></p>
	<?php endif; ?>
<?php endif; ?>
