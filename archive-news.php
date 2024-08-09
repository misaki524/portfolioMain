<?php get_header(); ?>

<div class="p-animal__page">
<<<<<<< HEAD
  <h2 class="p-animal__list">制作実績一覧</h2>
=======
  <h2 class="p-animal__list">好きなことについて語りたい</h2>
>>>>>>> f974097 (ECページ)
  <div class="swiper">
    <div class="swiper-wrapper">
      <div id="primary" class="content-area">
        <main id="main" class="site-main">
          <?php if ( have_posts() ) : ?>
            <div class="p-animal__postList">
                <?php while ( have_posts() ) : the_post(); ?>
                  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header p-animal_textTitle">
                      <h2 class="entry-title"><a href="<?php the_permalink(); ?>" class="p-animal__titleLink"><?php the_title(); ?></a></h2>
                    </header>
                    <div class="entry-content p-animal_textBox">
                      <?php the_excerpt(); ?>
                    </div>
                    <footer class="entry-footer ">
                      <a href="<?php the_permalink(); ?>" class="p-animal__link">続きを読む</a>
                    </footer>
                  </article>
                <?php endwhile; ?>
            </div>
            <?php the_posts_navigation(); ?>
          <?php else : ?>
            <p>制作実績が見つかりません。</p>
          <?php endif; ?>
        </main>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
