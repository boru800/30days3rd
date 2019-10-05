
	<!-- footer-menu -->
	<div id="footer-menu">
		<div class="inner">
			<div class="footer-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></div><!-- /footer-logo -->
			<div class="footer-sub"><?php bloginfo('description');  ?></div><!-- /footer-sub -->

			<nav class="footer-nav">
            <?php
wp_nav_menu(
//.header-listを置き換えて、PC用メニューを動的に表示する
array(
'depth' => 1,
'theme_location' => 'footer', //グローバルメニューをここに表示すると指定
'container' => 'false',
'menu_class' => 'header-list',
)
);
?>
			</nav>

		</div><!-- /inner -->
	</div><!-- /footer-menu -->


<!-- footer -->
<footer id="footer">
<div class="inner">
<div class="copy">&copy; daily-trial WordPress theme All rights reserved.</div><!-- /copy -->
<div class="by">Presented by <a href="https://tokyofreelance.jp/" rel="noopener" target="_blank">東京フリーランス</a></div><!-- /by -->

</div><!-- /inner -->
</footer><!-- /footer -->

<!-- ここからが追記部分 -->
<?php if(is_single()): ?>

<!-- footer-sns -->
<div class="footer-sns ">
<div class="inner">

<div class="footer-sns-head">この記事をシェアする</div><!-- /footer-sns-head -->

<nav class="footer-sns-buttons">
<?php get_template_part('template-parts/sns-btn');?>
</nav><!-- /footer-sns-buttons -->

</div><!-- /inner -->
</div><!-- /footer-sns -->

<?php endif ?>


<div class="floating">
<a href="#"><i class="fas fa-chevron-up"></i></a>
</div>

<?php wp_footer(); ?>
</body>
</html>