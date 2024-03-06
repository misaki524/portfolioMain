
<?php get_header(); ?>


<div class="p-wrap">
  <div class="p-wrap__mainGroup">
    <div class="p-wrap__mainItem">
      <img class="p-wrap__img" src="<?php echo get_template_directory_uri(); ?>/IMG_item.jpg" alt="">
      <!-- <div class="p-wrap__group">
        <h3 class="p-wrap__title">履歴書</h3>
        <p class="p-wrap__date">
        </p>
      </div> -->
      <div class="p-wrap__textGroup">
        <div class="p-wrap__item">
          <?php
            echo date('Y年m月d日')."<br/>\n";//現在日付 2020-01-01
          ?>
        </div>
        <table class="p-wrap__text">
          <tr>
            <th class="p-wrap__mainText">名前</th>
            <td class="p-wrap__subText">菊池 美咲</td>
          </tr>
          <tr>
            <th class="p-wrap__mainText">年齢</th>
            <td class="p-wrap__subText">28歳</td>
          </tr>
          <tr>
            <th class="p-wrap__mainText">性別</th>
            <td class="p-wrap__subText">女</td>
          </tr>
          <tr>
            <th class="p-wrap__mainText">生年月日</th>
            <td class="p-wrap__itemText">平成7年5月24日</td>
          </tr>
          <tr>
            <th class="p-wrap__mainText">電話番号</th>
            <td class="p-wrap__itemText">080-2825-2255</td>
          </tr>
          <tr>
            <th class="p-wrap__mainText">住所</th>
            <td class="p-wrap__itemText">〒221-0855 神奈川県横浜市神奈川区三ツ沢西町11-10 長島ハイツ201</td>
          </tr>
          <tr>
            <th class="p-wrap__mainText">メールアドレス</th>
            <td class="p-wrap__itemText">misaki.work.0524@gmail.com</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="p-wrap__mainGroup">
    <div class="p-wrap__group">
      <h3 class="p-wrap__title">職務経歴</h3>
    </div>
    <div class="p-wrap__textGroup">
      <table class="p-wrap__text">
        <tr>
          <th class="p-wrap__mainText"></th>
          <td class="p-wrap__itemText">学歴</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText">2016年3月</th>
          <td class="p-wrap__itemText">盛岡ペットワールド専門学校　ペットショップビジネス科 卒業</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText"></th>
          <td class="p-wrap__itemText">職歴</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText">2016年4月</th>
          <td class="p-wrap__itemText">ペットサロン puti dog 入社</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText">2016年7月</th>
          <td class="p-wrap__itemText">ペットサロン puti dog 退社</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText">2016年8月</th>
          <td class="p-wrap__itemText">マルムラド盛岡フェザン店　入社</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText">2017年2月</th>
          <td class="p-wrap__itemText">マルムラド盛岡フェザン店　退社</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText">2017年3月</th>
          <td class="p-wrap__itemText">BLUE盛岡本店 入社</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText">2019年4月</th>
          <td class="p-wrap__itemText">BLUE盛岡本店 退社</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText">2019年5月</th>
          <td class="p-wrap__itemText">フクロウカフェRicky盛岡本店 入社</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText">2020年6月</th>
          <td class="p-wrap__itemText">フクロウカフェRicky盛岡本店 退社</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText">2020年7月</th>
          <td class="p-wrap__itemText">株式会社D-lightful 入社</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText">2021年1月</th>
          <td class="p-wrap__itemText">株式会社D-lightful 退社</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText">2021年2月</th>
          <td class="p-wrap__itemText">靴下屋 入社</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText">2023年2月</th>
          <td class="p-wrap__itemText">靴下屋 退社</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText">2023年3月</th>
          <td class="p-wrap__itemText">株式会社サクセスストーリー 入社</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText"></th>
          <td class="p-wrap__boxText">以上</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="p-wrap__mainGroup">
    <div class="p-wrap__group">
      <h3 class="p-wrap__title">資格・免許</h3>
    </div>
    <div class="p-wrap__textGroup">
      <table class="p-wrap__text">
        <tr>
          <th class="p-wrap__mainText"></th>
          <td class="p-wrap__itemText">資格</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText">2016年1月</th>
          <td class="p-wrap__subText">社団法人日本愛玩協会　愛玩使用管理士 1級</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText">2021年11月</th>
          <td class="p-wrap__subText">靴下ソムリエ資格</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText"></th>
          <td class="p-wrap__itemText">免許</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText">2015年1月</th>
          <td class="p-wrap__subText">普通自動車第一種免許(AT限定)</td>
        </tr>
        <tr>
          <th class="p-wrap__mainText"></th>
          <td class="p-wrap__boxText">以上</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="p-wrap__mainGroup">
    <div class="p-item">
      <div class="p-item__group">
        <h3 class="p-item__title">自己PR</h3>
      </div>
      <div class="p-item__box">
      <section>
        <?php while (have_posts()) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <p class="p-item__text"><?php the_content(); ?> </p>
        <?php endwhile; ?>
        </section>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>