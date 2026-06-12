<?php
/**
 * iii LP (Z = D + iD) テーマ
 * リンク・テキストは「外観 → カスタマイズ」から編集できます。
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/** テーマ基本サポート */
function iii_lp_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'style', 'script' ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'iii_lp_setup' );

/* =========================================================
 *  リンク定義  id => array( ラベル, セクション, 初期値 )
 * ========================================================= */
function iii_lp_link_defs() {
    return array(
        // ヘッダー / 共通
        'enter'          => array( 'ロゴ / ENTER（ヒーロー）', 'header', 'https://iii-iii.com/' ),
        'header_project' => array( 'ヘッダー: PROJECT', 'header', 'https://iii-iii.com/project/' ),
        'header_theory'  => array( 'ヘッダー: THEORY', 'header', 'https://iii-iii.com/i-theory/' ),
        'header_about'   => array( 'ヘッダー: ABOUT', 'header', 'https://yuma-muranushi.jp/' ),
        'header_news'    => array( 'ヘッダー: NEWS', 'header', 'https://iii-iii.com/i.media/' ),
        'header_contact' => array( 'ヘッダー: CONTACT', 'header', 'https://line.me/R/ti/p/@082qgqqf' ),
        // サイドバー 01-06 ＋ 中間
        'nav_common'   => array( '01 COMMON', 'nav', 'https://iii-iii.com/i.media/' ),
        'nav_theory'   => array( '02 THEORY', 'nav', 'https://iii-iii.com/i-theory/' ),
        'nav_praxis'   => array( '03 PRAXIS', 'nav', 'https://iii-iii.com/grid/' ),
        'nav_ipeace'   => array( '04 i.PEACE', 'nav', 'https://iii-iii.com/i.peace/' ),
        'nav_projecti' => array( '05 PROJECT i', 'nav', 'https://iii-iii.com/organization/' ),
        'nav_social'   => array( '06 SOCIAL', 'nav', '' ),
        'mid_theory'   => array( '中間バンド: THEORY', 'nav', 'https://iii-iii.com/i-theory/' ),
        'mid_praxis'   => array( '中間バンド: PRAXIS', 'nav', 'https://iii-iii.com/grid/' ),
        // PICKUP カード
        'card_theory'     => array( '01 拡張虚数理論', 'card', 'https://iii-iii.com/i-theory/' ),
        'card_peaceman'   => array( '02 Peace-Man', 'card', 'https://peace-man.space' ),
        'card_maaaru'     => array( '03 maaaru', 'card', 'https://maaaru.org' ),
        'card_iiiproject' => array( '04 iii Project', 'card', 'https://utage-system.com/p/ahvsB4JoN9vL' ),
        'card_vasileus'   => array( '05 VASILEUS', 'card', '' ),
        'card_homodimes'  => array( '06 Homodimes', 'card', 'https://iii-iii.com/homodimes' ),
        // 下部バンド
        'band_ipeace'   => array( 'バンド: i.PEACE', 'band', 'https://iii-iii.com/i.peace/' ),
        'band_projecti' => array( 'バンド: PROJECT i', 'band', 'https://iii-iii.com/organization/' ),
        'band_bigi'     => array( 'バンド: 大きい ï', 'band', 'https://iii-iii.com/project/' ),
        'band_social'   => array( 'バンド: SOCIAL', 'band', '' ),
        // フッター / SNS
        'foot_home'        => array( 'フッター: HOME', 'footer', 'https://iii-iii.com/' ),
        'foot_project'     => array( 'フッター: PROJECT', 'footer', 'https://iii-iii.com/project/' ),
        'foot_media'       => array( 'フッター: MEDIA', 'footer', 'https://iii-iii.com/i.media/' ),
        'foot_theory'      => array( 'フッター: THEORY', 'footer', 'https://iii-iii.com/i-theory/' ),
        'foot_news'        => array( 'フッター: NEWS', 'footer', 'https://iii-iii.com/i.media/' ),
        'foot_contact'     => array( 'フッター: CONTACT', 'footer', 'https://line.me/R/ti/p/@082qgqqf' ),
        'foot_about'       => array( 'フッター: ABOUT', 'footer', 'https://yuma-muranushi.jp/' ),
        'foot_partnership' => array( 'フッター: PARTNERSHIP', 'footer', '' ),
        'foot_privacy'     => array( 'フッター: PRIVACY POLICY', 'footer', '' ),
        'sns_youtube'      => array( 'SNS: YouTube', 'footer', 'https://www.youtube.com/@PEACE-PEACE-PEACE-PEACE' ),
        'sns_x'            => array( 'SNS: X', 'footer', '' ),
        'sns_instagram'    => array( 'SNS: Instagram', 'footer', 'https://www.instagram.com/muranushing' ),
        'sns_facebook'     => array( 'SNS: Facebook', 'footer', '' ),
    );
}

