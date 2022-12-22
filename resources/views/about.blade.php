<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>

<body>
    <div class="table-responsive">
        <table class="table table-striped
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <caption>Table Name</caption>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr class="table-primary">
                    @foreach ($data as $value )
                    <td scope="row">{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->deatils }}</td>
                    <td>{{ $value->img }}</td>
                    @endforeach
                </tr>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>

</body>

</html>
