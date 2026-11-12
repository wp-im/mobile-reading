<?php
/**
 * Archive in original skin structure.
 *
 * @package Reading
 */

?>
<section class="page active" id="page-section"><div class="panel"><div class="catalogHead"><div class="small">section shelf</div><h1><?php echo esc_html( wp_strip_all_tags( reading_page_title() ) ); ?></h1></div><div class="catalogIndex"><?php reading_categories(); ?></div><div class="sectionTitle" style="margin:0 12px 0;padding-top:12px"><strong>Shelf Listing</strong><span>tagged items</span></div><div class="list" id="sectionList"><?php reading_posts( 'archive' ); ?></div></div></section>
