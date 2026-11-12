<?php
/**
 * Original skin shell.
 *
 * @package Reading
 */

?>
<div class="app"><main class="main" id="reading-content" tabindex="-1"><?php reading_area( 'header' ); ?><header class="top">
<?php
if ( has_custom_logo() ) {
	the_custom_logo(); }
?>
<div class="mini">muji direction a / product label / v2</div><div class="reading-site-title"><?php bloginfo( 'name' ); ?></div></header>
<?php
if ( is_front_page() && is_home() ) {
	reading_area( 'home-before' );
	?>
	<section class="page active" id="page-home"><div class="panel hero"><div class="heroTag"><div class="hang"><div class="tagSheet"><div class="title">product label sample</div><div class="barcode"></div><div class="spec"><div><span>Category</span><span>Reading</span></div><div><span>Code</span><span>RD-A2</span></div><div><span>Stock</span><span><?php echo esc_html( wp_count_posts()->publish ) . ' ' . esc_html__( '篇文章', 'reading' ); ?></span></div><div><span>Mode</span><span>Mobile</span></div></div></div></div><div class="tagRight"><div class="kicker">featured label set</div><h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1><p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p></div></div><div class="stockRow"><div>section / 04</div><div>article / 07</div><div>barcode / active</div><div>tag mode</div></div></div><div class="sectionTitle"><strong>Label Sections</strong><span>multiple tag types</span></div><div class="grid2"><div class="tagCard"><div class="head">Hang Tag / 01</div><h3><?php echo esc_html( reading_term_field( 0, 'name' ) ); ?></h3><p><?php echo esc_html( reading_term_field( 0, 'description' ) ); ?></p><div class="smallBar"></div></div><div class="tagCard"><div class="head">Spec Tag / 02</div><h3><?php echo esc_html( reading_term_field( 1, 'name' ) ); ?></h3><p><?php echo esc_html( reading_term_field( 1, 'description' ) ); ?></p><div class="smallBar"></div></div></div><div class="wideTag" style="margin-top:10px"><div class="topdraw"></div><div class="body"><div class="head">Shelf Ticket / 03</div><h3><?php echo esc_html( reading_latest_field( 'title' ) ); ?></h3><p><?php echo esc_html( reading_latest_field( 'excerpt' ) ); ?></p></div></div><div class="shelfBand" style="margin-top:10px"><div class="sectionTitle" style="margin:0 0 8px"><strong>Shelf Units</strong><span>03 groups</span></div><div class="shelfGrid"><div class="shelfCell"><strong>New</strong><p>最新文章像新到货标签。</p></div><div class="shelfCell"><strong>Picked</strong><p>重点内容像店员推荐签。</p></div><div class="shelfCell"><strong>Archive</strong><p>旧文像库存索引签。</p></div></div></div><div class="sectionTitle"><strong>Latest Tagged Articles</strong><span>label list</span></div><div class="list" id="homeList"><?php reading_posts(); ?></div>
	<?php
	if ( get_next_posts_link() ) :
		?>
		<a class="btn" href="<?php echo esc_url( get_next_posts_page_link( $GLOBALS['wp_query']->max_num_pages ) ); ?>">Browse All Labels</a><?php endif; ?></section>
	<?php
	reading_area( 'home-after' );
} else {
	reading_main_content(); }
?>
<?php reading_footer_content(); ?></main></div>
