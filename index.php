<?php
/**
 * Skin-selected server-rendered template.
 *
 * @package Reading
 */

get_header();
get_template_part( 'template-parts/skins/' . reading_skin() );
get_footer();
