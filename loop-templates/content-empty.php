<?php
/**
 * Content empty partial template.
 *
 * @package understrap
 */

the_content();

?>

		<div id="carouselDivIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselDivIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselDivIndicators" data-slide-to="1"></li>
              <li data-target="#carouselDivIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div class="carousel-img carousel-img-1" style="background-image: '<?php the_field('carousel-image-1')?>'"></div>
              </div>
              <div class="carousel-item">
                <div class="carousel-img carousel-img-2"></div>
              </div>
              <div class="carousel-item">
                <div class="carousel-img carousel-img-3"></div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselDivIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselDivIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
		</div>

		<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

<div id="container1">
 <!-- The before image is first -->
 <img src="http://placehold.it/400x200&amp;text=1" />
 <!-- The after image is last -->
 <img src="http://placehold.it/400x200&amp;text=2" />
</div>

<script type="text/javascript">
$(function(){
  $("#container1").twentytwenty();
});
</script>