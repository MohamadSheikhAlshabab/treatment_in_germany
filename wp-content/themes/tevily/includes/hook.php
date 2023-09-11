<?php
add_theme_support('wp-block-styles');

function tevily_breadcrumb()
{
	$post_id = tevily_id();
	$title = is_single() || is_page() ? '' : get_the_title();
	$title = is_search() ? esc_html__('Search', 'tevily') : $title;
	$title = is_archive() ? get_the_archive_title() : $title;
	$title = is_home() ? esc_html__('', 'tevily') : $title;

	$padding_top = tevily_get_option('breadcrumb_padding_top', '');
	$padding_bottom = tevily_get_option('breadcrumb_padding_bottom', '');
	$show_title = tevily_get_option('breadcrumb_show_title', '1');
	$bg_color = tevily_get_option('breadcrumb_background_color', '1');;
	$bg_color_opacity = tevily_get_option('breadcrumb_background_opacity', '1');
	$breadcrumb_image = tevily_get_option('breadcrumb_bg_image', array('id' => 0));
	$text_style = tevily_get_option('breadcrumb_text_stype', 'text-light');

	if (get_post_meta($post_id, 'tevily_breadcrumb_layout', true) == 'page_options') {
		//Breacrumb Image Color
		$bg_color = get_post_meta($post_id, 'tevily_tevily_breacrumb_bg_color', true);
		$bg_color_opacity = get_post_meta($post_id, 'tevily_tevily_breacrumb_bg_opacity', true);
		// Breadcrumb Image
		$post_breadcrumb_img = get_post_meta($post_id, 'tevily_tevily_breacrumb_image', true);
		if (is_numeric($post_breadcrumb_img)) {
			$post_breadcrumb_img_url = wp_get_attachment_image_src($post_breadcrumb_img, 'full');
		}
		if (isset($post_breadcrumb_img_url[0]) && $post_breadcrumb_img_url[0]) {
			$breadcrumb_image['url'] = $post_breadcrumb_img_url[0];
		}
	}

	$styles = $styles_inner = $classes = array();
	$styles_overlay = '';

	$classes[] = $text_style;

	if ($bg_color) {
		$rgba_color = tevily_convert_hextorgb($bg_color);
		$styles_overlay = 'background-color: rgba(' . esc_attr($rgba_color['r']) . ',' . esc_attr($rgba_color['g']) . ',' . esc_attr($rgba_color['b']) . ', ' . ($bg_color_opacity / 100) . ')';
	}

	if (isset($breadcrumb_image['url'])) {
		$styles[] = 'background-image: url(\'' . $breadcrumb_image['url'] . '\')';
	}

	if ($padding_top) {
		$styles_inner[] = "padding-top:{$padding_top}px";
	}
	if ($padding_bottom) {
		$styles_inner[] = "padding-bottom:{$padding_bottom}px";
	}

	$css = count($styles) ? 'style="' . implode(';', $styles) . '"' : '';
	$css_inner = count($styles_inner) > 0 ? 'style="' . implode(';', $styles_inner) . '"' : '';
?>

	<!-- Carousel Start -->
	<div class="container-fluid p-0" >
		<div id="header-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="wp-content/uploads/2023/08/doctor-gca9fb19e3_1920-1024x446-1.jpg" alt="Image">
					<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
						<div class="p-3" style="max-width: 900px;">
							<h4 class="text-white text-uppercase mb-md-3 wow fadeInUp" data-wow-delay="0.1s">Tours & Travel</h4>
							<h1 class="display-3 text-white mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Let's Discover The World Together</h1>
							<a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 wow fadeInUp" data-wow-delay="0.5s">Book Now</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="wp-content/uploads/2023/08/4.jpg" alt="Image">
					<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
						<div class="p-3" style="max-width: 900px;">
							<h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
							<h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
							<a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
				<div class="btn btn-dark" style="/*width: 45px;*/ /*height: 45px;*/ font-weight:bold">
					<span class="carousel-control-prev-icon mb-n2"></span>
				</div>
			</a>
			<a class="carousel-control-next" href="#header-carousel" data-slide="next">
				<div class="btn btn-dark" style="/*width: 45px;*/ /*height: 45px;*/ font-weight:bold">
					<span class="carousel-control-next-icon mb-n2"></span>
				</div>
			</a>
		</div>
	</div>
	<!-- Carousel End -->
	<div class="custom-breadcrumb breadcrumb-default <?php echo implode(' ', $classes); ?>" <?php echo trim($css) ?>>
		<?php if ($styles_overlay) { ?>
			<div class="breadcrumb-overlay" style="<?php echo esc_attr($styles_overlay); ?>">

			</div>
		<?php } ?>
		<div class="breadcrumb-main">
			<div class="container">
				<div class="breadcrumb-container-inner" <?php echo trim($css_inner) ?>>
					<?php
					if ($title && $show_title) {
						echo '<h2 class="heading-title">' . html_entity_decode($title) . '</h2>';
					}
					tevily_general_breadcrumbs();
					?>
				</div>
			</div>
		</div>
	</div>

<?php }

add_action('tevily_page_breacrumb', 'tevily_breadcrumb', '10');

/**
 * Hook to select footer of page
 */
