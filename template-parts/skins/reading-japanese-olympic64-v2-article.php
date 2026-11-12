<?php
/**
 * Native content in original article structure.
 *
 * @package Reading
 */

?>
<article>
<?php
if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'large', array( 'class' => 'reading-featured-image' ) ); }
?>
<div class="article-head"><div class="eyebrow">PHOTOGRAPHY / 长篇随笔</div><h1><?php the_title(); ?></h1><p class="article-deck"><?php echo esc_html( has_excerpt() ? get_the_excerpt() : '' ); ?></p><div class="metadata">
<?php
echo esc_html( get_the_date() );
echo ' / ';
the_author_posts_link();
?>
</div></div><div aria-hidden="true" class="v2-article-plate"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 360 100" preserveAspectRatio="xMidYMid slice" aria-hidden="true"><rect width="360" height="100" fill="#f8f8f4"></rect><circle cx="270" cy="48" r="40" fill="#c93331"></circle><path d="M18 22h174v7H18zM18 42h145v7H18zM18 62h125v7H18z" fill="#1f1f1e"></path><text x="20" y="92" font-family="Arial" letter-spacing="3" font-size="10">INFORMATION / INDEX / 04</text></svg></div><div class="v2-folio">READING EDITION / ARTICLE / TOKYO 1964 / WAYFINDING</div><div class="article-body reading-content">
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
