<?php
/* Template Name: Search Page */
get_header(); ?>

<div class="outline row">
	<div class="home twelve columns">
			<h1 class="related">
				<?php printf( __('Search Results for: %s'), '<span style="color:#40b4bc;">' . get_search_query() . '</span>' );?>
			</h1>

			<?php if (have_posts()) {
				      while (have_posts()) :?>
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
				      <?php endwhile;
		       } else { ?>
        			<h1 class="related">Nothing Found</h1>
        			<p class="related">Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
		<?php } ?>
	</div>
</div>

<?php get_footer(); ?>
