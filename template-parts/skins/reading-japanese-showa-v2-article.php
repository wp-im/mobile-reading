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
</div></div><div aria-hidden="true" class="v2-article-plate"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 360 100" preserveAspectRatio="xMidYMid slice" aria-hidden="true"><rect width="360" height="100" fill="#f4df98"></rect><g fill="#d34a37"><path d="M30 10h140v80H30z"></path><path d="M194 11h145v78H194z"></path></g><path d="M38 18h123v64H38z" fill="#f9e8b5"></path><circle cx="102" cy="50" r="29" fill="#287982"></circle><circle cx="102" cy="50" r="17" fill="#e8c25b"></circle><path d="M206 23h120v52H206z" fill="#e9ba4c"></path><text x="214" y="60" font-size="25" font-family="sans-serif" font-weight="900" fill="#2f4347">読書!</text></svg></div><div class="v2-folio">READING EDITION / ARTICLE / SHOWA / COMMERCIAL PRINT</div><div class="article-body reading-content">
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
