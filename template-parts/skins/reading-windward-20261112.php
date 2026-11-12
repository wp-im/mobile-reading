<?php
/**
 * Original skin shell.
 *
 * @package Reading
 */

?>
<main class="shell" id="reading-content" tabindex="-1">
<header class="app-top"><div class="app-identity">
<?php
if ( has_custom_logo() ) {
	the_custom_logo(); }
?>
<b><?php bloginfo( 'name' ); ?></b><small><?php echo esc_html( get_bloginfo( 'description' ) ); ?></small></div><div class="app-status"><strong id="pageStatus"><?php echo esc_html( is_singular() ? 'DOCUMENT' : 'INDEX' ); ?></strong><span>WIND / STORYBOOK</span></div></header>
<div aria-hidden="true" class="landscape">
<svg class="landscape-svg" viewBox="0 0 900 430" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
	<defs>
	<linearGradient id="windSky" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#b5dce5"></stop><stop offset=".64" stop-color="#e0ece0"></stop><stop offset="1" stop-color="#f9edca"></stop></linearGradient>
	<radialGradient id="windLight"><stop stop-color="#fff7d4" stop-opacity=".86"></stop><stop offset="1" stop-color="#fdf6dd" stop-opacity="0"></stop></radialGradient>
	<linearGradient id="windHills" x1="0" y1="0" x2="0" y2="1"><stop stop-color="#a4b9a4"></stop><stop offset="1" stop-color="#769b86"></stop></linearGradient>
	<linearGradient id="windField" x1="0" y1="0" x2="0" y2="1"><stop stop-color="#b9c797"></stop><stop offset="1" stop-color="#8fae78"></stop></linearGradient>
	<pattern id="hatch" width="14" height="14" patternUnits="userSpaceOnUse"><path d="M1 10l5 -4m4 8l5 -4" stroke="#698875" stroke-opacity=".15" stroke-width="1.5" stroke-linecap="round" fill="none"></path></pattern>
	<filter id="grainy"><feTurbulence type="fractalNoise" baseFrequency=".25" numOctaves="2" seed="8" stitchTiles="stitch" result="n"></feTurbulence><feColorMatrix in="n" type="saturate" values="0"></feColorMatrix></filter>
	<g id="tree"><path d="M0 0Q-5 -24 -2 -49Q-9 -55 -14 -66M-2 -43Q9 -58 10 -73" fill="none" stroke="#827d62" stroke-width="6" stroke-linecap="round"></path><path d="M-24 -48Q-46 -68 -27 -82Q-35 -101 -15 -101Q-5 -123 15 -102Q36 -106 39 -86Q57 -71 34 -53Q14 -35 -7 -49Q-23 -40 -24 -48Z" fill="#648c6c"></path><path d="M-24 -65Q-37 -76 -24 -90Q-15 -110 3 -104Q28 -106 36 -82" fill="none" stroke="#a3bd8c" stroke-width="7" opacity=".7" stroke-linecap="round"></path></g>
	<g id="wildflowers"><path d="M0 0q-3 -12 1 -25M1 -14q-8 -10 -12 -6M2 -18q8 -6 11 -4" fill="none" stroke="#68866a" stroke-width="2.3" stroke-linecap="round"></path><circle cx="1" cy="-26" r="4.1" fill="#f8e4ba"></circle><circle cx="-3" cy="-27" r="2.8" fill="#f6f2db"></circle><circle cx="5" cy="-29" r="3" fill="#fff7e4"></circle><circle cx="1" cy="-26" r="1.8" fill="#d5aa63"></circle></g>
	</defs>
	<rect width="900" height="430" fill="url(#windSky)"></rect>
	<ellipse cx="652" cy="75" rx="238" ry="178" fill="url(#windLight)"></ellipse>
	<g class="wind-cloud wind-cloud-one" fill="#fff8ea" opacity=".8"><path d="M88 87Q82 65 108 60Q109 38 140 39Q155 14 188 35Q216 26 225 52Q251 54 259 75Q248 94 217 91Z"></path><path d="M544 59Q534 44 556 39Q574 11 602 31Q624 14 639 36Q670 32 678 54Z" opacity=".6"></path></g>
	<g class="wind-cloud wind-cloud-two" fill="#fdf8e9" opacity=".63"><path d="M385 113Q382 103 402 100Q405 84 423 88Q436 72 456 89Q480 82 488 102Q507 107 512 119Z"></path><path d="M730 115Q730 104 748 101Q757 77 777 95Q807 82 816 111Z"></path></g>
	<path d="M0 202Q120 135 258 177Q365 145 473 190Q640 128 790 169Q860 166 900 139V430H0Z" fill="#b7c7b2"></path>
	<path d="M0 232Q144 184 289 207Q437 168 553 204Q707 164 900 210V430H0Z" fill="url(#windHills)"></path>
	<path d="M0 278Q172 229 329 269Q485 231 608 250Q752 216 900 269V430H0Z" fill="#9fba8e"></path>
	<path d="M0 321Q153 258 283 300Q452 267 580 304Q757 264 900 292V430H0Z" fill="url(#windField)"></path>
	<path d="M0 350Q151 305 300 324Q472 309 615 338Q765 302 900 349V430H0Z" fill="#91a779" opacity=".65"></path>
	<path d="M540 430Q585 387 552 352Q533 330 598 310Q662 295 652 268" fill="none" stroke="#d4c49d" stroke-width="47" stroke-linecap="round"></path>
	<path d="M540 430Q579 382 555 352Q538 329 598 312Q661 296 653 268" fill="none" stroke="#f7e7bb" stroke-width="30" stroke-linecap="round" opacity=".9"></path>
	<path d="M0 307Q129 273 258 305M280 307Q375 292 439 300" stroke="#d5d8ae" stroke-width="2.2" fill="none" opacity=".64"></path>
	<!-- Fine, uneven pigment strokes give distant forms the density of a painted world. -->
	<g stroke-linecap="round" fill="none">
	<path d="M32 219q51 -16 85 -14m26 -3q37 -9 57 -6m144 5q70 -18 117 -8m161 -8q42 -8 62 -5" stroke="#d6debf" opacity=".48" stroke-width="3"></path>
	<path d="M31 279q73 -17 128 -10m61 9q49 -8 83 -3m88 -18q71 -13 110 -9m258 2q45 -3 69 1" stroke="#c5d4ab" opacity=".48" stroke-width="4"></path>
	<path d="M66 313q52 -20 93 -19m133 20q57 -18 105 -13m353 19q38 -8 72 -5" stroke="#e1dbb0" opacity=".4" stroke-width="3"></path>
	<path d="M24 359l6 -12m10 13l6 -8m35 18l5 -13m102 -4l4 -9m25 18l5 -14m112 -6l3 -11m17 7l8 -8m41 18l6 -13m308 13l5 -11m40 14l8 -12m39 11l5 -8" stroke="#4d8263" opacity=".55" stroke-width="2.3"></path>
	</g>
	<g fill="#f3edca" opacity=".6">
	<ellipse cx="120" cy="325" rx="20" ry="2" transform="rotate(-8 120 325)"></ellipse>
	<ellipse cx="331" cy="288" rx="29" ry="2" transform="rotate(-10 331 288)"></ellipse>
	<ellipse cx="472" cy="350" rx="36" ry="2" transform="rotate(5 472 350)"></ellipse>
	<ellipse cx="800" cy="315" rx="25" ry="2" transform="rotate(-8 800 315)"></ellipse>
	</g>
	<path d="M315 122q9 -7 17 0m8 -7q9 -6 16 -1" stroke="#758e84" stroke-width="2.8" fill="none" stroke-linecap="round" opacity=".65"></path>
	<!-- A few familiar signs of ordinary life: washing line and a wood fence. -->
	<g opacity=".82" stroke-linejoin="round">
	<path d="M462 272L463 241M510 275L508 246" stroke="#857f63" stroke-width="4" stroke-linecap="round"></path>
	<path d="M464 246Q484 257 508 250" stroke="#8c8770" stroke-width="1.8" fill="none"></path>
	<path d="M471 250l1 18l14 -1l-1 -17" fill="#ead7aa" stroke="#c7bb95" stroke-width="1"></path>
	<path d="M490 251l2 15l11 -1l-2 -14" fill="#c8d9c4" stroke="#9eb8a9" stroke-width="1"></path>
	<path d="M744 293l3 -31m16 35l3 -32m16 34l3 -34M737 278l60 7" stroke="#b5a88b" stroke-width="4" fill="none"></path>
	</g>
	<!-- An original, modest rural reading house: no film-specific architecture. -->
	<g transform="translate(648 198)">
	<path d="M0 44L59 -8L126 37L126 99L7 99Z" fill="#d8d6bc" stroke="#687b6a" stroke-width="3" stroke-linejoin="round"></path>
	<path d="M-13 43L57 -22L139 39L122 49L59 -5L1 54Z" fill="#a16e5e" stroke="#725c51" stroke-width="3" stroke-linejoin="round"></path>
	<path d="M10 39L57 -5L115 47" stroke="#cd9782" stroke-width="5" fill="none" opacity=".65"></path>
	<rect x="25" y="49" width="31" height="30" fill="#86acb2" stroke="#68817a" stroke-width="3"></rect><path d="M40 49V79M25 65H56" stroke="#f2e8c7" stroke-width="2"></path>
	<rect x="80" y="54" width="28" height="45" rx="1" fill="#967c65" stroke="#665e55" stroke-width="3"></rect><circle cx="102" cy="80" r="2.8" fill="#e4c783"></circle>
	<path d="M126 99Q148 103 156 91" stroke="#b5bd92" stroke-width="10" fill="none"></path>
	<path d="M18 100Q0 95 -16 104M135 106q16 -16 30 -7" stroke="#5c8468" stroke-width="12" fill="none" stroke-linecap="round"></path>
	<path d="M2 98Q-6 87 -10 77M149 102Q155 89 165 86" fill="none" stroke="#86a773" stroke-width="3"></path>
	<path d="M80 3V-22H98V14" stroke="#a16e5e" stroke-width="6" fill="none"></path>
	</g>
	<g class="chimney-smoke" fill="none" stroke="#f8f1df" stroke-linecap="round" opacity=".65"><path d="M732 178Q741 166 736 153Q732 143 745 136" stroke-width="9"></path><path d="M736 175Q744 161 742 150" stroke-width="4"></path></g>
	<g transform="translate(166 300) scale(.85)"><use href="#tree"></use></g><g transform="translate(283 310) scale(.52)"><use href="#tree"></use></g>
	<g transform="translate(867 327) scale(.63)"><use href="#tree"></use></g>
	<path d="M0 374Q80 359 158 386Q242 363 322 391Q395 380 471 391" fill="none" stroke="#618866" stroke-width="12" opacity=".38"></path>
	<g opacity=".78"><use href="#wildflowers" transform="translate(75 360) scale(.85)"></use><use href="#wildflowers" transform="translate(107 382) scale(.58)"></use><use href="#wildflowers" transform="translate(316 350) scale(.7)"></use><use href="#wildflowers" transform="translate(740 370) scale(.85)"></use><use href="#wildflowers" transform="translate(803 348) scale(.62)"></use><use href="#wildflowers" transform="translate(900 398) scale(.95)"></use></g>
	<path d="M0 391Q118 362 216 387Q401 367 508 400Q687 363 900 386V430H0Z" fill="url(#hatch)" opacity=".8"></path>
	<rect width="900" height="430" opacity=".055" filter="url(#grainy)"></rect>
