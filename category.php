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
				<h2>
					<a href="<?php the_permalink() ?>">
						<?php the_title(); ?>
					</a>
				</h2>
				<?php the_excerpt(); ?>
			<?php endwhile; ?> <!-- End Loop -->
    <?php else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
