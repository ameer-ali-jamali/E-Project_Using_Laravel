@auth
<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>DashBoard</title>
        <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap_min.css">
        <link rel="stylesheet" href="css/admin_page.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- Favicon -->
        <link rel="icon" href="images/item5.png">

    </head>

    <body>

        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">
                @auth
                &nbsp;
                {{ Auth::user()->firstName }} &nbsp; {{ Auth::user()->lastName }}
                @endauth
            </a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span>

            </span>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    @auth
                    <a class="nav-link" href="/adminlogout"><i class="fal fa-sign-in"></i>&nbsp;
                        Logout</a>
                    @endauth
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block nav_bg sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item profile_btn_hover">
                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#adminProfileModal">
                                    <span data-feather="bar-chart-2"></span>
                                    Profile
                                </a>
                            </li>
                            <li class="nav-item profile_btn_hover ">
                                <a class="nav-link" href="/">
                                    <span data-feather="layers"></span>
                                    Home Page
                                </a>
                            </li>
                            <li class="nav-item profile_btn_hover">
                                <a class="nav-link" href="#">
                                    <span data-feather="bar-chart-2"></span>
                                    Account Setting
                                </a>
                            </li>
                            <li class="nav-item profile_btn_hover">
                                <a class="nav-link" href="#">
                                    <span data-feather="layers"></span>
                                    Change Email
                                </a>
                            </li>
                            <li class="nav-item profile_btn_hover">
                                <a class="nav-link" href="#">
                                    <span data-feather="layers"></span>
                                    Change Password
                                </a>
                            </li>
                        </ul>

                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Saved reports</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item profile_btn_hover">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Current Users
                                </a>
                            </li>
                            <li class="nav-item profile_btn_hover">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Last Month Users
                                </a>
                            </li>
                            <li class="nav-item profile_btn_hover">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Visitor
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>



        {{-- Users Books And Downloads Counts Cards --}}


        <div class="position-absolute container-fluid">

            <div class="container-fluid position-relative" style="margin-top: -55px;">
                <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

                    <div class="row row-cols-3 row-cols-md-3 g-4 object-fit mt-5 col-sm-1">
                        <div class="" id="showUsersList">
                            <div class="col ">
                                <div class="card card-item1">
                                    <div class="card-body">
                                        <h3 class="card-title">Registered Users</h3>
                                        <h1 class="card-text"><i class="fas fa-users" style="color: orange"
                                                aria-hidden="true"></i>&nbsp;{{ $usersCount }}</h1>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="showBooksList">
                            <div class="col ">
                                <div class="card card-item1">
                                    <div class="card-body">
                                        <h3 class="card-title">Books Available</h3>
                                        <h1 class="card-text"><i class="fas fa-books "
                                                style="color: blue"></i>&nbsp;{{ $booksCount }}
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="booksdownloads">
                            <div class="col ">
                                <div class="card card-item1">
                                    <div class="card-body">
                                        <h3 class="card-title">Downloads</h3>
                                        <h1 class="card-text"><i class="fas fa-download " style="color: red"></i>&nbsp;
                                            {{ $downloadBooksCount }}
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="guestsList">
                            <div class="col ">
                                <div class="card card-item1">
                                    <div class="card-body">
                                        <h3 class="card-title">Guests Accounts</h3>
                                        <h1 class="card-text"><i class="fad fa-user" style="color: aqua"></i>&nbsp; 55
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="visitorsCard">
                            <div class="col ">
                                <div class="card card-item1">
                                    <div class="card-body">
                                        <h3 class="card-title">Visitors</h3>
                                        <h1 class="card-text"><i class="fad fa-globe "
                                                style="color:chocolate"></i>&nbsp; 34</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>



        {{-- Error Messages --}}

        <div class="container position-relative">
            <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="display: grid; place-items: center">
                @if(session('errorMessage'))
                <div class="alert alert-{{session('className')}} error_message" role="alert" id="authAlert">
                    {{session('errorMessage')}}
                </div>
                @endif
                <div>
                    @if ($errors->any())
                    <div class="alert alert-danger error_message" role="alert" id="alertDanger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <ul><i class="fa-solid fa-triangle-exclamation"></i>&nbsp;{{ $error }}</ul>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>

            </div>
        </div>




        {{-- All Models --}}


        {{-- Book Upload Modal --}}

        <div class="modal fade" id="uploadBookModal" tabindex="-1" role="dialog" aria-labelledby="uploadBookTittle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p id="booksErrorMessage"></p>
                        <h5 class="modal-title" id="uploadBookTittle">Upload Book</h5>
                        <button type="button" class="close btn btn-danger btn-sm" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ URL::to('/uploadBook') }}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="uploadBookName">Book Name
                                                :</label>
                                            <input type="text" name="bookName" id="uploadBookName"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="uploadBookIssueDate">Book Issue
                                                Date :</label>
                                            <input type="datetime-local" name="bookIssueDate" id="uploadBookIssueDate"
                                                class="form-control" />

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="uploadBookAuthorName">Author Name
                                                :</label>
                                            <input type="text" name="bookAuthorName" id="uploadBookAuthorName"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="uploadBookAuthorEmail">Author
                                                Email
                                                :</label>
                                            <input type="email" name="bookAuthorEmail" id="uploadBookAuthorEmail"
                                                class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="uploadBookDescription">Book
                                                Description
                                                :</label>
                                            <input type="text" name="bookDescription" id="uploadBookDescription"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="uploadBookimage">Book Image
                                                :</label>
                                            <input type="file" name="bookImg" id="uploadBookimage"
                                                class="form-control" />

                                        </div>
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label font-family" for="uploadBookFile">Book File :</label>
                                    <input type="file" name="bookFile" id="uploadBookFile" class="form-control" />
                                </div>

                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success btn-block" name="submit" value="Upload">
                        </div>
                    </form>
                </div>
            </div>
        </div>



        {{-- Book Update Modal --}}

        <div class="modal fade" id="updateBookModal" tabindex="-1" role="dialog" aria-labelledby="updateBookInfoTittle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p id="booksErrorMessage"></p>
                        <h5 class="modal-title" id="updateBookInfoTittle">Update Book Information</h5>
                        <button type="button" class="close btn btn-danger btn-sm" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ URL::to('/updateBook') }}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="container">
                                <div class="container-fluid modal-container">
                                    <p class="modal-p">Book Id</p>
                                    <input type="text" disabled name="bookId" id="bookId" class="modal-user-id">
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="updateBookName">Book Name
                                                :</label>
                                            <input type="text" name="updateBookName" id="updateBookName"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="updateBookIssueDate">Book Issue
                                                Date
                                                :</label>
                                            <input type="datetime-local" name="updateIssueDate" id="updateBookIssueDate"
                                                class="form-control" />
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="updateBookAuthorName">Author Name
                                                :</label>
                                            <input type="text" name="updateAuthorName" id="updateBookAuthorName"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="updateBookAuthorEmail">Author
                                                Email
                                                :</label>
                                            <input type="email" name="updateAuthorEmail" id="updateBookAuthorEmail"
                                                class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-outline">
                                        <label class="form-label font-family" for="updateBookDescription">Book
                                            Description
                                            :</label>
                                        <input type="text" name="updateDescription" id="updateBookDescription"
                                            class="form-control" />
                                    </div>
                                </div>
                                <input type="text" aria-disabled="true" hidden name="bookIdForUpdate"
                                    id="bookIdForUpdate">
                            </div>
                        </div>
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success" name="submit" value="Update">
                        </div>

                    </form>
                </div>
            </div>
        </div>


        {{-- Register New User Modal --}}

        <div class="modal fade" id="registerNewUser" tabindex="-1" role="dialog" aria-labelledby="register-modal-title"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="register-modal-title">Registration</h5>
                        <button type="button" class="close btn btn-danger btn-sm" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ URL::to('/registerUser') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="container mt-2 mb-1">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="userFirstName">First name</label>
                                            <input type="text" name="userFirstName" class="form-control"
                                                id="userFirstName" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="userLastName">Last name</label>
                                            <input type="text" name="userLastName" id="userLastName"
                                                class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-outline mb-3">
                                    <label class="form-label font-family" for="userEmail">Email</label>
                                    <input type="email" name="userEmail" class="form-control" id="userEmail" />
                                </div>
                                <div class="form-outline mb-3">
                                    <label class="form-label font-family" for="password">Password</label>
                                    <input type="password" name="password" class="form-control" />
                                </div>
                                <div class="form-outline mb-3">
                                    <label class="form-label font-family" for="password_confirmation">Conform
                                        Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control" />
                                </div>

                            </div>
                        </div>

                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success btn-block" name="submit" value="Signup">
                        </div>
                    </form>
                </div>
            </div>
        </div>


        {{-- User Update Modal Form --}}

        <div class="modal fade" id="userUpdateModal" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLongTitle">Update User</h5>
                        <button type="button" class="close btn btn-danger btn-sm" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ URL::to('/updateUser') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-0 container-fluid modal-container">
                                <p class="modal-p">User Id</p>
                                <input type="text" disabled name="userId" id="updateFormUserId" class="modal-user-id">
                            </div>
                            <div class="mb-1">
                                <label for="firstName" class="form-label font-family">First Name</label>
                                <input type="text" class="form-control" name="updateUserFirstName"
                                    id="updateUserFirstName">
                            </div>
                            <div class="mb-1">
                                <label for="lastName" class="form-label font-family">Last Name</label>
                                <input type="text" class="form-control" name="updateUserLastName"
                                    id="updateUserLastName">
                            </div>
                            <div class="mb-1">
                                <label for="email" class="form-label font-family">Email address</label>
                                <input type="email" disabled class="form-control" name="email" id="updateUserEmail">
                            </div>
                            <input type="text" aria-disabled="true" hidden name="userIdForUpdate" id="userIdForUpdate">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success" name="submit" id="updateUser" value="Update">
                        </div>

                    </form>
                </div>
            </div>
        </div>


        <!-- Admin Profile -->

        @auth
        <div class="modal fade" id="adminProfileModal" tabindex="-1" role="dialog" aria-labelledby="adminProfileTittle"
            aria-hidden="true">
            <div class="modal-dialog" style="width: auto;">
                <div class="modal-content">
                    <div class="modal-header" style="height: 45px">
                        <h5 class="modal-title font-family" id="userProfileTittle" style="font-size: large;
                                 color: #6a6060;">
                            {{ Auth::user()->firstName }} &nbsp; {{ Auth::user()->lastName }}
                        </h5>
                        <button type="button" class="close btn btn-danger btn-sm" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ URL::to('#') }}" method="post">
                            @csrf
                            <div class="container">

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="registerFirstName">First
                                                name</label>
                                            <input type="text" name="firstName" class="form-control"
                                                value="{{ Auth::user()->firstName }}" disabled />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="registerLastName">Last
                                                name</label>
                                            <input type="text" name="lastName" class="form-control"
                                                value="{{ Auth::user()->lastName }}" disabled />

                                        </div>
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label font-family" for="registerEmail">Email address</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{ Auth::user()->email }}" disabled />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label font-family" for="registerPassword">Password</label>
                                    <input type="text" name="password" class="form-control"
                                        value="{{ "*************" }}" disabled />
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        @endauth







        {{-- Users and Books List--}}


        {{-- Users List Table --}}


        <div class="position-relative " id="usersListModal" style="display: none;">
            <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="data-table-container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="py-3 text-center font-bold font-up blue-text"><i class="fas fa-users fa-lg"></i>
                                &nbsp; Users Info</h2>
                        </div>
                    </div>
                    <table class="table table-hover table-responsive mb-0">
                        <div class="d-flex justify-content-between">
                            <span>
                                <a href="/adminDashBoard" class="btn btn-danger mb-4">DashBoard &nbsp;<i
                                        class="fas fa-user"></i></a>
                            </span>
                            <span>
                                <button class="btn btn-primary mb-3" data-bs-toggle="modal"
                                    data-bs-target="#registerNewUser">Register
                                    &nbsp;<i class="fas fa-user-plus"></i></button>

                            </span>
                        </div>

                        <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>Fist Name</th>
                            <th scope='col'>Last Name</th>
                            <th scope='col'>Email</th>
                            <th scope='col'>Role</th>
                            <th scope='col'>Update</th>
                            <th scope='col'>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if ($users->count())
                            @foreach ($users as $user)
                            <tr @if ($loop->even) class="bg-info" @endif>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $user->firstName }}</td>
                                <td>{{ $user->lastName }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <button class="btn btn-primary getUserId btn-sm" value="{{ $user->id }}"
                                        data-bs-toggle="modal" data-bs-target="#userUpdateModal"><i
                                            class="fal fa-edit"></i></button>

                                </td>
                                <td>
                                    @if ($user->role=="master_admin")

                                    @else
                                    <a class=" btn btn-danger btn-sm deleteUserConfirm"><i class="fa fa-trash fa-lg"
                                            aria-hidden="true"></i></a>
                                    <form action="{{ URL::to('/deleteUser') }}" hidden>
                                        <input type="text" name="userId" value="{{ $user->id }}">
                                        <input type="submit" name="submit" class="deleteUserByadmin">
                                    </form>
                                    @endif
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
            </div>
        </div>





        {{-- Books List  Table --}}


        <div class="position-relative" id="booksListModal" style="display: none;">
            <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

                <div class="data-table-container">
                    <div class="row">
                        <h2 class="py-3 text-center font-bold font-up blue-text"><i
                                class="fa-duotone fa-books fa-lg"></i>
                            &nbsp;Books Info</h2>
                    </div>
                    <table class="table table-hover table-responsive mb-0">
                        <div class="d-flex justify-content-between">
                            <span>
                                <a href="/adminDashBoard" class="btn btn-danger mb-4">DashBoard &nbsp;<i
                                        class="fas fa-user"></i></a>
                            </span>
                            <span>
                                <button class="btn btn-primary mb-3" data-bs-toggle="modal"
                                    data-bs-target="#uploadBookModal">Upload
                                    Book &nbsp;<i class="fa-duotone fa-book"></i>
                                </button>
                            </span>
                        </div>
                        <tr>
                            <th scope='col'>#</th>
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
                            @if ($books->count())
                            @foreach ($books as $book)
                            <tr @if ($loop->even) class="bg-info" @endif>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->issueDate }}</td>
                                <td>{{ $book->authorName }}</td>
                                <td>{{ $book->authorEmail }}</td>
                                <td>{{ $book->description }}</td>
                                <td><a href="/downlaod">
                                        <i class="fa-solid fa-download fa-lg text-danger"></i></a></td>
                                <td class="d-grid justify-center img_td"><img class="img_width"
                                        src="{{ $book->image }}">
                                </td>
                                <td>{{ $book->created_at }}</td>
                                <td>{{ $book->updated_at }}</td>
                                <td>
                                    <button type="submit" class="btn btn-primary btn-sm getBookId"
                                        value="{{ $book->id }}" data-bs-toggle="modal"
                                        data-bs-target="#updateBookModal"><i class="fal fa-edit"></i></button>
                                </td>
                                <td>
                                    <a class="btn btn-danger btn-sm deleteBookConfirm"><i class="fa fa-trash fa-lg"
                                            aria-hidden="true"></i></a>
                                    <form action="{{ URL::to('/deleteBook') }}" hidden>
                                        <input type="text" name="bookId" value="{{ $book->id }}">
                                        <input type="submit" name="submit" class="deleteBookByadmin">
                                    </form>
                                </td>

                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="12" class="bg-danger user-table">No Book Found</td>
                            </tr>

                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>




        {{-- Downloads List Table --}}

        <div class="position-relative" id="downloadsList" style="display: none;">
            <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="data-table-container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="py-3 text-center font-bold font-up blue-text"><i
                                    class="fad fa-download fa-lg"></i>
                                &nbsp; Downlaods Information</h2>
                        </div>
                    </div>
                    <table class="table table-hover table-responsive mb-0">
                        <div class="d-flex justify-content-between">
                            <span>
                                <a href="/adminDashBoard" class="btn btn-danger mb-4">DashBoard &nbsp;<i
                                        class="fas fa-user"></i></a>
                            </span>
                        </div>

                        <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>User Id</th>
                            <th scope='col'>Book Id</th>
                            <th scope='col'>Timestap</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if ($downloadsInfo->count())
                            @foreach ($downloadsInfo as $Info)
                            <tr @if ($loop->even) class="bg-info" @endif>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $Info->userId }}</td>
                                <td>{{ $Info->bookId }}</td>
                                <td>{{ $Info->timeStamp }}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="8" class="bg-danger user-table">No Data Found</td>
                            </tr>

                            @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>















        <script src="js/bootstrap_bundle.js"></script>
        <script src="js/jquery_min.js"></script>
        <script src="js/helper-jquery.js"></script>
        <script src="js/jqueryAjax_feather-icons_lib.js"></script>
        <script src="js/jqueryAjax_chart_min.js"></script>

    </body>

</html>
@endauth

@guest
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Logout</title>
    </head>

    <body>
        <center>
            <h1>403 Page Expired Please Login Again</h1>
        </center>
        <a href="/">Home</a>
    </body>

</html>

@endguest
