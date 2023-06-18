<?php get_header("2"); ?>
    <article>
      <div class="top-Carou">
        <img src="image/Voice/mainVoice.png" alt="" width="100%" />
      </div>
      <div class="sp-Carou">
        <img src="image/Voice/mainVoiceSP.png" alt="" width="100%" />
      </div>
      <div class="pankuz">
        <p>
          <a href="">ホーム</a>
          > <a href="">お客様の声</a>
        </p>
      </div>
      <section class="main">
      <section class="blog2">
      <?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post() ?>
        <section class="">
          <div class="voice">
            <div class="block-c">
              <?php the_post_thumbnail();?>
            </div>
            <div>
              <p><?php the_title(); ?></p>
                <p>
                <?php echo get_the_content(); ?>
                </p>
            </div>
          </div>
        </section>
        <?php endwhile; ?>
             <?php endif; ?>
       
        
      </section>
     
    
    </article>

    <?php get_footer(); ?>