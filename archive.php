<?php
/* Template Name: Archive Page */

get_header(); ?>

<div class="row">
	<div class="twelve columns">
		<?php if ( have_posts() ) : ?>
			<h2>Archives</h2>
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
<div class="row">
	<div class="twelve columns">
		<h2>Archives by Month:</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		<h2>Archives by Category:</h2>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>
	</div>
</div>
<?php get_footer(); ?>
