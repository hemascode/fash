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

    <!--offcanvas menu area start-->
    @include('home.header')
<div class="main-body">
      <!--breadcrumbs area start-->
    <div class="breadcrumbs_area breadcrumbs_other">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('home.userpage')}}">home</a></li>
                            <li><a href="#">cart</a></li>
                        </ul>
                        <h3>Shopping Cart</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

     <!--shopping cart area start -->
    <div class="shopping_cart_area">
        <div class="container">
            <form action="#">
                <div class="cart_page_inner mb-60">
                    <div class="row">
                        <div class="col-12">
                            <div class="cart_page_tabel">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>product </th>
                                            <th>information</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-top">
                                            <td>
                                                <div class="cart_product_thumb">
                                                    <img src="home/uthr/assets/img/product/product4.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_text">
                                                    <h4>Example With Title Product</h4>
                                                    <ul>
                                                        <li><i class="ion-ios-arrow-right"></i> Color : <span>White</span></li>
                                                        <li><i class="ion-ios-arrow-right"></i> Size : <span>XL</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_price">
                                                    <span>$45.05</span>
                                                </div>
                                            </td>
                                            <td class="product_quantity">
                                                <div class="cart_product_quantity">
                                                    <input min="1" max="100" value="1" type="number">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_price">
                                                    <span>$45.05</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_remove text-right">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr class="border-top">
                                            <td>
                                                <div class="cart_product_thumb">
                                                    <img src="home/uthr/assets/img/product/product6.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_text">
                                                    <h4>Example With Title Product</h4>
                                                    <ul>
                                                        <li><i class="ion-ios-arrow-right"></i> Color : <span>White</span></li>
                                                        <li><i class="ion-ios-arrow-right"></i> Size : <span>XL</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_price">
                                                    <span>$45.05</span>
                                                </div>
                                            </td>
                                            <td class="product_quantity">
                                                <div class="cart_product_quantity">
                                                    <input min="1" max="100" value="1" type="number">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_price">
                                                    <span>$45.05</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart_product_remove text-right">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_page_button border-top d-flex justify-content-between">
                                <div class="shopping_cart_btn">
                                    <a href="#" class="btn btn-primary border">clear shopping cart</a>
                                    <button class="btn btn-primary border" type="submit">update your cart</button>
                                </div>
                                <div class="shopping_continue_btn">
                                    <a href="/womenpage" class="btn btn-primary">Continue Shopping</a>
                                </div>
                                
                            </div>
                         </div>
                     </div>
                 </div>
                 <!--coupon code area start-->
                <div class="cart_page_bottom">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="shopping_coupon_calculate top">
                                <h3 class="border-bottom">Calculate Shipping </h3>
                                <select class="select_option border">
                                    <option value="1">United Kingdom (UK)  </option>
                                    <option value="2">Åland Islands  </option>
                                    <option value="3">Afghanistan  </option>
                                    <option value="4">Belgium </option>
                                    <option value="5">Albania  </option>
                                </select>
                                <input class="border" placeholder="State / Country" type="text">
                                <input class="border" placeholder="Postcode / Zip" type="text">
                                <button class="btn btn-primary" type="submit">get a quote</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="shopping_coupon_calculate">
                                <h3 class="border-bottom">Coupon Discount   </h3>
                                <p>Enter your coupon code if you have one.</p>
                                <input class="border" placeholder="Enter your code" type="text">
                                <button class="btn btn-primary" type="submit">apply coupon</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="grand_totall_area">
                               <div class="grand_totall_inner border-bottom">
                                   <div class="cart_subtotal d-flex justify-content-between">
                                       <p>sub total </p>
                                       <span>$126.00</span>
                                   </div>
                                   <div class="cart_grandtotal d-flex justify-content-between">
                                       <p>grand total</p>
                                       <span>$126.00</span>
                                   </div>
                               </div>
                               <div class="proceed_checkout_btn">
                                <a class="btn btn-primary" href="{{ route('checkout') }}">Proceed to Checkout</a>
                            </div>
                            
                            
                               <a href="#">Checkout With Mutilple Adresses</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            </form>
        </div>
    </div>
     <!--shopping cart area end -->
</div>

 <!--newsletter section start-->
    <section class="newsletter_section">
        <div class="container">
            <div class="news">
                <center>
                    <h3><b>Subscribe To Our Newsletter</b></h3>
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

