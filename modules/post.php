<!-- post一覧表示で使うpost部分のパーツ定義-->

<?php
    if( is_front_page() ){
        query_posts('posts_per_page=10');
    }
?>

<?php if ( have_posts() ): ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <section <?php post_class('post-list'); ?>>
            <!-- アイキャッチ画像 -->
            <?php if (has_post_thumbnail()):  ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(array(80, 80)); ?>
                </a>
            <!-- アイキャッチ画像指定無ければランダム表示 -->
            <?php else : ?>
                <a href="<?php the_permalink(); ?>">
                    <img 
                        width="80"
                        height="80"
                        src="<?php echo get_template_directory_uri(); ?>/images/<?php echo get_random_image(); ?>"
                        class="attachment-80x80 size-80x80 wp-post-image random-post-image"
                        alt=""
                    >
                </a>
            <?php endif; ?>
            <div class="blog-posts-info-wrapper">
                <!-- 投稿日付 -->
                <div class="blog-posts-list-date">
                    <?php echo get_the_date( 'Y-m-d' ); ?>
                </div>
                <!-- タイトル -->
                <div class="blog-posts-list-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                <!-- カテゴリー -->
                <div class="blog-posts-list-category">
                    <span class="category-item"><?php the_category( '</span><span class="category-item">' ); ?></span>
                </div>
            </div>
        </section>
        <div class="divider"></div>

    <?php endwhile; ?>
<?php else : ?>
    投稿なし
<?php endif; ?>
