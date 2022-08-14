<?php get_header(); ?>
	<div style="display: grid; margin: auto; justify-content: center;">
		<?php
		while ( have_posts() ) {
			the_post();
			?>
			<h1 style="font-size: 50px;">
				<?php the_title(); ?>
			</h1>
			<div>
				<?php echo wp_get_attachment_image( get_post_thumbnail_id(), $size = 'large' ); ?>
			</div>
			<?php
			echo esc_html( get_template_part( 'template-parts/metabox-details' ) );
			?>
			<div>
				<?php the_content(); ?>
			</div>
			<?php
		}
		?>
	</div>
<?php echo esc_html( get_template_part( 'template-parts/pagination' ) ); ?>
	<div style="display: flex; margin: auto; justify-content: space-evenlyf;">
		<?php previous_post_link(); ?> | <?php next_post_link(); ?>
	</div>
<?php
get_footer();
