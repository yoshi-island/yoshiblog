<!-- シングルページ用のナビゲーション部分のパーツ定義-->
<div class="single-page-navi">
    <?php if (get_previous_post()):?>
        <span class="previous-post-link">
            <?php previous_post_link(); ?>
        </span>
    <?php endif; ?>
    
    <?php if (get_next_post()):?>
        <span class="next-post-link">
            <?php next_post_link(); ?>
        </span>
    <?php endif; ?>
</div>
