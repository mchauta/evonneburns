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



				<?php if ($queryRev->have_posts()):
								while ($queryRev->have_posts()): $queryRev->the_post();?>

								<?php $reviewer = get_field('reviewer'); ?>
								<div class="review">
									<div class="row">
										<div class="col-sm-12 col-md-4">
											<div class="rev-img"><?php the_post_thumbnail(); ?></div>
										</div>
										<div class="col-md-8 col-sm-12">
											<?php the_content(); ?>
											<div class="rev-name"><?php echo $reviewer; ?></div>
										</div>
									</div>
								</div>

					<?php endwhile; endif; wp_reset_postdata(); ?>


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
