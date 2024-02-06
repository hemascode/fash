<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>modento </title>
    <meta name="description" content="Uthr Fashion eCommerce Bootstrap 5 Template is an innovative and modern e-commerce online store website template." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <!-- <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Uthr – Fashion eCommerce HTML Template" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="SITE_NAME" /> -->
    <!-- For the og:image content, replace the # with a link of an image -->
    <!-- <meta property="og:image" content="#" />
    <meta property="og:description"
        content="240+ Best Bootstrap Templates are available on this website. Find your template for your project compatible with the most popular HTML library in the world." /> -->

    <!-- Add site Favicon -->
    <link rel="icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-270x270.png" />

    <!-- CSS
    ========================= -->
    <link rel="stylesheet" href="home/uthr/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="home/uthr/assets/css/slick.css">
    <link rel="stylesheet" href="home/uthr/assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="home/uthr/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="home/uthr/assets/css/font.awesome.css">
    <link rel="stylesheet" href="home/uthr/assets/css/animate.css">
    <link rel="stylesheet" href="home/uthr/assets/css/nice-select.css">
    <link rel="stylesheet" href="home/uthr/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="home/uthr/assets/css/magnific-popup.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="home/uthr/assets/css/style.css">

    <!--modernizr min js here-->
    <script src="home/uthr/assets/js/vendor/modernizr-3.7.1.min.js"></script>


    <!-- Structured Data  -->
    <script type="application/ld+json">
        {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "Replace_with_your_site_title",
        "url": "Replace_with_your_site_URL"
        }
    </script>

</head>

<body>

    @include('home.header')
<div class="main-body">
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area breadcrumbs_product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('home.userpage')}}">home</a></li>
                            <li><a href="#">shop</a></li>
                            <li>Product Example</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product area start-->
    <section class="product_area related_products mb-118">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header mb-30">
                        <h2>Product List</h2>
                    </div>
                </div>
            </div>
			<div class="container">
				<div class="product_tab_btn product-list-tabs">
					<ul class="nav" role="tablist">
						<li>
							<a data-toggle="tab"  data-target="#all-tab" href="#" role="tab" aria-controls="all2" aria-selected="true" class="active"> All </a>
						</li>
						<li>
							<a data-toggle="tab" data-target="#men-tab" href="#clothings2" role="tab" aria-controls="clothings2" aria-selected="false"> Men </a>
						</li>
						<li>
							<a data-toggle="tab" href="#women-tab" role="tab" aria-controls="bags2" aria-selected="false"> Women </a>
						</li>
						<li>
							<a data-toggle="tab" href="#kids-tab" role="tab" aria-controls="shoes2" aria-selected="false"> kids </a>
						</li>

					</ul>
					<div id="tabsContent" class="tab-content">
						<div id="all-tab" class="tab-pane fade active show">
							<div class="product_container product-list-items">
								<div class="row">
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/product1.jpg" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
														<div class="product-category float-left">Women</div>
														<ul class="d-flex justify-content-end">
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(4)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Basic Joggin Shorts</a></h4>
													<div class="price_box text-left">
														<span class="current_price">$26.00</span>
														<span class="old_price">$62.00</span>
													</div>
													<div class="add_to_cart">
<a class="btn btn-primary" href="/add_to_cart" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
												</figcaption>
											</figure>
										</article>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/product2.jpg" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
													<div class="product_label">
														<span>-20%</span>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
														<div class="product-category float-left">Men</div>
														<ul class="d-flex justify-content-end">
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(6)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Make Thing Happen T-Shirts</a></h4>
													<div class="price_box text-left">
														<span class="text-black">$38.00</span>

													</div>
													<div class="add_to_cart">
<a class="btn btn-primary" href="/add_to_cart" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
												</figcaption>
											</figure>
										</article>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/product3.jpg" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
													<div class="product_label">
														<span>-18%</span>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
														<div class="product-category float-left">Men</div>
														<ul class="d-flex justify-content-end">
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(2)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Basic White Simple Sneaker</a></h4>
													<div class="price_box text-left">
														<span class="current_price">$43.00</span>
														<span class="old_price">$46.00</span>
													</div>
													<div class="add_to_cart">
