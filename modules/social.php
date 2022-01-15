<!-- SNSシェアボタン部分のパーツ定義-->
<div id="sns-share">
    <!-- twitter -->
    <!-- https://developer.twitter.com/en/docs/twitter-for-websites/tweet-button/overview -->
    <a
        href="https://twitter.com/intent/tweet?text=<?php echo urlencode(the_title_attribute('echo=0')); ?>｜<?php bloginfo( 'name' ); ?>&url=<?php the_permalink(); ?>"
        rel="noopener noreferrer nofollow"
        target="_blank"
    >
            <img 
                src="<?php echo get_template_directory_uri(); ?>/images/social/social-003-round_twitter.png"
                class="social-btn-img"
                alt=""
            >
    </a>
    <!-- facebook -->
    <a
        href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"
        rel="noopener noreferrer nofollow"
        target="_blank"
    >
        <img 
            src="<?php echo get_template_directory_uri(); ?>/images/social/social-006-round_facebook.png"
            class="social-btn-img"
            alt=""
        >
    </a>
</div>