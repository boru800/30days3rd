<?php
                    if (has_category()) {
                        $categories = get_the_category($post->ID);
                        $category_ID = array();
                        foreach ($categories as $category) {
                            array_push($category_ID, $category -> cat_ID);
                        }
                    }
                    $args = array(
                        'post__not_in' => array($post -> ID),
                        'posts_per_page'=> 8,
                        'category__in' => $category_ID,
                        'orderby' => 'rand',
					);
					?>

					<?php
                    $myposts = get_posts($args);
                    if ($myposts): ?>
					<div class="related-items">
					<?php foreach ($myposts as $post): setup_postdata($post);?>
					<a class="related-item" href="<?php the_permalink(); ?>">
					<div class="related-item-img">
					<?php
                    if (has_post_thumbnail()) {
                        // アイキャッチ画像が設定されてればミディアムサイズで表示
                        the_post_thumbnail('medium');
                    } else {
                        // なければnoimage画像をデフォルトで表示
                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                    }
                    ?>
					</div>
					<div class="related-item-title"><?php the_title(); ?></div><!-- /related-item-title -->
					</a><!-- /related-item -->
					<?php endforeach; wp_reset_postdata(); ?>
					</div><!-- /related-items -->
                    <?php endif; ?>
                    


                    