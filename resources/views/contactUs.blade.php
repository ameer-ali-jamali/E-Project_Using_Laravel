<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.72.0">
        <title>Contact</title>
        <style>
            h1 {
                background-color: #60424282;
                color: rgb(160, 27, 27);
                text-align: center;
            }

            h2 {
                background-color: #60424282;
                color: rgb(0, 0, 0);
                text-align: center;
            }

            hr {
                border: 1px solid goldenrod;
            }
        </style>
    </head>

    <body>


        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>MessageBox</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $mailData['name'] }}</td>
                    <td>{{ $mailData['email'] }}</td>
                    <td>{{ $mailData['msgBox'] }}</td>
                </tr>
            </tbody>
        </table>


    </body>

</html>