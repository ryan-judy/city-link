<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check', 'none' ); ?>

			<main class="site-main" id="main">

        <div class="view-two hm-white-light jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(<?php the_field('hero_image', 89); ?>);">
            <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="row pt-5 mt-3">
                        <div class="col-md-12 mb-3">
                            <div class="intro-info-content text-center">
                                <h4 class="display-2 white-text mb-5 wow fadeInDown" data-wow-delay="0.3s"><?php the_field('hero_header', 89); ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

				<?php if ( have_posts() ) : ?>
<div class = "container">
				
<div class="row mb-3">
    <div class="col">
 <div class="btn-group">
        <a href="/work" class="btn btn-outline-primary" role="button" aria-pressed="true">All</a>
        <a href="/services/home-renovations" class="btn btn-outline-primary" role="button" aria-pressed="true">Home Renovations</a>
        <a href="/services/new-construction" class="btn btn-outline-primary" role="button" aria-pressed="true">New Construction</a>
        <a href="/services/property-management" class="btn btn-outline-primary" role="button" aria-pressed="true">Property Management</a>
        <a href="/services/other" class="btn btn-outline-primary" role="button" aria-pressed="true">Other</a>
      </div>
    </div>
  </div>
  <div class="row my-shuffle">

    <div class="col-1 my-sizer-element"></div>

          <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <?php
            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'loop-templates/content', 'work' );
            ?>

          <?php endwhile; ?>
        </div>

        <?php else : ?>

          <?php get_template_part( 'loop-templates/content', 'none' ); ?>

        <?php endif; ?>

      </main><!-- #main -->
			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

			<?php get_sidebar( 'right' ); ?>

		<?php endif; ?>

	</div> <!-- .row -->
	  </div>
</div>

</div><!-- Container end -->

</div><!-- Wrapper end -->

</div>

<?php get_footer(); ?>
<script src='https://unpkg.com/shufflejs@5'></script>
<script>
var Shuffle = window.Shuffle;

var myShuffle = new Shuffle(document.querySelector('.my-shuffle'), {
  itemSelector: '.image-item',
  sizer: '.my-sizer-element',
  buffer: 1,
});

window.jQuery('input[name="shuffle-filter"]').on('change', function (evt) {
  var input = evt.currentTarget;
  if (input.checked) {
    myShuffle.filter(input.value);
  }
});

</script>