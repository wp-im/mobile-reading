<?php
/**
 * Native post row in original markup.
 *
 * @package Reading
 */

?>
<a class="folio-row reading-native-row" data-open-article="RD-001" href="<?php the_permalink(); ?>"><span class="folio-no"><?php echo esc_html( sprintf( '%02d', $args['index'] ) ); ?></span><span class="folio-text"><strong><?php the_title(); ?></strong><small><?php echo esc_html( get_the_excerpt() ); ?></small></span><span class="folio-end"><?php echo esc_html( reading_minutes() ) . ' min'; ?></span></a>
