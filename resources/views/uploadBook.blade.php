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

                        <form action="{{ URL::to('/uploadBook') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="name">Book Name :</label>
                                        <input type="text" name="name" id="name" class="form-control" />
                                        <span class="text-danger">
                                            @error('name')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="issueDate">Book Issue Date :</label>
                                        <input type="datetime-local" name="issueDate" id="issueDate"
                                            class="form-control" />
                                        <span class="text-danger">
                                            @error('issueDate')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="authorName">Author Name :</label>
                                        <input type="text" name="authorName" id="authorName" class="form-control" />
                                        <span class="text-danger">
                                            @error('authorName')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="authorEmail">Author Email :</label>
                                        <input type="email" name="authorEmail" id="authorEmail" class="form-control" />
                                        <span class="text-danger">
                                            @error('authorEmail')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="description">Book Description :</label>
                                        <input type="text" name="description" id="description" class="form-control" />
                                        <span class="text-danger">
                                            @error('description')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="img">Book Image :</label>
                                        <input type="file" name="img" id="Img" class="form-control" />
                                        <span class="text-danger">
                                            @error('img')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="file">Book File :</label>
                                <input type="file" name="file" id="file" class="form-control" />
                                <span class="text-danger">
                                    @error('file')
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
