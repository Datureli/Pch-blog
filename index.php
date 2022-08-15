<?php get_header(); ?>

<?php
echo esc_html( get_template_part( 'template-parts/navigation' ) );
echo esc_html( get_template_part( 'template-parts/posts' ) );
?>

<?php the_content(); ?>

<?php
get_footer();
