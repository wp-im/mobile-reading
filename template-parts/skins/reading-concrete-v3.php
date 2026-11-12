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
<b><?php bloginfo( 'name' ); ?></b><small><?php echo esc_html( get_bloginfo( 'description' ) ); ?></small></div><div class="app-status"><strong id="pageStatus"><?php echo esc_html( is_singular() ? 'DOCUMENT' : 'INDEX' ); ?></strong><span>FORM / VOID</span></div></header>
<div aria-hidden="true" class="concrete-architecture">
<svg class="architectural-section" viewBox="0 0 760 460" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
<defs>
	<linearGradient id="ctWall" x1="0" y1="0" x2="1" y2=".1"><stop stop-color="#aaa9a4"></stop><stop offset=".39" stop-color="#c7c6c0"></stop><stop offset="1" stop-color="#a09f9a"></stop></linearGradient>
	<linearGradient id="ctSide" x1="0" y1="0" x2="1" y2="0"><stop stop-color="#555955"></stop><stop offset=".42" stop-color="#797b76"></stop><stop offset="1" stop-color="#a5a6a1"></stop></linearGradient>
	<linearGradient id="ctSky" x1="0" y1="0" x2="0" y2="1"><stop stop-color="#d9e0e0"></stop><stop offset=".8" stop-color="#f0f0e9"></stop><stop offset="1" stop-color="#e1e1d8"></stop></linearGradient>
	<linearGradient id="ctFloor" x1="0" y1="0" x2="0" y2="1"><stop stop-color="#b5b6b1"></stop><stop offset="1" stop-color="#898d88"></stop></linearGradient>
	<pattern id="ctPanel" width="166" height="106" patternUnits="userSpaceOnUse"><path d="M0 0H166M0 0V106" stroke="#5b605d" stroke-opacity=".32" stroke-width="1" fill="none"></path><path d="M1 1H166M1 1V106" stroke="#f4f4ef" stroke-opacity=".26" stroke-width="1" fill="none"></path><g fill="#606461" stroke="#b9bab5" stroke-width="2.2"><circle cx="37" cy="32" r="4.5"></circle><circle cx="129" cy="32" r="4.5"></circle><circle cx="37" cy="84" r="4.5"></circle><circle cx="129" cy="84" r="4.5"></circle></g><g fill="#373b38" opacity=".4"><circle cx="37" cy="32" r="1.7"></circle><circle cx="129" cy="32" r="1.7"></circle><circle cx="37" cy="84" r="1.7"></circle><circle cx="129" cy="84" r="1.7"></circle></g></pattern>
	<pattern id="ctFine" width="31" height="37" patternUnits="userSpaceOnUse"><circle cx="4" cy="7" r=".85" fill="#515853" opacity=".15"></circle><circle cx="27" cy="26" r=".7" fill="#f0efeb" opacity=".28"></circle><path d="M8 30l2 -1M18 15l2 1" stroke="#5f6862" stroke-width=".8" opacity=".09"></path></pattern>
