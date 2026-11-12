<?php
/**
 * Native post row in original markup.
 *
 * @package Reading
 */

?>
<a class="row reading-native-row" data-id="rd-01" href="<?php the_permalink(); ?>"><div class="thumb"></div><div><div class="aMeta"><?php echo esc_html( get_the_date() ); ?></div><div class="aTitle"><?php the_title(); ?></div><div class="aDesc"><?php echo esc_html( get_the_excerpt() ); ?></div></div><div class="go">›</div></a>
