<!-- 関連記事部分のパーツ定義-->

<section class="related-posts">
    <h4>関連記事</h4>
    <!--
        初期値
            $cat=1はdummyカテゴリー
            取得記事数はあとで自分自身は除くので指定した数-1が表示される
    -->
    <?php
        $cat = 1;
        $posts_per_page = 4;
        $this_post_id = get_the_ID();
        $exclude_cat_list = array('dummy','その他');
    ?>
    
    
    <!-- 記事リスト取得 -->
    <?php
        $posts_count = wp_count_posts()->publish + wp_count_posts()->draft;
        foreach(get_the_category() as $category) :
            if (!in_array($category->name,$exclude_cat_list)) : // $exclude_cat_list以外
                if (1 < $category->count and $category->count <= $posts_count) : // 投稿数の少ないカテゴリ(1は自分自身だけなので除く)
                    $cat = $category->cat_ID;
                    $posts_count = $category->count;
                endif;
            endif;
        endforeach;

        $postslist = get_posts( array (
            'posts_per_page' => $posts_per_page,
            'category' => $cat
        ));
    ?>
    
    <!-- 整形 -->
    <div class="related-post-item-wrapper">
        <?php foreach($postslist as $post) : ?>
            <!-- 自身のリンクは除く -->
            <?php if(get_the_ID() != $this_post_id) : ?>
            <span class="related-post-item">
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
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>
