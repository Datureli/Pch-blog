<div class="nav">
	<div class="nav__links">
		<?php wp_nav_menu( $args ); ?>
	</div>
</div>

<?php get_header(); ?>
<div>
	dsadsa
	<p>Title</p>
	<p>photo</p>

</div>
<?php 
$args = array( 'post_type' => 'teams', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<h2><?php the_title(); ?></h2>
<div class="entry-content">
<?php the_content(); ?> 
</div>
<?php endwhile;
wp_reset_postdata(); ?>
<?php else:  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php
$posts_args = [];
while ( have_posts() ) {
	the_post();
	
	

	
	$thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' )
		? get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' )
		: get_template_directory_uri() . '/assets/img/placeholder.jpg';

	array_push(
		$posts_args,
		[
			'id'        => get_the_ID(),
			'title'     => get_the_title(),
			'thumbnail' => $thumbnail_url,
			'excerpt'   => get_the_excerpt(),
			'permalink' => get_permalink(),
		]
	);
}
echo esc_html( get_template_part( 'template-parts/archive', 'content-rows', $posts_args ) );
?>

<?php
get_footer();
