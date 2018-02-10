<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="page-footer center-on-small-only unique-color-dark">


        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-r">
                    <h6 class="title font-bold">
                        <strong>G&G Properties</strong>
                    </h6>
                    <hr class="blue mb-4 pb-1 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>G&G Properties are property investors group with significant experience in residential real estate acquisition, development, and management in the Greater Cleveland area.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-r">
                    <h6 class="title font-bold">
                        <strong>Services</strong>
                    </h6>
                    <hr class="blue mb-4 pb-1 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Home Renovations</a>
                    </p>
                    <p>
                        <a href="#!">New Construction</a>
                    </p>
                    <p>
                        <a href="#!">Property Management</a>
                    </p>
                    <p>
                        <a href="#!">Other</a>
                    </p>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-r">
                    <h6 class="title font-bold">
                        <strong>Projects</strong>
                    </h6>
                    <hr class="blue mb-4 pb-1 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">22026 Calverton</a>
                    </p>
                    <p>
                        <a href="#!">Tremont Townhomes</a>
                    </p>
                    <p>
                        <a href="#!">23599 Shaker Blvd</a>
                    </p>
                    <p>
                        <a href="#!">Other</a>
                    </p>
                </div>
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="title font-bold">
                        <strong>Contact</strong>
                    </h6>
                    <hr class="blue mb-4 pb-1 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-home mr-3"></i>123 Main St, Cleveland, OH 44102</p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i>info@example.com</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i>216-111-111</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i>216-222-2222</p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright:
                <a href="https://www.gangprops.com">
                    <strong>G&GProperties.com</strong>
                </a>
            </div>
        </div>
        <!--/.Copyright -->

    </footer>

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

