
<?php get_header(); ?>
<div class="p-page__homeWrap" >
  <div class="swiper">
    <div class="swiper-wrapper">
      <ul class="swiper-slide">
        <li>
          <img  class="p-page__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/IMG_0007.jpg" alt="">
          <h1 class="p-page__mainTitle">me</h1>
          <p class ="p-page__text">1995年5月24日生まれ<br>趣味：絵を描く。ゲームをする。読書をする。大体インドア。</p>
        </li>
      </ul>
      <ul class="swiper-slide">
        <li>
          <img class="p-page__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/IMG_0008.jpg" alt="">
        </li>
        <li>
          <h1 class="p-page__mainTitle">like</h1>
          <p class ="p-page__text">動物：ポメラニアン・リチャードソンジリス</p>
          <p class ="p-page__text">場所：家の布団の中・自然の中・静かな場所・マッスルスナック</p>
        </li>
      </ul>
    </div>
    <!-- 必要に応じてナビボタン -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <!-- 必要に応じてページネーション -->
    <!-- <div class="swiper-button swiper-pagination"></div> -->
  </div>
  <div class="p-page__mainGroup">
    <h1 class="p-page__mainTitle">irasuto link</h1>
    <p class ="p-page__text">canvaで絵をまとめてます</p>
    <div class="p-page__subGroup">
      <a class="p-page__link" href="https://k-kikuchi.my.canva.site/photo-insta">
        <img class="p-page__subImg" src="<?php echo get_template_directory_uri(); ?>/assets/images/canva.jpg" alt="">
      </a>
    </div>
  </div>
  <div class="swiper-wrapper">
    <div class="p-page__mainGroup">
      <h1 class="p-page__mainTitle">site</h1>
      <p class ="p-page__text">今までのドキュメント</p>
      <div class="test swiper-slide">
        <?php
        $args = array(
            'posts_per_page' => 2
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <!-- ここからループさせる内容 -->
                <dl class="test-item">
                    <dt class="test-date"><?php the_time('Y-m-d'); ?></dt>
                              <img  class="p-page__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/IMG_0007.jpg" alt="">

                    <dd class="test-title">
                        <a class="test-link" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </dd>
                </dl>
                <!-- ループさせる内容ここまで -->
          <?php endwhile; ?>
          <?php else : ?>
          <p>No posts found.</p>
          <?php endif; ?>
          <?php wp_reset_postdata(); // クエリをリセット ?>
      </div>
  </div>
  <!-- 必要に応じてナビボタン -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
  <!-- 必要に応じてページネーション -->
  <div class="swiper-button swiper-pagination"></div>
  </div>

</div>
<?php get_footer(); ?>
