<?php
/**
 * Original skin shell.
 *
 * @package Reading
 */

?>
<div class="app">



<div class="main" id="reading-content" tabindex="-1"><?php reading_area( 'header' ); ?><div class="sitehead">
<?php
if ( has_custom_logo() ) {
	the_custom_logo(); }
?>
<div class="imprint">INDEPENDENT READING EDITION</div><div class="running"><strong><?php bloginfo( 'name' ); ?></strong><small>NO. 01</small></div></div><footer class="sitefoot">READING NOTES　·　A SMALL PAPER EDITION　·　2026</footer>
<?php
if ( is_front_page() && is_home() ) {
	reading_area( 'home-before' );
	?>
	<div class="page active" id="page-home"><div class="cover"><div class="cover-top"><span>READING NOTES</span><span>NO. 01 / NOV. 2026</span></div><div class="cover-center"><div class="cover-issue">生活阅读小册 · 第一期</div><h1 class="cover-title"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1><p class="cover-subtitle"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p><div aria-hidden="true" class="fold-graphic"></div></div><div class="cover-bottom"><span>纸本思维 / 移动阅读</span><span><?php echo esc_html( wp_count_posts()->publish ) . ' ' . esc_html__( '篇文章', 'reading' ); ?></span></div></div>
<div class="contents"><div class="contents-small">CONTENTS / 卷首目录</div><div class="contents-head"><h2>目次</h2><em>vol. 01—04</em></div><div id="section-chapters"><?php reading_categories(); ?></div></div><div class="section-marker"><h3>新近文章</h3><small>RECENT TEXTS / 07</small></div><div class="folio-list" id="home-article-list"><?php reading_posts(); ?></div></div>
	<?php
	reading_area( 'home-after' );
} else {
	reading_main_content(); }
?>
<?php reading_footer_content(); ?></div></div>
