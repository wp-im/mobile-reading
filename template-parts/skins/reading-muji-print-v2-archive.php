<?php
/**
 * Archive in original skin structure.
 *
 * @package Reading
 */

?>
<section class="page active" id="page-section"><div class="sheet"><div class="catalogHead"><div class="small">section catalogue</div><h1><?php echo esc_html( wp_strip_all_tags( reading_page_title() ) ); ?></h1><p style="margin:8px 0 0;color:var(--muted);font-size:12.5px;line-height:1.58">
<?php
if ( is_archive() ) {
	echo wp_kses_post( get_the_archive_description() ); }
?>
</p></div><div class="catalogIndex"><?php reading_categories(); ?></div><div class="sectionTitle" style="margin:0 12px 0;padding-top:12px"><strong>Section Items</strong><span>indexed list</span></div><div class="list" id="sectionList"><?php reading_posts( 'archive' ); ?></div></div></section>
