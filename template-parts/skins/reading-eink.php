<?php
/**
 * Original skin shell.
 *
 * @package Reading
 */

?>
<main class="shell" id="reading-content" tabindex="-1">
<header class="app-top"><div class="app-identity">
<?php
if ( has_custom_logo() ) {
	the_custom_logo(); }
?>
<b><?php bloginfo( 'name' ); ?></b><small><?php echo esc_html( get_bloginfo( 'description' ) ); ?></small></div><div class="app-status"><strong id="pageStatus"><?php echo esc_html( is_singular() ? 'DOCUMENT' : 'INDEX' ); ?></strong><span>PAPER / E-INK</span></div></header>
<div id="view"><section class="window"><div class="window-title"><a aria-label="返回首页" class="tiny-square" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a><div class="grip"></div><span class="window-label"><?php echo esc_html( wp_strip_all_tags( reading_page_title() ) ); ?></span><div class="grip"></div><a aria-label="打开页面导航" class="tiny-square title-square" data-reading-open="navigation" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a></div><div class="window-toolbar"><?php echo '<a class="small-button" href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( '首页', 'reading' ) . '</a>'; ?></div><div class="window-interior"><?php reading_area( 'header' ); ?>
<?php
if ( is_front_page() && is_home() ) {
	reading_area( 'home-before' );
	?>
	<div class="window-interior"><div class="home-intro"><div class="eyebrow">A PERSONAL INDEX / VOL. 01</div><h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1><p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p></div><div class="bar-caption"><span>专题 / COLLECTIONS</span><span><?php echo esc_html( wp_count_posts()->publish ) . ' ' . esc_html__( '篇文章', 'reading' ); ?></span></div><div class="folder-list"><?php reading_categories(); ?></div><div class="bar-caption"><span>封面阅读 / SELECTED</span><span><?php echo esc_html( sprintf( '%02d / %02d', wp_count_posts()->publish ? 1 : 0, wp_count_posts()->publish ) ); ?></span></div><div class="feature"><?php reading_feature(); ?></div><div class="bar-caption" id="recent"><span>最近更新 / RECENT</span><span>ALL ENTRIES</span></div><div class="entry-list"><?php reading_posts(); ?></div></div>
	<?php
	reading_area( 'home-after' );
} else {
	reading_main_content(); }
?>
</div><div class="window-bottom"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div></section></div>
<div class="content-footer"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
<?php reading_footer_content(); ?></main>