</svg>
<span class="scene-label">THE WINDWARD READING ROOM</span>
<span class="scene-caption">风从山丘那边吹来</span>
</div>
<div id="view"><section class="window"><div class="window-title"><a aria-label="返回首页" class="tiny-square" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a><div class="grip"></div><span class="window-label"><?php echo esc_html( wp_strip_all_tags( reading_page_title() ) ); ?></span><div class="grip"></div><a aria-label="打开页面导航" class="tiny-square title-square" data-reading-open="navigation" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a></div><div class="window-toolbar"><?php echo '<a class="small-button" href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( '首页', 'reading' ) . '</a>'; ?></div><div class="window-interior"><?php reading_area( 'header' ); ?>
<?php
if ( is_front_page() && is_home() ) {
	reading_area( 'home-before' );
	?>
	<div class="window-interior"><div class="home-intro"><div class="eyebrow">A PERSONAL INDEX / VOL. 01</div><h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1><p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p></div><div class="bar-caption"><span>专题 / COLLECTIONS</span><span><?php echo esc_html( wp_count_posts()->publish ) . ' ' . esc_html__( '篇文章', 'reading' ); ?></span></div><div class="folder-list"><?php reading_categories(); ?></div><div class="bar-caption"><span>封面阅读 / SELECTED</span><span><?php echo esc_html( sprintf( '%02d / %02d', wp_count_posts()->publish ? 1 : 0, wp_count_posts()->publish ) ); ?></span></div><div class="feature"><?php reading_feature(); ?></div><div class="bar-caption" id="recent"><span>最近更新 / RECENT</span><span>ALL ENTRIES</span></div><div class="entry-list"><?php reading_posts(); ?></div></div>
	<?php
	reading_area( 'home-after' );
} else {
	reading_main_content(); }
?>
</div><div class="window-bottom"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div></section></div>
<div class="content-footer"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
<?php reading_footer_content(); ?></main>
