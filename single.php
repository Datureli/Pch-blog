<?php get_header(); ?>
	<div class="single">
		<?php
		while ( have_posts() ) {
			the_post();
			?>
			<h1>
				<?php the_title(); ?>
			</h1>
			<div>
				<?php echo wp_get_attachment_image( get_post_thumbnail_id(), $size = 'medium' ); ?>
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
	</div>
<?php
get_footer();