function tevily_get_footer_layout()
{

	if (!class_exists('GVA_Layout_Frontend')) {
		return false;
	}

	$post_id = false;
	if (class_exists('WooCommerce') && is_shop()) {
		$post_id = wc_get_page_id('shop');
	} else {
		$post = get_post();
		if ($post && isset($post->ID) && $post->ID) {
			$post_id = $post->ID;
		}
	}

	$frontend = new GVA_Layout_Frontend();
	$template_id = $frontend->template_default_active_id();

	$post_meta_template = get_post_meta($post_id, 'tevily_template_layout', true);
	if (!empty($post_meta_template) && $post_meta_template != '_default_active' && $post_meta_template != '_without_layout' && is_numeric($post_meta_template)) {
		$template_id = $post_meta_template;
	}

	$footer_id = 0;
	if ($template_id) {
		$footer_id = get_post_meta($template_id, 'footer_layout', true);
	}

	if (!$footer_id) {
		$footer_id = $frontend->template_default_active_id('footer_layout');
	}

	return $footer_id;
}
add_filter('tevily_get_footer_layout', 'tevily_get_footer_layout');

/**
 * Hook to select header of page
 */
function tevily_get_header_layout()
{
	if (!class_exists('GVA_Layout_Frontend')) {
		return false;
	}
	$post_id = false;

	if (class_exists('WooCommerce') && is_shop()) {
		$post_id = wc_get_page_id('shop');
	} else {
		$post = get_post();
		if ($post && isset($post->ID) && $post->ID) {
			$post_id = $post->ID;
		}
	}

	$frontend = new GVA_Layout_Frontend();
	$template_id = $frontend->template_default_active_id();
	$post_meta_template = get_post_meta($post_id, 'tevily_template_layout', true);

	if (!empty($post_meta_template) && $post_meta_template != '_default_active' && is_numeric($post_meta_template)) {
		$template_id = $post_meta_template;
	}

	$header_id = 0;
	if ($template_id) {
		$header_id = get_post_meta($template_id, 'header_layout', true);
	}

	if (!$header_id) {
		$header_id = $frontend->template_default_active_id('header_layout');
	}

	return $header_id;
}
add_filter('tevily_get_header_layout', 'tevily_get_header_layout');

function tevily_main_menu()
{
	if (has_nav_menu('primary')) {
		$tevily_menu = array(
			'theme_location'    => 'primary',
			'container'         => 'div',
			'container_class'   => 'navbar-collapse',
			'container_id'      => 'gva-main-menu',
			'menu_class'        => ' gva-nav-menu gva-main-menu',
			'walker'            => new Tevily_Walker()
		);
		wp_nav_menu($tevily_menu);
	}
}
add_action('tevily_main_menu', 'tevily_main_menu', 10);

function tevily_mobile_menu()
{
	if (has_nav_menu('primary')) {
		$tevily_menu = array(
			'theme_location'    => 'primary',
			'container'         => 'div',
			'container_class'   => 'navbar-collapse',
			'container_id'      => 'gva-mobile-menu',
			'menu_class'        => 'gva-nav-menu gva-mobile-menu',
			'walker'            => new Tevily_Walker()
		);
		wp_nav_menu($tevily_menu);
	}
}
add_action('tevily_mobile_menu', 'tevily_mobile_menu', 10);

function tevily_header_mobile()
{
	get_template_part('templates/parts/header', 'mobile');
}
add_action('tevily_header_mobile', 'tevily_header_mobile', 10);

add_filter('gavias-elements/map-api', 'tevily_googlemap_api');
if (!function_exists('tevily_googlemap_api')) {
	function tevily_googlemap_api($key = '')
	{
		return tevily_get_option('map_api_key', '');
	}
}

add_filter('gavias-post-type/slug-portfolio', 'tevily_slug_portfolio');
if (!function_exists('tevily_slug_portfolio')) {
	function tevily_slug_portfolio($key = '')
	{
		return tevily_get_option('slug_portfolio', '');
	}
}

function tevily_setup_admin_setting()
{
	global $pagenow;
	if (is_admin() && isset($_GET['activated']) && $pagenow == 'themes.php') {
		update_option('gaviasthemer_active_post_types', array());
		update_option('thumbnail_size_w', 180);
		update_option('thumbnail_size_h', 180);
		update_option('thumbnail_crop', 1);
		update_option('medium_size_w', 600);
		update_option('medium_size_h', 600);
		update_option('medium_crop', 1);
	}
}
add_action('init', 'tevily_setup_admin_setting');

function tevily_page_class_names($classes)
{
	$post_id = tevily_id();
	$class_el = get_post_meta($post_id, 'tevily_extra_page_class', true);
	if ($class_el) $classes[] = $class_el;
	$classes[] = 'tevily-body-loading';

	if (class_exists('BABE_Settings') && $post_id === (int)BABE_Settings::$settings['confirmation_page']) {
		$classes[] = 'ba-confirmation-page';
	}

	return $classes;
}
add_filter('body_class', 'tevily_page_class_names');

function tevily_nav_items($items, $menu, $args)
{
	if (is_admin()) {
		return $items;
	}
	foreach ($items as $item) {
		if ($item->attr_title == 'same_page') {
			if ($item->attr_title) {
				$item->url .= '?same_page=1';
			}
		}
	}
	return $items;
}

add_filter('wp_get_nav_menu_items', 'tevily_nav_items', 11, 3);

function tevily_post_classes($classes, $class, $post_id)
{
	if (is_single($post_id)) {
		$classes[] = 'post-single-content';
	}
	return $classes;
}
add_filter('post_class', 'tevily_post_classes', 10, 3);
