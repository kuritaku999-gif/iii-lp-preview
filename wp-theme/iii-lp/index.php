<?php $img = get_template_directory_uri() . '/assets/images'; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="思想、理論、実装、平和構想、すべては Z = D + iD から展開する。YUMA MURANUSHI PROJECT UNIVERSE">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- ============ HEADER (fixed) ============ -->
<header class="site-header" id="siteHeader">
  <a class="brand" data-link="enter" href="<?php echo esc_url( iii_link('enter') ); ?>">
    <span class="brand-logo">iii</span>
    <span class="brand-name">YUMA MURANUSHI<small>PROJECT UNIVERSE</small></span>
  </a>

  <nav class="header-nav" aria-label="メインナビ">
    <a data-link="header_project" href="#">PROJECT</a>
    <a data-link="header_theory"  href="#">THEORY</a>
    <a data-link="header_about"   href="#">ABOUT</a>
    <a data-link="header_news"    href="#">NEWS</a>
    <a data-link="header_contact" href="#">CONTACT</a>
  </nav>

  <div class="header-lang"><a href="#" aria-current="true">JP</a><span>/</span><a href="#">EN</a></div>

  <button class="hamburger" id="hamburger" aria-label="メニューを開く" aria-expanded="false">
    <span></span><span></span><span></span>
  </button>
</header>

<!-- off-canvas drawer (mobile) -->
<div class="drawer-backdrop" id="drawerBackdrop"></div>
<aside class="drawer" id="drawer" aria-hidden="true">
  <nav aria-label="モバイルナビ">
    <p class="drawer-cap">MENU</p>
    <a data-link="header_project" href="#">PROJECT</a>
    <a data-link="header_theory"  href="#">THEORY</a>
    <a data-link="header_about"   href="#">ABOUT</a>
    <a data-link="header_news"    href="#">NEWS</a>
    <a data-link="header_contact" href="#">CONTACT</a>
    <p class="drawer-cap">UNIVERSE</p>
    <a data-link="nav_common"   href="#"><b>01</b> COMMON</a>
    <a data-link="nav_theory"   href="#"><b>02</b> THEORY</a>
    <a data-link="nav_praxis"   href="#"><b>03</b> PRAXIS</a>
    <a data-link="nav_ipeace"   href="#"><b>04</b> i.PEACE</a>
    <a data-link="nav_projecti" href="#"><b>05</b> PROJECT i</a>
    <a data-link="nav_social"   href="#"><b>06</b> SOCIAL</a>
  </nav>
</aside>

<!-- ============ サイドバー（文字のみ・全幅の上にオーバーレイ／開閉可） ============ -->
<aside class="sidebar" id="sidebar" aria-label="ユニバースナビ">
  <button class="side-toggle" id="sideToggle" aria-label="ナビ開閉" aria-expanded="true"><span></span></button>
  <ol class="side-nav">
    <li><a data-link="nav_common"   href="#"><b>01</b><span>COMMON</span><small>入口・人間・メディア</small></a></li>
    <li><a data-link="nav_theory"   href="#"><b>02</b><span>THEORY</span><small>理論体系</small></a></li>
    <li><a data-link="nav_praxis"   href="#"><b>03</b><span>PRAXIS</span><small>実装・調練・場</small></a></li>
    <li><a data-link="nav_ipeace"   href="#"><b>04</b><span>i.PEACE</span><small>平和構想</small></a></li>
    <li><a data-link="nav_projecti" href="#"><b>05</b><span>PROJECT i</span><small>組織構造</small></a></li>
    <li><a data-link="nav_social"   href="#"><b>06</b><span>SOCIAL</span><small>接続先</small></a></li>
  </ol>
</aside>

