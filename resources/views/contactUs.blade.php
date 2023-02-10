<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.72.0">
        <title>Contact</title>

    </head>

    <body>

        <div style="border: 2px solid blanchedalmond;">
            <h2>Role : {{ $mailData['Role'] }}
            </h2>
            <hr>
            <h2>Name : {{ $mailData['name'] }}
            </h2>
            <hr>
            <h2>Email : {{ $mailData['email'] }}
            </h2>
            <hr>
            <h2>Message Box : {{ $mailData['msgBox'] }}
            </h2>
            <hr>
        </div>

    </body>

</html>