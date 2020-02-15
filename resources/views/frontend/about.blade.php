<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kitab</title>
    <link rel="icon" href="img/favicon.png">
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
                                        {{-- <a class="dropdown-item" href="./single-product">product details</a> --}}

                                    </div>
                                </li>
                                {{--
                                     --}}

                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="blog.html"> blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                    </div>
                                </li> --}}

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

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>About</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!-- product list part start-->
    <section class="about_us padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="about_us_content">
                        <h5>Misi Kami</h5>
                        <h3>
                            Menumbuh kembangkan ilmu pengetahuan dengan menghadirkan kitab-kitab yang berkualitas dan bermutu.
                            Mendorong wacana-wacana publik yang progresif dan terbuka melalui gagasan untuk memperluas pengetahuan.
                            Melakukan kerjasama usaha yang saling menguntungkan dengan berbagai pihak.
                        </h3>
                        <div class="about_us_video">
                            <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/foto.jpg')}}" alt="#" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->

    <!-- feature part here -->
    <section class="feature_part section_padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="feature_part_tittle">
                        <h3>Apa itu Kitab Kuning?</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_content">
                        <p>Kitab kuning, dalam pendidikan agama islam, merujuk kepada kitab-kitab tradisional yang berisi pelajaran-pelajaran agama islam yang diajarkan pada pondok-pondok Pesantren, mulai dari fiqh, aqidah, akhlaq, tata bahasa arab, hadits, tafsir, `ulumul qur'aan, hingga pada ilmu sosial dan kemasyarakatan.</p>
                    </div>
                </div>
            </div>
            {{-- <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/icon/feature_icon_1.svg')}}" alt="#">
                        <h4>Credit Card Support</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/icon/feature_icon_2.svg')}}" alt="#">
                        <h4>Online Order</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/icon/feature_icon_3.svg')}}" alt="#">
                        <h4>Free Delivery</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/icon/feature_icon_4.svg')}}" alt="#">
                        <h4>Product with Gift</h4>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- feature part end -->

    <!-- client review part here -->
    <section class="client_review">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="client_review_slider owl-carousel">
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/pengarangsafinah.web')}}" alt="#">
                            </div>
                            <p>"Karya– karya beliau di antaranya kitab Safinah An Najah berisi tentang masalah teologi (rukun iman), juga membahas tentang masalah ibadah (rukun Islam), mulai masalah tata cara wudu, persiapan sebelum salat, maupun terkait rukun salat dan hal-hal yang membatalkannya. Walaupun kitab ini sangat ringkas, namun isinya sangat mendalam.
                                Banyak ulama yang memberi komentar terhadap kitab ini, baik berupa syarah (penjelasan), maupun dibuat nazam atau syair untuk memudahkan untuk dihafal. Kitab ini adalah bukti kepakaran beliau dalam bidang fikih yang beraliran Syafi’iyah, yang berkembang pesat di Asia Tenggara, karena isinya mudah dicerna oleh berbagai kalangan."</p>
                            <h5>- Syekh Salim Bin Sumair</h5>
                        </div>
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/pengarangtijan.jpg')}}" alt="#">
                            </div>
                            <p>"Kepakaran Syekh Nawawi tidak diragukan lagi.Ulama asal Mesir, Syekh 'Umar 'Abdul Jabbar dalam kitabnya "al-Durus min Madhi al-Ta'lim wa Hadlirih bi al-Masjidil al-Haram” (beberapa kajian masa lalu dan masa kini tentang Pendidikan Masa kini di Masjidil Haram,menulis bahwa Syekh Nawawi sangat produktif menulis hingga karyanya mencapai seratus judul lebih yang meliputi berbagai disiplin ilmu. Banyak pula karyanya yang berupa syarah atau komentar terhadap kitab-kitab klasik."</p>
                            <h5>-Syekh Muhammad Nawawi al-Bantani</h5>
                        </div>
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/pengarangtalim.jpg')}}" alt="#">
                            </div>
                            <p>" Kitab Talim al-Mutaallim nama lengkapnya Ta’līm Al-Muta’allim.
                                Thariqat al-Ta’alum (metode belajar pada pelajar) adalah karangan imam al-Zarnuji. Kitab ini telah banyak diterjemahkan kedalam Bahasa Arab maupun Bahasa Indonesia Kitab tersebut dikaji dan dipelajari disetiap kependidikan Islam, terutama lembaga pendidikan klasik tradisional seperti pesantren. Keistimewaan kitab Ta’līm Al-Muta’allim adalah letak pada materi yang dikandungnya. Sekalipun kecil dan dengan judul yang seakan-akan hanya membicarakan tentang metode belajar, namun sebenarnya membahas tentang tujuan belajar, prinsip belajar, strategi belajar dsb, yang secara keseluruhan didasarkan pada moral religius."</p>
                            <h5>- Burhanuddin al-Islam Al-Zarnuji</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client review part end -->

    {{-- <!-- subscribe part here -->
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
    <!-- subscribe part end --> --}}

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
                                    {{-- <a href="#">Pages</a> --}}
                                    <a href="blog.html">Blog</a>
                                    <a href="contact.html">Contact</a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4">
                            <div class="social_icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="copyright_part">
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
                                </div> --}}
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
    <!-- easing js -->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/mixitup.min.js')}}"></script>
    <!-- particles js -->
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
