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
                                        <label class="form-label" for="Name">Book_Name :</label>
                                        <input type="text" name="Name" id="Name" class="form-control" />
                                        <span class="text-danger">
                                            @error('Name')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="Issue_Date">Book Issue Date :</label>
                                        <input type="datetime-local" name="Issue_Date" id="Issue_Date"
                                            class="form-control" />
                                        <span class="text-danger">
                                            @error('Issue_Date')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="Author_Name">Author_Name :</label>
                                        <input type="text" name="Author_Name" id="Author_Name" class="form-control" />
                                        <span class="text-danger">
                                            @error('Author_Name')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="Author_Email">Author_Email :</label>
                                        <input type="email" name="Author_Email" id="author_email"
                                            class="form-control" />
                                        <span class="text-danger">
                                            @error('Author_Email')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="Description">Book Description :</label>
                                        <input type="text" name="Description" id="Description" class="form-control" />
                                        <span class="text-danger">
                                            @error('Description')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="Image">Book Image :</label>
                                <input type="file" name="Image" id="Image" class="form-control" />
                                <span class="text-danger">
                                    @error('Image')
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
