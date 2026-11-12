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
<b><?php bloginfo( 'name' ); ?></b><small><?php echo esc_html( get_bloginfo( 'description' ) ); ?></small></div><div class="app-status"><strong id="pageStatus"><?php echo esc_html( is_singular() ? 'DOCUMENT' : 'INDEX' ); ?></strong><span>TOKYO 1964 MODERN</span></div></header>
<div id="view"><section class="window"><div class="window-title"><a aria-label="返回首页" class="tiny-square" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a><div class="grip"></div><span class="window-label"><?php echo esc_html( wp_strip_all_tags( reading_page_title() ) ); ?></span><div class="grip"></div><a aria-label="打开页面导航" class="tiny-square title-square" data-reading-open="navigation" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a></div><div class="window-toolbar"><?php echo '<a class="small-button" href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( '首页', 'reading' ) . '</a>'; ?></div><div class="window-interior"><?php reading_area( 'header' ); ?>
<?php
if ( is_front_page() && is_home() ) {
	reading_area( 'home-before' );
	?>
	<div class="window-interior"><div class="home-intro"><div aria-label="东京1964 · 现代主义的原创封面插画" class="issue-cover" role="img"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 360 272" preserveAspectRatio="xMidYMid slice" aria-hidden="true"><rect width="360" height="272" fill="#f7f7f4"></rect>
<g stroke="#d1d1cc" stroke-width=".8"><path d="M0 0v272"></path><path d="M30 0v272"></path><path d="M60 0v272"></path><path d="M90 0v272"></path><path d="M120 0v272"></path><path d="M150 0v272"></path><path d="M180 0v272"></path><path d="M210 0v272"></path><path d="M240 0v272"></path><path d="M270 0v272"></path><path d="M300 0v272"></path><path d="M330 0v272"></path><path d="M360 0v272"></path><path d="M0 0h360"></path><path d="M0 30h360"></path><path d="M0 60h360"></path><path d="M0 90h360"></path><path d="M0 120h360"></path><path d="M0 150h360"></path><path d="M0 180h360"></path><path d="M0 210h360"></path><path d="M0 240h360"></path><path d="M0 270h360"></path></g>
<rect x="15" y="13" width="5" height="244" fill="#151515"></rect><text x="30" y="29" font-family="Arial,sans-serif" font-weight="700" font-size="12" letter-spacing="3" fill="#111">READING INFORMATION SYSTEM</text>
<circle cx="265" cy="91" r="67" fill="#cd302b"></circle><text x="30" y="136" font-family="Arial,sans-serif" font-weight="900" font-size="98" letter-spacing="-9" fill="#111">64</text><path d="M29 157h306" stroke="#111" stroke-width="4"></path>
<text x="29" y="178" font-family="Arial,sans-serif" font-weight="700" font-size="11" letter-spacing="1.2" fill="#111">INFORMATION / 01—07</text>
<g fill="#141414"><rect x="30" y="190" width="62" height="58"></rect><rect x="102" y="190" width="62" height="58"></rect><rect x="174" y="190" width="62" height="58"></rect><rect x="246" y="190" width="89" height="58"></rect></g>
<g stroke="#f9f9f7" stroke-linejoin="round" stroke-linecap="square" fill="none"><path d="M45 217h31m-16-15v31M111 202h41v35h-41zM120 210h23m-23 9h23M120 227h18M187 237l17-35 17 35m-28-15h21" stroke-width="4"></path><circle cx="287" cy="218" r="15" stroke-width="4"></circle><path d="M310 202v31" stroke-width="4"></path></g></svg><div class="cover-caption"><span>TOKYO 1964 / WAYFINDING</span><span>VOL.02 / 03</span></div></div><div class="eyebrow">A PERSONAL INDEX / VOL. 01</div><h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1><p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p></div><div class="bar-caption"><span>专题 / COLLECTIONS</span><span><?php echo esc_html( wp_count_posts()->publish ) . ' ' . esc_html__( '篇文章', 'reading' ); ?></span></div><div class="folder-list"><?php reading_categories(); ?></div><div class="bar-caption"><span>封面阅读 / SELECTED</span><span><?php echo esc_html( sprintf( '%02d / %02d', wp_count_posts()->publish ? 1 : 0, wp_count_posts()->publish ) ); ?></span></div><div class="feature"><?php reading_feature(); ?></div><div class="bar-caption" id="recent"><span>最近更新 / RECENT</span><span>ALL ENTRIES</span></div><div class="entry-list"><?php reading_posts(); ?></div></div>
	<?php
	reading_area( 'home-after' );
} else {
	reading_main_content(); }
?>
</div><div class="window-bottom"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div></section></div>
<div class="content-footer"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
<?php reading_footer_content(); ?></main>
