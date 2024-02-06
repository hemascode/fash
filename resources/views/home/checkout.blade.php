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

   @include('home.header')

	<div class="main-body">
      <!--breadcrumbs area start-->
    <div class="breadcrumbs_area breadcrumbs_other">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content text-left">
                        <ul>
                            <li><a href="{{route('home.userpage')}}">home</a></li>
                            <li><a href="#">checkout</a></li>
                        </ul>
                        <h3>checkout</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    <div class="checkout_section" id="accordion">
       <div class="container">
            <div class="returning_coupon_area">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="user-actions">
                            <h3>
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                Returning Customer?
                                <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_login" aria-expanded="true">Click here to login</a>

                            </h3>
                             <div id="checkout_login" class="collapse" data-parent="#accordion">
                                <div class="checkout_info">
                                    <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>
                                    <form action="#">
                                        <div class="form_group">
                                            <label>Username or email <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="form_group">
                                            <label>Password  <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="form_group group_3 ">
                                            <button class="btn btn-primary" type="submit">Login</button>
                                            <label for="remember_box">
                                                <input id="remember_box" type="checkbox">
                                                <span> Remember me </span>
                                            </label>
                                        </div>
                                        <a href="#">Lost your password?</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="user-actions">
                            <h3>
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                Have a Coupon ?
                                <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_coupon2" aria-expanded="true">Click here to enter your code</a>

                            </h3>
                             <div id="checkout_coupon2" class="collapse" data-parent="#accordion">
                                <div class="checkout_info coupon_info">
                                    <form action="#">
                                        <input placeholder="Coupon code" type="text">
                                        <button class="btn btn-primary" type="submit">Apply coupon</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <form action="#">
                            <h3>Billing Details</h3>
                            <div class="checkout_form_input">
                                <label>First Name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Last Name  <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label for="country">country <span>*</span></label>
                                    <select class="select_option" name="cuntry" id="country">
                                    <option value="2">United Kingdom (UK)  </option>
                                    <option value="3">Algeria</option>
                                    <option value="4">Afghanistan</option>
                                    <option value="5">Ghana</option>
                                    <option value="6">Albania</option>
                                    <option value="7">Bahrain</option>
                                    <option value="8">Colombia</option>
                                    <option value="9">Dominican Republic</option>
                                </select>
                            </div>
                            <div class="checkout_form_input">
                                <label>Company Name</label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                               <label>Address  <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Town / City <span>*</span></label>
                                <input  type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label> Email Address   <span>*</span></label>
                                <input  type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label> Phone <span>*</span></label>
                                <input  type="text">
                            </div>
                            <!-- <p class="different_address"><i class="ion-android-checkbox-outline"></i> Ship to a different address?</p> -->
							<div class="form-check different_address">
								<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
								<label class="form-check-label" for="defaultCheck1">Ship Elsewhere ?</label>
							</div>
                            <div class="checkout_form_input">
                                <label>First Name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Last Name  <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label for="country2">country <span>*</span></label>
                                    <select class="select_option" name="cuntry" id="country2">
                                    <option value="2">United Kingdom (UK)  </option>
                                    <option value="3">Algeria</option>
                                    <option value="4">Afghanistan</option>
                                    <option value="5">Ghana</option>
                                    <option value="6">Albania</option>
                                    <option value="7">Bahrain</option>
                                    <option value="8">Colombia</option>
                                    <option value="9">Dominican Republic</option>
                                </select>
                            </div>
                            <div class="checkout_form_input">
                                <label>Company Name</label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Town / City <span>*</span></label>
                                <input  type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Order Notes</label>
                                <textarea></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="order_table_right">
                            <form action="#">
                                <h3>Your order</h3>
                                <div class="order_table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> Slim Collarless Blaze   </td>
                                                <td class="text-right"> $75.20  </td>
                                            </tr>
                                            <tr>
                                                <td> Denim Kimono Jacket     </td>
                                                <td class="text-right"> $50.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Cart Subtotal  </td>
                                                <td class="text-right">$225.60</td>
                                            </tr>
                                            <tr class="order_total">
                                                <th>Order Total</th>
                                                <td class="text-right">$225.60</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="panel-default">
                                        <div class="panel_radio">
                                            <input id="payment1" name="check_method" type="radio" data-target="createp_account" />
                                            <span class="checkmark"></span>
                                        </div>

                                        <label for="payment1" data-toggle="collapse" data-target="#panel1" >direct bank transfer</label>
                                        <div id="panel1" class="collapse show one" data-parent="#accordion">
                                            <div class="card-body1">
                                               <p>Donec sed odio dui. Nulla vitae elit libero, a phara etra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-default">
                                        <div class="panel_radio">
                                            <input id="payment2" name="check_method" type="radio" data-target="createp_account" />
                                            <span class="checkmark"></span>
                                        </div>
                                        <label for="payment2" data-toggle="collapse" data-target="#method2" >cheque payment</label>
                                        <div id="method2" class="collapse two" data-parent="#accordion">
                                            <div class="card-body1">
                                               <p>Donec sed odio dui. Nulla vitae elit libero, a phara etra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-default">
                                        <div class="panel_radio">
                                            <input id="payment3" name="check_method" type="radio" data-target="createp_account" />
                                            <span class="checkmark"></span>
                                        </div>
                                        <label for="payment3" data-toggle="collapse" data-target="#method3" >cash on delivery</label>
                                        <div id="method3" class="collapse three" data-parent="#accordion">
                                            <div class="card-body1">
                                               <p>Donec sed odio dui. Nulla vitae elit libero, a phara etra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-default">
                                        <div class="panel_radio">
                                            <input id="payment4" name="check_method" type="radio" data-target="createp_account" />
                                            <span class="checkmark"></span>
                                        </div>
                                        <label for="payment4" data-toggle="collapse" data-target="#method4" >Paypal</label>
                                        <div id="method4" class="collapse four" data-parent="#accordion">
                                            <div class="card-body1">
                                               <p>Donec sed odio dui. Nulla vitae elit libero, a phara etra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="place_order_btn">
                                   <a class="btn btn-primary" href="#">place order</a>
                               </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Checkout page section end-->
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
