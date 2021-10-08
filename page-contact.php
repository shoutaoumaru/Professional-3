<?php 
/* Template Name: contact
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>お問い合わせ | </title>
  <?php get_header(); ?>
</head>
<body class="animsition">
  <div class="contents-wrapper">
    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class=" logo__img">
          <a href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class=" logo__img">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/company')); ?>"><span>会社案内</span>
                <small>Company</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link"
                href=" <?php echo esc_url( home_url('/business')); ?>"><span>事業案内</span><small>business</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/works')); ?>"><span>実績紹介</span><small>Works</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link"
                href=" <?php echo esc_url( home_url('/recruit')); ?>"><span>採用情報</span><small>Recruit</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>"><span>お知らせ</span><small>News</small></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <!-- <div class="reserve-btn-js">
        <div class="reserve-btn-js__inner">
          <div class="reserve-btn-js__01">
            <span>お</span>
            <span>問</span>
            <span>合</span>
            <span>せ</span>
          </div>
          <div class="reserve-btn-js__02 js-left">
            <div class="tel">
              <a href="tel:092-686-7954">電話で<br>お問い合わせ</a>
            </div>
            <div class="net">
              <a href="#">フォームで<br>お問い合わせ</a>
            </div>
          </div>
        </div>
      </div> -->
      <!-- /.reserve-btn -->
    </header>
    <!-- /.header -->
    <section class="c-topview">
      <div class="c-topview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/img_2.jpg" alt="">
        </div>
        <div class="c-topview__title">
          <h2 class="c-topview__text">
            <p class="c-txt-lr">お問い合わせ</p>
            <p class="c-txt-sm">CONTACT</p>
          </h2>
      </div>
    </section>
      <!-- /.c-topview -->
      <!-- コンタクトフォーム -->
    <div class="c-contact">
      <div class="contact-form">
          <div class="c-container">
            <h1 class="c-title">
              <span>CONTACT</span>
            </h1>
            <p class="c-contact-text">以下必要事項をご記入の上、「送信する」ボタンを押して下さい。</p>
            <?php echo apply_filters('the_content', '[contact-form-7 id="5" title="コンタクトフォーム 1"]'); ?>
          </div>
          </div>
          <!-- /コンタクトフォーム -->
      </div>
    </div>
    <!-- /.c-contsact -->
  </div>
  <!-- /.superwrapper -->
  <?php get_template_part('includes/c-footer'); ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
</body>
</html>
