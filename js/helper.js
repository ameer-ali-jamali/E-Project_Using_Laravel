function submit() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let pass = document.getElementById("pass").value;
    let re_pass = document.getElementById("re_pass").value;
    if (name && email && pass && re_pass != "" && pass == re_pass) {
        if (confirm(" Please Confirm For Registration !! ") == true) {
            $(document).ready(function () {
                $("#signup").click();
            });
        } else {
            window.location = "index.php";
        }
    }
    else if (pass != re_pass || re_pass != pass) {
        alert('Password Dosent Match => !!');
    } else {
        alert('Please Fill Registration Form => !!');
    }
}



function login() {
    let email = document.getElementById("email").value;
    let pass = document.getElementById("pass").value;
    if (email && pass != "") {
        if (confirm("Please Confirm For Registration !!") == true) {
            $(document).ready(function () {
                $("#signin").click();
            });
        } else {
            window.location = "index.php";
        }

    } else {
        alert('Please Input Email and Password => !!');
    }

}

function update() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let pass = document.getElementById("pass").value;
    if (name && email && pass != "") {
        if (confirm("Please Confirm For Registration !!") == true) {
            $(document).ready(function () {
                $("#update").click();
            });
        } else {
            window.location = "index.php";
        }

    } else {
        alert('Empty Form => !!');
    }

}

function delete_() {
    let email = document.getElementById("email").value;
    let pass = document.getElementById("pass").value;
    if (email && pass) {
        if (confirm("Please Confirm For Registration !!") == true) {
            $(document).ready(function () {
                $("#delete").click();
            });
        } else {
            window.location = "index.php";
        }

    } else {
        alert('Please Fill  Form => !!');
    }
}

function confirm_delete() {
    if (confirm("R You Sure You Want To Delete ? ") == true) {
        $(document).ready(function () {
            $("#delete_by_id").click();
        });
    } else {
        window.location = "index.php";
    }

}

