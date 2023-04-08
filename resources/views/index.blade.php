<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid mt-4">

        {{-- Search --}}
        <form class="d-flex" role="search" method="POST" action="{{ route('clients.search') }}">
            @csrf
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>Full English Name</th>
                <th>Full Arabic Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Country Code</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->full_english_name }}</td>
                    <td>{{ $client->full_arabic_name }}</td>
                    <td>{{ $client->username }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->mobile }}</td>
                    <td>{{ $client->country_code }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Pagination  --}}
    <nav aria-label="Page navigation example" class="d-flex">
        {!! $clients->links() !!}
    </nav>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
</body>

</html>
