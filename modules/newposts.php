<!-- 新着記事部分のパーツ定義-->

<section class="new-posts">
    <h4>新着記事</h4>
    <!-- 記事リスト取得 -->
    <?php
        $postslist = get_posts( array (
            'posts_per_page' => 3,
        ));
    ?>
    
    <!-- 整形 -->
    <div class="new-post-item-wrapper">
        <?php foreach($postslist as $post) : ?>
            <span class="new-post-item">
                <!-- アイキャッチ画像 -->
                <?php if (has_post_thumbnail()):  ?>
                    <?php the_post_thumbnail(array(80, 80)); ?>
                <!-- アイキャッチ画像指定無ければランダム表示 -->
                <?php else : ?>
		    <div>
                        <img 
                            width="80"
                            height="80"
                            src="<?php echo get_template_directory_uri(); ?>/images/<?php echo get_random_image(); ?>"
                            class="attachment-80x80 size-80x80 wp-post-image"
                            alt=""
                        >
                    </div>
                <?php endif; ?>
                <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
            </span> 
        <?php endforeach; ?>
    </div>
</section>
