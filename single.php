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
          <div class="post-padding">
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


              <div id="cooler-nav" class="navigation">

              <?php
              $prevPost = get_previous_post(true);
              $nextPost = get_next_post(true);

              if($prevPost) {?>
              <div class="nav-box previous">
              <?php
                $prevthumbnail = get_the_post_thumbnail($prevPost->ID, 'thumbnail', array(100,100));
                $prevExcert = get_the_excerpt( $prevPost->ID );
                previous_post_link('%link',"$prevthumbnail  <p>%title</p>", TRUE);
              ?>
              </div>
              <?php }

              if($nextPost) { ?>
              <div class="nav-box next">
              <?php
                $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'thumbnail', array(100,100));
                next_post_link('%link',"$nextthumbnail  <p>%title</p>", TRUE);
              ?>
              </div>
              <?php } ?>

              </div><!--#cooler-nav div -->



  				   <?php endwhile;
  			     endif; ?>
          <!-- End single PHP -->
          </div>
		</div>
	</div>
<?php get_footer(); ?>
