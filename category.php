<?php
/* Template Name: Archive Page */

get_header(); ?>
<div class = "outline light-background row">
  <div class="twelve columns">
    <h1 class="center"><?php if ( have_posts() ) :
      single_cat_title("", true);
      ?>
    </h1>
  </div>
</div>

<div class="outline page-padding row">
	<div class="twelve columns">
			<?php
			// The Loop
			while ( have_posts() ) : the_post();?>
			<!-- data context -->
      <div class="cat summary outline">
          <a href="<?php the_permalink() ?>">
    				<?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail('nextPrevPost-thumb');
            }?>
            <h6 class="nextPrevTitle"><?php the_title(); ?></h6>
            <p class="nextPrevEx"><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
         </a>
      </div>
			<?php endwhile; ?> <!-- End Loop -->
    <?php else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
