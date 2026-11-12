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
</div></div><div aria-hidden="true" class="v2-article-plate"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 360 100" preserveAspectRatio="xMidYMid slice" aria-hidden="true"><rect width="360" height="100" fill="#5eb9d4"></rect><circle cx="293" cy="26" r="22" fill="#fff4c9"></circle><path d="M0 45h360v55H0z" fill="#f2c0bf"></path><path d="M8 40h158v27H8zM190 25h89v42h-89z" fill="#fff7e6"></path><path d="M15 73h329v24H15z" fill="#279fd3"></path><path d="M32 83h280" stroke="#b5f8f4" stroke-width="2"></path></svg></div><div class="v2-folio">READING EDITION / ARTICLE / CITY POP / SUMMER 1984</div><div class="article-body reading-content">
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
