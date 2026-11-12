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
</div></div><div aria-hidden="true" class="v2-article-plate"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 360 100" preserveAspectRatio="xMidYMid slice" aria-hidden="true"><rect width="360" height="100" fill="#e0c684"></rect><g stroke="#2c5d6b" fill="none" stroke-width="4"><path d="M-10 78Q48 25 107 78T226 78T365 71"></path><path d="M-10 90Q48 37 107 90T226 90T365 83"></path></g><g transform="translate(240 53) scale(0.9)"><path d="M0 4Q-11-8-20-2Q-25-18-7-21Q-20-35-8-41Q3-39 0-22Q15-39 23-30Q29-19 12-13Q29-14 29 0Q20 13 0 4Z" fill="#1d395a" stroke="#23374b" stroke-width=".8"></path><path d="M0 2Q-2-12 0-22M-3-2Q-17-11-20-5M5-7Q20-18 22-25" fill="none" stroke="#51739d" stroke-width="1.5"></path><path d="M0 5L-4 62" stroke="#315b50" stroke-width="3"></path><path d="M-2 40Q-30 18-23 1Q-11 11-2 40M-4 49Q25 17 27 3Q30 32-4 49M0 23Q4-4 17-22Q17 2 0 23" fill="#346b61" stroke="#24463d" stroke-width=".6"></path></g><g transform="translate(286 61) scale(0.7)"><path d="M0 4Q-11-8-20-2Q-25-18-7-21Q-20-35-8-41Q3-39 0-22Q15-39 23-30Q29-19 12-13Q29-14 29 0Q20 13 0 4Z" fill="#1d395a" stroke="#23374b" stroke-width=".8"></path><path d="M0 2Q-2-12 0-22M-3-2Q-17-11-20-5M5-7Q20-18 22-25" fill="none" stroke="#51739d" stroke-width="1.5"></path><path d="M0 5L-4 62" stroke="#315b50" stroke-width="3"></path><path d="M-2 40Q-30 18-23 1Q-11 11-2 40M-4 49Q25 17 27 3Q30 32-4 49M0 23Q4-4 17-22Q17 2 0 23" fill="#346b61" stroke="#24463d" stroke-width=".6"></path></g></svg></div><div class="v2-folio">READING EDITION / ARTICLE / RINPA / ORNAMENTAL PAINTING</div><div class="article-body reading-content">
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
