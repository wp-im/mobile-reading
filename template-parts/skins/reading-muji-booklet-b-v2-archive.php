<?php
/**
 * Archive in original skin structure.
 *
 * @package Reading
 */

?>
<section class="page active" id="page-section"><div class="folio"><div class="catalogHead"><div class="small">table of contents</div><h1><?php echo esc_html( wp_strip_all_tags( reading_page_title() ) ); ?></h1><p>
<?php
if ( is_archive() ) {
	echo wp_kses_post( get_the_archive_description() ); }
?>
</p></div><div class="catalogIndex"><?php reading_categories(); ?></div><div class="sectionTitle" style="margin:0 12px 0;padding-top:12px"><strong>Essays</strong><span>full contents</span></div><div class="list" id="sectionList"><?php reading_posts( 'archive' ); ?></div></div></section>
