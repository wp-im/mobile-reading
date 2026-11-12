<?php
/**
 * Native post row in original markup.
 *
 * @package Reading
 */

?>
<a class="article-row reading-native-row" data-article="rd-01" href="<?php the_permalink(); ?>">
<div class="thumb"></div>
<div>
<div class="a-meta"><?php echo esc_html( get_the_date() ); ?></div>
<div class="a-title"><?php the_title(); ?></div>
<div class="a-desc"><?php echo esc_html( get_the_excerpt() ); ?></div>
</div>
<div class="a-go">›</div>
</a>
