<?php
/**
 * Archive in original skin structure.
 *
 * @package Reading
 */

?>
<div class="window-interior"><div class="section-hero"><div aria-hidden="true" class="section-mark"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 360 272" preserveAspectRatio="xMidYMid slice" aria-hidden="true"><defs><linearGradient id="cp_sky_v2" x1="0" y1="0" x2="0" y2="1"><stop stop-color="#2676c0"></stop><stop offset=".75" stop-color="#66c4dd"></stop><stop offset="1" stop-color="#a8e7df"></stop></linearGradient></defs>
<rect width="360" height="272" fill="url(#cp_sky_v2)"></rect><circle cx="285" cy="66" r="36" fill="#fff6ca"></circle><path d="M0 148H360V272H0z" fill="#1589c1"></path><path d="M0 170h360v102H0z" fill="#f4b2b1"></path>
<path d="M-5 126H145V53h72v73h147v33H-5z" fill="#fbf4e6"></path><path d="M13 77h118v49H13z" fill="#f8e9da"></path><g fill="#4386ba"><path d="M24 87h30v28H24zM62 87h30v28H62zM100 87h21v28h-21z"></path></g><path d="M158 68h47v58h-47z" fill="#3180b3"></path><path d="M169 77h24v43h-24z" fill="#f1e9da"></path>
<path d="M32 179h277L285 259H60z" fill="#d7fbf8" stroke="#fff" stroke-width="5"></path><path d="M45 184h251l-9 25H49z" fill="#4ac7e8"></path><path d="M50 217h233l-6 25H60z" fill="#2ba7d7"></path><path d="M63 246l207-1" stroke="#9df3ee" stroke-width="2"></path><path d="M0 147h360" stroke="#1a7189" stroke-width="4"></path>
<path d="M312 165Q290 85 313 42" fill="none" stroke="#313f58" stroke-width="5"></path><g fill="#2c6d8b"><path d="M311 76Q269 58 257 38Q289 36 311 76"></path><path d="M312 77Q310 31 349 24Q346 60 312 77"></path><path d="M310 77Q276 91 259 76Q286 63 310 77"></path><path d="M310 77Q348 69 365 94Q331 100 310 77"></path></g>
<text x="18" y="33" fill="#fff8e9" font-size="26" font-weight="700" font-style="italic" font-family="Arial,sans-serif" letter-spacing="2">SUNSHINE '84</text><text x="20" y="46" fill="#e7ffff" font-size="8" font-family="Arial,sans-serif" letter-spacing="3">THE URBAN READING EDITION</text></svg></div><div class="eyebrow">FOLDER / PHOTOGRAPHY</div><h1><?php echo esc_html( wp_strip_all_tags( reading_page_title() ) ); ?></h1><p>
<?php
if ( is_archive() ) {
	echo wp_kses_post( get_the_archive_description() ); }
?>
</p></div><div class="v2-section-type">强日照、水平线、泳池、晴空蓝与无人的现代建筑 / CONTENT INDEX</div><div class="bar-caption"><span>文件 / CONTENTS</span><span>02 ITEMS</span></div><?php reading_posts( 'archive' ); ?></div>
