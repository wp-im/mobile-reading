<?php
/**
 * Archive in original skin structure.
 *
 * @package Reading
 */

?>
<div class="page active" id="page-section"><div class="tag-subheader"><div class="eyebrow">CATEGORY / INDEX</div><h1><?php echo esc_html( wp_strip_all_tags( reading_page_title() ) ); ?></h1><p>
<?php
if ( is_archive() ) {
	echo wp_kses_post( get_the_archive_description() ); }
?>
</p></div><div class="section-marker"><h3>分类清单</h3><span>04 GROUPS</span></div><div class="shelf" id="section-chapters"><?php reading_categories(); ?></div><div class="section-marker"><h3 id="section-filter-title"><?php esc_html_e( '文章', 'reading' ); ?></h3><span>RD SERIES</span></div><a class="reset" href="<?php echo esc_url( home_url( '/' ) ); ?>">查看全部条目</a><div class="stock-list" id="section-article-list"><?php reading_posts( 'archive' ); ?></div></div>
