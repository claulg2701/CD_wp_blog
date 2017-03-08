<?php get_header(); ?>
  <section class="row">
    <div class="twelve columns">
      <!--Begin loop-->
        <?php if ( have_posts() ) {
                while ( have_posts() ) {
                the_post();?>
                <h3>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
			          <?php if ( has_post_thumbnail() ) {
	                    the_post_thumbnail('thumbnail');
                }
               the_excerpt(); ?>
               <p><a href="<?php the_permalink(); ?>">Read More</a></p>
        <?php } // end while
          } // end if
        ?>
      <!--End loop-->
    </div>
  </section>
<?php get_footer(); ?>
