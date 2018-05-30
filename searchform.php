<?php
/**
 * Template for displaying search forms in Trefoil Cultural
 *
 * @package WordPress
 * @subpackage Trefoil_Cultural
 * @since Trefoil Cultural 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'trefoilcultural' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'trefoilcultural' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'trefoilcultural' ); ?></span></button>
</form>
