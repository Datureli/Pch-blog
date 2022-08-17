<?php get_header(); ?>

	<div class="single">
		<?php
		while ( have_posts() ) {
			the_post();
			?>
			<h1>
				<?php the_title(); ?>
			</h1>
			<p>Departament:</p>
			<?php 
			$terms = get_the_terms( $post->ID, 'departaments' );
			foreach ( $terms as $term ) {
				echo $term->slug . ' ';
			}; 
			?>
			
			<div>
				<?php echo wp_get_attachment_image( get_post_thumbnail_id(), $size = 'large' ); ?>
			</div>
			<div>
				<?php the_content(); ?>
			</div>
			<?php
		}
		?>
	</div>
<?php
get_footer();
