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
				<?php echo esc_html( get_template_part( 'template-parts/pagination' ) ); ?>
	<div>
		<?php previous_post_link(); ?> | <?php next_post_link(); ?>
	</div>
<?php
get_footer();
