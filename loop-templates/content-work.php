<?php
/**
 * Content empty partial template.
 *
 * @package understrap
 */

the_content();

?>

<?php 
$terms = get_the_terms( $post->ID, 'type-of-work' );
$image = the_post_thumbnail ();
$url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];
  // thumbnail
  $size = 'medium';
  $thumb = $image['sizes'][ $size ];
if ( $terms && ! is_wp_error( $terms ) ) :
   $actors = array();
   foreach ( $terms as $term ) {
      $actors[] = $term->name;
   }
   $actors = join( ", ", $actors );
?>

   
   
<?php endif; ?>


       <figure class="image-item col-3" data-groups="[&quot;<?php echo $actors; ?>&quot;]">
  <a class="portfolio-box" href=<?php the_permalink(); ?>>
          <div class="aspect aspect--16x9">

        <div class="aspect__inner">
          <img src="<?php the_field('featured_image'); ?>"></div>
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <?php the_title()?>
                  </div>
                </div>
              </div>
                    </div>

            </a>



    </figure>
