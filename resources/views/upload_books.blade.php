<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Form</title>
    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    {{-- sweet alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Font Awosome CDN-->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    @include('Css_Js_php.css.form_css')
    @include('Css_Js_php.css.bootstrap')

</head>

<body>

    <!-- Section: Design Block -->
    <section class=" text-center text-lg-start">
        <div class="card mb-3">
            <div class="row g-0 d-flex">
                <div class="col-lg-4 d-none d-lg-flex">
                    <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
                        class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
                </div>
                <div class="col-lg-8">
                    <div class="card-body py-5 px-md-5">

                        <form action="{{ URL::to('/upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="book_name">Book_Name</label>
                                        <input type="text" name="book_name" id="book_name" class="form-control" />
                                        <span class="text-danger">
                                            @error('book_name')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="book_issue_date">Book Issue Date</label>
                                        <input type="datetime-local" name="book_issue_date" id="book_issue_date"
                                            class="form-control" />
                                        <span class="text-danger">
                                            @error('book_issue_date')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="author_name">Author_Name</label>
                                        <input type="text" name="author_name" id="author_name" class="form-control" />
                                        <span class="text-danger">
                                            @error('author_name')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="author_email">Author_Email</label>
                                        <input type="email" name="author_email" id="author_email"
                                            class="form-control" />
                                        <span class="text-danger">
                                            @error('author_email')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="book_description">Book Description</label>
                                        <input type="text" name="book_description" id="book_description"
                                            class="form-control" />
                                        <span class="text-danger">
                                            @error('book_description')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="book_price">Book Image :</label>
                                <input type="file" name="book_img" id="book_img" class="form-control" />
                                <span class="text-danger">
                                    @error('book_img')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <!-- Submit button -->
                            <input type="submit" class="btn btn-primary btn-dark btn-lg mb-4" name="submit" id="submit"
                                value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Section: Design Block -->


    @include('Css_Js_php.js.helper')
    @include('Css_Js_php.js.jquery_min')
</body>

</html>
