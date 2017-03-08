<?php get_header(); ?>
	<div class="row">
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
					<h1><?php the_title(); ?></h1>
					<?php the_content();?>
          <div class="post-tags"><?php the_tags("","","");?></div>
				<?php endwhile;
			endif; ?>
<!-- End single PHP -->
		</div>
	</div>
<?php get_footer(); ?>
