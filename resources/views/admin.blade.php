<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Admin</title>
    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">
    @include('Css_Js_php.css.admin_css')
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <!-- Font Awosome CDN-->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    @include('Css_Js_php.css.bootstrap')
    @include('Css_Js_php.css.style')

</head>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">E Books</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link" href="#" id="booksList">
                                <span data-feather="shopping-cart"></span>
                                All Books
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/users">
                                <span data-feather="users"></span>
                                All Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Integrations
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
                                Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Social engagement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Year-end sale
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            {{-- Loop Start --}}

            <div class="" id="booksListModel">
                <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    <div class="container">
                        <div class="row">
                            <h2 class="py-3 text-center font-bold font-up blue-text"><i
                                    class="fa-duotone fa-books fa-lg"></i>
                                &nbsp;Books Info</h2>
                        </div>
                        <table class="table table-hover table-responsive mb-0">
                            <div class="d-grid justify-content-end">
                                <button class="btn btn-primary mb-3" data-toggle="modal"
                                    data-target="#uploadNewBook">Upload
                                    Book &nbsp;<i class="fa-duotone fa-book"></i>
                                </button>
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
                                @if ($book->count())
                                    @foreach ($book as $bookRecord)
                                        <tr @if ($loop->even) class="bg-info" @endif>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $bookRecord->name }}</td>
                                            <td>{{ $bookRecord->issueDate }}</td>
                                            <td>{{ $bookRecord->authorName }}</td>
                                            <td>{{ $bookRecord->authorEmail }}</td>
                                            <td>{{ $bookRecord->description }}</td>
                                            <td><a href="/downlaod">
                                                    <i class="fa-solid fa-download fa-lg text-danger"></i></a></td>
                                            <td class="d-grid justify-center img_td"><img class="img_width"
                                                    src="{{ $bookRecord->image }}">
                                            </td>
                                            <td>{{ $bookRecord->created_at }}</td>
                                            <td>{{ $bookRecord->updated_at }}</td>
                                            <td>
                                                <button type="submit" class="btn btn-primary btn-sm getBookId"
                                                    value="{{ $bookRecord->id }}" data-toggle="modal"
                                                    data-target="#updateBookModal"><i
                                                        class="fas fa-edit"></i></button>
                                            </td>
                                            <td><a
                                                    href=" {{ " /deleteBook/$bookRecord->id" }}"class=" btn btn-danger btn-sm"><i
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
                </main>
            </div>

        </div>

        {{-- Loop end --}}








        {{-- Update Book Model --}}

        {{-- <div class="modal fade" id="updateBookModal" tabindex="-1" role="dialog"
            aria-labelledby="updateBookInfoTittle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p id="booksErrorMessage"></p>
                        <h5 class="modal-title" id="updateBookInfoTittle">Update Book Information</h5>
                        <button type="button" class="close btn btn-danger bnt-sm" data-dismiss="modal"
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
                                    <input type="text" disabled name="bookId" id="bookId"
                                        class="model-user-id">
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label font-family" for="name">Book Name :</label>
                                            <input type="text" name="name" id="name"
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
                                            <label class="form-label font-family" for="authorName">Author Name
                                                :</label>
                                            <input type="text" name="authorName" id="authorName"
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
                                            <input type="email" name="authorEmail" id="authorEmail"
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
                                        <input type="text" name="description" id="description"
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
                                <!-- Model Footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-success btn-block" name="submit"
                                        value="Update">
                                </div>
                                <p class="alert alert-success" id="successMessage"></p>
                            </div>
                    </form>

                </div>
            </div>
        </div> --}}

        {{--  Model End --}}



        {{-- Upload New Book Model --}}

        <div class="modal fade" id="uploadNewBook" tabindex="-1" role="dialog" aria-labelledby="uploadBookTittle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p id="booksErrorMessage"></p>
                        <h5 class="modal-title" id="uploadBookTittle">Upload Book</h5>
                        <button type="button" class="close btn btn-danger bnt-sm" data-dismiss="modal"
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
                                            <label class="form-label" for="name">Book Name :</label>
                                            <input type="text" name="name" id="bookName"
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
                                            <label class="form-label" for="issueDate">Book Issue Date :</label>
                                            <input type="datetime-local" name="issueDate" id="bookIssueDate"
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
                                            <input type="text" name="authorName" id="bookAuthorName"
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
                                            <label class="form-label" for="authorEmail">Author Email :</label>
                                            <input type="email" name="authorEmail" id="bookAuthorName"
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
                                            <label class="form-label" for="description">Book Description :</label>
                                            <input type="text" name="description" id="bookDescription"
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
                                            <label class="form-label" for="img">Book Image :</label>
                                            <input type="file" name="img" id="bookImage"
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
                                    <label class="form-label" for="file">Book File :</label>
                                    <input type="file" name="file" id="bookfile" class="form-control" />
                                    <span class="text-danger">
                                        @error('file')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-success btn-block" name="submit"
                                    value="Upload">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Model End --}}




        @include('Css_Js_php.js.helper')
        <script>
            $(document).ready(function() {
                $('#booksListModel').hide();
                $('#booksList').click(function(){
                    $('#booksListModel').show();
                });
            });
        </script>
        <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-DBjhmceckmzwrnMMrjI7BvG2FmRuxQVaTfFYHgfnrdfqMhxKt445b7j3KBQLolRl" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
            integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
            integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous">
        </script>
    </div>
    </div>
</body>

</html>