/* =========================================================
 *  テキスト定義  id => array( ラベル, セクション, 初期値, 種別 )
 * ========================================================= */
function iii_lp_text_defs() {
    return array(
        // 見出し
        'head_pickup_title' => array( 'PICKUP 見出し（英）', 'head', 'PICKUP PROJECTS', 'text' ),
        'head_pickup_sub'   => array( 'PICKUP 見出し（日）', 'head', '注目プロジェクト', 'text' ),
        // 中間 THEORY / PRAXIS
        'mid_theory_h'    => array( 'THEORY 見出し', 'mid', 'THEORY', 'text' ),
        'mid_theory_sub'  => array( 'THEORY サブ', 'mid', '理論体系', 'text' ),
        'mid_theory_body' => array( 'THEORY 本文', 'mid', "数学・哲学・社会理論の統合。<br>見えない構造を可視化する。", 'textarea' ),
        'mid_praxis_h'    => array( 'PRAXIS 見出し', 'mid', 'PRAXIS', 'text' ),
        'mid_praxis_sub'  => array( 'PRAXIS サブ', 'mid', '実装・調練・場', 'text' ),
        'mid_praxis_body' => array( 'PRAXIS 本文', 'mid', "学習・調練・実装の接続。<br>知を行為に変換する場。", 'textarea' ),
        // PICKUP カード
        'card_theory_title'  => array( '01 タイトル', 'card', '拡張虚数理論', 'text' ),
        'card_theory_en'     => array( '01 英字', 'card', "Extended Imaginary<br>Number Theory", 'textarea' ),
        'card_theory_body'   => array( '01 本文', 'card', "虚への数学的拡張。<br>D と iD を接続する<br>中核理論。", 'textarea' ),
        'card_peaceman_title'=> array( '02 タイトル', 'card', 'Peace-Man', 'text' ),
        'card_peaceman_en'   => array( '02 英字', 'card', 'Virtual-Dimension HERO', 'textarea' ),
        'card_peaceman_body' => array( '02 本文', 'card', "世界平和を実装する<br>リアルヒーロー<br>プロジェクト。", 'textarea' ),
        'card_maaaru_title'  => array( '03 タイトル', 'card', 'maaaru', 'text' ),
        'card_maaaru_en'     => array( '03 英字', 'card', "60 Countries<br>Educational Support", 'textarea' ),
        'card_maaaru_body'   => array( '03 本文', 'card', "教育支援を軸とした<br>実践的平和活動。<br>60か国支援を目指す。", 'textarea' ),
        'card_iiiproject_title'=> array( '04 タイトル', 'card', 'iii Project', 'text' ),
        'card_iiiproject_en' => array( '04 英字', 'card', 'Education × Peace', 'textarea' ),
        'card_iiiproject_body'=> array( '04 本文', 'card', "教育と平和を融合した<br>次世代教育プラット<br>フォーム。", 'textarea' ),
        'card_vasileus_title'=> array( '05 タイトル', 'card', 'VASILEUS', 'text' ),
        'card_vasileus_en'   => array( '05 英字', 'card', 'Training Gym', 'textarea' ),
        'card_vasileus_body' => array( '05 本文', 'card', "心身を鍛え、リーダーを<br>育成するトレーニング<br>ジム。", 'textarea' ),
        'card_homodimes_title'=> array( '06 タイトル', 'card', 'Homodimes', 'text' ),
        'card_homodimes_en'  => array( '06 英字', 'card', "Homogeneity<br>in Higher Dimensions", 'textarea' ),
        'card_homodimes_body'=> array( '06 本文', 'card', "高次元における<br>同質性の研究と<br>その社会実装。", 'textarea' ),
        // 下部バンド
        'band_ipeace_h'    => array( 'i.PEACE 見出し', 'band', 'i.PEACE', 'text' ),
        'band_ipeace_sub'  => array( 'i.PEACE サブ', 'band', '平和構想', 'text' ),
        'band_ipeace_body' => array( 'i.PEACE 本文', 'band', "世界平和のための構想・ヒーロー・<br>教育支援の統合プラットフォーム。", 'textarea' ),
        'band_projecti_h'    => array( 'PROJECT i 見出し', 'band', 'PROJECT i', 'text' ),
        'band_projecti_sub'  => array( 'PROJECT i サブ', 'band', '組織構造', 'text' ),
        'band_projecti_body' => array( 'PROJECT i 本文', 'band', "法人・団体・コミュニティなど<br>プロジェクトの仕組み。", 'textarea' ),
        'band_social_h'    => array( 'SOCIAL 見出し', 'band', 'SOCIAL', 'text' ),
        'band_social_sub'  => array( 'SOCIAL サブ', 'band', '接続先', 'text' ),
        'band_social_body' => array( 'SOCIAL 本文', 'band', "外部メディア・SNS・<br>パートナーシップなど<br>社会との接点。", 'textarea' ),
    );
}

