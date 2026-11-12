<?php
/**
 * Native content in original article structure.
 *
 * @package Reading
 */

?>
<article class="sheet">
<?php
if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'large', array( 'class' => 'reading-featured-image' ) ); }
?>
<div class="articleHead"><div class="articleLabel"><div><div class="k">selected article / long form</div><h1 class="c" id="articleTitle"><?php the_title(); ?></h1></div><div class="right" id="articleCode"><?php echo esc_html( get_the_ID() ); ?></div></div><p id="articleDeck"><?php echo esc_html( has_excerpt() ? get_the_excerpt() : '' ); ?></p></div><div class="figure"><div class="figureBox"></div><div class="figureCap"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></div></div><div class="body reading-content" id="articleBody">
<?php
the_content();
wp_link_pages(
	array(
		'before' => '<nav class="page-links">',
		'after'  => '</nav>',
	)
);
?>
</div></article>
