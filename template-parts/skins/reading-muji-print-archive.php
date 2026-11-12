<?php
/**
 * Archive in original skin structure.
 *
 * @package Reading
 */

?>
<section class="page active" id="page-section">
<div class="section-panel">
<div class="catalog-head">
<div class="small">section catalogue</div>
<h1><?php echo esc_html( wp_strip_all_tags( reading_page_title() ) ); ?></h1>
<p>
<?php
if ( is_archive() ) {
	echo wp_kses_post( get_the_archive_description() ); }
?>
</p>
</div>
<div class="catalog-index"><?php reading_categories(); ?></div>
<div class="section-title" style="margin:0 12px 0;padding-top:12px"><strong>Section Items</strong><span>numbered list</span></div>
<div class="catalog-list" id="sectionList"><?php reading_posts( 'archive' ); ?></div>
</div>
</section>
