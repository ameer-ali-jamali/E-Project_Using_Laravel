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
    @include('Css_Js_php.css.bootstrap_min_css')
    @include('Css_Js_php.js.bootstrap_bundle_js')
    @include('Css_Js_php.js.jqueryAjax_feather-icons_lib')
    @include('Css_Js_php.js.jqueryAjax_chart_min_js')
    @include('Css_Js_php.css.style')

</head>

<body>

    <header>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">E Books </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">

                    <div class="container">
                        <ul class="navbar-nav mr-auto mb-2 mb-md-0 justify-content-around">
                            <li class="nav-item active">
                                <a class="nav-link" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">All Books</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">New Bookss</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/topAuthors">Top Authors</a>
                            </li>
                        </ul>
                    </div>

                    <div class="container d-flex justify-content-end">
                        <div class="d-flex justify-content-around gap-2 mright">
                            <a href="/admin" class="btn btn-outline-danger" type="submit" name="signup"
                                id="signup">Admin</a>
                            <a href="/register" class="btn btn-outline-secondary" type="submit" name="signup"
                                id="signup">Register</a>
                            <a href="/login" class="btn btn-outline-primary" type="submit" name="login"
                                id="login">Login</a>
                            <form class="d-flex gap-2">
                                <input class="form-control mr-2" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </nav>
    </header>


    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        {{-- <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-ba-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol> --}}
        <div class="carousel-inner active">
            <div class="carousel-item active" data-bs-interval="10000">
                <img class="bd-placeholder-img" width="100%" height="100%" src="./images/home.jpg" alt=""
                    width="100%" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img class="bd-placeholder-img" width="100%" height="100%" src="./images/home_carouserl.jpeg"
                    alt="" width="100%" preserveAspectRatio="xMidYMid slice" role="img"
                    focusable="false">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img class="bd-placeholder-img" width="100%" height="100%" src="./images/home.jpg"
                    alt="" width="100%" preserveAspectRatio="xMidYMid slice" role="img"
                    focusable="false">

            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- Marketing messaging and featurettes
             ========================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->












    <div class="fab">
        <a href="https://api.whatsapp.com/send?text=Hi&amp;phone=+923404889886" target="_blank"
            class="things things1"><img class="img11" style="height: 47px; width:47px;"
                src="https://www.libertybooks.com/floatingchaticons/whats.png" alt="WhatsApp"></a>
    </div>





</body>

</html>
