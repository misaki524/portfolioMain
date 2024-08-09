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
  </div>
</div>
<?php get_footer(); ?>
