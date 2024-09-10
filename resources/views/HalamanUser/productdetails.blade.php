<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Single Product</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
    <!-- main style -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="index.html">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class="current-list-item"><a href="/User">Home</a></li>
                                <li><a href="/Product">Product</a></li>
                                <li><a href="/Cart">Cart</a></li>
                                <li><a href="/About">About</a></li>
                                <li><a href="/Admin">Admin Panel</a></li>
                                <li>
                                    <div class="header-icons">
                                        <a class="mobile-hide search-bar-icon" href="#"><i
                                                class="fas fa-search"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search arewa -->

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>See more Details</p>
                        <h1>Product Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- single product -->
    <div class="single-product mt-150 mb-150">
        <div class="container">
            <div class="row">
                @foreach ($products as $prd)     
                <div class="col-md-5">
                    <div class="single-product-img">
                        <img src="{{asset('img_prd/' . $prd['img_prd'])}}" class="card-img-top" alt="" style="width: 400px; height: 400px">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-content">                       
                        <h3>{{ $prd->nama_prd }}</h3>
                        <p class="single-product-pricing"><span></span>Rp. {{$prd->hrg_prd}}</p>
                        <p>GARANSI : {{$prd->garansi_prd}}<br>
                            <br>
                            PRODUCT ID : #{{$prd->id_prd}}<br>
                            <br>
                            SPESIFIKASI PRODUK:<br>
                            - Processor : {{$prd->processor_prd}}<br>
                            - Memory : {{$prd->memory_prd}}<br>
                            - Storage : {{$prd->storage_prd}}<br>
                            - Graphic : {{$prd->graphic_prd}}<br>
                            - Display : {{$prd->display_prd}}<br>
                            - Operating System : {{$prd->os_prd}}<br>
                        </p>
                        <div class="single-product-form">
                            <form action="index.html">
                                <input type="number" placeholder="0">
                            </form>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                            <p><strong>Categories : </strong>{{ $prd->ctg_id }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single product -->

    <!-- more products -->
    <div class="more-products mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Related</span> Products</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="assets/img/products/asus.png" alt=""></a>
                        </div>
                        <h3>$nama_prd</h3>
                        <p class="product-price"><span></span> $hrg_prd </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="assets/img/products/msi.png" alt=""></a>
                        </div>
                        <h3>$nama_prd</h3>
                        <p class="product-price"><span></span> $hrg_prd </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="assets/img/products/al.jpg" alt=""></a>
                        </div>
                        <h3>$nama_prd</h3>
                        <p class="product-price"><span></span> $hrg_prd </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end more products -->

    <!-- logo carousel -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="{{asset('assets/img/company-logos/1.jpg')}}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{asset('assets/img/company-logos/2.jpg')}}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{asset('assets/img/company-logos/3.jpg')}}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{asset('assets/img/company-logos/4.jpg')}}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{asset('assets/img/company-logos/5.jpg')}}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{asset('assets/img/company-logos/6.jpg')}}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{asset('assets/img/company-logos/7.jpg')}}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{asset('assets/img/company-logos/8.jpg')}}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{asset('assets/img/company-logos/9.jpg')}}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{asset('assets/img/company-logos/10.jpg')}}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{asset('assets/img/company-logos/11.jpg')}}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{asset('assets/img/company-logos/12.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo carousel -->
    <!-- footer -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">About us</h2>
                        <p>LaptopInAzaa is a retail store that focuses on selling new and latest laptops at the best
                            prices .</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box get-in-touch">
                        <h2 class="widget-title">Get in Touch</h2>
                        <ul>
                            <li>99 Malang Centre, Malang, East Java.</li>
                            <li>support@laptopinazaa.com</li>
                            <li>+62 234 5567 89</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p><a href="https://imransdesign.com/">Imran Hossain</a>, All Rights Reserved. Distributed By - <a
                            href="https://themewagon.com/">ThemeWagon</a></p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->

    <!-- jquery -->
    <script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- count down -->
    <script src="{{asset('assets/js/jquery.countdown.js')}}"></script>
    <!-- isotope -->
    <script src="{{asset('assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
    <!-- waypoints -->
    <script src="{{asset('assets/js/waypoints.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- magnific popup -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- mean menu -->
    <script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
    <!-- sticker js -->
    <script src="{{asset('assets/js/sticker.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
