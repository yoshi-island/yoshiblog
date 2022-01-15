<?php

/**
 * widget area
 */
register_sidebar( array( 
  'name'          => 'Primary-Sidebar',
  'id'            => 'primary-widget-area',
  'description'   => 'Primary-Sidebar widget area',
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget'  => '</section>',
  'before_title'  => '<h3 class="widget-title">',
  'after_title'   => '</h3>',
 ) );

register_sidebar( array( 
  'name'          => 'Secondary-Sidebar',
  'id'            => 'secondary-widget-area',
  'description'   => 'Secondary-Sidebar widget area',
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget'  => '</section>',
  'before_title'  => '<h3 class="widget-title">',
  'after_title'   => '</h3>',
 ) );


register_sidebar( array( 
  'name'          => 'Sp-Sidebar',
  'id'            => 'sp-widget-area',
  'description'   => 'Sp-Sidebar widget area',
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget'  => '</section>',
  'before_title'  => '<h3 class="widget-title">',
  'after_title'   => '</h3>',
 ) );

/**
 * アイキャッチ画像の機能を有効化
 */
add_theme_support( 'post-thumbnails' );

/**
 * タイトル出力機能を有効化
 */
add_theme_support( 'title-tag' );

/**
 * 画像をランダムに呼び出す関数
 */
function get_random_image() {
  $image_array = array(
      'ayla-verschueren-XUdE_KGGkdA-unsplash.jpg',
      'catherine-heath-i4W8OINLI_I-unsplash.jpg',
      'cookie-the-pom-gySMaocSdqs-unsplash.jpg',
      'jamie-street-Zqy-x7K5Qcg-unsplash.jpg',
    );
  $rand_keys = array_rand($image_array);
  return $image_array[$rand_keys];
};