</defs>
<!-- A quiet monolithic retaining wall pierced by a deep sky-facing aperture. -->
<rect width="760" height="460" fill="#a6a7a2"></rect>
<rect width="760" height="460" fill="url(#ctWall)"></rect>
<rect width="760" height="460" fill="url(#ctPanel)"></rect>
<rect width="760" height="460" fill="url(#ctFine)"></rect>
<!-- the exterior sky/void is set deep behind massive wall planes -->
<path d="M279 81H586V369H279Z" fill="#525855"></path>
<path d="M310 104H554V339H310Z" fill="url(#ctSky)"></path>
<path d="M310 283Q432 259 554 287V339H310Z" fill="#bec5bb" opacity=".65"></path>
<path d="M280 80H586L554 104H310Z" fill="#5d625e"></path>
<path d="M279 81L310 104V339L279 369Z" fill="#515955"></path>
<path d="M554 104L586 81V369L554 339Z" fill="#8e918b"></path>
<path d="M279 369H586L554 339H310Z" fill="#6b706c"></path>
<path d="M309 104L310 338" stroke="#c0c6c0" stroke-opacity=".4" stroke-width="2"></path>
<!-- a horizontal cantilever into the void -->
<path d="M391 158H760V205H391Z" fill="#5f6661"></path>
<path d="M401 143H760V182H401Z" fill="#b2b1ab"></path>
<path d="M401 182H760V201H391Z" fill="#6f716e"></path>
<path d="M402 143H760" stroke="#e0dfd8" stroke-width="3" opacity=".54"></path>
<path d="M403 143L391 158V205L401 183Z" fill="#878b85"></path>
<path d="M401 205H760V230H478Z" fill="#545b57" opacity=".42"></path>
<!-- a tall concrete blade on the far right, with a knife-edge reveal -->
<path d="M624 0H760V460H628Z" fill="url(#ctSide)"></path>
<path d="M630 0V460" stroke="#3d4541" stroke-width="5" opacity=".45"></path>
<path d="M642 0V460" stroke="#ededdf" stroke-width="2" opacity=".27"></path>
<path d="M645 24H760V460H645Z" fill="url(#ctPanel)" opacity=".37"></path>
<!-- the massive near-left pier introduces a second depth layer -->
<path d="M0 0H157L141 460H0Z" fill="url(#ctSide)"></path>
<path d="M141 0L157 0L142 460L126 460Z" fill="#454c49" opacity=".42"></path>
<path d="M0 0H141V460H0Z" fill="url(#ctPanel)" opacity=".42"></path>
<path d="M168 0L168 460M176 0L176 460" stroke="#ecece4" stroke-opacity=".28" stroke-width="2"></path>
<!-- the upper slab is heavy, casting a hard-edged shadow -->
<path d="M0 0H760V73H0Z" fill="#b9bab4"></path>
<path d="M0 70H760V98H0Z" fill="#6a6f6a"></path>
<path d="M0 69H760" stroke="#e6e6df" stroke-width="3" opacity=".61"></path>
<path d="M0 98H760L531 175H0Z" fill="#454b48" opacity=".20"></path>
<!-- strong shaft of sunlight, showing geometry on the floor and wall -->
<path d="M310 106L554 106L554 188L350 339L310 339Z" fill="#fffef7" opacity=".36" class="architectural-sunbeam"></path>
<path d="M218 98H373L168 386H141Z" fill="#f8f7ee" opacity=".27" class="architectural-sunbeam"></path>
<path d="M0 369H760V460H0Z" fill="url(#ctFloor)"></path>
<path d="M0 370H760" stroke="#676c67" stroke-width="4"></path>
<path d="M280 369L586 369L760 460H118Z" fill="#5b625e" opacity=".32"></path>
<path d="M341 370L528 370L632 460H279Z" fill="#edece3" opacity=".48" class="architectural-sunbeam"></path>
<path d="M78 458H707M170 412H626" stroke="#676d68" stroke-width="1.5" opacity=".23"></path>
<path d="M133 459L224 372M610 459L582 372" stroke="#616662" stroke-width="1" opacity=".26"></path>
<!-- one low free-standing concrete seat, a functional object in the courtyard -->
<path d="M420 340H523V351L413 351Z" fill="#848983"></path>
<path d="M413 334H517L523 343H420Z" fill="#bfc0b9"></path>
<path d="M420 343H523V350H420Z" fill="#6c736e"></path>
</svg>
<div class="atrium-overprint"><span class="atrium-index">MATERIAL / 01</span><strong>空 · 间</strong><span class="atrium-caption">CONCRETE  /  VOID  /  LIGHT</span></div>
<div aria-hidden="true" class="scene-measure"><span>± 0.00</span><i></i></div>
</div>
<div aria-hidden="true" class="structure-bridge"><span>IN SITU / EXPOSED CONCRETE</span><span>01—07</span></div>
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
