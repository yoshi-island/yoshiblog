<!-- トップページ / -->
<?php get_header(); ?>
<?php get_template_part('modules/mobilemenu'); ?>

<div id="wrapper">
    <aside>
        <?php get_sidebar(); ?>
    </aside>
    <div id="content">
        <?php get_template_part('modules/social'); ?>
        <!-- 投稿記事 -->
        <article class="front-page">
            <?php get_template_part('modules/post'); ?>
            <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">もっと読む</a>
        </article>
    </div>
</div>

<?php get_template_part('modules/scrolltotop'); ?>
<?php get_footer();

