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
<div class="article-scene photography"><div class="article-scene-window"><div class="section-scene section-photography"><svg viewBox="0 0 760 220" xmlns="http://www.w3.org/2000/svg"><rect width="760" height="220" fill="#d9edf0"></rect><path d="M0 114Q112 70 212 106T405 101T566 109T760 79V220H0Z" fill="#bfd2a5"></path><path d="M0 142Q140 99 285 128T470 132T760 114V220H0Z" fill="#8aa574"></path><path d="M430 220Q451 188 447 165Q438 137 483 118Q524 104 552 117Q579 131 579 164Q580 193 612 220Z" fill="#90aa7a"></path><path d="M488 220Q505 193 501 173Q494 151 524 139Q551 129 571 139Q592 149 593 173Q595 194 618 220Z" fill="#6d8f65"></path><path d="M150 163h174v57H150z" fill="#efe5c8" stroke="#6d735c" stroke-width="3"></path><path d="M136 164L234 96l103 67" fill="#c96d59" stroke="#7c5b53" stroke-width="3"></path><path d="M164 176h41v28h-41z" fill="#a3c6cc" stroke="#6f7e71" stroke-width="3"></path><path d="M220 173h25v47h-25z" fill="#9b8264" stroke="#6f6759" stroke-width="3"></path><path d="M258 176h44v28h-44z" fill="#a3c6cc" stroke="#6f7e71" stroke-width="3"></path><path d="M259 122v-23h17v32" stroke="#8d6c63" stroke-width="6" fill="none"></path><path d="M348 158h96" stroke="#7f8265" stroke-width="3"></path><path d="M350 159q10 12 27 0q13 12 28 0q12 12 28 0" stroke="#927f68" stroke-width="2" fill="none"></path><rect x="362" y="160" width="17" height="18" fill="#f4efe1" stroke="#baa994"></rect><rect x="389" y="160" width="19" height="16" fill="#d9bf84" stroke="#baa994"></rect><rect x="418" y="160" width="20" height="18" fill="#9ab8a4" stroke="#88a18f"></rect><path d="M359 154v35M442 154v35" stroke="#94886e" stroke-width="4"></path><path d="M56 196Q85 185 118 197" stroke="#e8d697" stroke-width="11" fill="none" stroke-linecap="round"></path><path d="M110 202Q147 185 185 194" stroke="#f8edd0" stroke-width="8" fill="none" stroke-linecap="round"></path><g fill="#fff8ef"><ellipse cx="113" cy="48" rx="47" ry="17"></ellipse><ellipse cx="602" cy="40" rx="61" ry="20" opacity=".85"></ellipse><ellipse cx="665" cy="67" rx="42" ry="15" opacity=".7"></ellipse></g></svg></div></div></div><div class="article-head"><div class="eyebrow">PHOTOGRAPHY / 长篇随笔</div><h1><?php the_title(); ?></h1><p class="article-deck"><?php echo esc_html( has_excerpt() ? get_the_excerpt() : '' ); ?></p><div class="metadata">
<?php
echo esc_html( get_the_date() );
echo ' / ';
the_author_posts_link();
?>
</div></div><div class="article-body reading-content">
<?php
the_content();
wp_link_pages(
	array(
		'before' => '<nav class="page-links">',
		'after'  => '</nav>',
	)
);
?>
</div><div class="article-tail"><span>— THE WINDWARD READING ROOM —</span><div class="article-tail-scene"></div></div></article>
