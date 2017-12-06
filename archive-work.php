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

				<?php if ( have_posts() ) : ?>

				
<div class = "hero-interior" style="background-image: url(<?php the_field('hero'); ?>);">
  <div class = "header-overlay">
  </div>  
  <div class = "row">
    <div class = "col-sm-12 text-center" style="position: absolute;">
      <div class = "hero-interior-cta-center">
      <?php the_field('hero_cta_interior'); ?>
        <div class="row">
          <div class = "col-sm-12 text-center">
            <button class="btn btn-primary btn-lg active header mt-5">Learn more
            </button>
          </div>
        </div>
      </div>
    </div>  
  </div>
</div>  

<div class="container mt-3">
  <div class="row">
    <div class="col">
      <p class="mb-1">Filters:</p>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col">
      <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-outline-primary active">
          <input type="radio" name="shuffle-filter" value="all" checked="checked"/>All
        </label>
        <label class="btn btn-outline-primary">
          <input type="radio" name="shuffle-filter" value="eastside"/>Eastside
        </label>
        <label class="btn btn-outline-primary">
          <input type="radio" name="shuffle-filter" value="westside"/>Westside
        </label>
        <label class="btn btn-outline-primary">
          <input type="radio" name="shuffle-filter" value="southside"/>Southside
        </label>
      </div>
    </div>
  </div>
  <div class="row my-shuffle">
    <figure class="image-item col-3" data-groups="[&quot;eastside&quot;]">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/uploads/141310026617203b5980d/c86b8baa?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=882e851a008e83b7a80d05bdc96aa817" obj.alt="obj.alt"/></div>
      </div>
    </figure>
    <figure class="image-item col-3" data-groups="[&quot;eastside&quot;]">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1484402628941-0bb40fc029e7?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=6237e62a10fa079d99b088b0db0144ac" obj.alt="obj.alt"/></div>
      </div>
    </figure>
    <figure class="image-item col-3" data-groups="[&quot;eastside&quot;]">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/uploads/1413142095961484763cf/d141726c?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=86dc2dcb74588b338dfbb15d959c5037" obj.alt="obj.alt"/></div>
      </div>
    </figure>
    <figure class="image-item col-3" data-groups="[&quot;southside&quot;]">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1465414829459-d228b58caf6e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=7ab1744fe016fb39feb2972244246359" obj.alt="obj.alt"/></div>
      </div>
    </figure>
    <figure class="image-item col-3" data-groups="[&quot;eastside&quot;,&quot;southside&quot;]">
      <div class="aspect aspect--9x80">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1416184008836-5486f3e2cf58?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=601&amp;h=676&amp;fit=crop&amp;s=5f1f1ffba05979d4248cc16d8eb82f0a" obj.alt="obj.alt"/></div>
      </div>
    </figure>
    <figure class="image-item col-3" data-groups="[&quot;eastside&quot;]">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1478033394151-c931d5a4bdd6?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=57a00aabcfaa1b04fd268ea3ad4a4cbb" obj.alt="obj.alt"/></div>
      </div>
    </figure>
    <figure class="image-item col-6" data-groups="[&quot;eastside&quot;]">
      <div class="aspect aspect--32x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1473175494278-d83ed8459089?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1208&amp;h=338&amp;fit=crop&amp;s=fd1cf1e8eddf88ef87015314f85ce3fb" obj.alt="obj.alt"/></div>
      </div>
    </figure>
    <figure class="image-item col-3" data-groups="[&quot;eastside&quot;]">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1434144893279-2a9fc14e9337?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=d2f930bbb91de7e19e6436f5b03897b0" obj.alt="obj.alt"/></div>
      </div>
    </figure>
    <figure class="image-item col-3" data-groups="[&quot;westside&quot;]">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1464454709131-ffd692591ee5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=eda14f45e94e9024f854b1e06708c629" obj.alt="obj.alt"/></div>
      </div>
    </figure>
    <figure class="image-item col-3" data-groups="[&quot;eastside&quot;]">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1482192596544-9eb780fc7f66?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=70dabb0dcc604c558245b72f3109bbbb" obj.alt="obj.alt"/></div>
      </div>
    </figure>
    <figure class="image-item col-3" data-groups="[&quot;eastside&quot;]">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1447433589675-4aaa569f3e05?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=4e19022724205e38e491961f50e47d32" obj.alt="obj.alt"/></div>
      </div>
    </figure>
    <figure class="image-item col-3" data-groups="[&quot;eastside&quot;]">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1430026996702-608b84ce9281?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=363a88755a7b87635641969a8d66f7aa" obj.alt="obj.alt"/></div>
      </div>
    </figure>
    <div class="col-1 my-sizer-element"></div>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'community' );
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