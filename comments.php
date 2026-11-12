<?php
/**
 * Native comments.
 *
 * @package Reading
 */

if ( post_password_required() ) {
	return; } ?>
<section id="comments" class="reading-comments">
<?php
if ( have_comments() ) :
	?>
	<h2><?php esc_html_e( '回应', 'reading' ); ?></h2><ol class="comment-list">
	<?php
	wp_list_comments(
		array(
			'style'      => 'ol',
			'short_ping' => true,
		)
	);
	?>
	</ol>
	<?php
	the_comments_pagination();
endif;
comment_form();
?>
</section>
