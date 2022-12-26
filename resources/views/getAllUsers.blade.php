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

    <a href="/" class="btn btn-primary">Home Page</a>
    <a href="/admin" class="btn btn-dark">Dashboard</a>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h2 class="py-3 text-center font-bold font-up blue-text">All Users Info</h2>
            </div>
        </div>
        <table class="table table-hover table-responsive mb-0">
            <tr>
                <th scope='col'>Id</th>
                <th scope='col'>Fist Name</th>
                <th scope='col'>Last Name</th>
                <th scope='col'>Email</th>
                <th scope='col'>Created_At</th>
                <th scope='col'>Update</th>
                <th scope='col'>Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($user as $user )
                <tr>
                    <th>{{ $user->id}}</th>
                    <th>{{ $user->firstName}}</th>
                    <th>{{ $user->lastName}}</th>
                    <th>{{ $user->email}}</th>
                    <th>{{ $user->created_at}}</th>
                    <th><a href="{{" /updateUser/$user->id" }}" class=" btn btn-success btn-sm">Update</a>
                    </th>
                    </th>
                    <th><a href="{{" /deleteUser/$user->id" }}" class=" btn btn-danger btn-sm">Delete</a>
                    </th>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>

    <hr class="my-4">
