<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お知らせ一覧 | 士業テンプレート3</title>
    <?php get_header(); ?>
  </head>

  <body>
    <div id="main-wrapper" class="news-sl-wrapper animsition">
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
      <section class="c-news">
        <div class="c-container">
          <h2 class="c-news__title clip-text left">
            <p class="contents-title">新着情報</p>
          </h2>
          <ul class="c-news__list">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>  
              <li class="c-news__item">
                <a  href="<?php the_permalink() ;?>"
                class="c-news__link animsition-link">
                  <span class="c-news__date c-txt-sm"><?php echo get_the_date(); ?></span>
                  <p class="c-news__tit c-txt-sm"><?php the_title(); ?>
                  </p>
                </a>
              </li>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <!-- pagenesion -->
          <?php if( function_exists ("the_pagination") ) the_pagination(); ?>
        </div>
      </section>
      <!-- /.c-news -->  
      <!-- /.footer -->
      <?php get_footer(); ?>
      <!-- /.mobile-menu -->
    </div>
    <!-- /.main-wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  </body>
</html>
