<!-- header-navまでをget_header()に置き換える -->
<?php get_header(); ?>


<!-- content -->
<div id="content">

	<div class="inner">

		<!-- primary -->
		<main id="primary">

			<!-- breadcrumb -->
			<?php if (function_exists('bcn_display')) : ?>
			<!-- breadcrumb -->
			<div class="breadcrumb">
				<?php bcn_display(); ?>
			</div><!-- /breadcrumb -->
			<?php endif; ?>
	</div><!-- /breadcrumb -->

	<div class="archive-head m_description">
		<div class="archive-lead">ARCHIVE</div>
		<h1 class="archive-title m_category"><?php the_archive_title(); //一覧ページ名を表示?>
		</h1><!-- /archive-title -->
		<div class="archive-description">
			<p><?php the_archive_description(); //説明を表示?>
			</p>


		</div><!-- /archive-head -->
	</div><!-- /archive-description -->


	<!-- entries -->
	<?php
                if (have_posts()) : ?>

	<div class="entries m_horizontal">
		<?php
                while (have_posts()) :
                the_post(); ?>
		<!-- entry-item -->
		<a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="entry-item">
			<!-- entry-item-img -->
			<div class="entry-item-img">
				<?php
                        if (has_post_thumbnail()) {
                            // アイキャッチ画像が設定されてれば大サイズで表示
                            the_post_thumbnail('large');
                        } else {
                            // なければnoimage画像をデフォルトで表示
                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                        }
                        ?>
			</div><!-- /entry-item-img -->

			<!-- entry-item-body -->
			<div class="entry-item-body">
				<div class="entry-item-meta">

					<div class="entry-item-tag"><?php my_the_post_category(false); ?>
					</div>;

					<time class="entry-item-published"
						datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
					<!-- /entry-item-published -->
				</div><!-- /entry-item-meta -->
				<h2 class="entry-item-title"><?php the_title(); //タイトルを表示?>
				</h2><!-- /entry-item-title -->
				<div class="entry-item-excerpt">
					<?php the_excerpt(); //抜粋を表示?>
				</div><!-- /entry-item-excerpt -->
			</div><!-- /entry-item-body -->
		</a><!-- /entry-item -->

		<?php	endwhile ?>
	</div><!-- /entries -->

	<?php	endif ?>



	<!-- pagenation -->
	<?php get_template_part('template-parts/pagenation') ?>
</div><!-- /pagenation -->

</main><!-- /primary -->

<?php get_sidebar(); ?>

</div><!-- /inner -->
</div><!-- /content -->

<!-- footer-menuから下をget_footer()に置き換える -->
<?php get_footer();
