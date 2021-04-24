<!-- <!DOCTYPE html>
<html lang="ja"> -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>estra,inc.MEDIA</title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
</head>

<!-- <body> -->
<!-- ヘッダー -->
<?php get_header(); ?>
<!-- <header class="header">
    <a href="index.html" class="header-logo">
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
  </header> -->

<!-- ファーストビュー -->
<div class="firstview">
  <h1 class="firstview__ttl">Commit to the growth<br>for everyone</h1>
</div>

<!-- 新着記事 -->
<main>
  <div class="container">
    <p class="new-article__sub-ttl">New Post</p>
    <h2 class="new-article__ttl">新着記事</h2>
    <div class="article__item flex">
      <div class="article__item-list-container">
        <div class="article__item-list flex">

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="article__card">
                <!-- <div class="article__card-img"> -->
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>">
        </div>
      <?php endif; ?>
      <?php if (!is_category() && has_category()) : ?>
        <span class="article__cat">
          <?php $postcat = get_the_category();
                echo $postcat[0]->name;
          ?>
        </span>
      <?php endif; ?>
      <div class="article__card-txt">
        <h2 class="article__card-ttl"><?php
                                      if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                                        $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                                        echo $title . '…';
                                      } else {
                                        echo $post->post_title;
                                      }
                                      ?></h2>
        <p class="article__card-date"><?php echo get_the_date('Y-m-d'); ?></p>
      </div>
      </a>
    <?php endwhile; ?>
  <?php else : ?>
    <p>投稿が見つかりません。</p>
  <?php endif; ?>

  <!-- <a href="single.html" class="article__card">
              <div class="article__card-img">
                <img src="img/blog__first.jpg" alt="">
              </div>
              <span class="article__cat">キャリア</span>
              <div class="article__card-txt">
                <h2 class="article__card-ttl">プログラミングでフリーランスになるには??</h2>
                <p class="article__card-date">2021-02-26</p>
              </div>
            </a> -->
  <!-- <a href="single.html" class="article__card">
              <div class="article__card-img">
                <img src="img/blog__first.jpg" alt="">
              </div>
              <span class="article__cat">キャリア</span>
              <div class="article__card-txt">
                <h2 class="article__card-ttl">プログラミングでフリーランスになるには??</h2>
                <p class="article__card-date">2021-02-26</p>
              </div>
            </a>
            <a href="single.html" class="article__card">
              <div class="article__card-img">
                <img src="img/blog__first.jpg" alt="">
              </div>
              <span class="article__cat">キャリア</span>
              <div class="article__card-txt">
                <h2 class="article__card-ttl">プログラミングでフリーランスになるには??</h2>
                <p class="article__card-date">2021-02-26</p>
              </div>
            </a>
            <a href="single.html" class="article__card">
              <div class="article__card-img">
                <img src="img/blog__first.jpg" alt="">
              </div>
              <span class="article__cat">キャリア</span>
              <div class="article__card-txt">
                <h2 class="article__card-ttl">プログラミングでフリーランスになるには??</h2>
                <p class="article__card-date">2021-02-26</p>
              </div>
            </a>
            <a href="single.html" class="article__card">
              <div class="article__card-img">
                <img src="img/blog__first.jpg" alt="">
              </div>
              <span class="article__cat">キャリア</span>
              <div class="article__card-txt">
                <h2 class="article__card-ttl">プログラミングでフリーランスになるには??</h2>
                <p class="article__card-date">2021-02-26</p>
              </div>
            </a>
            <a href="single.html" class="article__card">
              <div class="article__card-img">
                <img src="img/blog__first.jpg" alt="">
              </div>
              <span class="article__cat">キャリア</span>
              <div class="article__card-txt">
                <h2 class="article__card-ttl">プログラミングでフリーランスになるには??</h2>
                <p class="article__card-date">2021-02-26</p>
              </div>
            </a> -->
      </div>
    </div>
    <!-- サイドバー  -->
    <?php get_sidebar(); ?>
    <!-- <aside class="sidebar">
          <div class="side-banner">
            <a href=""><img src="img/banner.png" alt=""></a>
          </div>
          <div class="side-profile">
            <div class="profile__img">
              <img src="img/estramedia__logo.png" alt="">
            </div>
            <h2 class="profile__ttl">エストラ編集部</h2>
            <p class="profile__txt">プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。
            </p>
          </div>
          <div class="category">
            <h2 class="category__ttl">Category</h2>
            <ul>
              <li class="category__list">
                <a href="category.html" class="category__link">HTML</a>
              </li>
              <li class="category__list">
                <a href="category.html" class="category__link">CSS</a>
              </li>
              <li class="category__list">
                <a href="category.html" class="category__link">JavaScript</a>
              </li>
              <li class="category__list">
                <a href="category.html" class="category__link">PHP</a>
              </li>
              <li class="category__list">
                <a href="category.html" class="category__link">MySQL</a>
              </li>
            </ul>
          </div>
        </aside> -->
  </div>
  </div>
</main>

<!-- フッター -->
<?php get_footer(); ?>
<!-- <footer class="footer">
    <p>Copyright &copy; 2021 coachtechサンプルテスト All Rights Reserved.</p>
  </footer> -->
<!-- </body>

</html> -->