/* =========================================================
 *  取得ヘルパー（テンプレートから使用）
 * ========================================================= */
function iii_link( $id ) {
    $defs = iii_lp_link_defs();
    $default = isset( $defs[ $id ] ) ? $defs[ $id ][2] : '';
    return get_theme_mod( 'iii_link_' . $id, $default );
}
function iii_t( $id ) {
    $defs = iii_lp_text_defs();
    $default = isset( $defs[ $id ] ) ? $defs[ $id ][2] : '';
    echo wp_kses( get_theme_mod( 'iii_text_' . $id, $default ), array( 'br' => array() ) );
}

/* =========================================================
 *  CSS / JS / フォント読み込み ＋ リンク値をJSへ受け渡し
 * ========================================================= */
function iii_lp_assets() {
    wp_enqueue_style( 'iii-lp-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Noto+Serif+JP:wght@400;500;600;700&display=swap', array(), null );
    wp_enqueue_style( 'iii-lp-style', get_stylesheet_uri(), array(), '1.4' );
    wp_enqueue_script( 'iii-lp-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.4', true );

    // カスタマイザーのリンク値を JS の LINKS として注入（script.js より前に出力）
    $links = array();
    foreach ( iii_lp_link_defs() as $id => $d ) {
        $links[ $id ] = iii_link( $id );
    }
    wp_add_inline_script( 'iii-lp-script', 'var LINKS = ' . wp_json_encode( $links ) . ';', 'before' );
}
add_action( 'wp_enqueue_scripts', 'iii_lp_assets' );

/* =========================================================
 *  カスタマイザー登録
 * ========================================================= */
function iii_lp_customize_register( $wp_customize ) {

    $wp_customize->add_panel( 'iii_lp', array(
        'title'    => 'iii LP 設定（リンク・テキスト）',
        'priority' => 5,
    ) );

    $link_sections = array(
        'header' => 'リンク：ヘッダー / 共通',
        'nav'    => 'リンク：サイドバー(01-06)・中間',
        'card'   => 'リンク：PICKUPカード',
        'band'   => 'リンク：下部バンド',
        'footer' => 'リンク：フッター / SNS',
    );
    $text_sections = array(
        'head' => 'テキスト：見出し',
        'mid'  => 'テキスト：中間 THEORY / PRAXIS',
        'card' => 'テキスト：PICKUPカード',
        'band' => 'テキスト：下部バンド',
    );

    foreach ( $link_sections as $key => $title ) {
        $wp_customize->add_section( 'iii_links_' . $key, array( 'title' => $title, 'panel' => 'iii_lp' ) );
    }
    foreach ( $text_sections as $key => $title ) {
        $wp_customize->add_section( 'iii_texts_' . $key, array( 'title' => $title, 'panel' => 'iii_lp' ) );
    }

    // リンク（URL欄）。空欄＝無効リンク
    foreach ( iii_lp_link_defs() as $id => $d ) {
        $sid = 'iii_link_' . $id;
        $wp_customize->add_setting( $sid, array(
            'default'           => $d[2],
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( $sid, array(
            'label'       => $d[0] . '（空欄＝無効）',
            'section'     => 'iii_links_' . $d[1],
            'type'        => 'url',
        ) );
    }

    // テキスト（<br>のみ許可）
    foreach ( iii_lp_text_defs() as $id => $d ) {
        $sid = 'iii_text_' . $id;
        $wp_customize->add_setting( $sid, array(
            'default'           => $d[2],
            'sanitize_callback' => 'iii_lp_sanitize_text',
        ) );
        $wp_customize->add_control( $sid, array(
            'label'   => $d[0] . '（改行は <br> と入力）',
            'section' => 'iii_texts_' . $d[1],
            'type'    => ( $d[3] === 'textarea' ) ? 'textarea' : 'text',
        ) );
    }
}
add_action( 'customize_register', 'iii_lp_customize_register' );

function iii_lp_sanitize_text( $value ) {
    return wp_kses( $value, array( 'br' => array() ) );
}
