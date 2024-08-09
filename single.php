<?php get_header(); ?>
<div class="p-page__homeWrap">
  <div class="swiper">
    <div class="swiper-wrapper">

    <?php
    $args = array(
      'posts_per_page' => 10,
      'order' => 'ASC'
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post();
    ?>
      <div class="swiper-slide">
        <ul>
          <li class="test-item">
            <dl>
              <dd class="test-title p-page__mainTitle">
                  <?php the_title(); ?>
                </a>
              </dd>
              <dd class="test-content p-page__text">
                <?php the_content(); // 投稿の内容を表示 ?>
              </dd>
            </dl>
          </li>
        </ul>
      </div>
    <?php
      endwhile;
    else :
    ?>
      <p>No posts found.</p>
    <?php endif; ?>
    <?php wp_reset_postdata(); // クエリをリセット ?>
    </div>
    <!-- ナビゲーションボタン -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
<<<<<<< HEAD
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
  <div class="p-page__siteGroup">
    <h1 class="p-page__mainTitle">site</h1>
    <p class ="p-page__text">今までのドキュメント</p>
  <div class="swiper">
    <div class="swiper-wrapper">
      <?php
        $args = array(
          'posts_per_page' => 10
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          $counter = 0;
          while ($the_query->have_posts()) : $the_query->the_post();
          if ($counter % 2 == 0): // 新しいスライドの開始
      ?>
      <div class="swiper-slide">
        <ul>
          <?php endif; ?>
            <li class="test-item">
              <dl>
                <dt class="test-date"><?php the_time('Y-m-d'); ?></dt>
                <dd class="test-title">
                  <a class="test-link" href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </dd>
              </dl>
            </li>
          <?php
            if ($counter % 2 == 1): // スライドの終了
          ?>
        </ul>
      </div>
      <?php endif;
        $counter++;
        endwhile;
        if ($counter % 2 != 0): // 最後のスライドが閉じられていない場合
      ?>
    </div>
    <?php
      endif;
      else :
    ?>
    <p>No posts found.</p>
    <?php endif; ?>
    <?php wp_reset_postdata(); // クエリをリセット ?>
    </div>
    <!-- ナビゲーションボタン -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
=======
  </div>

  </div>
  <div class="p-pageTableBox">
    <table class="p-page__table" border="1">
      <h1 class="p-page__mainTitle">お問い合わせ先</h1>
      <tr>
        <td>電話番号</td><td class="p-page__tableText">03-1234-5678</td>
      </tr>
      <tr>
        <td>メール</td><td class="p-page__tableText">info@eclatchic.jp</td>
      </tr>
      <tr>
        <td>住所</td><td class="p-page__tableText">〒150-0041 東京都渋谷区神南1-19-8</td>
      </tr>
    </table>
>>>>>>> f974097 (ECページ)
  </div>
</div>
<?php get_footer(); ?>
