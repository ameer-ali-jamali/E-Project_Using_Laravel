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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- Font Awosome CDN-->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">

    @include('Css_Js_php.css.bootstrap')
    @include('Css_Js_php.css.style')

</head>

<body class="hm-gradient">
    <a href="/" class="btn btn-info"><i class="fa-solid fa-house"></i> &nbsp; Home</a>
    <a href="/admin" class="btn btn-dark"><i class="fa-duotone fa-user"></i>&nbsp; Dashboard</a>

    <div class="container-fluid mt-0">
        <div class="row">
            <div class="col-md-12">
                <h2 class="py-3 text-center font-bold font-up blue-text"><i class="fa-duotone fa-books fa-lg"></i>
                    &nbsp;Books Info</h2>
            </div>
        </div>
        <table class="table table-hover table-responsive mb-0">
            <tr>
                <th scope='col'>Id</th>
                <th scope='col'>Name</th>
                <th scope='col'>IssueDate</th>
                <th scope='col'>AuthorName</th>
                <th scope='col'>AuthorEmail</th>
                <th scope='col'>Description</th>
                <th scope='col'>File</th>
                <th scope='col'>Image</th>
                <th scope='col'>Created_at</th>
                <th scope='col'>Updated_at</th>
                <th scope='col'>Update</th>
                <th scope='col'>Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($book as $bookRecord)
                    <tr>
                        <th>{{ $bookRecord->id }}</th>
                        <th>{{ $bookRecord->name }}</th>
                        <th>{{ $bookRecord->issueDate }}</th>
                        <th>{{ $bookRecord->authorName }}</th>
                        <th>{{ $bookRecord->authorEmail }}</th>
                        <th>{{ $bookRecord->description }}</th>
                        <th><a href="/downlaod">Downlaod</a></th>
                        <th class="d-grid justify-center img_td"><img class="img_width" src="{{ $bookRecord->image }}"
                                alt="">
                        </th>
                        <th>{{ $bookRecord->created_at }}</th>
                        <th>{{ $bookRecord->updated_at }}</th>
                        <th>
                            <a value="{{ $bookRecord->id }}" class="btn btn-info btn-sm updateBook" id="updateBook"><i
                                class="fas fa-edit fa-lg"></i></a>
                        </th>
                        <th><a href=" {{ "/deleteBook/$bookRecord->id" }}"class=" btn btn-danger btn-sm"><i
                                    class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
                        </th>


                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>

    <hr class="my-4">











    @include('Css_Js_php.js.jquery_min')
    @include('Css_Js_php.js.style_jquery')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
