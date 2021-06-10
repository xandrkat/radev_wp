<?php
/*
 * Template Name: Front Page
 * Template Post Type: page
 */
 
 
get_header();
$products = get_field('front_page_products_slider', 'option');
?>

	<main id="primary" class="site-main container">
	<div class="row">
		<h1 class="page-title"><span class="page-pre-title">-</span> Popular products</h1>
	</div>
	<div class="row">
	<div id="products-slider">
	<?php
		if(!is_null($products)) {
			foreach($products as $product) {
				
				?>

				<div class="">
  <?php echo get_the_post_thumbnail( $product->ID, 'thumbnail', ['class' => 'img-fluid mx-auto']); ?>

  <div class="card-body">
    <h5 class="card-title text-center"><?php echo $product->post_title?></h5>
    <p class="card-text text-center">Starts as: <?php echo wc_get_product( $product->ID )->get_price(); ?>$</p>
  </div>
</div>
				<?php
			}
		}
	?>
</div>
</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
