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
                <li class="active"> <a class="nav-link" href="Index.html"><i class="fa-solid fa-book fa-sm"></i>
                        &nbsp;
                        E-BOOKS</a></li>
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
                    <li class="nav-item"><a class="nav-link" href="location.html"><i
                                class="fal  fa-info"></i>&nbsp;About
                            Us</a></li>
                </ul>
                <span class="conainer login-btns">
                    <a href="/login"><i class="fa-solid fa-user-plus"></i>&nbsp;
                        Register</a>
                    <a href="/login"><i class="fas fa-sign-in"></i>&nbsp; Login</a>
                </span>

            </div>
        </div>

        <!-- Progress Bar -->

        <div class="scroll-line"></div>


    </nav>


    @yield('content')








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
