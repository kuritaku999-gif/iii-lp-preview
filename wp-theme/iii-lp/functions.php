<?php
/**
 * iii LP (Z = D + iD) テーマ
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/** テーマ基本サポート */
function iii_lp_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'iii_lp_setup' );

/** CSS / JS / Webフォント読み込み */
function iii_lp_assets() {
    // Google Fonts
    wp_enqueue_style(
        'iii-lp-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Noto+Serif+JP:wght@400;500;600;700&display=swap',
        array(),
        null
    );
    // デザイン本体（テーマ直下 style.css）
    wp_enqueue_style(
        'iii-lp-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
    // 動作スクリプト（リンク設定・開閉・レスポンシブ）
    wp_enqueue_script(
        'iii-lp-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        '1.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'iii_lp_assets' );
