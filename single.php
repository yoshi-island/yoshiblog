<!-- ブログ個別記事ページ -->
<?php get_header(); ?>
<?php get_template_part('modules/mobilemenu'); ?>

<div id="wrapper">
    <aside>
        <?php dynamic_sidebar('secondary-widget-area'); ?>
        <?php get_sidebar(); ?>
    </aside>
    <div id="content">
        <?php get_template_part('modules/social'); ?>
        <?php get_template_part('modules/breadcrumbs'); ?>
        <!-- 投稿記事 -->
        <article class="single-page">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <section <?php post_class(); ?>>
                        <?php if (has_post_thumbnail()):  ?>
                            <div class="thumbnail-wrapper">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ( date( 'Y' ) - get_the_time( 'Y' ) > 3 ) : ?>
                            <div class="old-post-warning">
                                    <p>
                                        <i class="fas fa-exclamation"></i> 
                                        この記事は3年以上前に書かれた記事で内容が古い可能性があります
                                        <i class="fas fa-exclamation"></i> 
                                    </p>
                            </div>
                        <?php endif; ?>
                        <h1><?php the_title(); ?></h1>
                        <!-- 投稿日付 -->
                        <div class="blog-posts-date">
                            <?php echo get_the_date( 'Y-m-d' ); ?>
                        </div>
                        <!-- カテゴリー -->
                        <div class="blog-posts-category">
                            <span class="category-item"><?php the_category( '</span><span class="category-item">' ); ?></span>
                        </div>
                        <?php the_content(); ?>
                    </section>
                <?php endwhile; ?>
            <?php else : ?>
                <h2>投稿が見つかりません</h2>
            <?php endif; ?>
        </article>
        <?php if( function_exists('the_ad_placement') ) { the_ad_placement('manual'); }; ?>
        <?php get_template_part('modules/pagenavi-single'); ?>
        <?php get_template_part('modules/relatedposts'); ?>
    </div>
</div>

<?php get_template_part('modules/scrolltotop'); ?>
<?php get_footer();
