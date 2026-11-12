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
<b><?php bloginfo( 'name' ); ?></b><small><?php echo esc_html( get_bloginfo( 'description' ) ); ?></small></div><div class="app-status"><strong id="pageStatus"><?php echo esc_html( is_singular() ? 'DOCUMENT' : 'INDEX' ); ?></strong><span>SHOWA ADVERTISING</span></div></header>
<div id="view"><section class="window"><div class="window-title"><a aria-label="返回首页" class="tiny-square" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a><div class="grip"></div><span class="window-label"><?php echo esc_html( wp_strip_all_tags( reading_page_title() ) ); ?></span><div class="grip"></div><a aria-label="打开页面导航" class="tiny-square title-square" data-reading-open="navigation" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a></div><div class="window-toolbar"><?php echo '<a class="small-button" href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( '首页', 'reading' ) . '</a>'; ?></div><div class="window-interior"><?php reading_area( 'header' ); ?>
<?php
if ( is_front_page() && is_home() ) {
	reading_area( 'home-before' );
	?>
	<div class="window-interior"><div class="home-intro"><div aria-label="昭和 · 商业印刷的原创封面插画" class="issue-cover" role="img"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 360 272" preserveAspectRatio="xMidYMid slice" aria-hidden="true"><defs><pattern id="showa_dot" width="6" height="6" patternUnits="userSpaceOnUse"><circle cx="1.5" cy="1.5" r=".7" fill="#7f4438" opacity=".28"></circle></pattern></defs>
<rect width="360" height="272" fill="#f4d785"></rect><rect width="360" height="272" fill="url(#showa_dot)"></rect><rect x="11" y="9" width="338" height="254" fill="none" stroke="#2b4f53" stroke-width="3"></rect>
<path d="M0 0h360v78H0z" fill="#be493a"></path><path d="M10 75h338v5H10z" fill="#215f67"></path><text x="23" y="31" font-size="13" font-weight="900" font-family="sans-serif" fill="#ffedbd" letter-spacing="4">新しい時代の読みもの</text><text x="20" y="67" font-size="38" font-weight="900" font-family="sans-serif" fill="#fff4d1">昭和文化通信</text>
<path d="M21 95h202v155H21z" fill="#237078" stroke="#202e30" stroke-width="3"></path><rect x="29" y="102" width="186" height="140" fill="#f4e7bf"></rect><circle cx="122" cy="170" r="56" fill="#e8a344" stroke="#3b4342" stroke-width="3"></circle><circle cx="122" cy="170" r="43" fill="#d45541"></circle><path d="M122 128v85m-42-43h84" stroke="#fce3aa" stroke-width="7"></path><path d="M90 153Q124 129 156 153M87 185Q124 210 158 184" stroke="#fff5d2" stroke-width="8" fill="none"></path>
<path d="M236 95h104v155H236z" fill="#f5efcf" stroke="#272f35" stroke-width="3"></path><rect x="245" y="106" width="86" height="31" fill="#c34739"></rect><text x="248" y="127" font-size="21" font-weight="900" font-family="sans-serif" fill="#fff8dc">特別号</text><rect x="246" y="150" width="84" height="90" fill="#19747a"></rect><path d="M257 162h63v55h-63z" fill="#f0cb79"></path><path d="M273 178h31v22h-31z" fill="#de5c42"></path><path d="M251 226h75" stroke="#f1db9c" stroke-width="4"></path>
<path d="M17 251H341" stroke="#2d4647" stroke-width="3"></path><text x="39" y="117" font-size="8" font-weight="700" fill="#375257" font-family="sans-serif">毎日をもっと楽しく</text></svg><div class="cover-caption"><span>SHOWA / COMMERCIAL PRINT</span><span>VOL.02 / 02</span></div></div><div class="eyebrow">A PERSONAL INDEX / VOL. 01</div><h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1><p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p></div><div class="bar-caption"><span>专题 / COLLECTIONS</span><span><?php echo esc_html( wp_count_posts()->publish ) . ' ' . esc_html__( '篇文章', 'reading' ); ?></span></div><div class="folder-list"><?php reading_categories(); ?></div><div class="bar-caption"><span>封面阅读 / SELECTED</span><span><?php echo esc_html( sprintf( '%02d / %02d', wp_count_posts()->publish ? 1 : 0, wp_count_posts()->publish ) ); ?></span></div><div class="feature"><?php reading_feature(); ?></div><div class="bar-caption" id="recent"><span>最近更新 / RECENT</span><span>ALL ENTRIES</span></div><div class="entry-list"><?php reading_posts(); ?></div></div>
	<?php
	reading_area( 'home-after' );
} else {
	reading_main_content(); }
?>
</div><div class="window-bottom"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div></section></div>
<div class="content-footer"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
<?php reading_footer_content(); ?></main>
