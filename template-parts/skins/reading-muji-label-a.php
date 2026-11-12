<?php
/**
 * Original skin shell.
 *
 * @package Reading
 */

?>
<div class="app">



<div class="main" id="reading-content" tabindex="-1"><?php reading_area( 'header' ); ?><div class="sitehead">
<?php
if ( has_custom_logo() ) {
	the_custom_logo(); }
?>
<div><span class="small">RD / INFORMATION LABEL SYSTEM</span><strong><?php bloginfo( 'name' ); ?></strong></div><div class="batch">BATCH 001</div></div><footer class="sitefoot">RD / PAPER GOODS　·　INDEPENDENT CONCEPT　·　2026</footer>
<?php
if ( is_front_page() && is_home() ) {
	reading_area( 'home-before' );
	?>
	<div class="page active" id="page-home"><div class="tag-stock"><div class="tag-running"><span>INFORMATION GOODS</span><span>NO. 001 / 2026</span></div><h1 class="tag-heading"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1><p class="tag-intro"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p><div class="tag-specs"><div><label>ITEM TYPE / 品类</label><b>内容目录</b></div><div><label>NUMBER / 资料量</label><b><?php echo esc_html( wp_count_posts()->publish ) . ' ' . esc_html__( '篇文章', 'reading' ); ?></b></div><div><label>FUNCTION / 用途</label><b>检索 · 阅读</b></div><div><label>FORMAT / 规格</label><b>手机单列</b></div></div><div aria-hidden="true" class="barcode"><i style="--w:1px;--h:18px"></i><i style="--w:2px;--h:25px"></i><i style="--w:1px;--h:22px"></i><i style="--w:3px;--h:19px"></i><i style="--w:2px;--h:26px"></i><i style="--w:1px;--h:23px"></i><i style="--w:1px;--h:20px"></i><i style="--w:3px;--h:27px"></i><i style="--w:1px;--h:24px"></i><i style="--w:2px;--h:21px"></i><i style="--w:2px;--h:18px"></i><i style="--w:1px;--h:25px"></i><i style="--w:3px;--h:22px"></i><i style="--w:1px;--h:19px"></i><i style="--w:1px;--h:26px"></i><i style="--w:2px;--h:23px"></i><i style="--w:3px;--h:20px"></i><i style="--w:1px;--h:27px"></i><i style="--w:2px;--h:24px"></i><i style="--w:1px;--h:21px"></i><i style="--w:3px;--h:18px"></i><i style="--w:1px;--h:25px"></i><i style="--w:2px;--h:22px"></i><i style="--w:1px;--h:19px"></i><i style="--w:1px;--h:26px"></i><i style="--w:3px;--h:23px"></i><i style="--w:2px;--h:20px"></i><i style="--w:1px;--h:27px"></i><i style="--w:3px;--h:24px"></i><i style="--w:2px;--h:21px"></i><i style="--w:1px;--h:18px"></i><i style="--w:1px;--h:25px"></i><i style="--w:2px;--h:22px"></i><i style="--w:1px;--h:19px"></i><i style="--w:3px;--h:26px"></i></div><div class="bar-caption">RD / MOBILE READING · SAMPLE SERIES 001</div></div><div class="paper-sleeve"><span>材料：纸色 + 信息秩序</span><span>／ 01</span></div>
<div class="section-marker"><h3>按用途分类</h3><span>CONTENT GROUPS / 04</span></div><div class="shelf" id="section-chapters"><?php reading_categories(); ?></div><div class="section-marker"><h3>资料条目</h3><span>INVENTORY / 07</span></div><div class="stock-list" id="home-article-list"><?php reading_posts(); ?></div></div>
	<?php
	reading_area( 'home-after' );
} else {
	reading_main_content(); }
?>
<?php reading_footer_content(); ?></div></div>
