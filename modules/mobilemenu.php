<!-- モバイル用サイドメニューのパーツ定義-->
<!-- https://note.spiqa.design/hamburer/ -->

<div id="nav-wrapper" class="nav-wrapper">
    <div class="hamburger" id="js-hamburger">
        <span class="hamburger__line hamburger__line--1"></span>
        <span class="hamburger__line hamburger__line--2"></span>
        <span class="hamburger__line hamburger__line--3"></span>
    </div>
    <nav class="sp-nav">
        <h3>Search</h3>
            <?php get_search_form(); ?>
        <h3>Menu</h3>
            <ul>
                <li>
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">
                        <i class="fas fa-user"></i> About Me
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">
                        <i class="fas fa-pen"></i> Blog
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url( home_url( '/links/' ) ); ?>">
                        <i class="fas fa-link"></i> Links
                    </a>
                </li>
            </ul>
        <?php dynamic_sidebar('sp-widget-area'); ?>
    </nav>
    <div class="black-bg" id="js-black-bg"></div>
 </div>

<script>
window.onload = function () {
    var nav = document.getElementById('nav-wrapper');
    var hamburger = document.getElementById('js-hamburger');
    var blackBg = document.getElementById('js-black-bg');

    hamburger.addEventListener('click', function () {
        nav.classList.toggle('open');
    });
    blackBg.addEventListener('click', function () {
        nav.classList.remove('open');
    });
};

</script>
