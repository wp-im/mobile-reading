<?php
/**
 * Native content in original article structure.
 *
 * @package Reading
 */

?>
<article class="article-shell">
<?php
if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'large', array( 'class' => 'reading-featured-image' ) ); }
?>
<header class="article-paperhead"><div class="running"><span>READING NOTES · VOL. 01</span><span id="article-number"><?php echo esc_html( get_the_ID() ); ?></span></div><div class="vol">第 一 册 / 长篇阅读</div><h1 id="article-title"><?php the_title(); ?></h1><p class="lede" id="article-subtitle"><?php echo esc_html( has_excerpt() ? get_the_excerpt() : '' ); ?></p></header><div class="article-facts"><div class="fact"><label>栏目</label><b id="article-category"><?php echo wp_kses_post( get_the_category_list( ' / ' ) ); ?></b></div><div class="fact"><label>阅读</label><b id="article-minutes"><?php echo esc_html( max( 1, (int) ceil( strlen( wp_strip_all_tags( get_the_content() ) ) / 3 / 500 ) ) ) . ' min'; ?></b></div><div class="fact"><label>版次</label><b id="article-date"><?php echo esc_html( get_the_date() ); ?></b></div></div><div class="instructions"><div class="reading-body reading-content" id="article-copy">
<?php
the_content();
wp_link_pages(
	array(
		'before' => '<nav class="page-links">',
		'after'  => '</nav>',
	)
);
?>
</div><div class="book-end"><span>READING NOTES / FIN</span><span>— 01 —</span></div></div></article>
