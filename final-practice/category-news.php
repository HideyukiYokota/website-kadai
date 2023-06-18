<?php get_header("2"); ?>
<article>
  <div class="top-Carou">
    <img src="image/Info/main.png" alt="" width="100%" />
  </div>
  <div class="sp-Carou">
    <img src="image/Info/mainSP.png" alt="" width="100%" />
  </div>
  <div class="pankuz">
    <p>
      <a href="">ホーム</a>
      > <a href="">お知らせ</a>
    </p>
  </div>
  <section class="main">




    <section class="blog">
      <section class="">

        <?php if (have_posts()): ?>
          <?php while (have_posts()):
            the_post(); ?>
            <div class="info1">

              <div class="block-c">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="imgrnd" width="90%" />
              </div>
              <div>
                <p >
                  <a class="no-deco" href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </p>
                <p>
                  <a>
                    <?php echo get_the_date(); ?>
                  </a>
                  <a>
                    <?php
                    // カテゴリーのデータを取得
                    $cat = get_the_category();
                    $cat = $cat[0];
                    ?>

                    <?php echo $cat->cat_name; ?>
                  </a>
                </p>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>


      </section>
    </section>




    <section class=" side">
      <p>カテゴリ</p>
      <p>営業日時</p>
      <p>キャンペーン</p>
      <p>その他</p>
    </section>
  </section>
</article>

<?php get_footer(); ?>