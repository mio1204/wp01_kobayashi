<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>estra,inc.MEDIA</title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="style.css" /> -->
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo">
      <img src="img/estramedia__logo.png" alt="ロゴ">
    </a>
    <nav class="header__nav pc">
      <ul class="header__nav-items flex">
        <li class="header__nav-list">
          <a href="category.html" class="header__nav-link">HTML</a>
        </li>
        <li class="header__nav-list">
          <a href="category.html" class="header__nav-link">CSS</a>
        </li>
        <li class="header__nav-list">
          <a href="category.html" class="header__nav-link">JavaScript</a>
        </li>
        <li class="header__nav-list">
          <a href="category.html" class="header__nav-link">PHP</a>
        </li>
        <li class="header__nav-list">
          <a href="category.html" class="header__nav-link">MySQL</a>
        </li>
      </ul>
    </nav>
  </header>