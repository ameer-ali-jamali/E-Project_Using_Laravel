<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Home</title>
    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap_min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header_navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/scroll_up_down.css">
    <link rel="stylesheet" href="css/gernal_classes.css">
    <!-- Favicon -->
    <link rel="icon" href="images/client-image3.png">

</head>

<body>

    <!-- Header-->

    <header>

        <div class="banner2 d-flex justify-content-around p-2">
            <span><i class="fas fa-envelope"></i> &nbsp;E_books*3423@gmial.com</span>
            <span> <i class="fas fa-phone"></i> &nbsp;+92487985745909</span>
        </div>

    </header>


    <!--Navigation Bar-->

    <nav class="navbar navbar-expand-lg sticky-top" style="height: 50px">
        <div class="container-fluid">
            <div class="nav navbar-brand">
                <li class="active"> <a class="nav-link" href="Index.html"><i class="fa-solid fa-book fa-sm"></i>
                        &nbsp;
                        E-books</a></li>
            </div>
            <button class="navbar-toggler rounded" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa fa-bars" id="hamberg-icon"></i></span></button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex justify-content-between" style="gap: 28px">
                    <li class="active"> <a class="nav-link" href="Index.html">
                            <i class="fa-thin fa-house"></i>
                            &nbsp;
                            Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="Products.html"><i class="fal fa-books"></i>
                            &nbsp;Books</a></li>

                    <li class="nav-item"><a class="nav-link" href="/topAuthors"><i
                                class="fal solid fa-user"></i>&nbsp;&nbsp;Top Authors</a></li>
                    <li class="nav-item"><a class="nav-link" href="location.html"><i
                                class="fal fa-book-reader"></i>&nbsp;&nbsp;Latest Books</a></li>
                    <li class="nav-item"><a class="nav-link" href="feedback.html"><i
                                class="fal  fa-comments"></i>&nbsp;&nbsp;Feedback</a></li>
                    <li class="nav-item"><a class="nav-link" href="location.html"><i
                                class="fal  fa-info"></i>&nbsp;&nbsp;About Us</a></li>

                </ul>


                @if (Auth::check())
                    {
                    <span>Muqadar user</span>
                }@else{
                    <span class="container-fluid d-flex justify-content-end " style="width: max-content; gap:20px">
                        <a href="/login"><i class="fa-solid fa-user-plus"></i>&nbsp;
                            Register</a>

                        <a href="/login"><i class="fas fa-sign-in"></i>&nbsp; Login</a>
                    </span>
                    }
                @endif


            </div>
        </div>



        <!-- Progress Bar -->

        <div class="scroll-line"></div>


    </nav>



    {{-- Carousel --}}

    <div id="homePageCarousel" class="carousel carousel-dark slide" style="margin-top:-60px;">

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="images/carousel_images/image-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>FREE AND DISCOUNTED BESTSELLERS</h5>
                    <p>Join 150,000+ fellow readers. Get free and discounted bestsellers straight to
                        your inbox with the ManyBooks eBook deals newsletter. </p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/carousel_images/poster-image.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>The Ultimate Guide to Free eBooks</h5>
                    <p>Not sure what to read next? Explore our catalog of public domain books with our
                        editors. Some real gems are hidden in our library.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/carousel_images/image-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>LOTS OF EBOOKS. 100 % FREE</h5>
                    <p>Welcome to your friendly neighborhood library. We have more than 50,000 free
                        ebooks waiting to be discovered.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homePageCarousel"
            data-bs-slide="prev">
            <i class="fa-solid fa-backward fa-lg"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homePageCarousel"
            data-bs-slide="next">
            <i class="fad fa-forward fa-lg"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <!-- Marketing messaging and featurettes
             ========================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


    {{-- footer --}}

    <footer class="nb-footer" id="dynamic-footer">
        <div class="container">
            <div class="row">
                <!-- <div class="col-sm-12">
