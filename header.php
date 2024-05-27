<!DOCTYPE html>

<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheet/app.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheet/foundation/slick/slick-theme.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheet/foundation/slick/slick.css">
  <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
  <title>個人用ポートフォリオ</title>
  <?php wp_head(); ?>
</head>
<body>
<div class="p-animal">
  <div class="p-home">
    <h1 class="p-home__title"><a class="p-home__titleLink" href="<?php echo esc_url( home_url( '/' )); ?>">kikuchi portfolio</a></h1>
    <div class="p-home__group">
      <button class="header__hamburger hamburger" id="js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="p-home__nav " id="js-nav">
        <ul class="p-home__items">
          <h2 class="p-home__box">HOME</h2>
          <li class="p-home__subItem"><a class="p-home__subText" href="<?php echo esc_url( home_url( '/' )); ?>single#linkanProfile">about me</a></li>
          <li class="p-home__subItem"><a class="p-home__subText" href="<?php echo esc_url( site_url( '/' ) ); ?>animal#linkAnimal">like family</a></li>
        </ul>
      </nav>
      <div class="circle-bg"></div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</script>
</body>
</html>
