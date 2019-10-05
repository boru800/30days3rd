<?php get_header(); ?>

<!-- content -->
<div id="content" class="m_one">
<div class="inner">

<!-- primary -->
<main id="primary">

	<!-- breadcrumb -->
	<?php if (function_exists('bcn_display')) : ?>
			<div class="breadcrumb">
			<?php bcn_display(); ?>
			</div>
			<?php endif; ?>
	<!-- /breadcrumb -->
	
<?php
if (have_posts()) :
while (have_posts()) :
the_post();
?>

<!-- entry -->
<article class="entry m_page">

<!-- entry-header -->
<div class="entry-header">
	<h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->
	<div class="entry-img">
			<?php
            if (has_post_thumbnail()) {
			the_post_thumbnail('large');
            }
			?>
	</div><!-- /entry-img -->
</div><!-- /entry-header -->

<!-- entry-body -->
<div class="entry-body">
<?php
	the_content();
?>
<?php
wp_link_pages(
array(
'before' => '<nav class="entry-links">',
'after' => '</nav>',
'link_before' => '',
'link_after' => '',
'next_or_number' => 'number',
'separator' => '',
)
);
?>
</div><!-- /entry-body -->


</article><!-- /entry -->
<?php
endwhile;
endif;
?>

</main><!-- /primary -->

<!-- secondary -->
<?php get_sidebar(); ?>

<!-- secondary -->


</div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>