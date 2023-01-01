<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('Css_Js_php.css.admin_css')
    @include('Css_Js_php.css.style')
    @include('Css_Js_php.js.bootstrap_bundle_js')
    @include('Css_Js_php.js.jquery_min')
    @include('Css_Js_php.css.bootstrap_min_css')
    @include('Css_Js_php.js.helper-jquery')
    @include('Css_Js_php.js.jqueryAjax_feather-icons_lib')
    @include('Css_Js_php.js.jqueryAjax_chart_min_js')
</head>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">E Books</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">
                                <span data-feather="bar-chart-2"></span>
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                <span data-feather="layers"></span>
                                Home Page
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Account Setting
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Change Email
                            </a>
                        </li>
                        <li class="nav-item">
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
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Current Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last Month Users
                            </a>
                        </li>
                        <li class="nav-item">
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


    {{-- Books List Loop  --}}

    <div class="container-fluid position-absolute" id="usersBooksListConatiner">



        <div class="position-relative" id="booksListModel">
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
                                <a href="/admin" class="btn btn-danger mb-4">DashBoard &nbsp;<i
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
                                                data-bs-target="#updateBookModel"><i class="fas fa-edit"></i></button>
                                        </td>
                                        <td><a href=" {{ " /deleteBook/$book->id" }}"class=" btn btn-danger btn-sm"><i
                                                    class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
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

        {{-- Loop end --}}



        {{-- Users List Model Start --}}

        <div class="position-relative " id="usersListModel">
            <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="data-table-container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="py-3 text-center font-bold font-up blue-text"><i
                                    class="fa-solid fa-album-circle-user fa-lg"></i> &nbsp; Users</h2>
                        </div>
                    </div>
                    <table class="table table-hover table-responsive mb-0">
                        <div class="d-flex justify-content-between">
                            <span>
                                <a href="/admin" class="btn btn-danger mb-4">DashBoard &nbsp;<i
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
                            <th scope='col'>Created_At</th>
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
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            <button class="btn btn-primary getUserId btn-sm"
                                                value="{{ $user->id }}" data-bs-toggle="modal"
                                                data-bs-target="#userUpdateModal"><i class="fas fa-edit"></i></button>
                                        </td>
                                        <td>
                                            <a href=" {{ "/deleteUser/$user->id" }}"
                                                class=" btn btn-danger btn-sm"><i class="fa fa-trash fa-lg"
                                                    aria-hidden="true"></i></a>
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

    </div>


    {{-- Loop End --}}


    <div class="position-absolute container-fluid">

        <div class="container-fluid position-relative">
            <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

                <div class="row row-cols-1 row-cols-md-2 g-4 object-fit mt-5">

                    <div class="" id="userCountById">
                        @php
                            $userCount = 0;
                        @endphp
                        @foreach ($users as $userRecord)
                            <p hidden disabled>{{ $userRecord->id }}</p>
                            @php
                                $userCount++;
                            @endphp
                        @endforeach
                        <div class="col ">
                            <div class="card card-item1">
                                <div class="card-body">
                                    <h3 class="card-title">Registered Users</h3>
                                    <h1 class="card-text"><i class="fa fa-user"
                                            aria-hidden="true"></i>&nbsp;{{ $userCount }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="bookCountById">
                        @php
                            $bookCount = 0;
                        @endphp
                        @foreach ($books as $bookRecord)
                            <p hidden disabled>{{ $bookRecord->id }}</p>
                            @php
                                $bookCount++;
                            @endphp
                        @endforeach
                        <div class="col ">
                            <div class="card card-item1">
                                <div class="card-body">
                                    <h3 class="card-title">Books Available</h3>
                                    <h1 class="card-text"><i
                                            class="fa-duotone fa-book "></i>&nbsp;{{ $bookCount }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="visitorsCard">
                        <div class="col ">
                            <div class="card card-item1">
                                <div class="card-body">
                                    <h3 class="card-title">Visitors</h3>
                                    <h1 class="card-text"><i class="fas fa-globe "></i>&nbsp; 34</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="booksdownloads">
                        <div class="col ">
                            <div class="card card-item1">
                                <div class="card-body">
                                    <h3 class="card-title">Downloads</h3>
                                    <h1 class="card-text"><i class="fas fa-download "></i>&nbsp; 2999</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

    {{-- Book Update Model --}}

    <div class="modal fade" id="updateBookModel" tabindex="-1" role="dialog"
        aria-labelledby="updateBookInfoTittle" aria-hidden="true">
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
                            <div class="container-fluid model-container">
                                <p class="model-p">Book Id</p>
                                <input type="text" disabled name="bookId" id="bookId" class="model-user-id">
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label font-family" for="name">Book Name :</label>
                                        <input type="text" name="name" id="updateBookName"
                                            class="form-control" />
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label font-family" for="issueDate">Book Issue Date
                                            :</label>
                                        <input type="datetime-local" name="issueDate" id="updateBookIssueDate"
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
                                        <label class="form-label font-family" for="authorName">Author Name
                                            :</label>
                                        <input type="text" name="authorName" id="updateBookAuthorName"
                                            class="form-control" />
                                        <span class="text-danger">
                                            @error('authorName')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label font-family" for="authorEmail">Author Email
                                            :</label>
                                        <input type="email" name="authorEmail" id="updateBookAuthorEmail"
                                            class="form-control" />
                                        <span class="text-danger">
                                            @error('authorEmail')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-outline">
                                    <label class="form-label font-family" for="description">Book Description
                                        :</label>
                                    <input type="text" name="description" id="updateBookDescription"
                                        class="form-control" />
                                    <span class="text-danger">
                                        @error('description')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <input type="text" aria-disabled="true" hidden name="bookIdForUpdate"
                                id="bookIdForUpdate">
                        </div>
                    </div>
                    <!-- Model Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="submit" value="Update">
                    </div>
                    <p class="alert alert-success" id="updateBookSuccessMessage"></p>
                </form>
            </div>
        </div>
    </div>

    {{--  Model End --}}


    {{-- New Book Upload Model --}}

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
                                        <label class="form-label font-family" for="uploadBookName">Book Name :</label>
                                        <input type="text" name="name" id="uploadBookName"
                                            class="form-control" />
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label font-family" for="uploadBookIssueDate">Book Issue
                                            Date :</label>
                                        <input type="datetime-local" name="issueDate" id="uploadBookIssueDate"
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
                                        <label class="form-label font-family" for="uploadBookAuthorName">Author Name
                                            :</label>
                                        <input type="text" name="authorName" id="uploadBookAuthorName"
                                            class="form-control" />
                                        <span class="text-danger">
                                            @error('authorName')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label font-family" for="uploadBookAuthorEmail">Author Email
                                            :</label>
                                        <input type="email" name="authorEmail" id="uploadBookAuthorEmail"
                                            class="form-control" />
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
                                        <label class="form-label font-family" for="uploadBookDescription">Book
                                            Description
                                            :</label>
                                        <input type="text" name="description" id="uploadBookDescription"
                                            class="form-control" />
                                        <span class="text-danger">
                                            @error('description')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label font-family" for="uploadBookimage">Book Image
                                            :</label>
                                        <input type="file" name="img" id="uploadBookimage"
                                            class="form-control" />
                                        <span class="text-danger">
                                            @error('img')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label font-family" for="uploadBookFile">Book File :</label>
                                <input type="file" name="file" id="uploadBookFile" class="form-control" />
                                <span class="text-danger">
                                    @error('file')
                                        {{ $message }}
                                    @enderror
                                </span>
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

    {{-- Model End --}}



    {{-- User Update Model Form --}}

    <div class="modal fade" id="userUpdateModal" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p id="updateFormErrorMessage"></p>
                    <h5 class="modal-title" id="ModalLongTitle">Update User</h5>
                    <button type="button" class="close btn btn-danger btn-sm" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ URL::to('/updateUser') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="mb-0 container-fluid model-container">
                            <p class="model-p">User Id</p>
                            <input type="text" disabled name="userId" id="updateFormUserId"
                                class="model-user-id">
                        </div>
                        <div class="mb-1">
                            <label for="firstName" class="form-label font-family">First Name</label>
                            <input type="text" class="form-control" name="firstName" id="updateUserFirstName">
                            <span class="text-danger">
                                @error('firstName')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-1">
                            <label for="lastName" class="form-label font-family">Last Name</label>
                            <input type="text" class="form-control" name="lastName" id="updateUserLastName">
                            <span class="text-danger">
                                @error('lastName')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-1">
                            <label for="email" class="form-label font-family">Email address</label>
                            <input type="email" disabled class="form-control" name="email" id="updateUserEmail">
                        </div>
                        <input type="text" aria-disabled="true" hidden name="userIdForUpdate"
                            id="userIdForUpdate">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="submit" id="updateUser"
                            value="Update">
                    </div>
                    <p class="alert alert-success" id="updateUserSuccessMessage"></p>
                </form>
            </div>
        </div>
    </div>


    {{-- Update User Model --}}




    {{-- Register New User Model --}}

    <div class="modal fade" id="registerNewUser" tabindex="-1" role="dialog"
        aria-labelledby="register-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p id="updateFormErrorMessage"></p>
                    <h5 class="modal-title" id="register-modal-title">Update User</h5>
                    <button type="button" class="close btn btn-danger btn-sm" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ URL::to('/registerUser') }}" method="post">
                    <div class="modal-body">
                        @csrf
                        <div class="container mt-2 mb-1">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-outline">
                                        <label class="form-label font-family" for="firstName">First name</label>
                                        <input type="text" name="firstName" class="form-control" />
                                        <span class="text-danger">
                                            @error('firstName')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-outline">
                                        <label class="form-label font-family" for="lastName">Last name</label>
                                        <input type="text" name="lastName" class="form-control" />
                                        <span class="text-danger">
                                            @error('lastName')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-outline mb-3">
                                <label class="form-label font-family" for="email">Email</label>
                                <input type="email" name="email" class="form-control" />
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-outline mb-3">
                                <label class="form-label font-family" for="password">Password</label>
                                <input type="password" name="password" class="form-control" />
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-outline mb-3">
                                <label class="form-label font-family" for="password_confirmation">Conform
                                    Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control" />
                                <span class="text-danger">
                                    @error('password_confirmation')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                        </div>
                    </div>

                    <!-- Model Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success btn-block" name="submit" value="Signup">
                    </div>
                </form>
            </div>
        </div>
    </div>




</body>

</html>
