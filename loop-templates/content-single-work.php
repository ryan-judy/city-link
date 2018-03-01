<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<div class = "container">
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
		<section class="section section-blog-fw mt-5 pb-3 wow fadeIn" style="animation-name: none; visibility: visible;">

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <!--Featured image-->
                        <div class="card card-cascade wider reverse">
                            <div class="view-3 overlay hm-white-slight text-center">
                                <img src="<?php the_field('featured_image'); ?>" alt="Wide sample post image">
                                <a>
                                    <div class=""></div>
                                </a>
                            </div>

                            <!--Post data-->
                            <div class="card-body text-center">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                                <p class = "text-muted"><?php the_field('property_subhead'); ?></p>

                                <!--Social shares-->

                                <!--Social shares-->

                            </div>
                        <!--Post data-->
                        </div>

                        <!--Excerpt-->
                        <div class="excerpt mt-5 wow fadeIn" data-wow-delay="0.3s" style="animation-name: none; visibility: visible;">
                            
                            <p><?php the_field('property_description'); ?></p>
                            
                        </div>
                    </div>
                </div>
               <!--Grid row--> 
                
            </section>

<section class="section extra-margins text-center pb-3 wow fadeIn" data-wow-delay="0.3s" style="animation-name: none; visibility: visible;">

                <!--Section heading-->
                <h3 class="section-heading h3 pt-3">Before and After</h3>
                
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                        
                        <!--Card Light-->

<?php if( have_rows('before_and_after') ): ?>


	<?php while( have_rows('before_and_after') ): the_row(); 

		// vars
			$image = get_sub_field('before');

		$image2 = get_sub_field('after');
		$label = get_sub_field('label');
        $description = get_sub_field('description');


		?>
		 <div class="col-lg-6 col-md-12">

          <div class="card mb-5">

		  	<div class="twentytwenty-container">

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

				<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt'] ?>" />

			</div>
                            <div class="card-body">
                                <!--Social shares button-->
                                <!--Title-->
                                <h4 class="card-title"><?php echo $label ?></h4>
                                <hr>
                                <!--Text-->
                                <p class="card-text"><?php echo $description ?></p>
                                <a href="#" class="black-text d-flex flex-row-reverse">
                                </a>
                            </div>
         	</div>
                        <!--/.Card Light-->
                        
            </div>
                    <!--Grid column-->

                    
                        <!--/.Card Light-->
                                            <!--Grid column-->

                    <!--Grid column-->
                    
                    <!--Grid column-->
	<?php endwhile; ?>


<?php endif; ?>
                    
                </div>
                <!--Grid row-->

            </section>






		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>
</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
</div>