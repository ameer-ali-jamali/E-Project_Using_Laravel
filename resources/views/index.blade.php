@extends('main')
@section('title', 'Home')

@section('content')

    {{-- Carousel --}}

    <div id="homePageCarousel" class="carousel carousel-dark slide" style="margin-top:-60px;">

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="images/carousel_images/image-1.jpg" class="d-block w-100 carousel-image" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>FREE AND DISCOUNTED BESTSELLERS</h5>
                    <p>Join 150,000+ fellow readers. Get free and discounted bestsellers straight to
                        your inbox with the ManyBooks eBook deals newsletter. </p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/carousel_images/poster-image.jpg" class="d-block w-100 carousel-image" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>The Ultimate Guide to Free eBooks</h5>
                    <p>Not sure what to read next? Explore our catalog of public domain books with our
                        editors. Some real gems are hidden in our library.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/carousel_images/image-3.jpg" class="d-block w-100 carousel-image" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>LOTS OF EBOOKS. 100 % FREE</h5>
                    <p>Welcome to your friendly neighborhood library. We have more than 50,000 free
                        ebooks waiting to be discovered.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homePageCarousel" data-bs-slide="prev">
            <i class="fa-solid fa-backward fa-lg"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homePageCarousel" data-bs-slide="next">
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
                                <li> <a target="_blank" href="https://web.facebook.com/?_rdc=1&_rdr" title=""><i
                                            class="fa-brands fa-facebook fa-lg"></i></a>
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




    <!-- Scroll Top Attach Files -->



    <div class="fab">
        <a href="https://api.whatsapp.com/send?text=Hi&amp;phone=+923404889886" target="_blank"
            class="things things1"><img class="img11" style="height: 47px; width:47px;"
                src="https://www.libertybooks.com/floatingchaticons/whats.png" alt="WhatsApp"></a>
    </div>

@endsection
