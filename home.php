<?php get_header(); ?>

<?php if ( have_posts() && is_home() ) : ?>
 
 <ul class="posts">
  
	 <?php 
		while ( have_posts() ) :
			the_post(); 
			?>
		 <li>
			  
		 </style> 
 
				<?php if ( has_post_thumbnail() ) : ?>
				 <a href="<?php the_permalink(); ?>">
					 <?php the_post_thumbnail( 'medium' ); ?>	
				</a>		
				<?php endif; ?>
			 <div>
			 <a href="<?php the_permalink(); ?>"><?php the_title( '<h2>', '</h2>' ); ?> </a>
			   <?php the_excerpt(); ?> 
			   <?php echo get_the_date( get_option( 'date_format' ) ); ?>
			 </div>
		   
		 </li>
 
		<?php endwhile; ?>
  
 </ul>
	 <?php wp_reset_postdata(); ?>
	 <div class="posts__pagination">
		 <h2><?php the_posts_pagination(); ?></h2> 
	 </div>
	
 <?php else : ?>
	 <?php if ( is_home() ) : ?>
	 <p><?php _e( 'Sorry, no posts here' ); ?></p>
	 <?php endif; ?>
 <?php endif; ?>
 <?php get_footer(); ?>
