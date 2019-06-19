<?php
/**
* Template Name: Reviews
 */
 $args = array (
 	'post_type' => 'reviews',
 	'posts_per_page' => -1,
 	'orderby'=>'menu_order',
 	'order' => 'ASC',

 );
 $queryRev = new WP_Query($args);

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="post-wrap" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php if ($queryServ->have_posts()):
								while ($queryServ->have_posts()): $queryServ->the_post();?>

								<?php $reviewer = get_field('reviewer'); ?>
								<div class="review">
									<div class="row">
										<div class="col-sm-12 col-md-4">
											<div class="rev-img"><?php the_post_thumbnail(); ?></div>
										</div>
										<div class="col-md-2 col-sm-8">
											<?php the_content(); ?>
											<div class="rev-name"><?php echo $reviewer; ?></div>
										</div>
									</div>
								</div>

					<?php endwhile; endif; wp_reset_postdata(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
