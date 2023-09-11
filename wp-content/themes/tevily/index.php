<?php

/**
 *
 * @author     Gaviasthemes Team     
 * @copyright  Copyright (C) 2021 gaviasthemes. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 * 
 */

get_header();
$class_main = 'col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12';
if (is_active_sidebar('default_sidebar')) {
	$class_main = 'col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12';
}
?>

<section id="wp-main-content" class="clearfix main-page">
	<?php do_action('tevily_page_breacrumb'); ?>

	<div class="container">
		<div class="main-page-content main-page-index row">

			<!-- Main content -->
			<!-- Service Start -->
			<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
				<div class="container pt-5 pb-3">
					<div class="text-center mb-3 pb-3">
						<h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
						<h1>Tours & Travel Services</h1>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
							<div class="service-item bg-white text-center mb-2 py-5 px-4">
								<i class="fa fa-2x fa-route mx-auto mb-4"></i>
								<h5 class="mb-2">Travel Guide</h5>
								<p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<div class="service-item bg-white text-center mb-2 py-5 px-4">
								<i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
								<h5 class="mb-2">Ticket Booking</h5>
								<p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp">
							<div class="service-item bg-white text-center mb-2 py-5 px-4">
								<i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
								<h5 class="mb-2">Hotel Booking</h5>
								<p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp">
							<div class="service-item bg-white text-center mb-2 py-5 px-4">
								<i class="fa fa-2x fa-route mx-auto mb-4"></i>
								<h5 class="mb-2">Travel Guide</h5>
								<p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp">
							<div class="service-item bg-white text-center mb-2 py-5 px-4">
								<i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
								<h5 class="mb-2">Ticket Booking</h5>
								<p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp">
							<div class="service-item bg-white text-center mb-2 py-5 px-4">
								<i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
								<h5 class="mb-2">Hotel Booking</h5>
								<p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Service End -->

			<!-- Packages Start -->
			<div class="container-fluid py-5">
				<div class="container pt-5 pb-3">
					<div class="text-center mb-3 pb-3">
						<h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
						<h1>Pefect Tour Packages</h1>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 mb-4">
							<div class="package-item bg-white mb-2">
								<img class="img-fluid" src="wp-content/uploads/2023/08/doctor-gca9fb19e3_1920-1024x446-1.jpg" alt="">
								<div class="p-4">
									<div class="d-flex justify-content-between mb-3">
										<small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
										<small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
										<small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
									</div>
									<a class="h5 text-decoration-none" href="">Discover amazing places of the world with us</a>
									<div class="border-top mt-4 pt-4">
										<div class="d-flex justify-content-between">
											<h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
											<h5 class="m-0">$350</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-4">
							<div class="package-item bg-white mb-2">
								<img class="img-fluid" src="wp-content/uploads/2023/08/doctor-gca9fb19e3_1920-1024x446-1.jpg" alt="">
								<div class="p-4">
									<div class="d-flex justify-content-between mb-3">
										<small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
										<small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
										<small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
									</div>
									<a class="h5 text-decoration-none" href="">Discover amazing places of the world with us</a>
									<div class="border-top mt-4 pt-4">
										<div class="d-flex justify-content-between">
											<h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
											<h5 class="m-0">$350</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-4">
							<div class="package-item bg-white mb-2">
								<img class="img-fluid" src="wp-content/uploads/2023/08/doctor-gca9fb19e3_1920-1024x446-1.jpg" alt="">
								<div class="p-4">
									<div class="d-flex justify-content-between mb-3">
										<small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
										<small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
										<small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
									</div>
									<a class="h5 text-decoration-none" href="">Discover amazing places of the world with us</a>
									<div class="border-top mt-4 pt-4">
										<div class="d-flex justify-content-between">
											<h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
											<h5 class="m-0">$350</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-4">
							<div class="package-item bg-white mb-2">
								<img class="img-fluid" src="wp-content/uploads/2023/08/doctor-gca9fb19e3_1920-1024x446-1.jpg" alt="">
								<div class="p-4">
									<div class="d-flex justify-content-between mb-3">
										<small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
										<small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
										<small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
									</div>
									<a class="h5 text-decoration-none" href="">Discover amazing places of the world with us</a>
									<div class="border-top mt-4 pt-4">
										<div class="d-flex justify-content-between">
											<h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
											<h5 class="m-0">$350</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-4">
							<div class="package-item bg-white mb-2">
								<img class="img-fluid" src="wp-content/uploads/2023/08/doctor-gca9fb19e3_1920-1024x446-1.jpg" alt="">
								<div class="p-4">
									<div class="d-flex justify-content-between mb-3">
										<small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
										<small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
										<small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
									</div>
									<a class="h5 text-decoration-none" href="">Discover amazing places of the world with us</a>
									<div class="border-top mt-4 pt-4">
										<div class="d-flex justify-content-between">
											<h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
											<h5 class="m-0">$350</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-4">
							<div class="package-item bg-white mb-2">
								<img class="img-fluid" src="wp-content/uploads/2023/08/doctor-gca9fb19e3_1920-1024x446-1.jpg" alt="">
								<div class="p-4">
									<div class="d-flex justify-content-between mb-3">
										<small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
										<small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
										<small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
									</div>
									<a class="h5 text-decoration-none" href="">Discover amazing places of the world with us</a>
									<div class="border-top mt-4 pt-4">
										<div class="d-flex justify-content-between">
											<h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
											<h5 class="m-0">$350</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Packages End -->


			<!-- TESTIMONIALS -->
			<section class="testimonials">
				<div class="container">

					<div class="row">
						<div class="col-sm-12">
							<div id="customers-testimonials" class="owl-carousel">

								<!--TESTIMONIAL 1 -->
								<div class="item">
									<div class="shadow-effect">
										<img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
										<p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
									</div>
									<div class="testimonial-name">EMILIANO AQUILANI</div>
								</div>
								<!--END OF TESTIMONIAL 1 -->
								<!--TESTIMONIAL 2 -->
								<div class="item">
									<div class="shadow-effect">
										<img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
										<p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
									</div>
									<div class="testimonial-name">ANNA ITURBE</div>
								</div>
								<!--END OF TESTIMONIAL 2 -->
								<!--TESTIMONIAL 3 -->
								<div class="item">
									<div class="shadow-effect">
										<img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
										<p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
									</div>
									<div class="testimonial-name">LARA ATKINSON</div>
								</div>
								<!--END OF TESTIMONIAL 3 -->
								<!--TESTIMONIAL 4 -->
								<div class="item">
									<div class="shadow-effect">
										<img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
										<p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
									</div>
									<div class="testimonial-name">IAN OWEN</div>
								</div>
								<!--END OF TESTIMONIAL 4 -->
								<!--TESTIMONIAL 5 -->
								<div class="item">
									<div class="shadow-effect">
										<img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
										<p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
									</div>
									<div class="testimonial-name">MICHAEL TEDDY</div>
								</div>
								<!--END OF TESTIMONIAL 5 -->
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- END OF TESTIMONIALS -->

			
			<div class="content-page <?php echo esc_attr($class_main) ?>">
				<div id="wp-content" class="wp-content content-page-index">
					<div class="blog-grid-style-2 gva-posts-grid">
						<div class="lg-block-grid-2 md-block-grid-2 sm-block-grid-2 xs-block-grid-1 post-masonry-style post-masonry-index">
							<?php
							if (have_posts()) :

								// Start the Loop.
								while (have_posts()) : the_post();

									echo '<div class="item-columns item-masory">';
									get_template_part('templates/content/item', 'post-style-1');
									echo '</div>';

								endwhile;
							// Previous/next page navigation.         

							else :
								// If no content, include the "No posts found" template.
								get_template_part('content', 'none');

							endif;
							?>
						</div>
					</div>

					<div class="pagination">
						<?php echo tevily_pagination(); ?>
					</div>
				</div>

			</div>

			<?php if (is_active_sidebar('default_sidebar')) { ?>
				<div class="sidebar wp-sidebar sidebar-left col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
					<div class="sidebar-inner">
						<?php dynamic_sidebar('default_sidebar'); ?>
					</div>
				</div>
			<?php } ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>