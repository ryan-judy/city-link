<?php
/**
 * Content empty partial template.
 *
 * @package understrap
 */

the_content();

?>

        <div class="view-two hm-white-light jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(<?php the_field('hero_image') ?>);">
            <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="row pt-5 mt-3">
                        <div class="col-md-12 mb-3">
                            <div class="intro-info-content text-center">
                                <h4 class="display-2 text-dark mb-5 wow fadeInDown" data-wow-delay="0.3s"><?php the_field('hero_heading') ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class= "container">

        <!--Section: Contact-->
        <section id="contact pb-5">
            <div class="row">
                <!--First column-->
                <div class="col-md-8 mb-5">
                      
<!-- Default form contact -->
<div class = "card">
    <div class = "container py-5 px-5">
    <!-- Default input name -->
    <?php the_field('contact_form') ?>
</div>
</div>
<!-- Default form contact -->
                      
                                  </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-4">
                    <ul class="text-center list-unstyled">
                        <li class="wow fadeIn" data-wow-delay="0.2s">
                            <i class="fa fa-map-marker blue-text fa-2x"></i>
                            <p><?php the_field('address') ?></p>
                        </li>

                        <li class="wow fadeIn mt-5 pt-2" data-wow-delay="0.3s">
                            <i class="fa fa-phone blue-text fa-2x"></i>
                            <p><?php the_field('phone') ?></p>
                        </li>

                        <li class="wow fadeIn mt-5 pt-2" data-wow-delay="0.4s">
                            <i class="fa fa-envelope blue-text fa-2x"></i>
                            <p><?php the_field('email') ?></p>
                        </li>
                    </ul>
                </div>
                <!--/Second column-->
            </div>
        </section>
        <!--Section: Contact-->

</div>