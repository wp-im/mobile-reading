<?php
/**
 * Native post row in original markup.
 *
 * @package Reading
 */

?>
<a class="stock-row reading-native-row" data-open-article="RD-001" href="<?php the_permalink(); ?>"><span class="stock-index"><?php echo esc_html( sprintf( '%02d', $args['index'] ) ); ?></span><span class="stock-text"><span class="stock-name"><?php the_title(); ?></span><span class="stock-desc"><?php echo esc_html( get_the_excerpt() ); ?></span><span class="stock-meta"><?php echo esc_html( get_the_date() ); ?></span></span><span class="stock-next">›</span></a>
