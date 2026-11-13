<?php
/**
 * Reading native theme functions.
 *
 * @package Reading
 */

/**
 * Area.
 *
 * @param string $id Registered region suffix.
 */
function reading_area( $id ) {
	if ( is_active_sidebar( 'reading-' . $id ) ) {
		echo '<div class="reading-widget-area">';
		dynamic_sidebar( 'reading-' . $id );
		echo '</div>'; }
}
/**
 * Page title.
 */
function reading_page_title() {
	if ( is_404() ) {
		return __( '找不到页面', 'reading' ); }
	if ( is_search() ) {
		/* translators: %s: visitor search query. */
		return sprintf( __( '搜索：%s', 'reading' ), get_search_query() ); }
	if ( is_archive() ) {
		return get_the_archive_title(); }
	if ( is_singular() ) {
		return get_the_title(); }
	return is_home() && ! is_front_page() ? get_the_title( get_option( 'page_for_posts' ) ) : get_bloginfo( 'name' );
}
/**
 * Categories.
 */
function reading_categories() {
	$terms = array_values(
		get_categories(
			array(
				'hide_empty' => true,
				'number'     => 24,
			)
		)
	);
	$skin  = reading_skin();
	foreach ( $terms as $index => $term ) {
		$url = get_category_link( $term );
		if ( 'reading-muji-label-a' === $skin ) {
			echo '<a class="section-card reading-category-card" href="' . esc_url( $url ) . '"><span class="section-code">GROUP / ' . esc_html( sprintf( '%02d', $index + 1 ) ) . '</span><span class="section-card-name">' . esc_html( $term->name ) . '</span><span class="section-count">' . esc_html( $term->count ) . ' ITEMS</span></a>';
		} elseif ( 'reading-muji-booklet-b' === $skin ) {
			echo '<a class="chapter-line reading-category-card" href="' . esc_url( $url ) . '"><span class="chapter-no">' . esc_html( sprintf( '%02d', $index + 1 ) ) . '</span><span class="chapter-title">' . esc_html( $term->name ) . '</span><span class="chapter-info">' . esc_html( $term->count ) . '</span></a>';
		} elseif ( 0 === strpos( $skin, 'reading-muji-' ) ) {
			echo '<div><a class="reading-category-link" href="' . esc_url( $url ) . '"><strong>' . esc_html( sprintf( '%02d', $index + 1 ) ) . '</strong>' . esc_html( $term->name ) . '<br>' . esc_html( wp_strip_all_tags( $term->description ) ) . '</a></div>';
		} else {
			echo '<a class="folder-row" href="' . esc_url( $url ) . '"><span class="folder-ico" aria-hidden="true"></span><span><span class="folder-name">' . esc_html( $term->name ) . '</span><span class="folder-desc">' . esc_html( wp_strip_all_tags( $term->description ) ) . '</span></span><span class="folder-count">' . esc_html( $term->count ) . '</span></a>';
		}
	}
}

/**
 * Feature.
 */
function reading_feature() {
	$featured = get_posts(
		array(
			'numberposts'         => 1,
			'post_status'         => 'publish',
			'ignore_sticky_posts' => false,
		)
	);
	foreach ( $featured as $item ) {
		echo '<div class="feature-label">' . esc_html__( '封面阅读', 'reading' ) . '</div><h2><a href="' . esc_url( get_permalink( $item ) ) . '">' . esc_html( get_the_title( $item ) ) . '</a></h2><p>' . esc_html( wp_trim_words( wp_strip_all_tags( get_the_excerpt( $item ) ), 45 ) ) . '</p><a class="text-link" href="' . esc_url( get_permalink( $item ) ) . '">' . esc_html__( '打开文章 ↗', 'reading' ) . '</a>';
	}
}
/**
 * Minutes.
 */
function reading_minutes() {
	return max( 1, (int) ceil( strlen( wp_strip_all_tags( get_the_content() ) ) / 1500 ) ); }
/**
 * Posts.
 *
 * @param string $mode Home or archive row layout.
 */
