<?php
/**
 * Native post row in original markup.
 *
 * @package Reading
 */

?>
<a class="section-entry reading-native-row" href="<?php the_permalink(); ?>"><span aria-hidden="true" class="section-thumb thumb-photography"></span><span class="section-content"><span class="section-tag"><?php echo esc_html( get_the_date() ); ?></span><h3><?php the_title(); ?></h3><p><?php echo esc_html( get_the_excerpt() ); ?></p></span><span class="section-chevron">›</span></a>
