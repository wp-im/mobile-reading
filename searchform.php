<?php
/**
 * Core GET search.
 *
 * @package Reading
 */

$reading_search_id = wp_unique_id( 'reading-search-' ); ?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>"><label for="<?php echo esc_attr( $reading_search_id ); ?>"><?php esc_html_e( '搜索本站', 'reading' ); ?></label><input class="drawer-input" type="search" id="<?php echo esc_attr( $reading_search_id ); ?>" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php esc_attr_e( '关键词…', 'reading' ); ?>"><button class="drawer-action" type="submit"><?php esc_html_e( '搜索', 'reading' ); ?></button></form>
