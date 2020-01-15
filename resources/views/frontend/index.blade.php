<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pillloMart</title>
    <link rel="icon" href="{{ asset ('assets/frontend/pillowmart/pillowmart/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/style.css')}}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/logokitab.jpg')}}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="./index">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./about">about</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        product
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="./product_list"> product list</a>
                                        <a class="dropdown-item" href="./single-product">product details</a>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="login.html">
                                            login

                                        </a>
                                        <a class="dropdown-item" href="checkout.html">product checkout</a>
                                        <a class="dropdown-item" href="cart.html">shopping cart</a>
                                        <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                        <a class="dropdown-item" href="elements.html">elements</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="blog.html"> blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="./contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href="cart.html">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Kumpulan Kitab</h1>
                            <p>Selamat Datang Di Toko Kami,Disini
                                Kami Menyediakan Banyak Kitab-Kitab Kuning
                            </p>
                            <a href="./product_list" class="btn_1">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_img">
            <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/kitab.jpg')}}" alt="#" class="img-fluid">

        </div>
    </section>
    <!-- banner part start-->

    <!-- product list start-->
    <section class="single_product_list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                    <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/Jurumiyah.jpg')}}" class="img-fluid" alt="#">

                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>from $35.000</h5>
                                    <h2> <a href="single-product.html">Kitab Jurumiyah</a> </h2>
                                    <a href="./product_list" class="btn_3">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                    <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/alfiyah.jpg')}}" class="img-fluid" alt="#">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>from $35.000</h5>
                                    <h2> <a href="single-product.html">Kitab Alfiyah</a> </h2>
                                    <a href="./product_list" class="btn_3">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                    <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/hadis.jpg')}}" class="img-fluid" alt="#">

                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>from $50.000</h5>
                                    <h2> <a href="single-product.html">Ringkasan Hadist Bukhari</a> </h2>
                                    <a href="./product_list" class="btn_3">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list end-->


    <!-- trending item start-->
    <section class="trending_items">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Kitab Dasar</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <div class="single_product_item_thumb">
                            <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/tranding_item/ahlaq.jpg')}}" alt="#" class="img-fluid">
                        </div>
                        <h3> <a href="single-product.html">Kitab Ahlaq</a> </h3>
                        <p>From $20.000</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/tranding_item/safinah.jpg')}}" alt="#" class="img-fluid">
                        <h3> <a href="single-product.html">Kitab Safinah</a> </h3>
                        <p>From $20.000</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/tranding_item/tijan.jpg')}}" alt="#" class="img-fluid">
                        <h3> <a href="single-product.html">Kitab Tijan</a> </h3>
                        <p>From $20.000</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/tranding_item/qurotuluyun.jpg')}}" alt="#" class="img-fluid">
                        <h3> <a href="single-product.html">Kitab Qurotuluyun</a> </h3>
                        <p>From $20.000</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/tranding_item/fathulizar.jpg')}}" alt="#" class="img-fluid">
                        <h3> <a href="single-product.html">Kitab Fathulizar</a> </h3>
                        <p>From $20.000</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/tranding_item/talim.jpg')}}" alt="#" class="img-fluid">
                        <h3> <a href="single-product.html">Terjemahan Kitab Talim Mutaalim</a> </h3>
                        <p>From $25.000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trending item end-->

    {{-- <!-- client review part here -->
    <section class="client_review">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="client_review_slider owl-carousel">
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/client.png')}}" alt="#">
                            </div>
                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                            <h5>- Micky Mouse</h5>
                        </div>
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/client_1.png')}}" alt="#">
                            </div>
                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                            <h5>- Micky Mouse</h5>
                        </div>
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/client_2.png')}}" alt="#">
                            </div>
                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                            <h5>- Micky Mouse</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client review part end --> --}}


    {{-- <!-- feature part here -->
    <section class="feature_part section_padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="feature_part_tittle">
                        <h3>Credibly innovate granular
                        internal or organic sources
                        whereas standards.</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_content">
                        <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness.</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- feature part end --> --}}

    <!-- subscribe part here -->
    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content">
                        <h2>Dapatkan promosi & pembaruan!</h2>
                        <div class="subscribe_form">
                            <input type="email" placeholder="Enter your mail">
                            <a href="#" class="btn_1">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe part end -->

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="footer_iner">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="footer_menu">
                            <div class="footer_menu_item">
                                <a href="index.html">Home</a>
                                <a href="about.html">About</a>
                                <a href="product_list.html">Products</a>
                                <a href="#">Pages</a>
                                <a href="blog.html">Blog</a>
                                <a href="contact.html">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="social_icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                            <div class="copyright_link">
                                <a href="#">Turms & Conditions</a>
                                <a href="#">FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/bootstrap.min.js')}}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/jquery.magnific-popup.js')}}"></script>
    <!-- carousel js -->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/slick.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/waypoints.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/contact.js')}}"></script>
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/jquery.form.js')}}"></script>
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/mail-script.js')}}"></script>
    <!-- custom js -->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/custom.js')}}"></script>
</body>

</html>
