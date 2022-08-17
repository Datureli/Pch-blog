<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta
			name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
	>
	<?php
	wp_head();
	?>
</head>

<body <?php body_class(); ?> style="opacity: 0;">
<div class="header">
	<div class="header__links">
		<?php wp_nav_menu( [ 'theme_location' => 'top-navigation' ] ); ?>
	</div>
</div>
<?php
wp_body_open();
