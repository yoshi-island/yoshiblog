<!-- blogページ /blog/ -->
<?php get_header(); ?>
<?php get_template_part('modules/mobilemenu'); ?>

<div id="wrapper">
    <aside>
        <?php get_sidebar(''); ?>
    </aside>
    <div id="content">
        <?php get_template_part('modules/social'); ?>
        <?php get_template_part('modules/breadcrumbs'); ?>
        <!-- 投稿記事 -->
        <article class="home-page">
            <?php get_template_part('modules/post'); ?>
        </article>
        <?php get_template_part('modules/pagenavi'); ?>
    </div>
</div>

<?php get_template_part('modules/scrolltotop'); ?>
<?php get_footer();