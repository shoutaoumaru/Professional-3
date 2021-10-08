<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お知らせ詳細 | 士業テンプレート1</title>
    <?php get_header(); ?>
  </head>

  <body>
    <div id="main-wrapper" class="news-wrapper animsition">
      <!-- header -->
      <?php get_template_part('includes/c-header'); ?>      
      <!-- /.header -->
      <section class="c-topview">
        <div class="c-topview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/news.jpg" alt="" />
        </div>
        <div class="c-topview__title">
          <h2 class="c-topview__text">
            <p class="c-txt-lr">お知らせ</p>
            <p class="c-txt-sm">NEWS</p>
          </h2>
        </div>
      </section>
      <!-- /.c-topview -->
      <section class="c-news-sl">
        <div class="c-container">
          <ul class="c-news-sl__list">
            <li class="c-news-sl__block">
              <div class="c-news-sl__tit">
                <p class="c-txt-md"><?php the_title(); ?></p>
                <span class="c-news-sl__date c-txt-sm"><?php echo get_the_date(); ?></span>
              </div>
              <div class="c-news-sl__contents">
                <p class="c-txt-sm"><?php the_content(); ?></p>
              </div>
            </li>
          </ul>
          <div class="c-news-sl__link">
            <a class="more-link animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>"
              ><span class="readmore c-txt-sm">一覧へ戻る</span>
            </a>
          </div>
        </div>
      </section>
      <!-- /.news-top -->  
      <!-- /.footer -->
      <?php get_footer(); ?>
      <!-- /.mobile-menu -->
    </div>
    <!-- .superwrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  </body>
</html>
