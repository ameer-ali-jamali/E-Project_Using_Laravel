<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.72.0">
        <title>@yield('title')</title>
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

        <header class="header-item">

            <div class="banner2 d-flex justify-content-around p-2">
                <span><i class="fas fa-envelope"></i> &nbsp;E_books*3423@gmial.com</span>
                <span> <i class="fas fa-phone"></i> &nbsp;+92487985745909</span>
            </div>
            @if(session('errorMessage'))
            <div class="alert alert-{{session('className')}} error_message" role="alert" id="authAlert">
                {{session('errorMessage')}}
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger error_message" role="alert" id="alertDanger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <ul><i class="fa-solid fa-triangle-exclamation"></i>&nbsp;{{ $error }}</ul>
                    @endforeach
                </ul>
            </div>
            @endif

            <hr class="hr-navbar">
        </header>

        <!--Navigation Bar-->

        <nav class="navbar navbar-expand-lg sticky-top">
            <div class="container-fluid">
                <div class="nav navbar-brand">
                    <li class="active">
                        <a class="nav-link" href="/" style="color: white ;font-weight: bold">
                            <i class="fa-solid fa-books" style="color: darkcyan"></i>&nbsp;
                            E-BOOKS</a>
                    </li>
                </div>
                <button class="navbar-toggler rounded" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fa fa-bars" id="hamberg-icon"></i></span></button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex justify-content-between " style="margin-inline: auto; gap:50px;">
                        <li class="active"> <a class="nav-link" href="/">
                                <i class="fa-thin fa-house" style="color: gold"></i>
                                &nbsp;
                                Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/topAuthors"><i class="fal solid fa-user"
                                    style="color: turquoise"></i>&nbsp;Top
                                Authors</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#contactUsModal"><i
                                    class="fal fa-address-book" style="color: darkorchid"></i>
                                &nbsp;Conatact Us</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-info"
                                    style="color: goldenrod"></i> &nbsp;About
                                Us</a></li>
                    </ul>
                    <span class="conainer login-btns">
                        @auth
                        @if (Auth::user()->role == 'master_admin')
                        <a href="/adminDashBoard"><i class="fa-solid fa-user-plus" style="color: turquoise"></i>&nbsp;
                            DashBoard</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#adminProfileModal">
                            {{ Auth::user()->firstName }} &nbsp; {{ Auth::user()->lastName }}</a>
                        <a href="/adminlogout"><i class="fas fa-sign-in" style="color: red"></i>&nbsp; Logout</a>
                        @else
                        <a href="#" data-bs-toggle="modal" data-bs-target="#userProfileModal"><i
                                class="fa-solid fa-user-plus" style="color: darkgray"></i>&nbsp;
                            Profile</a>

                        <a href="#" data-bs-toggle="modal" data-bs-target="#userProfileModal">
                            {{ Auth::user()->firstName }} &nbsp; {{ Auth::user()->lastName }}</a>
                        <a href="/userlogout"><i class="fas fa-sign-in" style="color: red"></i>&nbsp; Log out</a>
                        @endif
                        @endauth

                        @guest
                        <a href="#" data-bs-toggle="modal" data-bs-target="#userRegistrationModal"><i
                                class="fa-solid fa-user-plus" style="color:aqua"></i>&nbsp;
                            Register</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#userLoginModalForm"><i
                                class="fas fa-sign-in" style="color:aqua"></i>&nbsp;
                            Login</a>
                        @endguest

                    </span>
                </div>
            </div>



            <!-- Progress Bar -->

            <div class="scroll-line"></div>


        </nav>


        @yield('content')




        {{-- User Registration Modal --}}

        <!-- Modal -->
        <div class="modal fade" id="userRegistrationModal" tabindex="-1" role="dialog"
            aria-labelledby="registrationTittle" aria-hidden="true">
            <div class="modal-dialog" style="width: auto;">
                <div class="modal-content">
                    <div class="modal-header" style="height: 45px">
                        <h5 class="modal-title font-family" id="registrationTittle" style="font-size: large;
                        color: #6a6060;">
                            Registartion</h5>
                        <button type="button" class="close btn btn-danger btn-sm" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ URL::to('/registerUser') }}" method="post">
                            @csrf
                            <div class="container">

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="registerFirstName">First
                                                name</label>
                                            <input type="text" name="userFirstName" id="registerFirsttName"
                                                class="form-control" />

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="registerLastName">Last
                                                name</label>
                                            <input type="text" name="userLastName" id="registerLastName"
                                                class="form-control" />

                                        </div>
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label font-family" for="registerEmail">Email address</label>
                                    <input type="email" name="userEmail" id="registerEmail" class="form-control" />

                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label font-family" for="registerPassword">Password</label>
                                    <input type="password" name="password" id="registerPassword" class="form-control" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label font-family" for="registerPasswordConfirmation">Confirm
                                        Password</label>
                                    <input type="password" name="password_confirmation"
                                        id="registerPasswordConfirmation" class="form-control" />
                                </div>
                            </div>
                            <p style="color: black">Already Have Account <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#userLoginModalForm" style="color: red;"><i
                                        class="fas fa-sign-in"></i>&nbsp;
                                    Login</a></p>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>


        <br><br>

        {{-- Login form Modal --}}

        <div class="modal fade" id="userLoginModalForm" tabindex="-1" role="dialog"
            aria-labelledby="userLoginFormTittle" aria-hidden="true">
            <div class="modal-dialog" style="width: auto;">
                <div class="modal-content">
                    <div class="modal-header" style="height: 45px">
                        <h5 class="modal-title" id="userLoginFormTittle" style="font-size: large;
                        color: #6a6060;">
                            Login</h5>
                        <button type="button" class="close btn btn-danger btn-sm" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="{{ URL::to('/userLogin') }}" method="POST">
                            @csrf

                            <div class="col mt-0">
                                <div class="form-outline">
                                    <label class="form-label font-family" for="userEmail">Email</label>
                                    <input type="email" name="email" id="userEmail" class="form-control"
                                        placeholder="Input Your Email" />
                                </div>
                            </div>
                            <div class="col mt-3">
                                <div class="form-outline">
                                    <label class="form-label font-family">Password
                                    </label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Input Your Password" />
                                </div>
                            </div>


                            <p style="color: black; padding: 3px">Dont Have Account<a href="#" data-bs-toggle="modal"
                                    data-bs-target="#userRegistrationModal" style="color: red"><i
                                        class="fa-solid fa-user-plus"></i>&nbsp;
                                    Register Now</a>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-success" name="submit" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        {{-- ContactUs Model --}}


        <!-- Modal -->
        <div class="modal fade" id="contactUsModal" tabindex="-1" role="dialog" aria-labelledby="contactUsTittle"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="height: 45px">
                        <h5 class="modal-title" id="contactUsTittle" style="font-size: large;
                            color: #6a6060;">
                            Contact Us</h5>
                        <button type="button" class="close btn btn-danger btn-sm" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="{{ URL::to('/contactUsRequest') }}" method="post">
                            @csrf
                            <div class="container">

                                <div class="form-outline mb-4">
                                    <label class="form-label font-family" for="userFullName">Full Name</label>
                                    <input type="text" name="name" id="userFullName" class="form-control"
                                        placeholder="Input Your Complete Name" />
                                    <span class="text-danger">
                                        @error('name')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label font-family" for="contactUsUserEmail">Email</label>
                                    <input type="email" name="email" id="contactUsUserEmail" class="form-control"
                                        placeholder="Please Input Your Email" />
                                    <span class="text-danger">
                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label font-family" for="messageBox">Message</label>
                                    <textarea class="form-control" name="messageBox" id="messageBox" rows="4"
                                        placeholder="Message Box"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        @auth
        {{-- User Profile Modal --}}

        <div class="modal fade" id="userProfileModal" tabindex="-1" role="dialog" aria-labelledby="userProfileTittle"
            aria-hidden="true">
            <div class="modal-dialog" style="width: auto;">
                <div class="modal-content">
                    <div class="modal-header" style="height: 45px">
                        <h5 class="modal-title font-family" id="userProfileTittle" style="font-size: large;
                                    color: #6a6060;">
                            {{ Auth::user()->firstName }} &nbsp; {{ Auth::user()->lastName }}
                        </h5>
                        <button type="button" class="close btn btn-danger btn-sm" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ URL::to('#') }}" method="post">
                            @csrf
                            <div class="container">

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="registerFirstName">First
                                                name</label>
                                            <input type="text" name="firstName" class="form-control"
                                                value="{{ Auth::user()->firstName }}" disabled />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="registerLastName">Last
                                                name</label>
                                            <input type="text" name="lastName" class="form-control"
                                                value="{{ Auth::user()->lastName }}" disabled />

                                        </div>
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label font-family" for="registerEmail">Email address</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{ Auth::user()->email }}" disabled />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label font-family" for="registerPassword">Password</label>
                                    <input type="text" name="password" class="form-control"
                                        value="{{ "*************" }}" disabled />
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        {{-- Admin Profile Modal --}}

        <div class="modal fade" id="adminProfileModal" tabindex="-1" role="dialog" aria-labelledby="adminProfileTittle"
            aria-hidden="true">
            <div class="modal-dialog" style="width: auto;">
                <div class="modal-content">
                    <div class="modal-header" style="height: 45px">
                        <h5 class="modal-title font-family" id="userProfileTittle" style="font-size: large;
                                    color: #6a6060;">
                            {{ Auth::user()->firstName }} &nbsp; {{ Auth::user()->lastName }}
                        </h5>
                        <button type="button" class="close btn btn-danger btn-sm" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ URL::to('#') }}" method="post">
                            @csrf
                            <div class="container">

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="registerFirstName">First
                                                name</label>
                                            <input type="text" name="firstName" class="form-control"
                                                value="{{ Auth::user()->firstName }}" disabled />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="registerLastName">Last
                                                name</label>
                                            <input type="text" name="lastName" class="form-control"
                                                value="{{ Auth::user()->lastName }}" disabled />

                                        </div>
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label font-family" for="registerEmail">Email address</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{ Auth::user()->email }}" disabled />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label font-family" for="registerPassword">Password</label>
                                    <input type="text" name="password" class="form-control"
                                        value="{{ "*************" }}" disabled />
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        @endauth
































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



        <div class="fab fab-icon">
            <a href="https://api.whatsapp.com/send?text=Hi&amp;phone=+923404889886" target="_blank"
                class="things things1"><img class="img11" style="height: 47px; width:47px;"
                    src="https://www.libertybooks.com/floatingchaticons/whats.png" alt="WhatsApp"></a>
        </div>



        <!-- Scroll Top -->
        <button type="button" class="btn btn-floating " id="btn-back-to-top"><i class="fas fa-arrow-up"></i></button>



        <script src="js/helper-javascript.js"></script>
        <script src="js/bootstrap_bundle.js"></script>
        <script src="js/jquery_min.js"></script>
        <script src="js/helper-jquery.js"></script>
        <script src="js/jqueryAjax_feather-icons_lib.js"></script>
        <script src="js/jqueryAjax_chart_min.js"></script>

    </body>

</html>
