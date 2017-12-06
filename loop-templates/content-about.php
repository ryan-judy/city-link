<?php
/**
 * Content empty partial template.
 *
 * @package understrap
 */

the_content();
?>

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