<?php
/**
 * Content empty partial template.
 *
 * @package understrap
 */

the_content();


?>



        <div class="jarallax hm-white-light view" data-jarallax='{"speed": 0.2}' style="background-image: url(<?php the_field('hero_image'); ?>);">
            <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="row pt-5 mt-3">
                        <div class="col-md-12 mb-3">
                            <div class="intro-info-content text-center">
                                <h1 class="display-1 white-text mb-5 wow fadeInDown" data-wow-delay="0.3s"><?php the_field('hero_heading')?>
                                </h1>
                                <h5 class="font-up mb-5 mt-1 text-light spacing font-bold wow fadeInDown" data-wow-delay="0.3s"><?php the_field('hero_subhead')?></h5>
                                <a href="<?php the_field('hero_button_1_link')?>" class="btn btn-elegant bg-dark btn-lg wow fadeInDown" data-wow-delay="0.3s"><?php the_field('hero_button_1_cta')?></a>
                                <a href="<?php the_field('hero_button_2_link')?>" class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.3s"><?php the_field('hero_button_2_cta')?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class= "container py-5">
<div class="divider-new my-4">
            <h2 class="h2-responsive text-dark mx-4 font-bold wow fadeIn"><?php the_field('component_heading_2', false, false); ?></h2>
        </div>
            <p class="section-description lead text-dark text-center mb-5 mx-lg-5"><?php the_field('component_subhead_2', false, false); ?></p>

        <!--Section: Best features-->
        <section id="best-features">

            <div class="row pt-3">
<?php if( have_rows('module_1_imgae') ): ?>


    <?php while( have_rows('module_1_imgae') ): the_row(); 

        // vars
            $image = get_sub_field('before');

        $image2 = get_sub_field('after');


        ?>
                <!--First columnn-->
                <div class="col-lg-6 mb-r">

                    <!--Card-->
                    <div class="card hoverable wow fadeIn">

                        <!--Card image-->
                        <div class="twentytwenty-container">

                <img class="services-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                <img class="services-image" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt'] ?>" />

            </div>


                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Title-->
                            <h4 class="card-title text-center"><?php the_field('module_1_heading'); ?></h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text"><?php the_field('module_1_content', false, false); ?></p>
                            <button type="button" class="btn btn-elegant bg-dark"><?php the_field('module_1_button_cta'); ?></button>

                        </div>
            <?php endwhile; ?>


<?php endif; ?>

                    </div>
                    <!--/.Card-->
                </div>
                <!--First columnn-->

                <!--Second columnn-->
                <div class="col-lg-6 mb-r">
                    <!--Card-->
                    <div class="card hoverable wow fadeIn" data-wow-delay="0.2s">

                        <!--Card image-->
                        <img class="img-fluid resize services-image" src="<?php the_field('module_2_image'); ?>" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Title-->
                            <h4 class="card-title text-center"><?php the_field('module_2_heading'); ?></h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text"><?php the_field('module_2_content', false, false); ?></p>
                            <button type="button" class="btn btn-elegant bg-dark"><?php the_field('module_2_button_cta'); ?></button>

                        </div>

                    </div>
                    <!--/.Card-->
                </div>
            </div>

        </section>
        <!--/Section: Best features-->
</div>

