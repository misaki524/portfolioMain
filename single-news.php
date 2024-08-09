<?php get_header(); ?>

<div class="p-animal__page">
  <h2 class="p-animal__title">リチャード・ソンジリス </h2>
  <ul class="p-animal__textGroup">
    <li class="p-animal__textBox">
      <?php if(have_posts()) : ?>
      <h3 class="p-animal__item"><?php the_title(); ?></h3><!-- タイトルを表示 -->
      <?php while(have_posts()) : the_post(); ?>
        <p class="p-animal__text"><?php the_content(); ?></p><!-- 本文を表示 -->
        <li class="trimming01 fadeIn">
          <?php the_post_thumbnail('thumbnail'); ?>
        </li>
      <?php endwhile; ?>
      <?php endif; ?>
    </li>
  </ul>
</div>

<?php get_footer(); ?>
