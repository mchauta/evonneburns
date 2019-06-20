<?php
/**
* Template Name: New Home
 */
get_header();

$blurb1 = get_field('blurb_1');
$blurb2 = get_field('blurb_2');
$blurb3 = get_field('blurb_3');

$layout = sydney_blog_layout();

?>

	<?php do_action('sydney_before_content'); ?>

	<div id="primary" class="content-area <?php echo esc_attr($layout); ?>">

		<?php sydney_yoast_seo_breadcrumbs(); ?>

		<main id="main" class="post-wrap" role="main">
			<div class="row mid-header">
        <h3>Why Choose Us?</h3>
        <div class="col-sm-4 blurb">
          <div class="blurb-img blue"><img src="<?php echo $blurb1['image'] ;?>"/></div>
          <h4><?php echo $blurb1['title'] ;?></h4>
          <div class="copy">
            <?php echo $blurb1['copy'] ;?>
          </div>
        </div>
        <div class="col-sm-4 blurb">
          <div class="blurb-img green"><img src="<?php echo $blurb2['image'] ;?>"/></div>
          <h4><?php echo $blurb2['title'] ;?></h4>
          <div class="copy">
            <?php echo $blurb2['copy'] ;?>
          </div>
        </div>
        <div class="col-sm-4 blurb">
          <div class="blurb-img blue"><img src="<?php echo $blurb3['image'] ;?>"/></div>
          <h4><?php echo $blurb3['title'] ;?></h4>
          <div class="copy">
            <?php echo $blurb3['copy'] ;?>
          </div>
        </div>
      </div>

		<?php if ( have_posts() ) : ?>

		<div class="posts-layout">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					if ( $layout != 'classic-alt' ) {
						get_template_part( 'content', get_post_format() );
					} else {
						get_template_part( 'content', 'classic-alt' );
					}
				?>

			<?php endwhile; ?>
		</div>

		<?php
			the_posts_pagination( array(
				'mid_size'  => 1,
			) );
		?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php do_action('sydney_after_content'); ?>

<?php
	if ( ( $layout == 'classic-alt' ) || ( $layout == 'classic' ) ) :
	get_sidebar();
	endif;
?>
<?php get_footer(); ?>
