<?php 
/* Template Name: thanks
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>お問い合わせありがとうございます | </title>
  <?php get_header(); ?>
</head>
<body>
  <div class="superwrapper animsition">
    <div class="c-thanks">
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
      <div class="c-thanks-text">
        <div class="c-container">
          <h2 class="c-title">お問い合わせありがとうございます。</h2>
          <div class="c-thanks-desc">
            <div class="c-thanks-item">
              <p class="c-txt-sm">ご入力いただいた情報は無事に送信されました。<br>お客様に受付完了メールを1通送信しましたのでご確認下さい。</p>
            </div>
            <div class="c-thanks-item">
              <h3>受付完了メールが届かない場合</h3>
              <p class="c-txt-sm">ご利用のメールサービスの設定によっては迷惑フォルダへ送られている場合もございますので、迷惑メールフォルダも合わせてご確認下さい。</p>
              <p class="c-txt-sm">もし、24時間経っても受付完了メールが届かない場合は、お手数ですが再度お問い合わせフォームかお電話にてお問い合わせ下さい</p>
            </div>
          </div>
          <div class="c-thanks-btn">
            <a class="animsition-link" href="/">トップページに戻る</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.c-contact -->
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