function reading_posts( $mode = 'home' ) {
	if ( have_posts() ) {
		$index = 0;
		while ( have_posts() ) {
			the_post();
			++$index;
			get_template_part( 'template-parts/skins/' . reading_skin() . ( 'archive' === $mode ? '-archive-row' : '-row' ), null, array( 'index' => $index ) );
		}
		the_posts_pagination(
			array(
				'mid_size'  => 1,
				'prev_text' => __( '上一页', 'reading' ),
				'next_text' => __( '下一页', 'reading' ),
			)
		);
	} else {
		echo '<p class="reading-empty">' . esc_html__( '暂无内容。', 'reading' ) . '</p>';
		if ( is_search() || is_404() ) {
			get_search_form(); }
	}
}
/**
 * Singular.
 */
function reading_singular() {
	while ( have_posts() ) {
		the_post();
		echo '<div id="post-' . esc_attr( get_the_ID() ) . '" ';
		post_class( 'reading-native-entry' );
		echo '>';
		get_template_part( 'template-parts/skins/' . reading_skin() . '-article' );
		echo '</div>';
		the_tags( '<div class="reading-tags">', ' / ', '</div>' );
		reading_area( 'article-after' );
		if ( 'post' === get_post_type() ) {
			the_post_navigation(
				array(
					'prev_text' => '%title',
					'next_text' => '%title',
				)
			); }
		if ( comments_open() || get_comments_number() ) {
			comments_template(); }
	}
}
/**
 * Term field.
 *
 * @param int    $index Category position.
 * @param string $field Category field name.
 */
function reading_term_field( $index, $field ) {
	static $terms;
	if ( null === $terms ) {
		$terms = array_values(
			get_categories(
				array(
					'hide_empty' => true,
					'number'     => 24,
				)
			)
		); }
	return isset( $terms[ $index ] ) ? wp_strip_all_tags( $terms[ $index ]->$field ) : '';
}
/**
 * Latest field.
 *
 * @param string $field Title or excerpt.
 */
function reading_latest_field( $field ) {
	static $items;
	if ( null === $items ) {
		$items = get_posts(
			array(
				'numberposts' => 1,
				'post_status' => 'publish',
			)
		); }
	if ( empty( $items ) ) {
		return ''; }
	return 'title' === $field ? get_the_title( $items[0] ) : wp_strip_all_tags( get_the_excerpt( $items[0] ) );
}
/**
 * Main content.
 */
function reading_main_content() {
	if ( is_singular() ) {
		reading_singular(); } else {
		get_template_part( 'template-parts/skins/' . reading_skin() . '-archive' ); }
}
/**
 * Drawer menu.
 *
 * @param string $location Registered menu location.
 */
function reading_drawer_menu( $location ) {
	if ( has_nav_menu( $location ) ) {
		wp_nav_menu(
			array(
				'theme_location'       => $location,
				'container'            => 'nav',
				'container_aria_label' => 'topics' === $location ? __( '专题导航', 'reading' ) : __( '主导航', 'reading' ),
				'menu_class'           => 'reading-menu',
				'fallback_cb'          => false,
			)
		); }
}
/**
 * Panels.
 */
function reading_panels() {
	$panels = array();
	if ( has_nav_menu( 'primary' ) || is_active_sidebar( 'reading-navigation' ) ) {
		$panels['navigation'] = __( '页面导航', 'reading' ); }
	if ( has_nav_menu( 'topics' ) || is_active_sidebar( 'reading-topics' ) ) {
		$panels['topics'] = __( '专题', 'reading' ); }
	if ( wp_count_posts()->publish ) {
		$panels['archive'] = __( '时间档案', 'reading' ); }
	if ( is_active_sidebar( 'reading-tools' ) ) {
		$panels['tools'] = __( '小工具', 'reading' ); }
	$panels['reader'] = __( '阅读设置', 'reading' );
	$panels['search'] = __( '搜索', 'reading' );
	return $panels;
}
/**
 * Icon.
 *
 * @param string $name Constant icon identifier.
 */
