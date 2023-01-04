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

    <header>

        <div class="banner2 d-flex justify-content-around p-2">
            <span><i class="fas fa-envelope"></i> &nbsp;E_books*3423@gmial.com</span>
            <span> <i class="fas fa-phone"></i> &nbsp;+92487985745909</span>
        </div>

    </header>


    <!--Navigation Bar-->

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <div class="nav navbar-brand">
                @auth
                    <li class="active"> <a class="nav-link" href="/userProfile">
                            &nbsp;
                            {{ Auth::user()->firstName }} &nbsp; {{ Auth::user()->lastName }}</a></li>
                @endauth

                @guest
                    <li class="active"> <a class="nav-link" href="/"><i class="fa-solid fa-book fa-sm"></i>
                            &nbsp;
                            E-BOOKS</a></li>
                @endguest

            </div>
            <button class="navbar-toggler rounded" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa fa-bars" id="hamberg-icon"></i></span></button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex justify-content-between " style="margin-inline: auto; gap:50px;">
                    <li class="active"> <a class="nav-link" href="Index.html">
                            <i class="fa-thin fa-house"></i>
                            &nbsp;
                            Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="Products.html"><i class="fal fa-books"></i>
                            &nbsp;Books</a></li>

                    <li class="nav-item"><a class="nav-link" href="/topAuthors"><i
                                class="fal solid fa-user"></i>&nbsp;Top
                            Authors</a></li>
                    <li class="nav-item"><a class="nav-link" href="location.html"><i
                                class="fal fa-book-reader"></i>&nbsp;Latest Books</a></li>
                    <li class="nav-item"><a class="nav-link" href="feedback.html"><i
                                class="fal  fa-comments"></i>&nbsp;Feedback</a></li>
                    <li class="nav-item"><a class="nav-link" href="location.html"><i class="fas fa-info"></i>&nbsp;About
                            Us</a></li>
                </ul>
                <span class="conainer login-btns">
                    @auth
                        <a href="/userProfile"><i class="fa-solid fa-user-plus"></i>&nbsp;
                            Profile</a>
                        <a href="/logout"><i class="fas fa-sign-in"></i>&nbsp; Log out</a>
                    @endauth

                    @guest
                        <a href="#" data-bs-toggle="modal" data-bs-target="#userRegistrationModal"><i
                                class="fa-solid fa-user-plus"></i>&nbsp;
                            Register</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#userLoginModelForm"><i
                                class="fas fa-sign-in"></i>&nbsp;
                            Login</a>
                    @endguest

                </span>

            </div>
        </div>

        <!-- Progress Bar -->

        <div class="scroll-line"></div>


    </nav>


    @yield('content')




    {{-- User Registration Model --}}

    <!-- Modal -->
    <div class="modal fade" id="userRegistrationModal" tabindex="-1" role="dialog"
        aria-labelledby="registrationTittle" aria-hidden="true">
        <div class="modal-dialog" style="width: auto;">
            <div class="modal-content">
                <div class="modal-header" style="height: 45px">
                    <p id="userRegistraitonErroMessage"></p>
                    <h5 class="modal-title" id="registrationTittle" style="font-size: large; color: cadetblue;">
                        Registartion Form</h5>
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
                                        <input type="text" name="firstName" id="registerFirsttName"
                                            class="form-control" />
                                        <span class="text-danger">
                                            @error('firstName')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label font-family" for="registerLastName">Last name</label>
                                        <input type="text" name="lastName" id="registerLastName"
                                            class="form-control" />
                                        <span class="text-danger">
                                            @error('lastName')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label font-family" for="registerEmail">Email address</label>
                                <input type="email" name="email" id="registerEmail" class="form-control" />
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label font-family" for="registerPassword">Password</label>
                                <input type="password" name="password" id="registerPassword" class="form-control" />
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label font-family" for="registerPasswordConfirmation">Conform
                                    Password</label>
                                <input type="password" name="password_confirmation" id="registerPasswordConfirmation"
                                    class="form-control" />
                                <span class="text-danger">
                                    @error('password_confirmation')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>





    {{-- Login form model --}}

    <!-- Modal -->
    <div class="modal fade" id="userLoginModelForm" tabindex="-1" role="dialog"
        aria-labelledby="userLoginFormTittle" aria-hidden="true">
        <div class="modal-dialog" style="width: auto;">
            <div class="modal-content">
                <div class="modal-header" style="height: 45px">
                    <p id="userLoginErroMessage"></p>
                    <h5 class="modal-title" id="userLoginFormTittle" style="font-size: large; color: cadetblue;">
                        Login Form</h5>
                    <button type="button" class="close btn btn-danger btn-sm" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ URL::to('/userLogin') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <div class="col mt-0">
                            <div class="form-outline">
                                <label class="form-label font-family" for="userEmail">Email</label>
                                <input type="email" name="email" id="userEmail" class="form-control"
                                    placeholder="Input Your Email" />
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col mt-3">
                            <div class="form-outline">
                                <label class="form-label font-family" for="userPasswrod">Password
                                </label>
                                <input type="password" name="password" id="userPassword" class="form-control"
                                    placeholder="Input Your Password" />
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="submit" value="Login">
                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>











    <!-- Scroll Top -->
    <button type="button" class="btn btn-floating" id="btn-back-to-top"><i class="fas fa-arrow-up"></i></button>



    <script src="js/helper-javascript.js"></script>
    <script src="js/bootstrap_bundle.js"></script>
    <script src="js/jquery_min.js"></script>
    <script src="js/helper-jquery.js"></script>
    <script src="js/jqueryAjax_feather-icons_lib.js"></script>
    <script src="js/jqueryAjax_chart_min.js"></script>








</body>

</html>
