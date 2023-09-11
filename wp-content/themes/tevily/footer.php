<?php

/**
 * $Desc
 *
 * @author     Gaviasthemes Team     
 * @copyright  Copyright (C) 2021 gaviasthemes. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 * 
 */
?>
</div><!--end page content-->

</div><!-- End page -->

<footer id="wp-footer" class="clearfix footer">
<!-- <div class="container container-footer">
	<div class="row">
		<div class="col-sm-6 col-md-4">
			<div class="widget dark">
				<div class="widget-title">روابط هامة</div>
				<ul class="list angle-double-right list-border">
					<li><a title="عروض سياحية" href="https://hl-tourism.com/عروض-سياحية.html/">عروض سياحية</a></li>
					<li><a title="رحلات عائلية" href="https://hl-tourism.com/عروض-سياحية/المملكه-السعودية/رحلات-سياحية.html/">رحلات عائلية </a></li>
					<li><a title="شهر عسل" href="https://hl-tourism.com/رحلات-شهر-العسل.html/">شهر عسل</a></li>
					<li><a title="رحلات كروز" href="https://hl-tourism.com/رحلات-شهر-العسل/رحلات-الكروز/">رحلات كروز</a></li>
					<li><a title="إستخراج تاشيرات" href="https://hl-tourism.com/استخراج-تاشيرة.html/">إستخراج تاشيرات</a></li>
					<li><a title="حجز طيران" href="https://hl-tourism.com/flight/search/">حجز طيران</a></li>
				</ul>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="widget dark">
				<div class="widget-title">مقالات سياحية</div>
				<ul class="list angle-double-right list-border">
					<li>
						<a href="https://hl-tourism.com/السياحة-في-سريلانكا-:-أجمل-4-مدن-في-سريلانكا-تستحق-الزيارة-/">
							السياحة في سريلانكا : أجمل 4 مدن في سريلانكا تستحق الزيارة </a>
					</li>
					<li>
						<a href="https://hl-tourism.com/أهم-أماكن-التسوق-والمطاعم-في-مراكش-/">
							أفضل أماكن التسوق والمطاعم في مراكش </a>
					</li>
					<li>
						<a href="https://hl-tourism.com/السياحة-في-مراكش/">
							السياحة في مراكش </a>
					</li>
					<li>
						<a href="https://hl-tourism.com/أفضل-أماكن-التسوق-والمطاعم-في-الرباط/">
							أفضل أماكن التسوق والمطاعم في الرباط </a>
					</li>
					<li>
						<a href="https://hl-tourism.com/المقالات-السياحية/">
							اقرأ المزيد...
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="widget dark">
				<div class="widget-title mb-10 mt-10">
					اشترك ليصلك اخر العروض السياحية</div>
				<form id="newsletter-validate-detail" class="newsletter-form newsletterFooter" action="https://hl-tourism.com/newsletter/subscriber/new/" method="post">
					<div class="input-group">
						<input type="email" name="email" id="newsletter" title="اشترك في قائمتنا البريدية" class="form-control input-lg input-text required-entry validate-email" data-height="45px" placeholder="البريد الالكتروني" style="height: 45px;">
						<span class="input-group-btn">
							<button class="btn bg-green text-white btn-xs font-14" type="submit">
								<i class="fab fa-telegram-plane"></i> اشترك </button>
						</span>
					</div>
				</form>
				<script type="text/javascript">
					//<![CDATA[
					// var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
					//]]>
				</script> <br>
				<div class="widget-title mb-10">نقبل الدفع بـ</div>
				<ul class="list-inline payWith">
					<li><img src="https://hl-tourism.com/media/wysiwyg/PayWith/PayWith.png" alt=""></li>
				</ul>
			</div>
		</div>
	</div>
</div> -->
	<?php
	$footer_id = apply_filters('tevily_get_footer_layout', null);
	if ($footer_id && class_exists('GVA_Layout_Frontend')) {
		echo '<div class="footer-main">' . GVA_Layout_Frontend::getInstance()->element_display($footer_id) . '</div>';
	}

	?>

	<?php if (tevily_get_option('copyright_default', 'yes') == 'yes') {
		$copyright = tevily_get_option('copyright_text', ''); ?>
		<div class="copyright">
			<div class="container">
				<div class="copyright-content">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<?php
							if (!empty($copyright)) {
								echo esc_html($copyright);
							} else {
								$year = date("Y");
								echo esc_html__("Copyright $year - Tevily - All rights reserved. Powered by ", 'tevily');
							}
							?>
								<a href="https://github.com/MohamadSheikhAlshabab">
							<span id="sheikh_alshabab">

									<?php
								echo esc_html__("Sheikh Alshabab.");
								?>
							</span>
						</a>
						</div>
					</div>
				</div>
			</div>
			<a class="scrollToTop return-top" id="scrollToTop" href="#" style="display: block;"><i class="fa fa-angle-up"></i></a>
		</div>
	<?php } ?>
</footer>

    <!-- Footer Start -->
    <!-- <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="/*margin-top: 90px;*/">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">TRAVEL</span>ER</h1>
                </a>
                <p>Sed ipsum clita tempor ipsum ipsum amet sit ipsum lorem amet labore rebum lorem ipsum dolor. No sed vero lorem dolor dolor</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start socials">
                    <a  href="#"><i class="fab fa-twitter"></i></a>
                    <a  href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a  href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Guides</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Testimonial</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Guides</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Testimonial</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt me-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope me-2"></i>info@example.com</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="/*padding: 25px;*/margin-bottom:5px" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">Domain</a>. All Rights Reserved.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by <a href="https://github.com/MohamadSheikhAlshabab">
							<span id="sheikh_alshabab">

									<?php
								// echo esc_html__("Sheikh Alshabab.");
								?>
							</span>
						</a>
                </p>
            </div>
        </div>
    </div> -->
    <!-- Footer End -->
<div id="gva-overlay"></div>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="blur-svg">
	<defs>
		<filter id="blur-filter">
			<feGaussianBlur stdDeviation="3"></feGaussianBlur>
		</filter>
	</defs>
</svg>

<?php do_action('tevily/addons/user') ?>
<?php wp_footer(); ?>

</body>
</html>