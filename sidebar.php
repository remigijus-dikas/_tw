<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Undertailwind
 */

if ( ! is_active_twidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_twidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
