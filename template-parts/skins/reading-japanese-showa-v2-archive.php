<?php
/**
 * Archive in original skin structure.
 *
 * @package Reading
 */

?>
<div class="window-interior"><div class="section-hero"><div aria-hidden="true" class="section-mark"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 360 272" preserveAspectRatio="xMidYMid slice" aria-hidden="true"><defs><pattern id="showa_dot" width="6" height="6" patternUnits="userSpaceOnUse"><circle cx="1.5" cy="1.5" r=".7" fill="#7f4438" opacity=".28"></circle></pattern></defs>
<rect width="360" height="272" fill="#f4d785"></rect><rect width="360" height="272" fill="url(#showa_dot)"></rect><rect x="11" y="9" width="338" height="254" fill="none" stroke="#2b4f53" stroke-width="3"></rect>
<path d="M0 0h360v78H0z" fill="#be493a"></path><path d="M10 75h338v5H10z" fill="#215f67"></path><text x="23" y="31" font-size="13" font-weight="900" font-family="sans-serif" fill="#ffedbd" letter-spacing="4">新しい時代の読みもの</text><text x="20" y="67" font-size="38" font-weight="900" font-family="sans-serif" fill="#fff4d1">昭和文化通信</text>
<path d="M21 95h202v155H21z" fill="#237078" stroke="#202e30" stroke-width="3"></path><rect x="29" y="102" width="186" height="140" fill="#f4e7bf"></rect><circle cx="122" cy="170" r="56" fill="#e8a344" stroke="#3b4342" stroke-width="3"></circle><circle cx="122" cy="170" r="43" fill="#d45541"></circle><path d="M122 128v85m-42-43h84" stroke="#fce3aa" stroke-width="7"></path><path d="M90 153Q124 129 156 153M87 185Q124 210 158 184" stroke="#fff5d2" stroke-width="8" fill="none"></path>
<path d="M236 95h104v155H236z" fill="#f5efcf" stroke="#272f35" stroke-width="3"></path><rect x="245" y="106" width="86" height="31" fill="#c34739"></rect><text x="248" y="127" font-size="21" font-weight="900" font-family="sans-serif" fill="#fff8dc">特別号</text><rect x="246" y="150" width="84" height="90" fill="#19747a"></rect><path d="M257 162h63v55h-63z" fill="#f0cb79"></path><path d="M273 178h31v22h-31z" fill="#de5c42"></path><path d="M251 226h75" stroke="#f1db9c" stroke-width="4"></path>
<path d="M17 251H341" stroke="#2d4647" stroke-width="3"></path><text x="39" y="117" font-size="8" font-weight="700" fill="#375257" font-family="sans-serif">毎日をもっと楽しく</text></svg></div><div class="eyebrow">FOLDER / PHOTOGRAPHY</div><h1><?php echo esc_html( wp_strip_all_tags( reading_page_title() ) ); ?></h1><p>
<?php
if ( is_archive() ) {
	echo wp_kses_post( get_the_archive_description() ); }
?>
</p></div><div class="v2-section-type">两至三色套印、粗广告字、包装、邮戳与促销色块 / CONTENT INDEX</div><div class="bar-caption"><span>文件 / CONTENTS</span><span>02 ITEMS</span></div><?php reading_posts( 'archive' ); ?></div>
