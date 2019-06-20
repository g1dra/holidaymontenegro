<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Mountis</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/animations.css">
	<link rel="stylesheet" href="/css/font-awesome.css">
	<link rel="stylesheet" href="/css/main3.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-custom.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image pulse"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class=""></button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<div class="header_absolute ds home">
				<!--topline section visible only on small screens|-->
				<section class="page_topline ds s-py-10 c-my-10">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-12 col-md-4 col-xl-4">
								<div class="media">
									<span class="icon-styled ">
										<i class="fa color-main2 fa-phone"></i>
									</span>
									<div class="media-body">
										<span class="small-text">Booking your trip</span>
										<p>3 (800) 234 3695</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center hidden-below-md">
								<a href="./" class="logo">
									<img src="/images/logo.png" alt="img">
								</a>
							</div>
							<div class="col-12 col-md-4 col-xl-4">
								<div class="media">
									<div class="media-body align-items-end">
										<span class="small-text">our emailaddress</span>
										<p>mountis@office.com</p>
									</div>
									<span class="icon-styled ">
										<i class="fa color-main2 fa-pencil"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--eof topline-->
				<!-- header with two Bootstrap columns - left for logo and right for navigation and includes (search, social icons, additional links and buttons etc -->
				<header class="page_header ls justify-nav-center">
					<div class="container-fluid">
						<div class="row align-items-lg-end align-items-center">
							<div class="col-10 col-md-4 hidden-above-md d-flex">
								<a href="./" class="logo">
									<img src="/images/logo.png" alt="img">
								</a>

								<div class="media-wrap">
									<div class="media">
										<span class="icon-styled ">
											<i class="fa color-main2 fa-phone"></i>
										</span>
										<div class="media-body">
											<span class="small-text">Booking your trip</span>
											<p>3 (800) 234 3695</p>
										</div>
									</div>
									<div class="media">
										<div class="media-body align-items-end">
											<span class="small-text">our emailaddress</span>
											<p>mountis@office.com</p>
										</div>
										<span class="icon-styled ">
											<i class="fa color-main2 fa-pencil"></i>
										</span>
									</div>
								</div>
							</div>

							<div class="col-lg-12 col-1">
								<!-- main nav start -->
								<nav class="top-nav">
									<ul class="nav sf-menu">


										<li class="active">
											<a href="index.html">HomePage</a>
											<ul>
												<li>
													<a href="index.html">MultiPage</a>
												</li>
												<li>
													<a href="index_static.html">Static Intro</a>
												</li>
												<li>
													<a href="index_singlepage.html">Single Page</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="about.html">Pages</a>
											<ul>


												<li>
													<a href="about.html">About</a>
												</li>


												<!-- features -->
												<li>
													<a href="shortcodes_iconbox.html">Shortcodes</a>
													<ul>
														<li>
															<a href="shortcodes_typography.html">Typography</a>
														</li>
														<li>
															<a href="shortcodes_buttons.html">Buttons</a>
														</li>
														<li>
															<a href="shortcodes_pricing.html">Pricing</a>
														</li>
														<li>
															<a href="shortcodes_iconbox.html">Icon Boxes</a>
														</li>
														<li>
															<a href="shortcodes_progress.html">Progress</a>
														</li>
														<li>
															<a href="shortcodes_tabs.html">Tabs &amp; Collapse</a>
														</li>
														<li>
															<a href="shortcodes_bootstrap.html">Bootstrap Elements</a>
														</li>
														<li>
															<a href="shortcodes_animation.html">Animation</a>
														</li>
														<li>
															<a href="shortcodes_icons.html">Template Icons</a>
														</li>
														<li>
															<a href="shortcodes_socialicons.html">Social Icons</a>
														</li>
													</ul>
												</li>
												<!-- eof shortcodes -->

												<li>
													<a href="shortcodes_widgets_default.html">Widgets</a>
													<ul>
														<li>
															<a href="shortcodes_widgets_default.html">Default Widgets</a>
														</li>
														<li>
															<a href="shortcodes_widgets_shop.html">Shop Widgets</a>
														</li>
														<li>
															<a href="shortcodes_widgets_custom.html">Custom Widgets</a>
														</li>
													</ul>

												</li>

												<!-- events -->
												<li>
													<a href="events-left.html">Events</a>
													<ul>
														<li>
															<a href="events-left.html">Left Sidebar</a>
														</li>
														<li>
															<a href="events-right.html">Right Sidebar</a>
														</li>
														<li>
															<a href="events-full.html">Full Width</a>
														</li>
														<li>
															<a href="event-single-left.html">Single Event</a>
															<ul>
																<li>
																	<a href="event-single-left.html">Left Sidebar</a>
																</li>
																<li>
																	<a href="event-single-right.html">Right Sidebar</a>
																</li>
																<li>
																	<a href="event-single-full.html">Full Width</a>
																</li>
															</ul>
														</li>
													</ul>
												</li>
												<!-- eof events -->
												<li>
													<a href="comingsoon.html">Comingsoon</a>
												</li>

												<li>
													<a href="faq.html">FAQ</a>
													<ul>
														<li>
															<a href="faq.html">FAQ</a>
														</li>
														<li>
															<a href="faq2.html">FAQ 2</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="404.html">404</a>
												</li>

											</ul>
										</li>
										<!-- eof pages -->
										<li>
											<a href="routs.html">Routs</a>
											<ul>
												<li>
													<a href="routs.html">Routs</a>
												</li>
												<li>
													<a href="rout-single.html">Single Rout</a>
												</li>
											</ul>
										</li>
										<!-- eof services -->
										<li>
											<a href="#">Features</a>
											<div class="mega-menu">
												<ul class="mega-menu-row">
													<li class="mega-menu-col">
														<a href="#">Headers</a>
														<ul>
															<li>
																<a href="header1.html">Header Type 1</a>
															</li>
															<li>
																<a href="header2.html">Header Type 2</a>
															</li>
															<li>
																<a href="header3.html">Header Type 3</a>
															</li>
															<li>
																<a href="header4.html">Header Type 4</a>
															</li>
															<li>
																<a href="header5.html">Header Type 5</a>
															</li>
															<li>
																<a href="header6.html">Header Type 6</a>
															</li>
														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="#">Side Menus</a>
														<ul>
															<li>
																<a href="header-side.html">Push Left</a>
															</li>
															<li>
																<a href="header-side-right.html">Push Right</a>
															</li>
															<li>
																<a href="header-side-slide.html">Slide Left</a>
															</li>
															<li>
																<a href="header-side-slide-right.html">Slide Right</a>
															</li>
															<li>
																<a href="header-side-sticked.html">Sticked Left</a>
															</li>
															<li>
																<a href="header-side-sticked-right.html">Sticked Right</a>
															</li>
														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="title1.html">Title Sections</a>
														<ul>
															<li>
																<a href="title1.html">Title section 1</a>
															</li>
															<li>
																<a href="title2.html">Title section 2</a>
															</li>
															<li>
																<a href="title3.html">Title section 3</a>
															</li>
															<li>
																<a href="title4.html">Title section 4</a>
															</li>
															<li>
																<a href="title5.html">Title section 5</a>
															</li>
															<li>
																<a href="title6.html">Title section 6</a>
															</li>
														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="footer1.html#footer">Footers</a>
														<ul>
															<li>
																<a href="footer1.html#footer">Footer Type 1</a>
															</li>
															<li>
																<a href="footer2.html#footer">Footer Type 2</a>
															</li>
															<li>
																<a href="footer3.html#footer">Footer Type 3</a>
															</li>
															<li>
																<a href="footer4.html#footer">Footer Type 4</a>
															</li>
															<li>
																<a href="footer5.html#footer">Footer Type 5</a>
															</li>
															<li>
																<a href="footer6.html#footer">Footer Type 6</a>
															</li>
														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="copyright1.html#copyright">Copyright</a>

														<ul>
															<li>
																<a href="copyright1.html#copyright">Copyright 1</a>
															</li>
															<li>
																<a href="copyright2.html#copyright">Copyright 2</a>
															</li>
															<li>
																<a href="copyright3.html#copyright">Copyright 3</a>
															</li>
															<li>
																<a href="copyright4.html#copyright">Copyright 4</a>
															</li>
															<li>
																<a href="copyright5.html#copyright">Copyright 5</a>
															</li>
															<li>
																<a href="copyright6.html#copyright">Copyright 6</a>
															</li>
														</ul>
													</li>

												</ul>
											</div> <!-- eof mega menu -->
										</li>
										<!-- eof features -->
										<!-- gallery -->
										<li>
											<a href="gallery-image.html">Gallery</a>
											<ul>
												<!-- Gallery image only -->
												<li>
													<a href="gallery-image.html">Regular</a>
													<ul>
														<li>
															<a href="gallery-image-2-cols.html">2 columns</a>
														</li>
														<li>
															<a href="gallery-image.html">3 columns</a>
														</li>
														<li>
															<a href="gallery-image-4-cols-fullwidth.html">4 columns fullwidth</a>
														</li>

													</ul>
												</li>
												<!-- eof Gallery image only -->

												<!-- Gallery with title -->
												<li>
													<a href="gallery-title.html">Image With Title</a>
													<ul>
														<li>
															<a href="gallery-title-2-cols.html">2 columns</a>
														</li>
														<li>
															<a href="gallery-title.html">3 column</a>
														</li>
														<li>
															<a href="gallery-title-4-cols-fullwidth.html">4 columns fullwidth</a>
														</li>
													</ul>
												</li>
												<!-- eof Gallery with title -->

												<!-- Gallery with excerpt -->
												<li>
													<a href="gallery-excerpt.html">Extended</a>
													<ul>
														<li>
															<a href="gallery-excerpt-2-cols.html">2 columns</a>
														</li>
														<li>
															<a href="gallery-excerpt.html">3 column</a>
														</li>
														<li>
															<a href="gallery-excerpt-4-cols-fullwidth.html">4 columns fullwdith</a>
														</li>
													</ul>
												</li>
												<!-- eof Gallery with excerpt -->

												<li>
													<a href="gallery-tiled.html">Tiled Gallery</a>
												</li>

												<!-- Gallery item -->
												<li>
													<a href="gallery-single.html">Gallery Item</a>
													<ul>
														<li>
															<a href="gallery-single.html">Style 1</a>
														</li>
														<li>
															<a href="gallery-single2.html">Style 2</a>
														</li>
													</ul>
												</li>
												<!-- eof Gallery item -->
											</ul>
										</li>
										<!-- eof Gallery -->
										<!-- blog -->
										<li>
											<a href="blog-left.html">Tips & Tricks</a>
											<ul>

												<li>
													<a href="blog-right.html">Right Sidebar</a>
												</li>
												<li>
													<a href="blog-left.html">Left Sidebar</a>
												</li>
												<li>
													<a href="blog-full.html">No Sidebar</a>
												</li>
												<li>
													<a href="blog-grid.html">News Grid</a>
												</li>

												<li>
													<a href="blog-single-right.html">Post</a>
													<ul>
														<li>
															<a href="blog-single-right.html">Right Sidebar</a>
														</li>
														<li>
															<a href="blog-single-left.html">Left Sidebar</a>
														</li>
														<li>
															<a href="blog-single-full.html">No Sidebar</a>
														</li>
													</ul>
												</li>

												<li>
													<a href="blog-single-video-right.html">Video Post</a>
													<ul>
														<li>
															<a href="blog-single-video-right.html">Right Sidebar</a>
														</li>
														<li>
															<a href="blog-single-video-left.html">Left Sidebar</a>
														</li>
														<li>
															<a href="blog-single-video-full.html">No Sidebar</a>
														</li>
													</ul>
												</li>

											</ul>
										</li>
										<!-- eof blog -->
										<!-- shop -->
										<li>
											<a href="shop-right.html">Shop</a>
											<ul>
												<li>
													<a href="shop-account-dashboard.html">Account</a>
													<ul>

														<li>
															<a href="shop-account-details.html">Account details</a>
														</li>
														<li>
															<a href="shop-account-addresses.html">Addresses</a>
														</li>
														<li>
															<a href="shop-account-address-edit.html">Edit Address</a>
														</li>
														<li>
															<a href="shop-account-orders.html">Orders</a>
														</li>
														<li>
															<a href="shop-account-order-single.html">Single Order</a>
														</li>
														<li>
															<a href="shop-account-downloads.html">Downloads</a>
														</li>
														<li>
															<a href="shop-account-password-reset.html">Password Reset</a>
														</li>
														<li>
															<a href="shop-account-login.html">Login/Logout</a>
														</li>

													</ul>
												</li>
												<li>
													<a href="shop-right.html">Right Sidebar</a>
												</li>
												<li>
													<a href="shop-left.html">Left Sidebar</a>
												</li>
												<li>
													<a href="shop-product.html">Product</a>
												</li>
												<li>
													<a href="shop-cart.html">Cart</a>
												</li>
												<li>
													<a href="shop-checkout.html">Checkout</a>
												</li>
												<li>
													<a href="shop-order-received.html">Order Received</a>
												</li>

											</ul>
										</li>
										<!-- eof shop -->
										<!-- contacts -->
										<li>
											<a href="contact.html">Contacts</a>
											<ul>
												<li>
													<a href="contact.html">Contact 1</a>
												</li>
												<li>
													<a href="contact2.html">Contact 2</a>
												</li>
												<li>
													<a href="contact3.html">Contact 3</a>
												</li>
												<li>
													<a href="contact4.html">Contact 4</a>
												</li>
											</ul>
										</li>
										<!-- eof contacts -->
										<li>
											<a href="booking.html">Booking</a>
										</li>
									</ul>


								</nav>
								<!-- eof main nav -->
							</div>

						</div>
					</div>
					<!-- header toggler -->
					<span class="toggle_menu"><span></span></span>
				</header>

			</div>

			<section class="page_slider">
				<div class="flexslider vertical home_slider">
					<ul class="slides">
						<li class="ds s-overlay cover-image text-center">
							<span class="social-icons animate" data-animation="fadeInUp">
								<a href="#" class="fa fa-facebook bg-light border-icon rounded-icon" title="facebook"></a>
								<a href="#" class="fa fa-twitter bg-light border-icon rounded-icon" title="twitter"></a>
								<a href="#" class="fa fa-google-plus bg-light border-icon rounded-icon" title="google"></a>
							</span>
							<video muted loop id="myVideo">
								<source src="/images/Travel_Stock_Footage_Reel-HD_4K_Royalty-free.mp4" data-time="74" type="video/mp4">
							</video>
							<img src="/images/slide01.jpg" alt="img">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="intro_layers_wrapper intro_text_bottom">
											<div class="intro_layers">
												<div class="intro-layer">
													<span class="small-text color-main3">we are hiking and outdoor club</span>
												</div>
												<div class="intro-layer mt-10">
													<h2><span class="semibold">Let's Enjoy</span> the Wonders of the Nature <span class="semibold">Together</span></h2>
												</div>
												<div class="divider-35 hidden-below-sm"></div>
												<div class="intro-layer hidden-below-sm">
													<p>Prosciutto tail venison burgdoggen hamburger frankfurter pork picanha landjaeger. Chicken ham hock picanha meatloaf kielbasa sausage bresaol</p>
												</div>
												<div class="divider-xl-50"></div>
												<div class="divider-30 hidden-xl"></div>
												<div class="intro-layer ">
													<button class="btn-play">
														<i class="fa fa-play"></i>
														<i class="fa fa-pause"></i>
													</button>
												</div>
											</div> <!-- eof .intro_layers -->
										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
						</li>
						<li class="ds s-overlay cover-image text-center">
							<span class="social-icons animate" data-animation="fadeInUp">
								<a href="#" class="fa fa-facebook bg-light border-icon rounded-icon" title="facebook"></a>
								<a href="#" class="fa fa-twitter bg-light border-icon rounded-icon" title="twitter"></a>
								<a href="#" class="fa fa-google-plus bg-light border-icon rounded-icon" title="google"></a>
							</span>
							<img src="/images/slide02.jpg" alt="img">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="intro_layers_wrapper intro_text_bottom">
											<div class="intro_layers">
												<div class="intro-layer">
													<span class="small-text color-main3">we are hiking and outdoor club</span>
												</div>
												<div class="intro-layer mt-10">
													<h2><span class="semibold">It Feels Good</span> to Be Lost In
														The Right <span class="semibold">Direction</span></h2>
												</div>
												<div class="divider-35 hidden-below-sm"></div>
												<div class="intro-layer hidden-below-sm">
													<p>Prosciutto tail venison burgdoggen hamburger frankfurter pork picanha landjaeger. Chicken ham hock picanha meatloaf kielbasa sausage bresaol</p>
												</div>
												<div class="divider-xl-50"></div>
												<div class="divider-30 hidden-xl"></div>
												<div class="intro-layer ">
													<a href="about.html" class="btn btn-maincolor">about us</a>
												</div>
											</div> <!-- eof .intro_layers -->
										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
						</li>
						<li class="ds s-overlay cover-image text-center">
							<span class="social-icons animate" data-animation="fadeInUp">
								<a href="#" class="fa fa-facebook bg-light border-icon rounded-icon" title="facebook"></a>
								<a href="#" class="fa fa-twitter bg-light border-icon rounded-icon" title="twitter"></a>
								<a href="#" class="fa fa-google-plus bg-light border-icon rounded-icon" title="google"></a>
							</span>
							<img src="/images/slide03.jpg" alt="img">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="intro_layers_wrapper intro_text_bottom">
											<div class="intro_layers">
												<div class="intro-layer">
													<span class="small-text color-main3">we are hiking and outdoor club</span>
												</div>
												<div class="intro-layer mt-10">
													<h2><span class="semibold">It's Time</span> to Start Your
														Amazing <span class="semibold">Adventures</span></h2>
												</div>
												<div class="divider-35 hidden-below-sm"></div>
												<div class="intro-layer hidden-below-sm">
													<p>Prosciutto tail venison burgdoggen hamburger frankfurter pork picanha landjaeger. Chicken ham hock picanha meatloaf kielbasa sausage bresaol</p>
												</div>
												<div class="divider-xl-50"></div>
												<div class="divider-30 hidden-xl"></div>
												<div class="intro-layer ">
													<a href="booking.html" class="btn btn-maincolor">book trip</a>
												</div>
											</div> <!-- eof .intro_layers -->
										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container-fluid -->
						</li>
					</ul>
				</div> <!-- eof flexslider -->
			</section>

			<section id="about" class="ls s-pt-70 s-pb-65 s-pt-md-120 s-pb-md-105 s-pb-xl-85 s-pt-xl-65 about-section overflow-visible">
				<div class="divider-80 d-none d-xl-block"></div>
				<div class="image_cover"></div>
				<div class="container">
					<div class="row d-flex justify-content-start">
						<div class="col-12 col-lg-7 col-xl-6 ">
							<p class="top-subtitle">Discover story</p>
							<h3 class="section-heading">Of the Mountis Trip <span class="back">story</span></h3>
							<p>
								Kevin ribeye pork loin tenderloin, <span class="underline">spare ribs corned beef chicken.</span> Pancetta pork venison cupim bresaola.
							</p>

							<p class="mt--5">
								Rump shoulder ribeye. Ribeye turducken pastrami, hamburger shoulder <span class="underline">burgdoggen cupim</span> turkey. Jerky beef ribs biltong cupim turducken ribeye swine kevin pork chop shankle frankfurter. Turkey cupim alcatra, pork loin turducken. <span class="links-maincolor3"><a class="more text-uppercase" href="blog-single-@@type.html">read more<i class="fa fa-level-down" aria-hidden="true"></i></a></span>
							</p>

							<ul class="list-styled color-darkgrey mt-30">
								<li>Cruising Destination Ideas</li>
								<li>Deluxe Moderate And Value Disney</li>
								<li>France On The Road</li>
							</ul>
						</div>
						<div class="divider-60 d-none d-xl-block"></div>
					</div>
				</div>
			</section>

			<section id="gallery" class="ls ms gallery-section  c-gutter-0 c-mb-0">
				<div class="container-fluid">
					<div class="row isotope-wrapper" data-filters=".gallery-filters">

						<div class="col-xl-6 grid-item backpacking hikes adventure_trips d-none d-xl-flex">

							<div class="vertical-item stamp-wrap gallery-title ">
								<div class="item-media">
									<img src="/images/gallery/01.png" alt="img">
								</div>
								<div class="gallery-header stamp">
									<div class="text-left content">
										<p class="top-subtitle">photo from our clients and their trips</p>
										<h3 class="section-heading">From Our Large Gallery<span class="back">Photos</span></h3>
										<div class="filters gallery-filters small-text text-lg-right">
											<a href="#" data-filter="*" class="active selected">All</a>
											<a href="#" data-filter=".hikes">Day Hikes</a>
											<a href="#" data-filter=".backpacking">Backpacking</a>
											<a href="#" data-filter=".adventure_trips">Adventure Trips</a>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="col-xl-3 col-md-6 grid-item backpacking hikes adventure_trips">

							<div class="vertical-item gallery-title text-center ">
								<div class="item-media gradientdarken-background">
									<img src="/images/gallery/01.jpg" alt="img">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content">
									<h5 class="mt-4">
										<a href="gallery-single.html">See The Unmatched Beauty</a>
									</h5>
									<div class="links-wrap">
										<a class="link-zoom photoswipe-link" title="" href="/images/gallery/01.jpg"></a>
										<a class="link-anchor" title="" href="gallery-single.html"></a>
									</div>
								</div>
							</div>

						</div>

						<div class="col-xl-3 col-md-6 grid-item backpacking">
							<div class="vertical-item gallery-title text-center ">
								<div class="item-media gradientdarken-background">
									<img src="/images/gallery/02.jpg" alt="img">
									<div class="media-links">

									</div>
								</div>
								<div class="item-content">
									<h5 class="mt-4">
										<a href="gallery-single.html">Como Mantener Tu Salud</a>
									</h5>
									<div class="links-wrap">
										<a class="link-zoom photoswipe-link" title="" href="/images/gallery/02.jpg"></a>
										<a class="link-anchor" title="" href="gallery-single.html"></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 grid-item adventure_trips">
							<div class="vertical-item gallery-title text-center ">
								<div class="item-media gradientdarken-background">
									<img src="/images/gallery/03.jpg" alt="img">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content">
									<h5 class="mt-4">
										<a href="gallery-single.html">Last Minute Festive Packages</a>
									</h5>
									<div class="links-wrap">
										<a class="link-zoom photoswipe-link" title="" href="/images/gallery/03.jpg"></a>
										<a class="link-anchor" title="" href="gallery-single.html"></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 grid-item hikes">
							<div class="vertical-item gallery-title text-center ">
								<div class="item-media gradientdarken-background">
									<img src="/images/gallery/04.jpg" alt="img">
									<div class="media-links">

									</div>
								</div>
								<div class="item-content">
									<h5 class="mt-4">
										<a href="gallery-single.html">Cost Cutting Ideas</a>
									</h5>
									<div class="links-wrap">
										<a class="link-zoom photoswipe-link" title="" href="/images/gallery/04.jpg"></a>
										<a class="link-anchor" title="" href="gallery-single.html"></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 grid-item adventure_trips">
							<div class="vertical-item gallery-title text-center ">
								<div class="item-media gradientdarken-background">
									<img src="/images/gallery/05.jpg" alt="img">
									<div class="media-links">

									</div>
								</div>
								<div class="item-content">
									<h5 class="mt-4">
										<a href="gallery-single.html">Take A Romantic Break In A Boutique Hotel</a>
									</h5>
									<div class="links-wrap">
										<a class="link-zoom photoswipe-link" title="" href="/images/gallery/05.jpg"></a>
										<a class="link-anchor" title="" href="gallery-single.html"></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 grid-item  backpackinghikes">
							<div class="vertical-item gallery-title text-center ">
								<div class="item-media gradientdarken-background">
									<img src="/images/gallery/06.jpg" alt="img">
									<div class="media-links">

									</div>
								</div>
								<div class="item-content">
									<h5 class="mt-4">
										<a href="gallery-single.html">Train Travel On Track</a>
									</h5>
									<div class="links-wrap">
										<a class="link-zoom photoswipe-link" title="" href="/images/gallery/06.jpg"></a>
										<a class="link-anchor" title="" href="gallery-single.html"></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 grid-item backpacking">
							<div class="vertical-item gallery-title text-center ">
								<div class="item-media gradientdarken-background">
									<img src="/images/gallery/07.jpg" alt="img">
									<div class="media-links">

									</div>
								</div>
								<div class="item-content">
									<h5 class="mt-4">
										<a href="gallery-single.html">How To Maintain Your Mental</a>
									</h5>
									<div class="links-wrap">
										<a class="link-zoom photoswipe-link" title="" href="/images/gallery/07.jpg"></a>
										<a class="link-anchor" title="" href="gallery-single.html"></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 grid-item adventure_trips">
							<div class="vertical-item gallery-title text-center ">
								<div class="item-media gradientdarken-background">
									<img src="/images/gallery/08.jpg" alt="img">
									<div class="media-links">

									</div>
								</div>
								<div class="item-content">
									<h5 class="mt-4">
										<a href="gallery-single.html">San Diego Vacation Rental</a>
									</h5>
									<div class="links-wrap">
										<a class="link-zoom photoswipe-link" title="" href="/images/gallery/08.jpg"></a>
										<a class="link-anchor" title="" href="gallery-single.html"></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 grid-item hikes">

							<div class="vertical-item gallery-title text-center ">
								<div class="item-media gradientdarken-background">
									<img src="/images/gallery/09.jpg" alt="img">
									<div class="media-links">

									</div>
								</div>
								<div class="item-content">
									<h5 class="mt-4">
										<a href="gallery-single.html">Choose The Perfect</a>
									</h5>
									<div class="links-wrap">
										<a class="link-zoom photoswipe-link" title="" href="/images/gallery/09.jpg"></a>
										<a class="link-anchor" title="" href="gallery-single.html"></a>
									</div>
								</div>
							</div>

						</div>

						<div class="col-xl-3 col-md-6 grid-item backpacking hikes adventure_trips hidden-below-md">

							<div class="vertical-item stamp-wrap last gallery-title ">
								<div class="item-media">
									<img src="/images/gallery/00.png" alt="img">
								</div>
								<div class="gallery-header stamp view-more">
									<div class="text-left">
										<a class="text-uppercase" href="gallery-title-4-cols-fullwidth.html">view more photos</a>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="mt-30 hidden-above-md"></div>
					<div class="row">
						<div class="col-12 text-center d-md-none">
							<a class="btn btn-maincolor mb-0" href="gallery-title-4-cols-fullwidth.html">view more photos</a>
						</div>
					</div>
					<div class="mb-80 hidden-above-md"></div>
				</div>
			</section>

			<section id="team" class="ls team-section s-pt-65 s-pb-80 s-pb-md-120 s-pt-md-105 s-pb-xl-160 s-pt-xl-145 c-mb-30">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<p class="top-subtitle">Amazing staff</p>
							<h3 class="section-heading d-inline-block">Meet Our Team <span class="back">team</span></h3>
							<div class="mt--15"></div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="vertical-item content-padding text-center">
								<div class="item-media">
									<img src="/images/team/01.jpg" alt="img">
									<div class="media-links">
										<a class="abs-link" title="" href="team-single.html"></a>
									</div>
								</div>
								<div class="item-content hero-bg">
									<h5>
										<a href="team-single.html">Connor Willis</a>
									</h5>

									<p class="small-text mb-2 color-main3">
										Cortina, Italy
									</p>
									<p class="social-icons">

										<a href="#" class="fa fa-facebook" title="facebook"></a>
										<a href="#" class="fa fa-twitter" title="twitter"></a>
										<a href="#" class="fa fa-google-plus" title="google"></a>

									</p>

								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="vertical-item content-padding text-center">
								<div class="item-media">
									<img src="/images/team/02.jpg" alt="img">
									<div class="media-links">
										<a class="abs-link" title="" href="team-single.html"></a>
									</div>
								</div>
								<div class="item-content hero-bg">
									<h5>
										<a href="team-single.html">Brent Wright</a>
									</h5>

									<p class="small-text mb-2 color-main3">
										Chamon, France
									</p>
									<p class="social-icons">

										<a href="#" class="fa fa-facebook" title="facebook"></a>
										<a href="#" class="fa fa-twitter" title="twitter"></a>
										<a href="#" class="fa fa-google-plus" title="google"></a>

									</p>

								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="vertical-item content-padding text-center">
								<div class="item-media">
									<img src="/images/team/03.jpg" alt="img">
									<div class="media-links">
										<a class="abs-link" title="" href="team-single.html"></a>
									</div>
								</div>
								<div class="item-content hero-bg">
									<h5>
										<a href="team-single.html">Joshua Mendez</a>
									</h5>

									<p class="small-text mb-2 color-main3">
										Kitzbüh, Austria
									</p>
									<p class="social-icons">

										<a href="#" class="fa fa-facebook" title="facebook"></a>
										<a href="#" class="fa fa-twitter" title="twitter"></a>
										<a href="#" class="fa fa-google-plus" title="google"></a>

									</p>

								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="vertical-item content-padding text-center">
								<div class="item-media">
									<img src="/images/team/04.jpg" alt="img">
									<div class="media-links">
										<a class="abs-link" title="" href="team-single.html"></a>
									</div>
								</div>
								<div class="item-content hero-bg">
									<h5>
										<a href="team-single.html">Andre Saunders</a>
									</h5>

									<p class="small-text mb-2 color-main3">
										Bentin, USA
									</p>
									<p class="social-icons">

										<a href="#" class="fa fa-facebook" title="facebook"></a>
										<a href="#" class="fa fa-twitter" title="twitter"></a>
										<a href="#" class="fa fa-google-plus" title="google"></a>

									</p>

								</div>
							</div>
						</div>
					</div>
					<div class="mt--30"></div>
				</div>
			</section>

			<section id="quote" class="ds s-pt-80 s-pb-130 s-pt-md-115 s-pb-md-195 s-pt-xl-125 s-pb-xl-160 s-parallax s-overlay  testimonials-section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="owl-carousel" data-loop="false" data-margin="30" data-nav="false" data-dots="true" data-center="false" data-items="1" data-autoplay="true" data-responsive-xs="1" data-responsive-sm="1" data-responsive-md="1" data-responsive-lg="1">
								<div class="row">
									<div class="col-12 col-xl-6">
										<blockquote class="quote-item text-center">
											<h5>Elmer Morrison</h5>
											<p class="small-text color-main3">
												Manager
											</p>

											<span class="quote-icon"><img src="/images/quote.png" alt="img"></span>

											<p>
												Bresaola pancetta jowl turkey shank, chuck porchetta tenderloin hamburger picanha ground round!
											</p>
											<div class="divider-30 hidden-above-md"></div>
											<div class="divider-30 hidden-below-md"></div>
											<div>
												<img src="/images/signature.png" alt="img">
											</div>
										</blockquote>
									</div>
									<div class="col-lg-6 d-none d-xl-block">
										<img class="pl-lg-3" src="/images/quote_1.jpg" alt="img">
									</div>
								</div>
								<div class="row">
									<div class="col-12 col-xl-6">
										<blockquote class="quote-item text-center">
											<h5>Andre Franklin</h5>
											<p class="small-text color-main3">
												Manager
											</p>

											<span class="quote-icon"><img src="/images/quote.png" alt="img"></span>

											<p>
												Strip steak alcatra chuck rump cow tri-tip short loin fatback pancetta jowl pork belly doner short ribs steak alcatra.
											</p>
											<div class="divider-30 hidden-above-md"></div>
											<div class="divider-30 hidden-below-md"></div>
											<div>
												<img src="/images/signature.png" alt="img">
											</div>
										</blockquote>
									</div>
									<div class="col-lg-6 d-none d-xl-block">
										<img class="pl-lg-3" src="/images/quote_2.jpg" alt="img">
									</div>
								</div>
								<div class="row">
									<div class="col-12 col-xl-6">
										<blockquote class="quote-item text-center">
											<h5>Mittie Robertson</h5>
											<p class="small-text color-main3">
												Manager
											</p>

											<span class="quote-icon"><img src="/images/quote.png" alt="img"></span>

											<p>
												Tail strip steak beef pancetta short loin pork burgdoggen doner venison meatball turducken steak beef pancetta.
											</p>
											<div class="divider-30 hidden-above-md"></div>
											<div class="divider-30 hidden-below-md"></div>
											<div>
												<img src="/images/signature.png" alt="img">
											</div>
										</blockquote>
									</div>
									<div class="col-lg-6 d-none d-xl-block">
										<img class="pl-lg-3" src="/images/quote_3.jpg" alt="img">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="trips" class="ls section-trips routs-main routs s-py-80 s-py-md-120 s-py-xl-160 c-gutter-0 container-px-5">
				<div class="mt--15"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 text-center">
							<p class="top-subtitle">Discover Our</p>
							<h3 class="section-heading d-inline-block">Featured Trips<span class="back">Trips</span></h3>
						</div>
						<div class="divider-10 hidden-xs hidden-sm"></div>
						<div class="col-12">
							<div class="row justify-content-center">
								<div class="col-xl-6">
									<div class="filters gallery-filters small-text text-lg-right">
										<a href="#" data-filter="*" class="active selected">All</a>
										<a href="#" data-filter=".private">PRIVATE HIKING TOURS</a>
										<a href="#" data-filter=".group">GROUP HIKING TOURS</a>
										<a href="#" data-filter=".driving">DRIVING TOURS</a>
									</div>
								</div>
								<div class="col-xl-6">
									<form class="routs-form">
										<div class="form-group has-placeholder">
											<label for="location">Locations</label>
											<select name="location" id="location">
												<option value="" selected="selected">locations</option>
												<option value="Canada">Canada</option>
												<option value="USA">USA</option>
												<option value="Spain">Spain</option>
											</select>
										</div>
										<div class="form-group has-placeholder">
											<label for="levels">Levels</label>
											<select name="levels" id="levels">
												<option value="" selected="selected">Levels</option>
												<option value="low">low</option>
												<option value="medium">medium</option>
												<option value="high">high</option>
											</select>
										</div>
										<div class="form-group has-placeholder">
											<label for="season">Seasons</label>
											<select name="season" id="season">
												<option value="" selected="selected">Seasons</option>
												<option value="winter">winter</option>
												<option value="summer">summer</option>
												<option value="autumn">autumn</option>
												<option value="spring">spring</option>
											</select>
										</div>
									</form>
								</div>
							</div>
							<div class="col-12 c-gutter-0">
								<div class="owl-carousel" data-loop="false" data-margin="0" data-nav="true" data-dots="false" data-center="false" data-items="3" data-autoplay="true" data-responsive-xs="1" data-responsive-sm="2" data-responsive-md="3" data-responsive-lg="4" data-filters=".gallery-filters">
									<div class="vertical-item gallery-title text-center  private driving">
										<div class="price">
											<span>from 320$</span>
										</div>
										<div class="item-media gradientdarken-background">
											<img src="/images/routs/01.jpg" alt="img">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h4 class="mt-4">
												<a href="rout-single.html">Mountis Track # 1</a>
											</h4>
											<span class="small-text subtitle">
												mar 25 - apr 18 / Connor Willis
											</span>
											<ul class="data-wrap">
												<li>
													<span class="title">Days</span>
													<span class="data">9-11</span>
												</li>
												<li>
													<span class="title">Max Group</span>
													<span class="data">15 (1)</span>
												</li>
												<li>
													<span class="title">Avg. Temp </span>
													<span class="data">80°F / 25°C</span>
												</li>
												<li>
													<span class="title">Difficultly</span>
													<span class="data">low</span>
												</li>
												<li>
													<span class="title">Type</span>
													<span class="data">DH/CC</span>
												</li>
												<li>
													<span class="title">Length</span>
													<span class="data">123 miles</span>
												</li>
												<li>
													<span class="title">Height</span>
													<span class="data">1200 ft+/-</span>
												</li>
												<li>
													<span class="title">Country</span>
													<span class="data">Canada</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="vertical-item gallery-title text-center group">
										<div class="price">
											<span>from 129$</span>
										</div>
										<div class="item-media gradientdarken-background">
											<img src="/images/routs/02.jpg" alt="img">
											<div class="media-links">

											</div>
										</div>
										<div class="item-content">
											<h4 class="mt-4">
												<a href="rout-single.html">Mountis Track # 2</a>
											</h4>
											<span class="small-text subtitle">
												mar 12 - mar 28 / Brent Wright
											</span>
											<ul class="data-wrap">
												<li>
													<span class="title">Days</span>
													<span class="data">9-11</span>
												</li>
												<li>
													<span class="title">Max Group</span>
													<span class="data">15 (1)</span>
												</li>
												<li>
													<span class="title">Avg. Temp </span>
													<span class="data">80°F / 25°C</span>
												</li>
												<li>
													<span class="title">Difficultly</span>
													<span class="data">low</span>
												</li>
												<li>
													<span class="title">Type</span>
													<span class="data">DH/CC</span>
												</li>
												<li>
													<span class="title">Length</span>
													<span class="data">123 miles</span>
												</li>
												<li>
													<span class="title">Height</span>
													<span class="data">1200 ft+/-</span>
												</li>
												<li>
													<span class="title">Country</span>
													<span class="data">Canada</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="vertical-item gallery-title text-center driving">
										<div class="price">
											<span>from 250$</span>
										</div>
										<div class="item-media gradientdarken-background">
											<img src="/images/routs/03.jpg" alt="img">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h4 class="mt-4">
												<a href="rout-single.html">Mountis Track # 3</a>
											</h4>
											<span class="small-text subtitle">
												mar 30 - apr 8 / Teresa Jefferson
											</span>
											<ul class="data-wrap">
												<li>
													<span class="title">Days</span>
													<span class="data">9-11</span>
												</li>
												<li>
													<span class="title">Max Group</span>
													<span class="data">15 (1)</span>
												</li>
												<li>
													<span class="title">Avg. Temp </span>
													<span class="data">80°F / 25°C</span>
												</li>
												<li>
													<span class="title">Difficultly</span>
													<span class="data">low</span>
												</li>
												<li>
													<span class="title">Type</span>
													<span class="data">DH/CC</span>
												</li>
												<li>
													<span class="title">Length</span>
													<span class="data">123 miles</span>
												</li>
												<li>
													<span class="title">Height</span>
													<span class="data">1200 ft+/-</span>
												</li>
												<li>
													<span class="title">Country</span>
													<span class="data">Canada</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="vertical-item gallery-title text-center private">
										<div class="price">
											<span>from 230$</span>
										</div>
										<div class="item-media gradientdarken-background">
											<img src="/images/routs/04.jpg" alt="img">
											<div class="media-links">

											</div>
										</div>
										<div class="item-content">
											<h4 class="mt-4">
												<a href="rout-single.html">Mountis Track # 4</a>
											</h4>
											<span class="small-text subtitle">
												mar 30 - apr 12 / Andre Saunders
											</span>
											<ul class="data-wrap">
												<li>
													<span class="title">Days</span>
													<span class="data">9-11</span>
												</li>
												<li>
													<span class="title">Max Group</span>
													<span class="data">15 (1)</span>
												</li>
												<li>
													<span class="title">Avg. Temp </span>
													<span class="data">80°F / 25°C</span>
												</li>
												<li>
													<span class="title">Difficultly</span>
													<span class="data">low</span>
												</li>
												<li>
													<span class="title">Type</span>
													<span class="data">DH/CC</span>
												</li>
												<li>
													<span class="title">Length</span>
													<span class="data">123 miles</span>
												</li>
												<li>
													<span class="title">Height</span>
													<span class="data">1200 ft+/-</span>
												</li>
												<li>
													<span class="title">Country</span>
													<span class="data">Canada</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="vertical-item gallery-title text-center driving">
										<div class="price">
											<span>from 320$</span>
										</div>
										<div class="item-media gradientdarken-background">
											<img src="/images/routs/05.jpg" alt="img">
											<div class="media-links">

											</div>
										</div>
										<div class="item-content">
											<h4 class="mt-4">
												<a href="rout-single.html">Mountis Track # 5</a>
											</h4>
											<span class="small-text subtitle">
												mar 25 - apr 18 / Andre Saunders
											</span>
											<ul class="data-wrap">
												<li>
													<span class="title">Days</span>
													<span class="data">9-11</span>
												</li>
												<li>
													<span class="title">Max Group</span>
													<span class="data">15 (1)</span>
												</li>
												<li>
													<span class="title">Avg. Temp </span>
													<span class="data">80°F / 25°C</span>
												</li>
												<li>
													<span class="title">Difficultly</span>
													<span class="data">low</span>
												</li>
												<li>
													<span class="title">Type</span>
													<span class="data">DH/CC</span>
												</li>
												<li>
													<span class="title">Length</span>
													<span class="data">123 miles</span>
												</li>
												<li>
													<span class="title">Height</span>
													<span class="data">1200 ft+/-</span>
												</li>
												<li>
													<span class="title">Country</span>
													<span class="data">Canada</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="vertical-item gallery-title text-center private">
										<div class="price">
											<span>from 129$</span>
										</div>
										<div class="item-media gradientdarken-background">
											<img src="/images/routs/06.jpg" alt="img">
											<div class="media-links">

											</div>
										</div>
										<div class="item-content">
											<h4 class="mt-4">
												<a href="rout-single.html">Mountis Track # 6</a>
											</h4>
											<span class="small-text subtitle">
												mar 25 - apr 18 / Brent Wright
											</span>
											<ul class="data-wrap">
												<li>
													<span class="title">Days</span>
													<span class="data">9-11</span>
												</li>
												<li>
													<span class="title">Max Group</span>
													<span class="data">15 (1)</span>
												</li>
												<li>
													<span class="title">Avg. Temp </span>
													<span class="data">80°F / 25°C</span>
												</li>
												<li>
													<span class="title">Difficultly</span>
													<span class="data">low</span>
												</li>
												<li>
													<span class="title">Type</span>
													<span class="data">DH/CC</span>
												</li>
												<li>
													<span class="title">Length</span>
													<span class="data">123 miles</span>
												</li>
												<li>
													<span class="title">Height</span>
													<span class="data">1200 ft+/-</span>
												</li>
												<li>
													<span class="title">Country</span>
													<span class="data">Canada</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="vertical-item gallery-title text-center group">
										<div class="price">
											<span>from 250$</span>
										</div>
										<div class="item-media gradientdarken-background">
											<img src="/images/routs/07.jpg" alt="img">
											<div class="media-links">

											</div>
										</div>
										<div class="item-content">
											<h4 class="mt-4">
												<a href="rout-single.html">Mountis Track # 7</a>
											</h4>
											<span class="small-text subtitle">
												mar 25 - apr 18 / Joshua Mendez
											</span>
											<ul class="data-wrap">
												<li>
													<span class="title">Days</span>
													<span class="data">9-11</span>
												</li>
												<li>
													<span class="title">Max Group</span>
													<span class="data">15 (1)</span>
												</li>
												<li>
													<span class="title">Avg. Temp </span>
													<span class="data">80°F / 25°C</span>
												</li>
												<li>
													<span class="title">Difficultly</span>
													<span class="data">low</span>
												</li>
												<li>
													<span class="title">Type</span>
													<span class="data">DH/CC</span>
												</li>
												<li>
													<span class="title">Length</span>
													<span class="data">123 miles</span>
												</li>
												<li>
													<span class="title">Height</span>
													<span class="data">1200 ft+/-</span>
												</li>
												<li>
													<span class="title">Country</span>
													<span class="data">Canada</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="vertical-item gallery-title text-center driving">
										<div class="price">
											<span>from 230$</span>
										</div>
										<div class="item-media gradientdarken-background">
											<img src="/images/routs/08.jpg" alt="img">
											<div class="media-links">

											</div>
										</div>
										<div class="item-content">
											<h4 class="mt-4">
												<a href="rout-single.html">Mountis Track # 8</a>
											</h4>
											<span class="small-text subtitle">
												mar 25 - apr 18 / Andre Saunders
											</span>
											<ul class="data-wrap">
												<li>
													<span class="title">Days</span>
													<span class="data">9-11</span>
												</li>
												<li>
													<span class="title">Max Group</span>
													<span class="data">15 (1)</span>
												</li>
												<li>
													<span class="title">Avg. Temp </span>
													<span class="data">80°F / 25°C</span>
												</li>
												<li>
													<span class="title">Difficultly</span>
													<span class="data">low</span>
												</li>
												<li>
													<span class="title">Type</span>
													<span class="data">DH/CC</span>
												</li>
												<li>
													<span class="title">Length</span>
													<span class="data">123 miles</span>
												</li>
												<li>
													<span class="title">Height</span>
													<span class="data">1200 ft+/-</span>
												</li>
												<li>
													<span class="title">Country</span>
													<span class="data">Canada</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="vertical-item gallery-title text-center private">
										<div class="item-media gradientdarken-background">
											<div class="price">
												<span>from 320$</span>
											</div>
											<img src="/images/routs/09.jpg" alt="img">
											<div class="media-links">

											</div>
										</div>
										<div class="item-content">
											<h4 class="mt-4">
												<a href="rout-single.html">Mountis Track # 9</a>
											</h4>
											<span class="small-text subtitle">
												mar 25 - apr 18 / Andre Saunders
											</span>
											<ul class="data-wrap">
												<li>
													<span class="title">Days</span>
													<span class="data">9-11</span>
												</li>
												<li>
													<span class="title">Max Group</span>
													<span class="data">15 (1)</span>
												</li>
												<li>
													<span class="title">Avg. Temp </span>
													<span class="data">80°F / 25°C</span>
												</li>
												<li>
													<span class="title">Difficultly</span>
													<span class="data">low</span>
												</li>
												<li>
													<span class="title">Type</span>
													<span class="data">DH/CC</span>
												</li>
												<li>
													<span class="title">Length</span>
													<span class="data">123 miles</span>
												</li>
												<li>
													<span class="title">Height</span>
													<span class="data">1200 ft+/-</span>
												</li>
												<li>
													<span class="title">Country</span>
													<span class="data">Canada</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="vertical-item gallery-title text-center driving">
										<div class="price">
											<span>from 129$</span>
										</div>
										<div class="item-media gradientdarken-background">
											<img src="/images/routs/10.jpg" alt="img">
											<div class="media-links">

											</div>
										</div>
										<div class="item-content">
											<h4 class="mt-4">
												<a href="rout-single.html">Mountis Track # 10</a>
											</h4>
											<span class="small-text subtitle">
												mar 25 - apr 18 / Connor Willis
											</span>
											<ul class="data-wrap">
												<li>
													<span class="title">Days</span>
													<span class="data">9-11</span>
												</li>
												<li>
													<span class="title">Max Group</span>
													<span class="data">15 (1)</span>
												</li>
												<li>
													<span class="title">Avg. Temp </span>
													<span class="data">80°F / 25°C</span>
												</li>
												<li>
													<span class="title">Difficultly</span>
													<span class="data">low</span>
												</li>
												<li>
													<span class="title">Type</span>
													<span class="data">DH/CC</span>
												</li>
												<li>
													<span class="title">Length</span>
													<span class="data">123 miles</span>
												</li>
												<li>
													<span class="title">Height</span>
													<span class="data">1200 ft+/-</span>
												</li>
												<li>
													<span class="title">Country</span>
													<span class="data">Canada</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="vertical-item gallery-title text-center private">
										<div class="price">
											<span>from 250$</span>
										</div>
										<div class="item-media gradientdarken-background">
											<img src="/images/routs/11.jpg" alt="img">
											<div class="media-links">

											</div>
										</div>
										<div class="item-content">
											<h4 class="mt-4">
												<a href="rout-single.html">Mountis Track # 11</a>
											</h4>
											<span class="small-text subtitle">
												mar 25 - apr 18 / Joshua Mendez
											</span>
											<ul class="data-wrap">
												<li>
													<span class="title">Days</span>
													<span class="data">9-11</span>
												</li>
												<li>
													<span class="title">Max Group</span>
													<span class="data">15 (1)</span>
												</li>
												<li>
													<span class="title">Avg. Temp </span>
													<span class="data">80°F / 25°C</span>
												</li>
												<li>
													<span class="title">Difficultly</span>
													<span class="data">low</span>
												</li>
												<li>
													<span class="title">Type</span>
													<span class="data">DH/CC</span>
												</li>
												<li>
													<span class="title">Length</span>
													<span class="data">123 miles</span>
												</li>
												<li>
													<span class="title">Height</span>
													<span class="data">1200 ft+/-</span>
												</li>
												<li>
													<span class="title">Country</span>
													<span class="data">Canada</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="vertical-item gallery-title text-center group">
										<div class="price">
											<span>from 230$</span>
										</div>
										<div class="item-media gradientdarken-background">
											<img src="/images/routs/12.jpg" alt="img">
											<div class="media-links">

											</div>
										</div>
										<div class="item-content">
											<h4 class="mt-4">
												<a href="rout-single.html">Mountis Track # 12</a>
											</h4>
											<span class="small-text subtitle">
												mar 25 - apr 18 / Andre Saunders
											</span>
											<ul class="data-wrap">
												<li>
													<span class="title">Days</span>
													<span class="data">9-11</span>
												</li>
												<li>
													<span class="title">Max Group</span>
													<span class="data">15 (1)</span>
												</li>
												<li>
													<span class="title">Avg. Temp </span>
													<span class="data">80°F / 25°C</span>
												</li>
												<li>
													<span class="title">Difficultly</span>
													<span class="data">low</span>
												</li>
												<li>
													<span class="title">Type</span>
													<span class="data">DH/CC</span>
												</li>
												<li>
													<span class="title">Length</span>
													<span class="data">123 miles</span>
												</li>
												<li>
													<span class="title">Height</span>
													<span class="data">1200 ft+/-</span>
												</li>
												<li>
													<span class="title">Country</span>
													<span class="data">Canada</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mt--15"></div>
			</section>

			<section id="news" class="ls section-news s-pb-80 s-pb-md-120 s-pb-xl-160">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<p class="top-subtitle">Our fresh blog</p>
							<h3 class="section-heading d-inline-block">Latest News<span class="back">blog</span></h3>
							<div class="mt-15"></div>
						</div>
						<div class="col-lg-6">
							<div class="post cover-image ds s-overlay">
								<img src="/images/news_bg.jpg" alt="img">
								<div class="item-content">
									<h5>
										Choose The Perfect Accommodations
									</h5>
									<p class="item-meta flex-wrap d-flex ">
										<span><i class="fa fa-calendar color-main3"></i>19 mar, 18 </span>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="divider-30 hidden-above-lg"></div>
							<div id="accordion01" role="tablist">
								<div class="card">
									<div class="card-header post side-item" role="tab" id="collapse01_header">
										<div class="item-wrap">
											<div class="item-media">
												<img src="/images/events/comment_4.jpg" alt="img">
											</div>
										</div>

										<div class="item-content">
											<h5>
												<a class="collapsed" data-toggle="collapse" href="#collapse01" aria-expanded="false" aria-controls="collapse01">Become A Travel Pro In One</a>
											</h5>

											<p class="item-meta flex-wrap d-flex ">
												<span><i class="fa fa-calendar color-main3"></i>20 mar, 18 </span>
											</p>
										</div>
									</div>

									<div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
										<div class="card-body">
											Meatloaf frankfurter pig beef ribs, pork beef tri-tip venison chuck t-bone pork chop. Pork chop picanha venison meatball. Meatloaf turducken pork loin.
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header post side-item" role="tab" id="collapse02_header">
										<div class="item-wrap">
											<div class="item-media">
												<img src="/images/events/comment_5.jpg" alt="img">
											</div>
										</div>

										<div class="item-content">
											<h5>
												<a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">Vacation Home Rental Success</a>
											</h5>

											<p class="item-meta flex-wrap d-flex ">
												<span><i class="fa fa-calendar color-main3"></i>22 mar, 18 </span>
											</p>
										</div>
									</div>
									<div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
										<div class="card-body">
											Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
											assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
											cred nesciunt sapiente ea proident.
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header post side-item" role="tab" id="collapse03_header">
										<div class="item-wrap">
											<div class="item-media">
												<img src="/images/events/comment_6.jpg" alt="img">
											</div>
										</div>

										<div class="item-content">
											<h5>
												<a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">Como Mantener Tu Salud </a>
											</h5>

											<p class="item-meta flex-wrap d-flex ">
												<span><i class="fa fa-calendar color-main3"></i>27 mar, 18 </span>
											</p>
										</div>
									</div>
									<div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
										<div class="card-body">
											Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
											probably haven't heard of them accusamus labore sustainable sunt aliqua put a bird on it
											squid single-origin coffee shoreditch et.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<footer class="page_footer ds s-overlay s-parallax s-pt-80 s-pb-30 s-pb-md-65 s-pt-md-120 s-pt-lg-135 s-pb-xl-110 c-mb-20 c-gutter-60">
				<div class="container">
					<div class="row">
						<div class=" col-lg-4 text-center animate" data-animation="fadeInUp">
							<div class="divider-25 d-none d-xl-block"></div>
							<div class="widget mb-0">

								<h3 class="widget-title">Newsletter</h3>

								<p>
									We promise not to spam!
								</p>

								<form class="signup" action="/">

									<input id="mailchimp_email" name="email" type="email" class="form-control mailchimp_email text-center" placeholder="Email Address">

									<button type="submit" class="btn btn-outline-maincolor mt-30">
										Subscribe
									</button>
									<div class="response"></div>
								</form>

							</div>
							<div class="divider-50"></div>
						</div>

						<div class=" col-lg-4 text-center animate" data-animation="fadeInUp">
							<div class="widget widget_icons_list">
								<a href="./" class="logo flex-column text-center pb-0">
									<img src="/images/logo.png" alt="logo">
								</a>
								<p>We are one of San Diego's most active social groups. Every month we create a variety of fun & interesting events.</p>
								<ul class="mb-10">
									<li class="icon-inline">
										<div class="icon-styled icon-top color-main fs-14">
											<i class="fa fa-map-marker"></i>
										</div>
										<p>192 Lemke Stream, San Diego, USA</p>
									</li>
									<li class="icon-inline">
										<div class="icon-styled icon-top color-main fs-14">
											<i class="fa fa-phone"></i>
										</div>
										<p>+8 (800) 247 2698 (operator)</p>
									</li>
									<li class="icon-inline">
										<div class="icon-styled icon-top color-main fs-14">
											<i class="fa fa-pencil"></i>
										</div>
										<p>
											<a href="#">mountis_trip@example.com</a>
										</p>
									</li>
								</ul>
								<span class="social-icons">
									<a href="#" class="fa fa-facebook bg-light border-icon rounded-icon" title="facebook"></a>
									<a href="#" class="fa fa-twitter bg-light border-icon rounded-icon" title="twitter"></a>
									<a href="#" class="fa fa-google bg-light border-icon rounded-icon" title="google"></a>
								</span>
							</div>
						</div>

						<div class="col-lg-4 animate" data-animation="fadeInUp">
							<div class="divider-25 d-none d-xl-block"></div>
							<div class="widget widget_instagram">
								<h3 class="widget-title">Instagram</h3>
								<div class="instafeed"></div>
							</div>
						</div>
					</div>
				</div>
			</footer>

			<section class="page_copyright ls s-py-5">
				<div class="container">
					<div class="row align-items-center">
						<div class="divider-20 d-none d-lg-block"></div>
						<div class="divider-10 d-none d-md-block"></div>
						<div class="col-md-12 text-center">
							<p>&copy; Copyright <span class="copyright_year">2018</span> All Rights Reserved</p>
						</div>
						<div class="divider-20 d-none d-lg-block"></div>
						<div class="divider-10 d-none d-md-block"></div>
					</div>
				</div>
			</section>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="/js/compressed.js"></script>
	<script src="/js/main.js"></script>


</body>

</html>
