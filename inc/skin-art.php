<?php
/**
 * Original pixel artwork, extracted from the rendered reference.
 *
 * @package Reading
 */

/**
 * Print one constant PNG icon from the original skin.
 *
 * @param string $name Fixed icon key.
 */
function reading_pixel_art( $name ) {
	$icons = array(
		'navigation' => '<span class="pixel-rail-icon" aria-hidden="true" style="background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAY0lEQVR42mNgIBEwMjAwMMhqB/9Hl3h8dS0jNnEWGIOnaQ1c8EtdCJz96OAVOFvOXoeBiVQnkayBBZszkIGcvQ4DRYD8UHp09RfCGdpsCI0x/+Bs2SVM9AwlZGcgA9klqGYCAD9oGrCXIuBFAAAAAElFTkSuQmCC)"></span>',
		'topics'     => '<span class="pixel-rail-icon" aria-hidden="true" style="background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAT0lEQVR42mNgGHSAEcaQ1Q7+jyzx+OpaRpwaYIofHbwCl5Cz18FQ/PjqWkYWGAdZMTY+zAAmUv3AgsJjPYhd1W97HBqQJHAB8p2ELVSoAgBacRRRZlv7iAAAAABJRU5ErkJggg==)"></span>',
		'archive'    => '<span class="pixel-rail-icon" aria-hidden="true" style="background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAX0lEQVR42mNgoATIagf/l9UO/o9PjBEmSIyBj6+uZWSCcR5d/cWAzIZhdMCCzMGmACYmp82GpuHjbPzuscpmYGBgYGBCFpODCiKzkcUwNDw6NhWDjSxGHxtYsJlOVQAA1MUv6V1rO3IAAAAASUVORK5CYII=)"></span>',
		'search'     => '<span class="pixel-rail-icon" aria-hidden="true" style="background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAARElEQVR42mNgoBTIagf/l9UO/k+0YmxsvIo11/7/r7n2/39cmphIdTILusD1YEZGkjxMtB+whRLRmnDZOgg1MTAwMAAA+isdR6GJGWkAAAAASUVORK5CYII=)"></span>',
		'reader'     => '<span class="pixel-rail-icon" aria-hidden="true" style="background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAT0lEQVR42mNgoCv4/0b9//836v+JVoyNrbn2/3/Ntf/hfCZSXcGIbiJcQuQmI7LJDAwMDNeDGRlZkBWgO1HrIKYNeJ10PZiREZ3NxDD0AQCc8iE7n8xhlgAAAABJRU5ErkJggg==)"></span>',
		'tools'      => '<span class="pixel-rail-icon" aria-hidden="true" style="background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAS0lEQVR42mNgIBEwInP+v1H/j1WRyE24OiZCitHlmLAplrPXYZCz18GqiZGQ6ehOY8Imgc0GDD8QC2ivgZGYYEWOCyZskYMv4kgGANheHFj10xA6AAAAAElFTkSuQmCC)"></span>',
		'brand'      => '<span class="pixel-brand-icon" aria-hidden="true" style="background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAUklEQVR42mNgIBEwQun/xKpngbE01+LXcz0YYjYTqU5iItsP/z++wK+QX4KBgYGBEcUGOatsBjmrbAiHPxWC6e4kFhTR3/bYVbMeJD/iSPUCAwCnTRGDBlv7yQAAAABJRU5ErkJggg==)"></span>',
	);
	if ( isset( $icons[ $name ] ) ) {
	 // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Fixed PNG data URLs, no user-supplied markup.
		echo $icons[ $name ];
	}
}
