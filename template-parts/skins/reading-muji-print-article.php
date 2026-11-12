<?php
/**
 * Native content in original article structure.
 *
 * @package Reading
 */

?>
<article class="article-panel">
<?php
if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'large', array( 'class' => 'reading-featured-image' ) ); }
?>
<div class="article-header">
<div class="article-label">
<div class="left">
<div class="k">selected article / long form</div>
<h1 class="c" id="articleTitle"><?php the_title(); ?></h1>
</div>
<div class="right" id="articleCode"><?php echo esc_html( get_the_ID() ); ?></div>
</div>
<div class="article-standfirst" id="articleDeck"><?php echo esc_html( has_excerpt() ? get_the_excerpt() : '' ); ?></div>
</div>
<figure class="article-figure">
<div class="figure-box"></div>
<div class="figure-cap">用低调纸面、边框、规则线与标签编号建立秩序，而不使用屏幕时代常见的重阴影和高饱和装饰。</div>
</figure>
<div class="article-body reading-content" id="articleBody">
<?php
the_content();
wp_link_pages(
	array(
		'before' => '<nav class="page-links">',
		'after'  => '</nav>',
	)
);
?>
</div>
</article>
