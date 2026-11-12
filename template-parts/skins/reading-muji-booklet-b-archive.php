<?php
/**
 * Archive in original skin structure.
 *
 * @package Reading
 */

?>
<div class="page active" id="page-section"><div class="chapter-opening"><div class="overline">READING NOTES / TABLE OF CONTENTS</div><div class="rule"></div><h1><?php echo esc_html( wp_strip_all_tags( reading_page_title() ) ); ?></h1><p>
<?php
if ( is_archive() ) {
	echo wp_kses_post( get_the_archive_description() ); }
?>
</p></div><div class="contents"><div class="contents-head"><h2>篇章</h2><em>4 CHAPTERS</em></div><div id="section-chapters"><?php reading_categories(); ?></div></div><div class="section-marker"><h3 id="section-filter-title"><?php esc_html_e( '文章', 'reading' ); ?></h3><small>FOLIO INDEX</small></div><a class="reset" href="<?php echo esc_url( home_url( '/' ) ); ?>">返回全部</a><div class="folio-list" id="section-article-list"><?php reading_posts( 'archive' ); ?></div></div>
