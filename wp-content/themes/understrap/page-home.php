<?php get_header(); ?>


<!-- Hero section starts here -->
<section class="hero">
	<div class="container">

		<div class="row pt-5">
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center">
				<h5 class="mb-3">INTRODUCING LUCID THEME</h5>

				<h2 class="mb-4">Carefully crafted and beautiful landing page</h2>

				<p class="mb-5">Etiam ullamcorper et turpis eget hendrerit. Praesent varius risus mi, at elementum magna ultricies accumsan. Cras venenatis lacus sed dolor placerat tempus. Morbi blandit at neque ut imperdiet.</p>

				<div class="btn-wrapper">
					<button class="btn btn-primary btn-custom">DOWNLOAD NOW</button>
					<button class="btn btn-custom btn-primary ml-lg-3 ml-md-0 my-md-3 my-3">VIEW FEATURES</button>
				</div>
			</div>
			<div class="align-items-end col-6 d-none d-sm-flex text-right">
				<div class="img-wrapper">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/devices-hero.png">
				</div>
			</div>
		</div>
	</div>

</section>
<!-- Hero section ends here -->

<!-- Features section starts here -->
<section class="features my-5">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<h5 class="text-center">PRODUCT OVERVIEW</h5>
				<h3 class="text-center center">List of amazing features</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 text-center mb-md-4 mb-4">
				<div class="icon m-auto">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/monitor.png">
				</div>
				<h4 class="mb-3">Responsive</h4>
				<p>Fusce fermentum placerat magna ac pharetra. Aliquam euismod elit non ipsum lacinia consectetur.</p>
			</div>
			<div class="col-lg-3 col-md-6 text-center mb-md-4 mb-4">
				<div class="icon m-auto">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/settings.png">
				</div>
				<h4 class="mb-3">Customizable</h4>
				<p>Fusce fermentum placerat magna ac pharetra. Aliquam euismod elit non ipsum lacinia consectetur.</p>
			</div>
			<div class="col-lg-3 col-md-6 text-center mb-md-4 mb-4">
				<div class="icon m-auto">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/like.png">
				</div>
				<h4 class="mb-3">Lovely design</h4>
				<p>Fusce fermentum placerat magna ac pharetra. Aliquam euismod elit non ipsum lacinia consectetur.</p>
			</div>
			<div class="col-lg-3 col-md-6 text-center mb-md-4 mb-4">
				<div class="icon m-auto">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/phone.png">
				</div>
				<h4 class="mb-3">Mobile friendly</h4>
				<p>Fusce fermentum placerat magna ac pharetra. Aliquam euismod elit non ipsum lacinia consectetur.</p>
			</div>
		</div>
	</div>
</section>
<!-- Features section ends here -->

<div class="container-fluid">
	<div class="row">
		<div class="col-12"><hr></div>
	</div>
</div>

<!-- Detail section starts here -->
<section class="detail my-5">
	<div class="container">
		<div class="row">
			<div class="col-6 d-none d-sm-block">				
				<div class="img-wrapper">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/devices-details.png">
				</div>
			</div>
			<div class="col-12 col-sm-6">
				<h5>DIP INTO THE DETAILS</h5>
				<h3 class="left">Beautiful on every device</h3>
				<p class="mt-4">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. </p>
				<ul class="detail-list">
					<li class="mb-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cup.png" class="mr-2">Awesome design</li>
					<li class="mb-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cup.png" class="mr-2">Fully responsive</li>
					<li class="mb-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cup.png" class="mr-2">Retina ready</li>
					<li class="mb-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cup.png" class="mr-2">Tons of features and ease of use</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- Detail section ends here -->

<!-- Bottom section starts here -->
<section class="bottom py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-5 d-flex flex-column justify-content-center">
				<h5>DIP INTO THE DETAILS</h5>
				<h3 class="left">Super easy to customize</h3>
				<p class="mt-3">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
			</div>
			<div class="col-7 d-none d-sm-flex flex-column justify-content-center">				
				<div class="img-wrapper">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/iphone.png">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Bottom section ends here -->

<?php echo do_shortcode("[show-exchange-rates-api]"); ?>

<?php get_footer(); ?>