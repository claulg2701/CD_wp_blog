<?php get_header(); ?>
	<section class="row">
		<div class="twelve columns">
      <!-- Begin page PHP-->
			<?php if (have_posts()) :
				/* data context	*/
				while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content();
				endwhile;
			endif; ?>
      <!-- End page PHP -->
		</div>
	</section>

<?php get_footer(); ?>
