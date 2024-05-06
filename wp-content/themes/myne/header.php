<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage myne
 * @since MYNE 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php myne_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body class="topBg">
<?php wp_body_open(); ?>


<?php get_template_part( 'template-parts/header/site-header' ); ?>

	