</div> -->
                <div class="col-md-3 col-sm-6 txt-align-sm">
                    <div class="footer-info-single">
                        <h2 class="title">Help Center</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" title=""><i class="fa-duotone fa-angles-right"></i>&nbsp; How
                                    to Pay</a></li>
                            <li><a href="#" title=""><i class="fa-duotone fa-angles-right"></i>&nbsp;
                                    FAQ's</a></li>
                            <li><a href="#" title=""><i class="fa-duotone fa-angles-right"></i>&nbsp;
                                    Sitemap</a></li>
                            <li><a href="#" title=""><i class="fa-duotone fa-angles-right"></i>&nbsp;
                                    Delivery Info</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 txt-align-sm">
                    <div class="footer-info-single">
                        <h2 class="title">Customer information</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" title=""><i class="fa-duotone fa-angles-right"></i>&nbsp;
                                    About Us</a></li>
                            <li><a href="#" title=""><i class="fa-duotone fa-angles-right"></i>&nbsp;
                                    FAQ's</a></li>
                            <li><a href="#" title=""><i class="fa-duotone fa-angles-right"></i>&nbsp;
                                    Sell Your Items</a></li>
                            <li><a href="#" title=""><i class="fa-duotone fa-angles-right"></i>&nbsp;
                                    Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 txt-align-sm">
                    <div class="footer-info-single">
                        <h2 class="title">Security & privacy</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" title=""><i class="fa-duotone fa-angles-right"></i>&nbsp;
                                    Terms Of Use</a></li>
                            <li><a href="#" title=""><i class="fa-duotone fa-angles-right"></i>&nbsp;
                                    Privacy Policy</a></li>
                            <li><a href="#" title=""><i class="fa-duotone fa-angles-right"></i>&nbsp;
                                    Return / Refund Policy</a></li>
                            <li><a href="#" title=""><i class="fa-duotone fa-angles-right"></i>&nbsp;
                                    Store Locations</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 txt-align-sm">
                    <div class="footer-info-single">
                        <h2 class="title">Contact Us</h2>

                        <div class="about">
                            <!-- <img src="#" class="img-responsive center-block" alt=""> -->

                            <ul class="list-inline social-icons icon-circle icon-zoom list-unstyled">
                                <li> <a target="_blank" href="https://web.facebook.com/?_rdc=1&_rdr"
                                        title=""><i class="fa-brands fa-facebook fa-lg"></i></a>
                                </li>
                                <li> <a target="_blank" href="https://www.youtube.com/" title=""><i
                                            class="fa-brands fa-youtube fa-lg"></i></a>
                                </li>
                                <li> <a target="_blank" href="https://twitter.com/" title=""><i
                                            class="fa-brands fa-twitter fa-lg"></i></a>
                                </li>
                                <li> <a target="_blank"
                                        href="https://mail.google.com/mail/?view=cm&fs=1&to=ameer.ali.jamali886@gmail.com">
                                        <i class="fa-brands fa-google-plus fa-lg"></i></a></li>
                            </ul>

                        </div>



                    </div>
                </div>
            </div>
        </div>

        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>Copyright © 2022.&nbsp; E-Books &nbsp;<i class="fa-solid fa-book fa-sm"></i>&nbsp;
                        </p>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div>
        </section>
    </footer>


    <!-- Scroll Top -->


    <button type="button" class="btn btn-floating" id="btn-back-to-top"><i class="fas fa-arrow-up"></i></button>


    <!-- Scroll Top Attach Files -->



    <div class="fab">
        <a href="https://api.whatsapp.com/send?text=Hi&amp;phone=+923404889886" target="_blank"
            class="things things1"><img class="img11" style="height: 47px; width:47px;"
                src="https://www.libertybooks.com/floatingchaticons/whats.png" alt="WhatsApp"></a>
    </div>



    <script src="js/helper-javascript.js"></script>
    <script src="js/bootstrap_bundle.js"></script>
    <script src="js/jquery_min.js"></script>
    <script src="js/helper-jquery.js"></script>
    <script src="js/jqueryAjax_feather-icons_lib.js"></script>
    <script src="js/jqueryAjax_chart_min.js"></script>

</body>

</html>
