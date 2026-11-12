<?php
/**
 * Archive in original skin structure.
 *
 * @package Reading
 */

?>
<div class="window-interior"><div class="section-hero"><div class="eyebrow">FOLDER / PHOTOGRAPHY</div><h1><?php echo esc_html( wp_strip_all_tags( reading_page_title() ) ); ?></h1><p>
<?php
if ( is_archive() ) {
	echo wp_kses_post( get_the_archive_description() ); }
?>
</p></div><div class="bar-caption"><span>文件 / CONTENTS</span><span>02 ITEMS</span></div><?php reading_posts( 'archive' ); ?></div>
