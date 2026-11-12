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
<div class="mini">muji direction b / paper booklet / v2</div><div class="reading-site-title"><?php bloginfo( 'name' ); ?></div></header>
<?php
if ( is_front_page() && is_home() ) {
	reading_area( 'home-before' );
	?>
	<section class="page active" id="page-home"><div class="folio cover"><div class="coverTop"><div class="coverDraw"><div class="bookArt"><div class="caps">cover composition</div><div class="bookLine"></div><div class="caps">volume no. 02 / reading issue</div></div></div><div class="coverCopy"><div class="tag ui">featured booklet</div><h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1><p class="ui"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p></div></div><div class="folioMeta ui"><div>booklet edition / volume 02</div><div><?php echo esc_html( wp_count_posts()->publish ) . ' ' . esc_html__( '篇文章', 'reading' ); ?></div><div>paper mode</div></div></div><div class="sectionTitle"><strong>Contents Blocks</strong><span>cover + toc + feature</span></div><div class="tocGrid"><div class="tocCard"><div class="small">Contents / 01</div><h3><?php echo esc_html( reading_term_field( 0, 'name' ) ); ?></h3><p><?php echo esc_html( reading_term_field( 0, 'description' ) ); ?></p></div><div class="tocCard"><div class="small">Contents / 02</div><h3><?php echo esc_html( reading_term_field( 1, 'name' ) ); ?></h3><p><?php echo esc_html( reading_term_field( 1, 'description' ) ); ?></p></div></div><div class="essayFeature"><div class="draw"></div><div class="copy"><div class="tag ui" style="margin-bottom:8px">featured essay</div><h3><?php echo esc_html( reading_latest_field( 'title' ) ); ?></h3><p><?php echo esc_html( reading_latest_field( 'excerpt' ) ); ?></p></div></div><div class="sectionTitle"><strong>Recent Essays</strong><span>booklet list</span></div><div class="list" id="homeList"><?php reading_posts(); ?></div>
	<?php
	if ( get_next_posts_link() ) :
		?>
		<a class="btn ui" href="<?php echo esc_url( get_next_posts_page_link( $GLOBALS['wp_query']->max_num_pages ) ); ?>">Open Full Contents</a><?php endif; ?></section>
	<?php
	reading_area( 'home-after' );
} else {
	reading_main_content(); }
?>
<?php reading_footer_content(); ?></main></div>