<a class="btn btn-primary" href="/add_to_cart" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
												</figcaption>
											</figure>
										</article>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/product4.jpg" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
														<div class="product-category float-left">Women</div>
														<ul class="d-flex justify-content-end">
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(8)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Simple Rounded Sunglasses</a></h4>
													<div class="price_box text-left">
													   <span class="text-black">$42.00</span>
													</div>
													<div class="add_to_cart">
<a class="btn btn-primary" href="/add_to_cart" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
												</figcaption>
											</figure>
										</article>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/product1.jpg" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
														<div class="product-category float-left">Women</div>
														<ul class="d-flex justify-content-end">
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(12)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Basic Joggin Shorts</a></h4>
													<div class="price_box text-left">
														<span class="current_price">$26.00</span>
														<span class="old_price">$362.00</span>
													</div>
													<div class="add_to_cart">
<a class="btn btn-primary" href="/add_to_cart" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
												</figcaption>
											</figure>
										</article>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/product2.jpg" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
													<div class="product_label">
														<span>-20%</span>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
														<div class="product-category float-left">Men</div>
														<ul class="d-flex justify-content-end">
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(14)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Simple Rounded Sunglasses</a></h4>
													<div class="price_box text-left">
														<span class="current_price">$35.00</span>
														<span class="old_price">$38.00</span>
													</div>
													<div class="add_to_cart">
<a class="btn btn-primary" href="/add_to_cart" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
												</figcaption>
											</figure>
										</article>
									</div>
								</div>
							</div>
						</div>
						<div id="men-tab" class="tab-pane fade">
							<div class="product_container product-list-items">
								<div class="row">
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/product2.jpg" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
													<div class="product_label">
														<span>-20%</span>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
														<div class="product-category float-left">Men</div>
														<ul class="d-flex justify-content-end">
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(6)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Make Thing Happen T-Shirts</a></h4>
													<div class="price_box text-left">
														<span class="text-black">$38.00</span>

													</div>
													<div class="add_to_cart">
<a class="btn btn-primary" href="/add_to_cart" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
												</figcaption>
											</figure>
										</article>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/product3.jpg" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
													<div class="product_label">
														<span>-18%</span>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
														<div class="product-category float-left">Men</div>
														<ul class="d-flex justify-content-end">
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(2)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Basic White Simple Sneaker</a></h4>
													<div class="price_box text-left">
														<span class="current_price">$43.00</span>
														<span class="old_price">$46.00</span>
													</div>
													<div class="add_to_cart">
<a class="btn btn-primary" href="/add_to_cart" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
												</figcaption>
											</figure>
										</article>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/product2.jpg" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
													<div class="product_label">
														<span>-20%</span>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
														<div class="product-category float-left">Men</div>
														<ul class="d-flex justify-content-end">
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(14)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Simple Rounded Sunglasses</a></h4>
													<div class="price_box text-left">
														<span class="current_price">$35.00</span>
														<span class="old_price">$38.00</span>
													</div>
													<div class="add_to_cart">
<a class="btn btn-primary" href="/add_to_cart" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
												</figcaption>
											</figure>
										</article>
									</div>
								</div>
							</div>
						</div>
						<div id="women-tab" class="tab-pane fade">
							<div class="product_container product-list-items">
								<div class="row">
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/product1.jpg" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
														<div class="product-category float-left">Women</div>
														<ul class="d-flex justify-content-end">
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(4)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Basic Joggin Shorts</a></h4>
													<div class="price_box text-left">
														<span class="current_price">$26.00</span>
														<span class="old_price">$62.00</span>
													</div>
													<div class="add_to_cart">
<a class="btn btn-primary" href="/add_to_cart" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
												</figcaption>
											</figure>
										</article>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/product4.jpg" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
														<div class="product-category float-left">Women</div>
														<ul class="d-flex justify-content-end">
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(8)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Simple Rounded Sunglasses</a></h4>
													<div class="price_box text-left">
													   <span class="text-black">$42.00</span>
													</div>
													<div class="add_to_cart">
