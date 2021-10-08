<?php
 /* Template Name: company
 */
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>事務所紹介 | 士業テンプレート1</title>
    <?php get_header(); ?>
  </head>

  <body>
    <div class="superwrapper animsition">
      <!-- header -->
      <?php get_template_part('includes/c-header'); ?>      
      <!-- /.header -->
      <main id="main-contents" class="c-company">
        <section class="c-topview">
          <div class="c-topview__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/company.jpg" alt="" />
          </div>
          <div class="c-topview__title">
            <h2 class="c-topview__text">
              <p class="c-txt-lr">会社概要</p>
              <p class="c-txt-sm">COMPANY</p>
            </h2>
          </div>
        </section>
        <!-- /.c-topview -->
        <section class="c-policy">
          <div class="c-container">
            <h2 class="c-policy__title">
              <p class="c-txt-lg">経営理念</p>
              <p class="c-txt-xs">Idea</p>
            </h2>
            <div class="c-policy__desc">
              <p class="c-txt-sm">
                私たちはお客さまの未来や夢、あるいは問題にしっかりと向き合い、それらの実現や解決に導くベストパートナーであり続けます。
                総合的な士業サービスをワンストップでご提供できる人材とネットワーク、幅広い専門知識とノウハウで、お客さまの頼れる身近な法務相談役として問題を解決します。
              </p>
            </div>
            <div class="c-policy__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/service.jpg" alt="" />
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/president.jpg" alt="" />
            </div>
          </div>
        </section>
        <!-- /.c-policy -->
        <section class="c-message">
          <div class="c-container">
            <h2 class="c-message__title">
              <p class="c-txt-lg">代表挨拶</p>
              <p class="c-txt-xs">Message</p>
            </h2>
            <div class="c-message__desc">
              <p class="c-txt-sm">
                Riv司法書士事務所は、登記業務を中心に業務を行なっております。一言で登記と言っても不動産登記、商業登記、債権譲渡登記等多岐にわたり、専門性の高い知識とノウハウが必要になります。
              </p>
              <p class="c-txt-sm">
                当事務所では開業以来、急激な時代の変化、複雑化する経済情勢に敏速に対応すべく複数司法書士執務制度を導入し、また、土地家屋調査士・税理士・弁護士等の各種専門分野の士業と連携しあってクライアントの皆様に恒久的に安定した法的サービスを受けていただける様、業務を遂行してまいりました。。
              </p>
              <p class="c-txt-sm">
                開業20周年を迎えた今、当事務所は現状に甘んじることなく日々進化を追い求めております。登記業務を1本の柱として、常に社会のニーズに適合した柔軟且つ盤石な事務所を目指して今後50年、100年と続く事務所でありたいと思っております。
              </p>
            </div>
            <div class="c-message__name">
              <p class="c-txt-md">代表取締役社長</p>
              <p class="c-txt-md">利部 翔太</p>
            </div>
          </div>
        </section>
        <!-- /.c-message -->
        <section class="c-about">
          <div class="c-container">
            <h2 class="c-about__title">
              <p class="c-txt-lg">事務所の概要</p>
              <p class="c-txt-xs">About</p>
            </h2>
            <div class="c-about__desc">
              <table>
                <tbody>
                  <tr>
                    <th>
                      <span class="c-txt-sm">名称</span>
                    </th>
                    <td>
                      <span class="c-txt-sm">株式会社Riv司法書士事務所</span>
                    </td>
                  </tr>
                  <tr>
                    <th>
                      <span class="c-txt-sm">設立</span>
                    </th>
                    <td>
                      <span class="c-txt-sm">2001年5月</span>
                    </td>
                  </tr>
                  <tr>
                    <th>
                      <span class="c-txt-sm">所在地</span>
                    </th>
                    <td>
                      <span class="c-txt-sm"
                        >〒812-0011<br />福岡県福岡市博多区3-27-25-9F<br /><a
                          href="tel:092-686-7954"
                          >TEL:092-686-7954</a
                        ></span
                      >
                    </td>
                  </tr>

                  <tr>
                    <th>
                      <span class="c-txt-sm">代表者</span>
                    </th>
                    <td>
                      <span class="c-txt-sm">利部 翔太</span>
                    </td>
                  </tr>
                  <tr>
                    <th>
                      <span class="c-txt-sm">取り扱い業務</span>
                    </th>
                    <td>
                      <span class="c-txt-sm">不動産登記<br></span>
                      <span class="c-txt-sm">商業登記<br/></span>
                      <span class="c-txt-sm">委託業務<br/></span>
                      <span class="c-txt-sm">遺産相続<br></span>
                      <span class="c-txt-sm">裁判事務業務</span>
                    </td>
                  </tr>
                  <tr>
                    <th>
                      <span class="c-txt-sm">主な取引先</span>
                    </th>
                    <td>
                      <span class="c-txt-sm"
                        >福岡県・佐賀県・山口県・その他</span
                      >
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </section>
        <!-- /.c-about -->

        <!-- /.c-history -->
        <section class="p-contact">
          <div class="p-contact__wrap">
            <h2 class="p-contact__title">
              <p class="c-txt-lr">お問い合わせ</p>
              <p class="c-txt-xs">Contact</p>
            </h2>
            <div class="p-contact__desc">
              以下のフォームまたはお電話等で、まずは気軽にお問い合わせ下さい。
            </div>
            <div class="p-contact__tel">
              <a href="tel:050-3786-1317">Tel:050-3786-1317</a>
            </div>
            <div class="p-contact__form">
              <a class="link-btn" href=" <?php echo esc_url( home_url('/company')); ?>">
                <span class="c-txt-md">お問い合わせフォーム</span></a
              >
            </div>
          </div>
        </section>
        <!-- /.p-contact -->
      </main>
      <!-- /#main-contents -->
      <!-- /.footer -->
      <?php get_footer(); ?>      
      <!-- /.mobile-menu -->
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
    <!-- <script src="/scripts/main.js"></script> -->
  </body>
</html>