function reading_icon( $name ) {
	if ( 'reading-pixel-archive' === reading_skin() ) {
		reading_pixel_art( $name );
		return; }
	$paths = array(
		'navigation' => '<path d="M4 4h6v6H4zM14 4h6v6h-6zM4 14h6v6H4zM14 14h6v6h-6z"/>',
		'topics'     => '<path d="M3 7V5h7l2 3h9v12H3zM3 10h18"/>',
		'archive'    => '<rect x="3" y="5" width="18" height="16"/><path d="M3 10h18M8 3v4m8-4v4M7 14h3m4 0h3m-10 4h3"/>',
		'search'     => '<circle cx="10.5" cy="10.5" r="6.5"/><path d="m15.5 15.5 5 5"/>',
		'reader'     => '<path d="M3 19 9 5l6 14M5.4 14h7.2M13 9h8m-4-4v8M15 18h6"/>',
		'tools'      => '<path d="M4 4h16v16H4zM4 10h16M10 10v10"/>',
	);
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Constant developer-owned SVG whitelist, no user input.
	echo '<svg viewBox="0 0 24 24" aria-hidden="true">' . $paths[ $name ] . '</svg>'; // Static, developer-owned SVG whitelist.
}

/**
 * Reference link.
 *
 * @param string $slug Original reference slug.
 * @param string $type Post or category.
 */
function reading_reference_link( $slug, $type ) {
	if ( 'category' === $type ) {
		$term = get_term_by( 'slug', $slug, 'category' );
		if ( ! $term ) {
			$positions = array(
				'photography' => 0,
				'city'        => 1,
				'media'       => 2,
				'notes'       => 3,
			);
			$terms     = array_values(
				get_categories(
					array(
						'hide_empty' => true,
						'number'     => 24,
					)
				)
			);
			$term      = $terms[ $positions[ $slug ] ?? 0 ] ?? null; }
		if ( $term && ! is_wp_error( $term ) ) {
			return get_category_link( $term ); }
	} else {
		$item = get_page_by_path( $slug, OBJECT, 'post' );
		if ( $item && 'publish' === $item->post_status ) {
			return get_permalink( $item ); }
	}
	return home_url( '/' );
}

/**
 * Read a native category field for decorative scene cards.
 *
 * @param string $slug Reference category slug.
 * @param int    $index Fallback native category position.
 * @param string $field Category name or description.
 * @return string
 */
function reading_scene_field( $slug, $index, $field ) {
	$term = get_term_by( 'slug', $slug, 'category' );
	return $term && ! is_wp_error( $term ) ? wp_strip_all_tags( $term->$field ) : reading_term_field( $index, $field );
}

/** Render the shared footer inside the skin canvas. */
function reading_footer_content() {
	echo '<footer class="reading-footer">';
	reading_area( 'footer' );
	reading_drawer_menu( 'footer' );
	reading_skin_switcher();
	echo '</footer>';
}

/** Render a read-only skin preview selector on the current page. */
function reading_skin_switcher() {
	?>
	<form class="reading-skin-switcher" method="get" data-reading-home="<?php echo esc_url( home_url( '/' ) ); ?>">
		<?php
		// Preserve search and other scalar query arguments when JavaScript is unavailable.
		// phpcs:ignore WordPress.Security.NonceVerification.Recommended -- Read-only GET form.
		foreach ( $_GET as $key => $value ) {
			if ( 'reading_skin' !== $key && is_string( $value ) ) {
				printf( '<input type="hidden" name="%s" value="%s">', esc_attr( $key ), esc_attr( wp_unslash( $value ) ) );
			}
		}
		?>
		<label for="reading-skin-select"><?php esc_html_e( '切换皮肤', 'reading' ); ?></label>
		<select id="reading-skin-select" name="reading_skin">
			<?php foreach ( reading_skins() as $slug => $skin ) : ?>
				<option value="<?php echo esc_attr( $slug ); ?>" <?php selected( reading_skin(), $slug ); ?>><?php echo esc_html( $skin['name'] . ' / ' . $slug ); ?></option>
			<?php endforeach; ?>
		</select>
		<button type="submit"><?php esc_html_e( '切换', 'reading' ); ?></button>
	</form>
	<?php
}
