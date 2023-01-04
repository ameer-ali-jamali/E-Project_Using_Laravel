
$(document).ready(function () {
    $('#successMessage').hide();
    $('.getUserId').click(function () {
        var userId = $(this).val();
        $.ajax({
            type: "get",
            url: "/getUserInfoById/" + userId,
            datatype: "josn",
            success: function (response) {
                if (response == 404) {
                    $('#updateFormErrorMessage').html("Server Error Data Not Found");
                    $('#updateFormErrorMessage').addClass("alert alert-danger");
                    $('#updateFormErrorMessage').text(response.message);
                } else {
                    $('#userIdForUpdate').val(response.user.id)
                    $('#updateFormUserId').val(response.user.id)
                    $('#updateUserFirstName').val(response.user.firstName)
                    $('#updateUserLastName').val(response.user.lastName)
                    $('#updateUserEmail').val(response.user.email)
                }
            }
        })
    })
    $('.getBookId').click(function () {
        var bookId = $(this).val();
        $.ajax({
            type: "get",
            url: "/getBookInfoById/" + bookId,
            datatype: "josn",
            success: function (response) {
                if (response == 404) {
                    $('#booksErrorMessage').html("Server Error Data Not Found");
                    $('#booksErrorMessage').addClass("alert alert-danger");
                    $('#booksErrorMessage').text(response.message);
                } else {
                    $('#bookId').val(response.getBookData.id)
                    $('#bookIdForUpdate').val(response.getBookData.id)
                    $('#updateBookName').val(response.getBookData.name)
                    $('#updateBookIssueDate').val(response.getBookData.issueDate)
                    $('#updateBookAuthorName').val(response.getBookData.authorName)
                    $('#updateBookAuthorEmail').val(response.getBookData.authorEmail)
                    $('#updateBookDescription').val(response.getBookData.description)
                }
            }
        })

    })
    $('#updateUserSuccessMessage').hide('fast')
    $('#updateBookSuccessMessage').hide('fast')
    $('#usersListModel').hide("fast")
    $('#booksListModel').hide("fast")

    $('#showUsersList').click(function () {
        $('#showUsersList').hide('fast')
        $('#showBooksList').hide('fast')
        $('#visitorsCard').hide("fast")
        $('#booksdownloads').hide("fast")
        $('#usersListModel').toggle("fast")
    })
    $('#showBooksList').click(function () {
        $('#showUsersList').hide('fast')
        $('#showBooksList').hide('fast')
        $('#visitorsCard').hide("fast")
        $('#booksdownloads').hide("fast")
        $('#booksListModel').toggle("fast")
    })

    $('.deleteUserConfirm').click(function () {
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file !",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    swal("User Data Deleted SuccessFully", {
                        icon: "success",
                    }).then((willdelete) => {
                        if (willdelete) {
                            $('.deleteUserByadmin').click();
                        }
                    })
                } else {
                    swal("User Data Is Safe");
                }
            });
    });

    $('.deleteBookConfirm').click(function () {
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file !",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Book Deleted SuccessFully", {
                        icon: "success",
                    }).then((willdelete) => {
                        if (willdelete) {
                            $('.deleteBookByadmin').click();
                        }
                    })
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    });








})

