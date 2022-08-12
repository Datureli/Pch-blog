<?php 
$wpb_all_query = new WP_Query(
	[
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'fields'         => 'ids',
		$data = get_posts( $args ),
	] 
); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 
<ul style="list-style: none;">
 
	<?php 
	while ( $wpb_all_query->have_posts() ) :
		$wpb_all_query->the_post(); 
		?>
		<li >
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
			<?php the_content(); ?> 
			<div class="thumbnail-img">
			   <?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'medium' ); ?>			
			   <?php endif; ?>
			   <?php echo get_the_date( get_option( 'date_format' ) ); ?>
			   
			</div>
		</li>

	<?php endwhile; ?>
 
</ul>
  <!-- put pagination functions here -->
	<?php wp_reset_postdata(); ?>
 
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
