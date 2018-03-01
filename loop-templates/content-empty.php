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
                                <h1 class="display-1 white-text mb-5 wow fadeInDown" data-wow-delay="0.3s">G&G
                                    <a class="white-text font-bold">Properties</a>
                                </h1>
                                <h5 class="font-up mb-5 mt-1 text-light spacing font-bold wow fadeInDown" data-wow-delay="0.3s">Real Estate Investments</h5>
                                <a class="btn btn-elegant btn-lg wow fadeInDown" data-wow-delay="0.3s">WORK</a>
                                <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.3s">CONTACT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class= "container py-5">
<div class="divider-new">
            <h2 class="h2-responsive text-muted mx-4 font-bold wow fadeIn">What We Do</h2>
        </div>

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

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt'] ?>" />

            </div>


                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Title-->
                            <h4 class="card-title text-center"><?php the_field('module_1_heading'); ?></h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text grey"><?php the_field('module_1_content'); ?></p>
                            <button type="button" class="btn btn-elegant"><?php the_field('module_1_button_cta'); ?></button>

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
                        <img class="img-fluid resize" src="<?php the_field('module_2_image'); ?>" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Title-->
                            <h4 class="card-title text-center"><?php the_field('module_2_heading'); ?></h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text"><?php the_field('module_2_content'); ?></p>
                            <button type="button" class="btn btn-elegant"><?php the_field('module_2_button_cta'); ?></button>

                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!--Second columnn-->

                <!--Third columnn-->

                <!--Third columnn-->

                <!--First columnn-->
            
                <!--First columnn-->
            </div>

        </section>
        <!--/Section: Best features-->
</div>

<!--/Section: Best features-->

        <div class="container-fluid py-5" style="background-color: #1c2331">
            <div class = "container">
        <div class="divider-new pt-3">
            <h2 class="h2-responsive text-light mx-4 font-bold wow fadeIn"><?php the_field('component_heading'); ?></h2>
        </div>

        <!--Section: Features v.1-->
        <section class="section feature-box text-center">

            <!--Section description-->
            <p class="section-description lead text-light mb-5 mx-lg-5"><?php the_field('component_subhead'); ?></p>

            <!--Grid row-->
            <div class="row text-center">

                <!--Grid column-->
                <div class="col-md-4 mb-r">
                    <i class="fa fa-3x fa-calendar blue-text"></i>
                    <h5 class="font-bold text-light mt-3"><?php the_field('section_1_heading'); ?></h5>
                    <p class="grey-text"><?php the_field('section_1_content'); ?></p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-r">
                    <i class="fa fa-3x fa-briefcase blue-text"></i>
                    <h5 class="font-bold text-light mt-3"><?php the_field('section_2_heading'); ?></h5>
                    <p class="grey-text"><?php the_field('section_2_content'); ?></p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-r">
                    <i class="fa fa-3x fa-industry blue-text"></i>
                    <h5 class="font-bold text-light mt-3"><?php the_field('section_3_heading'); ?></h5>
                    <p class="grey-text"><?php the_field('section_3_content'); ?></p>
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
        
    <!--Section heading-->
    <h1 class="font-bold h1 py-5">Testimonials</h1>
    <!--Section description-->
    
    <!--Carousel Wrapper-->
    <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel" data-interval="false">
    
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
    
                <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="rounded-circle img-fluid" alt="First sample avatar image">
                    </div>
                    <!--Content-->
                    <p>
                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae
                        quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet
                        molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor
                        veniam.</p>
    
                    <h4>Anna Deynah</h4>
                    <h6>Founder at ET Company</h6>
    

                </div>
    
            </div>
            <!--First slide-->
    
            <!--Second slide-->
            <div class="carousel-item">
    
                <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" class="rounded-circle img-fluid" alt="Second sample avatar image">
                    </div>
                    <!--Content-->
                    <p>
                        <i class="fa fa-quote-left"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                        quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                        labore. </p>
    
                    <h4>Maria Kate</h4>
                    <h6>Photographer at Studio LA</h6>
    

                </div>
    
            </div>
            <!--Second slide-->
    
            <!--Third slide-->
            <div class="carousel-item">
    
                <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" class="rounded-circle img-fluid" alt="Third sample avatar image">
                    </div>
                    <!--Content-->
                    <p>
                        <i class="fa fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                        laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
    
                    <h4>John Doe</h4>
                    <h6>Front-end Developer in NY</h6>
    
                </div>
    
            </div>
            <!--Third slide-->
    
        </div>
        <!--Slides-->
    
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
            <i class="fa fa-arrow-circle-left fa-3x text-dark"></i>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next text-faded" href="#carousel-example-1" role="button" data-slide="next">
            <i class="fa fa-arrow-circle-right fa-3x text-dark"></i>
            <span class="sr-only">Next</span>
        </a>
        <!--Controls-->
    
    </div>
    <!--Carousel Wrapper-->
    
</section>
<!--Section: Testimonials v.2-->
</div>

<div class = "container">
    <div class = "row">
    </div>
    </div>


