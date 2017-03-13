<?php get_header(); ?>
  <section class = "outline row">
    <div class="home twelve columns">
      <div class="home-banner"></div>
      <h1 class="center">Latest Entries</h1>
      <!--Begin loop-->
      <?php query_posts( array(
                         'post_type' => 'post',
                         'posts_per_page' => -1 )
                       );
        ?>
        <?php if ( have_posts() ) {
                while ( have_posts() ) { ?>
                  <div class="home-post">
                    <?php
                    the_post();
                    if ( has_post_thumbnail() ) { ?>
                        <a href="<?php the_permalink();?>" class = "post-img"><?php the_post_thumbnail('thumbnail'); } ?></a>
                        <div class="post-summary">
                          <a href="<?php the_permalink(); ?>">
                            <h5 class="nextPrevTitle"><?php the_title(); ?></h5>
                          </a>
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
  <div class="row">
    <div class="twelve columns">
      <?php
      $aboutMe = get_page_by_title('Hello WordPress!', OBJECT, 'post');
      echo apply_filters( 'the_title', $aboutMe->post_title );
      echo apply_filters( 'the_content', $aboutMe->post_content );
      ?>
    </div>
  </div>

<?php get_footer(); ?>