<!-- ============ MAIN（フルブリード） ============ -->
<main class="main">

    <!-- HERO -->
    <section class="hero">
      <div class="hero-media">
      <picture>
        <source media="(max-width:600px)"  srcset="<?php echo $img; ?>/mv-sp.jpg">
        <source media="(max-width:1023px)" srcset="<?php echo $img; ?>/mv-tablet.jpg">
        <img src="<?php echo $img; ?>/mv-pc.jpg" alt="Z = D + iD — YUMA MURANUSHI PROJECT UNIVERSE">
      </picture>
      <a class="enter-btn" data-link="enter" href="#">
        <img src="<?php echo $img; ?>/enter-universe.png" alt="ENTER THE UNIVERSE">
      </a>
      </div>

      <!-- ヒーロー下部の6カラム -->
      <nav class="hero-nav" aria-label="セクションナビ">
        <a data-link="nav_common"   href="#"><img src="<?php echo $img; ?>/nav-01-common.jpg" alt=""><span class="hn-label"><b>01</b>COMMON<small>入口・人間・メディア</small></span></a>
        <a data-link="nav_theory"   href="#"><img src="<?php echo $img; ?>/nav-02-theory.jpg" alt=""><span class="hn-label"><b>02</b>THEORY<small>理論体系</small></span></a>
        <a data-link="nav_praxis"   href="#"><img src="<?php echo $img; ?>/nav-03-praxis.jpg" alt=""><span class="hn-label"><b>03</b>PRAXIS<small>実装・調練・場</small></span></a>
        <a data-link="nav_ipeace"   href="#"><img src="<?php echo $img; ?>/nav-04-ipeace.jpg" alt=""><span class="hn-label"><b>04</b>i.PEACE<small>平和構想</small></span></a>
        <a data-link="nav_projecti" href="#"><img src="<?php echo $img; ?>/nav-05-projecti.jpg" alt=""><span class="hn-label"><b>05</b>PROJECT i<small>組織構造</small></span></a>
        <a data-link="nav_social"   href="#"><img src="<?php echo $img; ?>/nav-06-social.jpg" alt=""><span class="hn-label"><b>06</b>SOCIAL<small>接続先</small></span></a>
      </nav>
    </section>

    <!-- ===== 中間セクション THEORY / PRAXIS ===== -->
    <section class="mid">
      <a class="mid-band" data-link="mid_theory" href="#">
        <img src="<?php echo $img; ?>/mid-theory.jpg" alt="">
        <div class="mid-text">
          <h3><?php iii_t('mid_theory_h'); ?></h3>
          <p class="mid-sub"><?php iii_t('mid_theory_sub'); ?></p>
          <p class="mid-body"><?php iii_t('mid_theory_body'); ?></p>
          <span class="mid-view">VIEW THEORY <i>&rarr;</i></span>
        </div>
      </a>
      <a class="mid-band" data-link="mid_praxis" href="#">
        <img src="<?php echo $img; ?>/mid-praxis.jpg" alt="">
        <div class="mid-text">
          <h3><?php iii_t('mid_praxis_h'); ?></h3>
          <p class="mid-sub"><?php iii_t('mid_praxis_sub'); ?></p>
          <p class="mid-body"><?php iii_t('mid_praxis_body'); ?></p>
          <span class="mid-view">VIEW PRAXIS <i>&rarr;</i></span>
        </div>
      </a>
    </section>

    <!-- PICKUP PROJECTS -->
    <section class="pickup" id="pickup">
      <div class="sec-head">
        <h2><?php iii_t('head_pickup_title'); ?></h2><p class="sec-sub"><?php iii_t('head_pickup_sub'); ?></p>
      </div>

      <div class="card-grid">
        <a class="card" data-link="card_theory" href="#">
          <span class="card-no">01</span><span class="card-cat">THEORY / CORE</span>
          <span class="card-icon" style="background-image:url(<?php echo $img; ?>/logo-01-theory.png)"></span>
          <span class="card-title"><?php iii_t('card_theory_title'); ?></span>
          <span class="card-en"><?php iii_t('card_theory_en'); ?></span>
          <span class="card-body"><?php iii_t('card_theory_body'); ?></span>
          <span class="card-detail">DETAIL <i>&rarr;</i></span>
        </a>
        <a class="card" data-link="card_peaceman" href="#">
          <span class="card-no">02</span><span class="card-cat">I.PEACE / HERO</span>
          <span class="card-icon" style="background-image:url(<?php echo $img; ?>/logo-02-peaceman.png)"></span>
          <span class="card-title"><?php iii_t('card_peaceman_title'); ?></span>
          <span class="card-en"><?php iii_t('card_peaceman_en'); ?></span>
          <span class="card-body"><?php iii_t('card_peaceman_body'); ?></span>
          <span class="card-detail">DETAIL <i>&rarr;</i></span>
        </a>
        <a class="card" data-link="card_maaaru" href="#">
          <span class="card-no">03</span><span class="card-cat">PEACE / HUMANITARIAN</span>
          <span class="card-icon" style="background-image:url(<?php echo $img; ?>/logo-03-maaaru.png)"></span>
          <span class="card-title"><?php iii_t('card_maaaru_title'); ?></span>
          <span class="card-en"><?php iii_t('card_maaaru_en'); ?></span>
          <span class="card-body"><?php iii_t('card_maaaru_body'); ?></span>
          <span class="card-detail">DETAIL <i>&rarr;</i></span>
        </a>
        <a class="card" data-link="card_iiiproject" href="#">
          <span class="card-no">04</span><span class="card-cat">PRAXIS / EDUCATION</span>
          <span class="card-icon" style="background-image:url(<?php echo $img; ?>/logo-04-iiiproject.png)"></span>
          <span class="card-title"><?php iii_t('card_iiiproject_title'); ?></span>
          <span class="card-en"><?php iii_t('card_iiiproject_en'); ?></span>
          <span class="card-body"><?php iii_t('card_iiiproject_body'); ?></span>
          <span class="card-detail">DETAIL <i>&rarr;</i></span>
        </a>
        <a class="card" data-link="card_vasileus" href="#">
          <span class="card-no">05</span><span class="card-cat">PRAXIS / TRAINING</span>
          <span class="card-icon" style="background-image:url(<?php echo $img; ?>/logo-05-vasileus.png)"></span>
          <span class="card-title"><?php iii_t('card_vasileus_title'); ?></span>
          <span class="card-en"><?php iii_t('card_vasileus_en'); ?></span>
          <span class="card-body"><?php iii_t('card_vasileus_body'); ?></span>
          <span class="card-detail">DETAIL <i>&rarr;</i></span>
        </a>
        <a class="card" data-link="card_homodimes" href="#">
          <span class="card-no">06</span><span class="card-cat">THEORY / SOCIAL</span>
          <span class="card-icon" style="background-image:url(<?php echo $img; ?>/logo-06-homodimes.png)"></span>
          <span class="card-title"><?php iii_t('card_homodimes_title'); ?></span>
          <span class="card-en"><?php iii_t('card_homodimes_en'); ?></span>
          <span class="card-body"><?php iii_t('card_homodimes_body'); ?></span>
          <span class="card-detail">DETAIL <i>&rarr;</i></span>
        </a>
      </div>
    </section>

    <!-- ===== 下部バンド ===== -->
    <section class="bands">

      <!-- i.PEACE（黒帯） -->
      <a class="band band-dark" data-link="band_ipeace" href="#">
        <img src="<?php echo $img; ?>/band-ipeace-clean.jpg" alt="">
        <div class="band-text band-left">
          <h3><?php iii_t('band_ipeace_h'); ?></h3><p class="band-sub"><?php iii_t('band_ipeace_sub'); ?></p>
          <p class="band-body"><?php iii_t('band_ipeace_body'); ?></p>
          <span class="band-view">EXPLORE i.PEACE <i>&rarr;</i></span>
        </div>
        <ul class="band-list">
          <li>PEACE-MAN</li><li>maaaru</li><li>Educational Support</li>
          <li>Peace Architecture</li><li>Hero Project</li>
        </ul>
      </a>

      <!-- PROJECT i / ï / SOCIAL の3枚は横並び -->
      <div class="band-row">

        <!-- PROJECT i（クリーム）＝左 -->
        <a class="band band-cell band-light" data-link="band_projecti" href="#" style="flex:2.84 1 0">
          <img src="<?php echo $img; ?>/band-projecti-clean.jpg" alt="">
          <div class="band-text band-left">
            <h3><?php iii_t('band_projecti_h'); ?></h3><p class="band-sub"><?php iii_t('band_projecti_sub'); ?></p>
            <p class="band-body"><?php iii_t('band_projecti_body'); ?></p>
            <span class="band-view">VIEW PROJECT i <i>&rarr;</i></span>
          </div>
        </a>

        <!-- 大きい ï（装飾・文字なし／細い）＝真ん中 -->
        <a class="band band-cell" data-link="band_bigi" href="#" style="flex:1.785 1 0">
          <img src="<?php echo $img; ?>/band-bigi.jpg" alt="PROJECT i">
        </a>

        <!-- SOCIAL（クリーム）＝右 -->
        <a class="band band-cell band-light" data-link="band_social" href="#" style="flex:2.84 1 0">
          <img src="<?php echo $img; ?>/band-social-clean.jpg" alt="">
          <div class="band-text band-topleft">
            <h3><?php iii_t('band_social_h'); ?></h3><p class="band-sub"><?php iii_t('band_social_sub'); ?></p>
            <p class="band-body"><?php iii_t('band_social_body'); ?></p>
            <span class="band-view">VIEW SOCIAL <i>&rarr;</i></span>
          </div>
        </a>

      </div>

    </section>

  </main>