<a class="btn btn-primary" href="/add_to_cart" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
												</figcaption>
											</figure>
										</article>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/product1.jpg" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
														<div class="product-category float-left">Women</div>
														<ul class="d-flex justify-content-end">
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(12)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Basic Joggin Shorts</a></h4>
													<div class="price_box text-left">
														<span class="current_price">$26.00</span>
														<span class="old_price">$362.00</span>
													</div>
													<div class="add_to_cart">
<a class="btn btn-primary" href="/add_to_cart" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
												</figcaption>
											</figure>
										</article>
									</div>
								</div>
							</div>
						</div>
						<div id="kids-tab" class="tab-pane fade">
							<div class="product_container product-list-items">
								<div class="row">
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/kids-1.png" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
														<div class="product-category float-left">Kids</div>
														<ul class="d-flex justify-content-end">                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(4)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Basic Joggin Shorts</a></h4>
													<div class=" price_box text-left">
														<span class="current_price">$26.00</span>
														<span class="old_price">$62.00</span>
													</div>
													<div class="add_to_cart">
														<a class="btn btn-primary" href="#"data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/kids-3.png" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
													<div class="product_label">
														<span>-20%</span>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
													<div class="product-category float-left">Kids</div>
														<ul class="d-flex justify-content-end">                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(6)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Make Thing Happen T-Shirts</a></h4>
													<div class=" price_box text-left">
														<span class="text-black">$38.00</span>

													</div>
													<div class="add_to_cart">
														<a class="btn btn-primary" href="#"data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/kids-2.png" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
													<div class="product_label">
														<span>-18%</span>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
														<div class="product-category float-left">Kids</div>
														<ul class="d-flex justify-content-end">                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(2)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Basic White Simple Sneaker</a></h4>
													<div class=" price_box text-left">
														<span class="current_price">$43.00</span>
														<span class="old_price">$46.00</span>
													</div>
													<div class="add_to_cart">
														<a class="btn btn-primary" href="#"data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/kids-4.png" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
														<div class="product-category float-left">Kids</div>
														<ul class="d-flex justify-content-end">                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(8)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Simple Rounded Sunglasses</a></h4>
													<div class=" price_box text-left">
													   <span class="text-black">$42.00</span>
													</div>
													<div class="add_to_cart">
														<a class="btn btn-primary" href="#"data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/kids-5.png" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
														<div class="product-category float-left">Kids</div>
														<ul class="d-flex justify-content-end">                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(12)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Basic Joggin Shorts</a></h4>
													<div class=" price_box text-left">
														<span class="current_price">$26.00</span>
														<span class="old_price">$362.00</span>
													</div>
													<div class="add_to_cart">
														<a class="btn btn-primary" href="#"data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
									</div>
									<div class="col-sm-6 col-md-4 col-lg-3">
										<article class="single_product">
											<figure>
												<div class="product_thumb">
<a href="/productpage">													<img class="primary_img" src="home/uthr/assets/img/product/kids-6.png" alt="consectetur">
													</a>
													<div class="product_action">
														<ul>
															<li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

															<li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
															<li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
															data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
														</ul>
													</div>
													<div class="product_label">
														<span>-20%</span>
													</div>
												</div>
												<figcaption class="product_content text-center">
													<div class="product_ratting">
														<div class="product-category float-left">Kids</div>
														<ul class="d-flex justify-content-end">                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><a href="#"><i class="ion-android-star"></i></a></li>
															<li><span>(14)</span></li>
														</ul>
													</div>
													<h4 class="product_name"><a href="/productpage">Simple Rounded Sunglasses</a></h4>
													<div class=" price_box text-left">
														<span class="current_price">$35.00</span>
														<span class="old_price">$38.00</span>
													</div>
													<div class="add_to_cart">
														<a class="btn btn-primary" href="#"data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="product_container product-list-items">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
<a href="#" >                                        <img class="primary_img" src="home/uthr/assets/img/product/product1.jpg" alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
										<div class="product-category float-left">Women</div>
                                        <ul class="d-flex justify-content-end">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="/productpage">Basic Joggin Shorts</a></h4>
                                    <div class="price_box text-left">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
<a href="#" >                                        <img class="primary_img" src="home/uthr/assets/img/product/product2.jpg" alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
										<div class="product-category float-left">Men</div>
                                        <ul class="d-flex justify-content-end">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(6)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="/productpage">Make Thing Happen T-Shirts</a></h4>
                                    <div class="price_box text-left">
                                        <span class="text-black">$38.00</span>

                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
