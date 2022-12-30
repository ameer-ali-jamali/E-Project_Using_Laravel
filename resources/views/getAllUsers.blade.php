<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Users</title>
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

    <div class="container mt-0">
        <div class="row">
            <div class="col-md-12">
                <h2 class="py-3 text-center font-bold font-up blue-text"><i
                        class="fa-solid fa-album-circle-user fa-lg"></i> &nbsp; Users</h2>
            </div>
        </div>
        <table class="table table-hover table-responsive mb-0">
            <div class="d-grid justify-content-end">

                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#registerNewUser">Register
                    &nbsp;<i class="fad fa-user-plus"></i></button>

            </div>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>Fist Name</th>
                <th scope='col'>Last Name</th>
                <th scope='col'>Email</th>
                <th scope='col'>Created_At</th>
                <th scope='col'>Updated_At</th>
                <th scope='col'>Update</th>
                <th scope='col'>Delete</th>
            </tr>
            </thead>
            <tbody>
                @if ($user->count())
                    @foreach ($user as $userRecord)
                        <tr @if ($loop->even) class="bg-info" @endif>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $userRecord->firstName }}</td>
                            <td>{{ $userRecord->lastName }}</td>
                            <td>{{ $userRecord->email }}</td>
                            <td>{{ $userRecord->created_at }}</td>
                            <td>{{ $userRecord->updated_at }}</td>
                            <td>
                                <button class="btn btn-primary getUserId btn-sm" value="{{ $userRecord->id }}"
                                    data-toggle="modal" data-target="#updateModel"><i class="fas fa-edit"></i></button>
                            </td>
                            <td>
                                <a href=" {{ "/deleteUser/$userRecord->id" }}" class=" btn btn-danger btn-sm"><i
                                        class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
                            </td>

                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="8" class="bg-danger user-table">No User Found</td>
                    </tr>

                @endif
            </tbody>
        </table>


    </div>

    <hr class="my-4">




    @include('Css_Js_php.js.helper')
    @include('Css_Js_php.js.jquery_min')
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-DBjhmceckmzwrnMMrjI7BvG2FmRuxQVaTfFYHgfnrdfqMhxKt445b7j3KBQLolRl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
        integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous">
    </script>
</body>

</html>
