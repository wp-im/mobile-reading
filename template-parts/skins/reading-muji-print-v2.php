<?php
/**
 * Original skin shell.
 *
 * @package Reading
 */

?>
<div class="app"><main class="panel" id="reading-content" tabindex="-1"><?php reading_area( 'header' ); ?><header class="top">
<?php
if ( has_custom_logo() ) {
	the_custom_logo(); }
?>
<div class="mini">reading desk / muji print redesign / v2</div><div class="reading-site-title"><?php bloginfo( 'name' ); ?></div></header>
<?php
if ( is_front_page() && is_home() ) {
	reading_area( 'home-before' );
	?>
	<section class="page active" id="page-home"><div class="sheet"><div class="hero-grid"><div class="hero-drawing"><div class="art-frame"><div><div class="kicker">paper drawing</div><div style="font-size:12px;line-height:1.58;color:var(--muted)">把首页当作一张被设计过的纸面，允许抽象图形、材料标本与信息卡共同构成版面。</div></div><div><div class="swatchRow"><span class="swatch1"></span><span class="swatch2"></span><span class="swatch3"></span></div><div class="diagram"></div></div></div></div><div class="hero-copy"><div class="kicker">featured system</div><h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1><p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p></div></div><div class="meta"><div>print edition / issue no.11</div><div><?php echo esc_html( wp_count_posts()->publish ) . ' ' . esc_html__( '篇文章', 'reading' ); ?></div><div>mobile only</div></div></div><div class="sectionTitle"><strong>Editorial Sections</strong><span>multiple layouts</span></div><div class="homeSections"><div class="twoCol"><div class="card"><div class="code">Index / 01</div><h3><?php echo esc_html( reading_term_field( 0, 'name' ) ); ?></h3><p><?php echo esc_html( reading_term_field( 0, 'description' ) ); ?></p><div class="miniDraw"></div></div><div class="card"><div class="code">Material / 02</div><h3><?php echo esc_html( reading_term_field( 1, 'name' ) ); ?></h3><p><?php echo esc_html( reading_term_field( 1, 'description' ) ); ?></p><div class="miniDraw"></div></div></div><div class="card wide"><div class="drawTop"></div><div class="inner"><div class="code">Feature / 03</div><h3><?php echo esc_html( reading_latest_field( 'title' ) ); ?></h3><p><?php echo esc_html( reading_latest_field( 'excerpt' ) ); ?></p></div></div><div class="band"><div class="sectionTitle" style="margin:0 0 8px"><strong>Reading Units</strong><span>03 bands</span></div><div class="bandGrid"><div class="bandCell"><strong>Articles</strong><p>长文与深读，保持稳定版心。</p></div><div class="bandCell"><strong>Notes</strong><p>短札、目录与工作笔记。</p></div><div class="bandCell"><strong>Archive</strong><p>持续积累的主题索引与收藏。</p></div></div></div><div><div class="sectionTitle"><strong>Latest Articles</strong><span>paper list</span></div><div class="list" id="homeList"><?php reading_posts(); ?></div>
	<?php
	if ( get_next_posts_link() ) :
		?>
		<a class="btn" href="<?php echo esc_url( get_next_posts_page_link( $GLOBALS['wp_query']->max_num_pages ) ); ?>">More Articles</a><?php endif; ?></div></div></section>
	<?php
	reading_area( 'home-after' );
} else {
	reading_main_content(); }
?>
<?php reading_footer_content(); ?></main></div>
