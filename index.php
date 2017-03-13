<?php get_header(); ?>
  <section class = "outline row">
    <div class="home twelve columns">
      <div class="home-banner"></div>
      <h1 class="center">Latest Entries</h1>
      <!--Begin loop-->
        <?php if ( have_posts() ) {
                while ( have_posts() ) { ?>
                  <div class="home-post">
                    <?php
                    the_post();
                    if ( has_post_thumbnail() ) { ?>
                        <div class = "post-img"><?php the_post_thumbnail('thumbnail'); } ?></div>
                        <div class="post-summary">
                          <h5 class="nextPrevTitle"><?php the_title(); ?></h5>
                          <div class="home post-info">
                            <?php
                            $author = get_the_author();
                            echo substr($author, 0,10)." | \n\n";
                            the_time('M jS, Y');?>
                          </div><!--end home-post-info-->
                          <p class="nextPrevEx"><?php echo wp_trim_words( get_the_content(), 25, ' ' ); ?>
                          <a href="<?php the_permalink(); ?>">Read More</a></p>
                        </div> <!--end home-summary-->
                    </div> <!--end home-post-->
                    <?php } // end while
                  } // end if ?>
      <!--End loop-->
    </div> <!--end home twelve columns-->
  </section>
<?php get_footer(); ?>
