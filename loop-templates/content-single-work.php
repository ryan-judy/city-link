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
                            <div class="view overlay hm-white-slight">
                                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(134).jpg" alt="Wide sample post image">
                                <a>
                                    <div class=""></div>
                                </a>
                            </div>

                            <!--Post data-->
                            <div class="card-body text-center">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                                <p class = "text-muted">Subheading</p>

                                <!--Social shares-->

                                <!--Social shares-->

                            </div>
                        <!--Post data-->
                        </div>

                        <!--Excerpt-->
                        <div class="excerpt mt-5 wow fadeIn" data-wow-delay="0.3s" style="animation-name: none; visibility: visible;">
                            
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                            
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


		?>
		 <div class="col-lg-6 col-md-12">

          <div class="card">

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
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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