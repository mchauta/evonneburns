<?php
/**
* Template Name: Services
 */


 $args = array (
   'post_type' => 'services',
   'posts_per_page' => -1,
   'orderby'=>'menu_order',
   'order' => 'ASC',

 );
 $queryServ = new WP_Query($args);

 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="post-wrap" role="main">

 			<?php while ( have_posts() ) : the_post(); ?>

        <div class="entry-content">
 					<?php
 						the_content();

 						wp_link_pages( array(
 							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
 							'after'  => '</div>',
 						) );
 					?>
          <?php if ($queryServ->have_posts()):
                  while ($queryServ->have_posts()): $queryServ->the_post();?>

                  <?php $price = get_field('price'); ?>
                  <div class="service">
                    <div class="row">
                      <div class="col-sm-10">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                      </div>
                      <div class="col-sm-2">
                        <?php if ($price){ ?>
                          <div class="serv-price"><span class="price-symbol">$</span><?php the_field('price'); ?></div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>

            <?php endwhile; endif; wp_reset_postdata(); ?>

 				</div><!-- .entry-content -->
 			<?php endwhile; // end of the loop. ?>

 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php get_sidebar(); ?>
 <?php get_footer(); ?>
