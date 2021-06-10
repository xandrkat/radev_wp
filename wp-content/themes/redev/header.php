<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package redev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="py-3 mb-4">
    <div class="container-fluid">
		<div class="row">
			<div class="col text-center"><p><?php the_field('header_top_line_text', 'option'); ?></p></div>
			<div class="col text-center"><a href="<?php the_field('header_top_line_url', 'option'); ?>">Special Offers</a></div>
		</div>
    </div>
    <div class="container-fluid">
		<div class="row">
			<div class="col-4">
				<div class="row">
					<div class="col text-center">
						<a href="tel:<?php the_field('header_middle_line_phone_number', 'option'); ?>"><?php the_field('header_middle_line_phone_number', 'option'); ?></a>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<form class="col-12 col-lg-auto mb-3 mb-lg-0">
    	    				<input type="search" class="form-control" placeholder="Search..." aria-label="Search">
    	  				</form>
					</div>
				</div>
			</div>
			<div class="col-4 text-center">
				<a href="<?=site_url()?>" class="logo-link">
					<img class="logo-img img-fluid" src="<?php the_field('header_middle_line_logo', 'option'); ?>" width="115" height="65"  alt="" >
				</a>
			</div>
			<div class="col-4 d-flex align-items-center justify-content-end">
    						<?php global $woocommerce; ?>
    						<a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="d-inline btn btn-outline-primary basket-btn basket-btn_fixed-xs">
    	    					<span class="basket-btn__label"><span>Корзина</span></span>
    	    					<span class="basket-btn__counter">(<?php echo sprintf($woocommerce->cart->cart_contents_count); ?>)</span>
    						</a>
						<a type="button" class="btn btn-outline-primary d-inline">Login</a>

			</div>
		</div>
    </div>

  			<?php wp_nav_menu(
				[
					'theme_location' 	=> 'menu-1',
					'container'     	=> 'nav',
					'container_class'   => 'container-fluid border-top border-bottom',
					'menu_class'        => 'nav justify-content-center', 
					'list_item_class'   => 'nav-item',
    				'link_class'   		=> 'nav-link menu-item'
				]);?>

</header>