<!--/Section: Best features-->

        <div class="container-fluid py-5" style="background-color: #1c2331">
            <div class = "container">
        <div class="divider-new my-4">
            <h2 class="h2-responsive text-light mx-4 font-bold wow fadeIn"><?php the_field('component_heading'); ?></h2>
        </div>

        <!--Section: Features v.1-->
        <section class="section feature-box text-center">

            <!--Section description-->
            <p class="section-description lead text-light mb-5 mx-lg-5"><?php the_field('component_subhead', false, false); ?></p>

            <!--Grid row-->
            <div class="row text-center">

                <!--Grid column-->
                <div class="col-md-4 mb-r">
                    <i class="fa fa-3x fa-calendar blue-text"></i>
                    <h5 class="font-bold text-light mt-3"><?php the_field('section_1_heading'); ?></h5>
                    <p class="text-light"><?php the_field('section_1_content', false, false); ?></p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-r">
                    <i class="fa fa-3x fa-briefcase blue-text"></i>
                    <h5 class="font-bold text-light mt-3"><?php the_field('section_2_heading'); ?></h5>
                    <p class="text-light"><?php the_field('section_2_content', false, false); ?></p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-r">
                    <i class="fa fa-3x fa-industry blue-text"></i>
                    <h5 class="font-bold text-light mt-3"><?php the_field('section_3_heading'); ?></h5>
                    <p class="text-light"><?php the_field('section_3_content', false, false); ?></p>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
            </div>
        </section>
        <!--Section: Features v.1-->
</div>

<div class = "container">
<!--Section: Testimonials v.2-->
<section class="text-center">
                <div class="divider-new mt-4 mb-0">

    <!--Section heading-->
<div class="divider-new">
            <h2 class="h2-responsive text-dark mx-4 font-bold wow fadeIn"><?php the_field('component_3_heading', false, false); ?></h2>
        </div>

</div>
                    <p class="section-description lead text-dark mb-5 mx-lg-5"><?php the_field('component_3_subhead', false, false); ?></p>

    <!--Section description-->
    <div class="card card-testimonial hoverable wow fadeIn">

    <!--Carousel Wrapper-->
    <div id="carousel-example-1" class="carousel no-flex p-5 testimonial-carousel slide carousel-fade" data-ride="carousel" data-interval="false">
    
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
    
                <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar pb-4">
                        <img src="<?php the_field('testimonial_1_image')?>" class="rounded-circle img-fluid img-fluid-test" alt="First sample avatar image">
                    </div>
                    <!--Content-->
                    <p>
                        <i class="fa fa-quote-left"></i><?php the_field('testimonial_1_quote')?></p>
    
                    <h4><?php the_field('testimonial_1_author')?></h4>
                    <h6><?php the_field('testimonial_1_company')?></h6>
    

                </div>
    
            </div>
            <!--First slide-->
    
            <!--Second slide-->
            <div class="carousel-item">
    
                <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar pb-4">
                        <img src="<?php the_field('testimonial_2_image')?>" class="rounded-circle img-fluid img-fluid-test" alt="Second sample avatar image">
                    </div>
                    <!--Content-->
                    <p>
                        <i class="fa fa-quote-left"></i><?php the_field('testimonial_2_quote')?></p>
    
                    <h4><?php the_field('testimonial_2_author')?></h4>
                    <h6><?php the_field('testimonial_2_company')?></h6>
    

                </div>
    
            </div>
            <!--Second slide-->
    
            <!--Third slide-->
            <div class="carousel-item">
    
                <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar pb-4">
                        <img src="<?php the_field('testimonial_3_image')?>" class="rounded-circle img-fluid img-fluid-test" alt="Third sample avatar image">
                    </div>
                    <!--Content-->
                    <p>
                        <i class="fa fa-quote-left"></i> <?php the_field('testimonial_3_quote')?></p>
    
                    <h4><?php the_field('testimonial_3_author')?></h4>
                    <h6><?php the_field('testimonial_3_company')?></h6>
    
                </div>
    
            </div>
            <!--Third slide-->
    
        </div>
        <!--Slides-->
    
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
            <i class="fa fa-angle-left fa-3x text-dark"></i>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next text-faded" href="#carousel-example-1" role="button" data-slide="next">
            <i class="fa fa-angle-right fa-3x text-dark"></i>
            <span class="sr-only">Next</span>
        </a>
        <!--Controls-->
    
    </div>
    <!--Carousel Wrapper-->
    </div>
</section>
<!--Section: Testimonials v.2-->
</div>

<div class = "container">
    <div class = "row">
    </div>
    </div>


