<?php
/**
 * Original skin shell.
 *
 * @package Reading
 */

?>
<div class="app">



<main class="main-shell" id="reading-content" tabindex="-1"><?php reading_area( 'header' ); ?>
<header class="topbar">
<?php
if ( has_custom_logo() ) {
	the_custom_logo(); }
?>
<div class="mini">reading desk / muji print redesign</div>
<div class="title-row">
<div class="reading-site-title"><?php bloginfo( 'name' ); ?></div>
<div class="edition">edition 10 / paper</div>
</div>
</header>



<?php
if ( is_front_page() && is_home() ) {
	reading_area( 'home-before' );
	?>
	<section class="page active" id="page-home">
<div class="print-panel hero">
<div class="hero-head">
<div class="hero-left">
<div class="kicker">material palette</div>
<div style="font-size:12px;line-height:1.65;color:var(--ink-soft);max-width:92px;margin-top:8px;">再生纸、无漂白卡纸、标签纸与商品说明贴，构成这一版页面的基础触感。</div>
<div class="swatch"><span class="sw1"></span><span class="sw2"></span><span class="sw3"></span></div>
</div>
<div class="hero-right">
<div class="kicker">featured reading set</div>
<h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
<p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
</div>
</div>
<div class="meta-strip">
<div>issue no. 10 / muji print edition</div>
<div><?php echo esc_html( wp_count_posts()->publish ) . ' ' . esc_html__( '篇文章', 'reading' ); ?></div>
<div>format: mobile only</div>
</div>
</div>
<div class="label-grid">
<div class="label-card">
<div class="code">Index / 01</div>
<h3><?php echo esc_html( reading_term_field( 0, 'name' ) ); ?></h3>
<p><?php echo esc_html( reading_term_field( 0, 'description' ) ); ?></p>
</div>
<div class="label-card">
<div class="code">Feature / 02</div>
<h3><?php echo esc_html( reading_term_field( 1, 'name' ) ); ?></h3>
<p><?php echo esc_html( reading_term_field( 1, 'description' ) ); ?></p>
</div>
</div>
<div class="section-title"><strong>Latest Articles</strong><span>paper listing</span></div>
<div class="article-list" id="homeList"><?php reading_posts(); ?></div>
	<?php
	if ( get_next_posts_link() ) :
		?>
		<a class="paper-button" href="<?php echo esc_url( get_next_posts_page_link( $GLOBALS['wp_query']->max_num_pages ) ); ?>">More Articles</a><?php endif; ?>
</section>
	<?php
	reading_area( 'home-after' );
} else {
	reading_main_content(); }
?>
<?php reading_footer_content(); ?></main>
</div>
