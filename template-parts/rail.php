<?php
/**
 * Shared button and drawer contract.
 *
 * @package Reading
 */

$reading_panels = reading_panels();
$reading_muji   = 0 === strpos( reading_skin(), 'reading-muji-' );
?>
<nav class="rail sidebar reading-rail" aria-label="<?php esc_attr_e( '阅读工具栏', 'reading' ); ?>">
<a class="rail-brand rail-mark reading-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( '首页', 'reading' ); ?>"><span class="brand-mark" aria-hidden="true">
<?php
if ( 'reading-pixel-archive' === reading_skin() ) {
	reading_pixel_art( 'brand' ); }
?>
<?php
if ( $reading_muji ) {
	echo 'RD'; }
?>
</span></a>
<div class="reading-rail-top">
<?php
foreach ( $reading_panels as $reading_panel => $reading_label ) :
	if ( 'search' === $reading_panel ) {
		continue; }
	?>
<a class="rail-button rail-btn tool reading-trigger" href="#reading-panel-<?php echo esc_attr( $reading_panel ); ?>" data-drawer="<?php echo esc_attr( $reading_panel ); ?>" data-reading-open="<?php echo esc_attr( $reading_panel ); ?>" aria-label="<?php echo esc_attr( $reading_label ); ?>" title="<?php echo esc_attr( $reading_label ); ?>"><?php reading_icon( $reading_panel ); ?></a>
<?php endforeach; ?></div>
<div class="reading-rail-bottom"><a class="rail-button rail-btn tool reading-trigger" href="<?php echo esc_url( home_url( '/?s=' ) ); ?>" data-drawer="search" data-reading-open="search" aria-label="<?php esc_attr_e( '搜索', 'reading' ); ?>" title="<?php esc_attr_e( '搜索', 'reading' ); ?>"><?php reading_icon( 'search' ); ?></a></div>
</nav>
<dialog open id="reading-drawer" class="drawer reading-drawer" aria-labelledby="reading-drawer-title">
<div class="drawer-title drawer-head"><b id="reading-drawer-title"><?php esc_html_e( '导航与工具', 'reading' ); ?></b><button class="drawer-close" type="button" data-reading-close hidden aria-label="<?php esc_attr_e( '关闭抽屉', 'reading' ); ?>">×</button></div>
<div class="drawer-scroll drawer-body">
<?php foreach ( $reading_panels as $reading_panel => $reading_label ) : ?>
<section id="reading-panel-<?php echo esc_attr( $reading_panel ); ?>" data-reading-panel="<?php echo esc_attr( $reading_panel ); ?>" aria-label="<?php echo esc_attr( $reading_label ); ?>">
<h2 class="reading-panel-heading"><?php echo esc_html( $reading_label ); ?></h2>
	<?php
	switch ( $reading_panel ) {
		case 'navigation':
			reading_drawer_menu( 'primary' );
			reading_area( 'navigation' );
			break;
		case 'topics':
			reading_drawer_menu( 'topics' );
			reading_area( 'topics' );
			break;
		case 'archive':
			echo '<ul class="reading-menu">';
			wp_get_archives(
				array(
					'type'            => 'monthly',
					'limit'           => 24,
					'show_post_count' => true,
				)
			);
			echo '</ul>';
			break;
		case 'tools':
			reading_area( 'tools' );
			break;
		case 'search':
			get_search_form();
			break;
		case 'reader':
			?>
<fieldset class="reading-font-controls"><legend><?php esc_html_e( '正文字号', 'reading' ); ?></legend>
			<?php
			foreach ( array( 14, 15, 16, 17, 18 ) as $reading_size ) :
				?>
	<button class="drawer-action" type="button" data-reading-font="<?php echo esc_attr( $reading_size ); ?>" aria-pressed="false"><?php echo esc_html( $reading_size ); ?> px</button><?php endforeach; ?><button class="drawer-action" type="button" data-reading-font="default"><?php esc_html_e( '皮肤默认', 'reading' ); ?></button></fieldset>
			<?php
			break;
	}
	?>
	</section><?php endforeach; ?></div></dialog>
