<?php
/*
Template Name:ニュース投稿ページ
Template Post Type: post
*/
?>

<!-- ====== 後略 ====== -->

<?php get_header("2"); ?>
<article>
  <div class="top-Carou">
    <img src="<?php echo get_template_directory_uri();?>/image/Info/main.png" alt="" width="100%" />
  </div>
  <div class="sp-Carou">
    <img src="<?php echo get_template_directory_uri();?>/image/Info/mainSP.png" alt="" width="100%" />
  </div>
  <div class="pankuz">
    <p>
      <a href="">ホーム</a>
      > <a href="">お知らせ詳細</a>
    </p>
  </div>
  <section class="main">
    <section class="blog">
      <section class="">
        <?php if (have_posts()): ?>
          <?php while (have_posts()):
            the_post(); ?>
            <div class="infoDetail">
              <div>
                <div>
                  <p><?php the_title(); ?></p>
                  <p>
                    <a><?php echo get_the_date(); ?></a>
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
                <div>
                  <img src="<?php the_post_thumbnail_url();?>" alt="" class="imgrnd" width="90%" />
                </div>
                <div>
                <?php the_content(); ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </section>
    </section>
    <section class="detailside">
      <p>カテゴリ</p>
      <p>営業日時</p>
      <p>キャンペーン</p>
      <p>その他</p>
    </section>
  </section>




</article>

<?php get_footer(); ?>