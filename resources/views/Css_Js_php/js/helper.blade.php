<script>
    // Progress baar js
    const scrollline = document.querySelector('.scroll-line');

    function fillscrollline() {
        const windowHeight = window.innerHeight;
        const fullHeight = document.body.clientHeight;
        const scrolled = window.scrollY;
        const percentScrolled = (scrolled / (fullHeight - windowHeight)) * 100;

        scrollline.style.width = percentScrolled + '%';
    };

    window.addEventListener('scroll', fillscrollline);

    // Scroll top js
    let mybutton = document.getElementById("btn-back-to-top");
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

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
                        $('#updateFormErrorMessage').html("Server Error Data Not Found");
                        $('#updateFormErrorMessage').addClass("alert alert-danger");
                        $('#updateFormErrorMessage').text(response.message);
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
<script>
    $(document).ready(function() {
        $('#successMessage').hide();
        $('.getBookId').click(function() {
            var bookId = $(this).val();
            $.ajax({
                type: "get",
                url: "/getBookInfoById/" + bookId,
                datatype: "josn",
                success: function(response) {
                    if (response == 404) {
                        $('#booksErrorMessage').html("Server Error Data Not Found");
                        $('#booksErrorMessage').addClass("alert alert-danger");
                        $('#booksErrorMessage').text(response.message);
                    } else {
                        $('#bookId').val(response.getBookData.id)
                        $('#bookIdForUpdate').val(response.getBookData.id)
                        $('#name').val(response.getBookData.name)
                        $('#issueDate').val(response.getBookData.issueDate)
                        $('#authorName').val(response.getBookData.authorName)
                        $('#authorEmail').val(response.getBookData.authorEmail)
                        $('#description').val(response.getBookData.description)
                        $('#bookImg').val(response.getBookData.image)
                        $('#bookPdfFile').val(response.getBookData.file)

                    }
                }
            })

        })

    })
</script>
