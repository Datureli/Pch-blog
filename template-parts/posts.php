<?php 
$wpb_all_query = new WP_Query(
	[
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => 6,
	] 
); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 
<ul style="list-style: none;">
 
	<?php 
	while ( $wpb_all_query->have_posts() ) :
		$wpb_all_query->the_post(); 
		?>
		<li style="display: flex;">
            
        </style> >
		
			<div class="thumbnail-img">
			   <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'medium' ); ?>	
               </a>		
			   <?php endif; ?>
			</div>
            <div>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
			<?php the_content(); ?> 
            <?php echo get_the_date( get_option( 'date_format' ) ); ?>
            </div>
         
		</li>

	<?php endwhile; ?>
 
</ul>

	<?php wp_reset_postdata(); ?>
    <div style="justify-content: center; margin: auto; display: flex;">
  <h2> <?php the_posts_pagination(); ?></h2> 
    </div>
   
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
