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

    <div class="container mt-0">
        <div class="row">
            <div class="col-md-12">
                <h2 class="py-3 text-center font-bold font-up blue-text"><i
                        class="fa-solid fa-album-circle-user fa-lg"></i> &nbsp; Users</h2>
            </div>
        </div>
        <table class="table table-hover table-responsive mb-0">
            <div class="d-grid justify-content-end">

                <button class="btn btn-success mb-3" data-toggle="modal" data-target="#registerNewUser">Register &nbsp;<i class="fad fa-user-plus"></i></button>

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
                                <button type="submit" class="btn btn-primary getUserId btn-sm" value="{{ $userRecord->id }}"
                                    data-toggle="modal" data-target="#updateModel"><i class="fas fa-edit"></i></button>
                            </td>
                            <td>
                                <a href="{{ " /deleteUser/$userRecord->id" }}" class=" btn btn-danger btn-sm"><i
                                        class="fa fa-trash " aria-hidden="true"></i></a>
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


    {{-- Update User Model --}}




    <div class="modal fade" id="updateModel" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p id="error_message"></p>
                    <h5 class="modal-title" id="ModalLongTitle">Update User</h5>
                    <button type="button" class="close btn btn-danger bnt-sm" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ URL::to('/updateUser') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="mb-0 container-fluid model-container">
                            <p class="model-p">User Id</p>
                            <input type="text" disabled name="userId" id="userId" class="model-user-id">
                        </div>
                        <div class="mb-1">
                            <label for="firstName" class="form-label font-family">First Name</label>
                            <input type="text" class="form-control" name="firstName" id="fName">
                            <span class="text-danger">
                                @error('firstName')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-1">
                            <label for="lastName" class="form-label font-family">Last Name</label>
                            <input type="text" class="form-control" name="lastName" id="lName">
                            <span class="text-danger">
                                @error('lastName')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-1">
                            <label for="email" class="form-label font-family">Email address</label>
                            <input type="email" disabled class="form-control" name="email" id="updateEmail">
                        </div>
                        <input type="text" aria-disabled="true" hidden name="userIdForUpdate"
                            id="userIdForUpdate">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="submit" id="updateUser"
                            value="Update">
                    </div>
                    <p class="alert alert-success" id="successMessage"></p>
                </form>
            </div>
        </div>
    </div>


    {{-- Update User Model --}}







    {{-- Register New User Model --}}



    <div class="modal fade" id="registerNewUser" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p id="error_message"></p>
                    <h5 class="modal-title" id="ModalLongTitle">Register</h5>
                    <button type="button" class="close btn btn-danger bnt-sm" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ URL::to('/registerUser') }}" method="post">
                    @csrf
                    <div class="container mt-2 mb-1">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-outline">
                                    <label class="form-label" for="firstName">First name</label>
                                    <input type="text" name="firstName" id="firstName" class="form-control" />
                                    <span class="text-danger">
                                        @error('firstName')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-outline">
                                    <label class="form-label" for="lastName">Last name</label>
                                    <input type="text" name="lastName" id="lastName" class="form-control" />
                                    <span class="text-danger">
                                        @error('lastName')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-outline mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" />
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-outline mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" />
                            <span class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-outline mb-3">
                            <label class="form-label" for="password_confirmation">Conform Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control" />
                            <span class="text-danger">
                                @error('password_confirmation')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                    </div>
                    <!-- Model Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success btn-block" name="submit" value="Signup">
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- Register New User Model End --}}










    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#successMessage').hide();
            $('.getUserId').click(function() {
                var userId = $(this).val();
                $.ajax({
                    type: "get",
                    url: "/getUserInfoById/" + userId,
                    datatype: "josn",
                    success: function(response) {
                        if (response == 404) {
                            $('#error_message').html("Server Error Data Not Found");
                            $('#error_message').addClass("alert alert-danger");
                            $('#error_message').text(response.message);
                        } else {
                            $('#userId').val(response.user.id)
                            $('#userIdForUpdate').val(response.user.id)
                            $('#fName').val(response.user.firstName)
                            $('#lName').val(response.user.lastName)
                            $('#updateEmail').val(response.user.email)
                        }
                    }
                })
            })
        })
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