<!-- ============ FOOTER ============ -->
<footer class="site-footer">
  <a class="brand" data-link="foot_home" href="#">
    <span class="brand-logo">iii</span>
    <span class="brand-name">YUMA MURANUSHI<small>PROJECT UNIVERSE</small></span>
  </a>
  <nav class="footer-nav">
    <a data-link="foot_home"        href="#">HOME<small>ホーム</small></a>
    <a data-link="foot_project"     href="#">PROJECT<small>プロジェクト</small></a>
    <a data-link="foot_media"       href="#">MEDIA<small>メディア</small></a>
    <a data-link="foot_theory"      href="#">THEORY<small>理論</small></a>
    <a data-link="foot_news"        href="#">NEWS<small>ニュース</small></a>
    <a data-link="foot_contact"     href="#">CONTACT<small>お問い合わせ</small></a>
    <a data-link="foot_about"       href="#">ABOUT<small>私について</small></a>
    <a data-link="foot_partnership" href="#">PARTNERSHIP<small>パートナーシップ</small></a>
    <a data-link="foot_privacy"     href="#">PRIVACY POLICY<small>プライバシーポリシー</small></a>
  </nav>
  <div class="footer-sns">
    <span>FOLLOW</span>
    <a data-link="sns_youtube"   href="#" aria-label="YouTube">▶</a>
    <a data-link="sns_x"         href="#" aria-label="X">✕</a>
    <a data-link="sns_instagram" href="#" aria-label="Instagram">◎</a>
    <a data-link="sns_facebook"  href="#" aria-label="Facebook">f</a>
  </div>
  <p class="copyright">© 2025 Yuma Muranushi All Rights Reserved.</p>
  <p class="footer-tagline">FROM D TO iD.<br>FROM INDIVIDUAL TO UNIVERSE.<br>FROM KNOWLEDGE TO PEACE.</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
