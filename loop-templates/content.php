<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<div class= "container">

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	                <!--Second row-->
                <div class="row wow fadeIn" data-wow-delay="0.2s">
                    <!--Featured image-->
                    <div class="col-lg-7">
                        <div class="view overlay hm-white-light z-depth-1 rounded">
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(146).jpg" class="img-fluid" alt="">
                            <div class="mask"></div>
                        </div>
                    </div>
                    <!--/.Featured image-->

                    <!--Post excerpt-->
                    <div class="col-lg-5">
                        <a href="#!">
                            <h2 class="post-title font-bold">Post title</h2>
                        </a>
                        <h6 class="dark-grey-text font-bold font-small">12/04/2018</h6>
                        <p class="my-4 dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat...</p>
                        <div class="read-more">
                            <a href="#!" class="btn btn-primary btn-md">Read more</a>
                        </div>
                    </div>
                    <!--/.Post excerpt-->
                </div>
                <!--/.Second row-->
                <hr class="extra-margin my-5">
</article><!-- #post-## -->
</div>
