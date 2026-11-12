<?php
/**
 * Native post row in original markup.
 *
 * @package Reading
 */

?>
<a class="entry-row reading-native-row" href="<?php the_permalink(); ?>"><span aria-hidden="true" class="entry-thumb thumb-photography"></span><span class="entry-copy"><span class="entry-title"><span class="number"><?php echo esc_html( sprintf( '%02d', $args['index'] ) ); ?></span><?php the_title(); ?></span><span class="entry-sub"><?php echo esc_html( get_the_date() ); ?></span></span><span class="entry-chevron">›</span></a>