<a href="#" >                                        <img class="primary_img" src="home/uthr/assets/img/product/product3.jpg" alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
										<div class="product-category float-left">Men</div>
                                        <ul class="d-flex justify-content-end">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="/productpage">Basic White Simple Sneaker</a></h4>
                                    <div class="price_box text-left">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
<a href="#" >                                        <img class="primary_img" src="home/uthr/assets/img/product/product4.jpg" alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
										<div class="product-category float-left">Women</div>
                                        <ul class="d-flex justify-content-end">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(8)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="/productpage">Simple Rounded Sunglasses</a></h4>
                                    <div class="price_box text-left">
                                       <span class="text-black">$42.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
<a href="#" >                                        <img class="primary_img" src="home/uthr/assets/img/product/product1.jpg" alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
										<div class="product-category float-left">Women</div>
                                        <ul class="d-flex justify-content-end">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(12)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="/productpage">Basic Joggin Shorts</a></h4>
                                    <div class="price_box text-left">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
<a href="#" >                                        <img class="primary_img" src="home/uthr/assets/img/product/product2.jpg" alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist" data-tippy-inertia="true" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#" data-tippy-inertia="true" data-tippy-delay="50"
                                            data-tippy-arrow="true" data-tippy-placement="left"><i class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
										<div class="product-category float-left">Men</div>
                                        <ul class="d-flex justify-content-end">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(14)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="/productpage">Simple Rounded Sunglasses</a></h4>
                                    <div class="price_box text-left">
                                        <span class="current_price">$35.00</span>
                                        <span class="old_price">$38.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Move To Bag"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product area end-->

    <!--newsletter section start-->
    <section class="newsletter_section">
        <div class="container">
            <div class="news">
                <center>
                    <h3><b>Subscribe to our Newsletter</b></h3>
                    <p>Subscribe to our email and get updates right in your inbox</p>
                </center>
                <section class="home-newsletter">
                    <div class="container">
                    <div class="row">
                    <div class="col-sm-12">
                        <div class="single">
                        <div class="input-group">
                             <input type="email" class="form-control" placeholder="Enter your email">
                             <span class="input-group-btn">
                             <button class="btn btn-theme"    type="submit"><i class='fa fa-send-o'></i>
                             </button>
                             <button class="btn btn-theme" style="color: #DA627D; background-color: #F3F3F3;" type="submit"><i class="fa fa-facebook" ></i></i></button>

                             <button class="btn btn-theme" style="color: #DA627D; background-color: #F3F3F3;" type="submit"><i class="fa fa-instagram" ></i>
</i></button>

                             <button class="btn btn-theme" style="color: #DA627D; background-color: #F3F3F3;" type="submit"><i class="fa fa-twitter" ></i>
</i></button>

                             </span>
                              </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </section>

            </div>
        </div>
    </section>
    <!--newsletter section end-->
</div>

  @include('home.footer')

     <!-- modal area start-->
    
    <!-- modal area end-->

<!-- JS
============================================ -->

<script src="home/uthr/assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="home/uthr/assets/js/vendor/popper.js"></script>
<script src="home/uthr/assets/js/vendor/bootstrap.min.js"></script>
<script src="home/uthr/assets/js/slick.min.js"></script>
<script src="home/uthr/assets/js/wow.min.js"></script>
<script src="home/uthr/assets/js/jquery.scrollup.min.js"></script>
<script src="home/uthr/assets/js/images-loaded.min.js"></script>
<script src="home/uthr/assets/js/isotope.pkgd.min.js"></script>
<script src="home/uthr/assets/js/jquery.nice-select.js"></script>
<script src="home/uthr/assets/js/tippy-bundle.umd.js"></script>
<script src="home/uthr/assets/js/jquery-ui.min.js"></script>
<script src="home/uthr/assets/js/jquery.instagramFeed.min.js"></script>
<script src="home/uthr/assets/js/jquery.magnific-popup.min.js"></script>
<script src="home/uthr/assets/js/mailchimp-ajax.js"></script>


<!-- Main JS -->
<script src="home/uthr/assets/js/main.js"></script>


</body>

</html>
