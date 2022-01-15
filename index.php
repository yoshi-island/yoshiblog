<!-- その他ページ -->
<?php get_header(); ?>
<?php get_template_part('modules/mobilemenu'); ?>

<div id="wrapper">
    <aside>
        <?php get_sidebar(); ?>
    </aside>
    <div id="content">
        <?php get_template_part('modules/social'); ?>
        <?php get_template_part('modules/breadcrumbs'); ?>
        <!-- 投稿記事 -->
        <article>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <section <?php post_class(); ?>>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </section>
                <?php endwhile; ?>
            <?php else : ?>
                <h2>投稿が見つかりません</h2>
            <?php endif; ?>
        </article>
        <?php get_template_part('modules/pagenavi'); ?>
        <?php get_template_part('modules/newposts'); ?>
    </div>
</div>

<?php get_template_part('modules/scrolltotop'); ?>
<?php get_footer();