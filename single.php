<?php get_header(); ?>
	<div class="outline row">
		<div class="twelve columns">
<!-- Begin single PHP -->
			<?php if (have_posts()) :
				/* Data Context is defined here	*/
				while (have_posts()) : the_post();
          if ( has_post_thumbnail() ) { ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail('large'); ?>
            </div>
        <?php } ?>
          <div class="page-padding">
            <h1><?php the_title(); ?></h1>
            <div id="post-info">
              <?php
              $author = get_the_author();;
              echo substr($author, 0,10);
              echo "\n\n";
              the_time('M jS, Y');
              echo "\n\n";
              the_category(' ');?>
              </div>
              <?php the_content();?>
              <div class="post-tags"><?php the_tags("","","");?></div>


              <div class="post-nav">

              <?php
              $prevPost = get_previous_post(true);
              $nextPost = get_next_post(true);

              if($nextPost) {
                $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'nextPrevPost-thumb', array('class' => 'nextPrevLinks'));
                $next_ex_con = ( $nextPost->post_excerpt ) ? $nextPost->post_excerpt : strip_shortcodes( $nextPost->post_content );
                $next_text = wp_trim_words( apply_filters( 'the_excerpt', $next_ex_con ), 18 );
                next_post_link('%link',"
                <div class='stretch'>$nextthumbnail</div>
                <div class='nextPrevContent'>
                  <h5 class='nextPrevTitle'>%title</h5>
                  <p class='nextPrevEx'>$next_text</p>
                </div>
                <div id='nextArrow' class='nextPrevArrow'>
                  <p><i class='fa fa-chevron-right' aria-hidden='true'></i></p>
                </div>
                ", TRUE);
              }

              if($prevPost) {
                $prevthumbnail = get_the_post_thumbnail($prevPost->ID, 'nextPrevPost-thumb', array('class' => 'nextPrevLinks'));
                $prev_ex_con = ( $prevPost->post_excerpt ) ? $prevPost->post_excerpt : strip_shortcodes( $prevPost->post_content );
                $prev_text = wp_trim_words( apply_filters( 'the_excerpt', $prev_ex_con ), 18 );
                previous_post_link('%link',"
                <div id='prevArrow' class='nextPrevArrow'>
                    <p><i class='fa fa-chevron-left' aria-hidden='true'></i></p>
                  </div>
                <div class='nextPrevContent'>
                  <h5 class='nextPrevTitle'>%title</h5>
                  <p class='nextPrevEx'>$prev_text</p>
                </div>
                <div class='stretch'>$prevthumbnail</div>
                  ", TRUE);
              } ?>

              </div><!--#cooler-nav div -->



  				   <?php endwhile;
  			     endif; ?>
          <!-- End single PHP -->
          </div>
		</div>
	</div>
<?php get_footer(); ?>
