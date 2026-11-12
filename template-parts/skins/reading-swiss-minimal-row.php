<?php
/**
 * Native post row in original markup.
 *
 * @package Reading
 */

?>
<a class="entry-row reading-native-row" href="<?php the_permalink(); ?>"><div class="entry-title"><span class="number"><?php echo esc_html( sprintf( '%02d', $args['index'] ) ); ?></span><?php the_title(); ?></div><div class="entry-sub"><?php echo esc_html( get_the_date() ); ?></div></a>
