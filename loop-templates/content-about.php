<?php
/**
 * Content empty partial template.
 *
 * @package understrap
 */

?>

<!-- Intro Section -->
        <div class="view-two hm-white-light jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://mdbootstrap.com/img/Photos/Others/images/76.jpg);">
            <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="row pt-5 mt-3">
                        <div class="col-md-12 mb-3">
                            <div class="intro-info-content text-center">
                                <h4 class="display-2 white-text mb-5 wow fadeInDown" data-wow-delay="0.3s"><?php the_field('hero_header') ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pb-0">
            <!--First row-->
            <div class="row mt-5 pt-lg-4 wow fadeIn" data-wow-delay="0.2s">
                <div class="col-lg-7">
                    <!--Featured image -->
                    <div class="overlay hm-white-light z-depth-1-half">
                        <img src="<?php the_field('component_1_image')?>" class="img-fluid " alt="">
                        <div class="mask">
                        </div>
                    </div>
                    <br>
                </div>

  <!--Main information-->

                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.2s">
                    <h2 class="h2-responsive font-bold dark-grey-text"><?php the_field('component_1_header') ?></h2>
                    <hr>
                    <p class="dark-grey-text mt-3"><?php the_field('component_1_content', false, false) ?>

</p>
                    <a href="" class="btn btn-elegant btn-md"><?php the_field('component_1_button_CTA') ?></a>
                </div>
            </div>
            <!--/.First row-->

            <hr class="extra-margins my-5">
<h3 class="text-center title my-5 pt-4 dark-grey-text font-bold wow fadeIn" data-wow-delay="0.2s">
    <div class="divider-new">
                        <strong class = "mx-4 text-dark">The Partners</strong>
                    </div>
                    </h3>
            <!--Second row-->
            <div class="row pt-4 mb-4">
                <!--First columnn-->
              
                <!--First columnn-->

                <!--Second columnn-->
                <div class="col-lg-6">
                    <!--Card-->
                    <div class="card mb-r wow fadeIn" data-wow-delay="0.6s">

                        <!--Card image-->
                        <img class="img-fluid team-image" src="<?php the_field('partner_1_image') ?>" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title text-center dark-grey-text">
                                <strong><?php the_field('partner_1_Headline') ?></strong>
                            </h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text text-center"><?php the_field('partner_1_description', false, false) ?></p>
                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--Second columnn-->

                <!--Third columnn-->
                <div class="col-lg-6">
                    <!--Card-->
                    <div class="card mb-r wow fadeIn" data-wow-delay="0.8s">

                        <!--Card image-->
                        <img class="img-fluid team-image" src="<?php the_field('partner_2_image') ?>" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title text-center dark-grey-text">
                                <strong><?php the_field('partner_2_headline') ?></strong>
                            </h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text text-center"><?php the_field('partner_2_description', false, false) ?></p>
                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--Third columnn-->
            </div>
            <!--/.Second row-->
        </div>

        <!--Second container-->
        <div class="container-fluid pb-0" style="background-color: #1c2331">
            <div class="container py-4">

                <!--Section: Services-->
                <section id="services" class="section mt-3 mb-3 pb-3">

                    <!-- Section heading -->
                    <h3 class="text-center title my-5 pt-4 text-light font-bold wow fadeIn" data-wow-delay="0.2s">
                        <div class="divider-new">
                        <strong class = "mx-4">Our Services</strong>
                    </div>
                    </h3>

                    <!-- First row -->
                    <div class="row wow fadeIn" data-wow-delay="0.4s">

                        <!-- First column -->
                        <div class="col-md-6 mb-r text-center">

                            <!--Panel-->
                            <div class="card card-body text-left white hoverable">
                                <p class="feature-title title font-bold dark-grey-text font-up spacing mt-4 mx-4">
                                    <i class="fa fa-square indigo-text mr-2" aria-hidden="true"></i>
                                    <strong><?php the_field('module_1_heading') ?></strong>
                                </p>
                                <p class="grey-text font-small mx-4"><?php the_field('module_1_content', false, false) ?>
                                    <p class="font-small font-bold blue-text mx-4 mb-0">
                                        <a>See Examples</a>
                                    </p>
                                </p>
                            </div>
                            <!--/.Panel-->

                        </div>
                        <!-- /First column -->

                        <!-- Second column -->
                        <div class="col-md-6 mb-r text-center">

                            <!--Panel-->
                            <div class="card card-body text-left white hoverable">
                                <p class="feature-title title font-bold dark-grey-text font-up spacing mt-4 mx-4">
                                    <i class="fa fa-square indigo-text mr-2" aria-hidden="true"></i>
                                    <strong><?php the_field('module_2_heding') ?></strong>
                                </p>
                                <p class="grey-text font-small mx-4"><?php the_field('module_2_content', false, false) ?>
                                    <p class="font-small font-bold indigo-text mx-4 mb-0">
                                        <a>See Examples</a>
                                    </p>
                                </p>
                            </div>
                            <!--/.Panel-->

                        </div>
                        <!-- /.Second column -->

                        <!-- Third column -->
                        <div class="col-md-6 mb-r text-center">

                            <!--Panel-->
                            <div class="card card-body text-left white hoverable">
                                <p class="feature-title title font-bold dark-grey-text font-up spacing mt-4 mx-4">
                                    <i class="fa fa-square indigo-text mr-2" aria-hidden="true"></i>
                                    <strong><?php the_field('module_3_heading') ?></strong>
                                </p>
                                <p class="grey-text font-small mx-4"><?php the_field('module_3_content', false, false) ?>
                                    <p class="font-small font-bold indigo-text mx-4 mb-0">
                                        <a>See Examples</a>
                                    </p>
                                </p>
                            </div>
                            <!--/.Panel-->

                        </div>
                        <!-- /.Third column -->

                        <!-- Fourth column -->
                        <div class="col-md-6 mb-r text-center">

                            <!--Panel-->
                            <div class="card card-body text-left white hoverable">
                                <p class="feature-title title font-bold dark-grey-text font-up spacing mt-4 mx-4">
                                    <i class="fa fa-square indigo-text mr-2" aria-hidden="true"></i>
                                    <strong><?php the_field('module_4_heading') ?></strong>
                                </p>
                                <p class="grey-text font-small mx-4"><?php the_field('module_4_content', false, false) ?>
                                    <p class="font-small font-bold indigo-text mx-4 mb-0">
                                        <a>read more</a>
                                    </p>
                                </p>
                            </div>
                            <!--/.Panel-->

                        </div>
                        <!-- /.Fourth column -->

                    </div>
                    <!-- /.First row -->

                </section>
                <!--/Section: Services-->