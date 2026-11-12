<?php
/**
 * Native post row in original markup.
 *
 * @package Reading
 */

?>
<a class="section-entry reading-native-row" href="<?php the_permalink(); ?>"><div class="section-tag"><?php echo esc_html( get_the_date() ); ?></div><h3><?php the_title(); ?></h3><p><?php echo esc_html( get_the_excerpt() ); ?></p></a>
