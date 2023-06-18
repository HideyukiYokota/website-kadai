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
    <?php if (have_posts()): ?>
      <?php while (have_posts()):
        the_post(); ?>
        <section class="blog">

          <section class="">
            <div class="info1">
              <div class="block-c">
                <img src="image/Info/topic1 (1).png" alt="" class="imgrnd" width="90%" />
              </div>
              <div>
                <p>
                  <?php the_title(); ?>
                </p>
                <p>
                  <a>
                    <?php echo get_the_date(); ?>
                  </a>
                  <a>
                    <?php get_the_category(); ?>
                  </a>
                </p>
              </div>
            </div>
          </section>
        </section>
    <?php endwhile; ?>
  <?php endif; ?>
  <section class="side">
    <p>カテゴリ</p>
    <p>営業日時</p>
    <p>キャンペーン</p>
    <p>その他</p>
  </section>
  </section>
</article>

<?php get_footer(); ?>