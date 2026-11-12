<?php
/**
 * Archive in original skin structure.
 *
 * @package Reading
 */

?>
<div class="window-interior"><div class="section-hero"><div aria-hidden="true" class="section-mark"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 360 272" preserveAspectRatio="xMidYMid slice" aria-hidden="true"><rect width="360" height="272" fill="#f7f7f4"></rect>
<g stroke="#d1d1cc" stroke-width=".8"><path d="M0 0v272"></path><path d="M30 0v272"></path><path d="M60 0v272"></path><path d="M90 0v272"></path><path d="M120 0v272"></path><path d="M150 0v272"></path><path d="M180 0v272"></path><path d="M210 0v272"></path><path d="M240 0v272"></path><path d="M270 0v272"></path><path d="M300 0v272"></path><path d="M330 0v272"></path><path d="M360 0v272"></path><path d="M0 0h360"></path><path d="M0 30h360"></path><path d="M0 60h360"></path><path d="M0 90h360"></path><path d="M0 120h360"></path><path d="M0 150h360"></path><path d="M0 180h360"></path><path d="M0 210h360"></path><path d="M0 240h360"></path><path d="M0 270h360"></path></g>
<rect x="15" y="13" width="5" height="244" fill="#151515"></rect><text x="30" y="29" font-family="Arial,sans-serif" font-weight="700" font-size="12" letter-spacing="3" fill="#111">READING INFORMATION SYSTEM</text>
<circle cx="265" cy="91" r="67" fill="#cd302b"></circle><text x="30" y="136" font-family="Arial,sans-serif" font-weight="900" font-size="98" letter-spacing="-9" fill="#111">64</text><path d="M29 157h306" stroke="#111" stroke-width="4"></path>
<text x="29" y="178" font-family="Arial,sans-serif" font-weight="700" font-size="11" letter-spacing="1.2" fill="#111">INFORMATION / 01—07</text>
<g fill="#141414"><rect x="30" y="190" width="62" height="58"></rect><rect x="102" y="190" width="62" height="58"></rect><rect x="174" y="190" width="62" height="58"></rect><rect x="246" y="190" width="89" height="58"></rect></g>
<g stroke="#f9f9f7" stroke-linejoin="round" stroke-linecap="square" fill="none"><path d="M45 217h31m-16-15v31M111 202h41v35h-41zM120 210h23m-23 9h23M120 227h18M187 237l17-35 17 35m-28-15h21" stroke-width="4"></path><circle cx="287" cy="218" r="15" stroke-width="4"></circle><path d="M310 202v31" stroke-width="4"></path></g></svg></div><div class="eyebrow">FOLDER / PHOTOGRAPHY</div><h1><?php echo esc_html( wp_strip_all_tags( reading_page_title() ) ); ?></h1><p>
<?php
if ( is_archive() ) {
	echo wp_kses_post( get_the_archive_description() ); }
?>
</p></div><div class="v2-section-type">几何网格、红圆、信息图标、精确对齐与留白 / CONTENT INDEX</div><div class="bar-caption"><span>文件 / CONTENTS</span><span>02 ITEMS</span></div><?php reading_posts( 'archive' ); ?></div>
