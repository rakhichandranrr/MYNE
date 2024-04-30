<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage myne
 * @since MYNE 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-single' );

	if ( is_attachment() ) {
		// Parent post navigation.
		the_post_navigation(
			array(
				/* translators: %s: Parent post link. */
				'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'myne' ), '%title' ),
			)
		);
	}

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

	// Previous/next post navigation.
	$myne_next = is_rtl() ? myne_get_icon_svg( 'ui', 'arrow_left' ) : myne_get_icon_svg( 'ui', 'arrow_right' );
	$myne_prev = is_rtl() ? myne_get_icon_svg( 'ui', 'arrow_right' ) : myne_get_icon_svg( 'ui', 'arrow_left' );

	$myne_next_label     = esc_html__( 'Next post', 'myne' );
	$myne_previous_label = esc_html__( 'Previous post', 'myne' );

	the_post_navigation(
		array(
			'next_text' => '<p class="meta-nav">' . $myne_next_label . $myne_next . '</p><p class="post-title">%title</p>',
			'prev_text' => '<p class="meta-nav">' . $myne_prev . $myne_previous_label . '</p><p class="post-title">%title</p>',
		)
	);
endwhile; // End of the loop.

get_footer();
