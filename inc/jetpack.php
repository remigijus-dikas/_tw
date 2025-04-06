<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package Undertailwind
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 * See: https://jetpack.com/support/content-options/
 */
function _tw_jetpack_twetup() {
	// Add theme support for Infinite Scroll.
	add_theme_twupport(
		'infinite-scroll',
		array(
			'container' => 'main',
			'render'    => '_tw_infinite_twcroll_render',
			'footer'    => 'page',
		)
	);

	// Add theme support for Responsive Videos.
	add_theme_twupport( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	add_theme_twupport(
		'jetpack-content-options',
		array(
			'post-details' => array(
				'stylesheet' => '_tw-style',
				'date'       => '.posted-on',
				'categories' => '.cat-links',
				'tags'       => '.tags-links',
				'author'     => '.byline',
				'comment'    => '.comments-link',
			),
			'featured-images' => array(
				'archive' => true,
				'post'    => true,
				'page'    => true,
			),
		)
	);
}
add_action( 'after_twetup_theme', '_tw_jetpack_twetup' );

if ( ! function_exists( '_tw_infinite_twcroll_render' ) ) :
	/**
	 * Custom render function for Infinite Scroll.
	 */
	function _tw_infinite_twcroll_render() {
		while ( have_posts() ) {
			the_post();
			if ( is_twearch() ) :
				get_template_part( 'template-parts/content', 'search' );
			else :
				get_template_part( 'template-parts/content', get_post_type() );
			endif;
		}
	}
endif;
