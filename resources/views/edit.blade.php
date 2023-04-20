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

    <h1>Edit client</h1>

    <div class="container mt-4">
        <form action="{{ route('clients.update', ['client' => $client->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="englishname">Full English Name:</label>
                <input class="form-control" type="text" name="full_english_name" id="englishname"
                    value="{{ $client->full_english_name }}" required>
            </div>
            <div>
                <label for="arabicname">Full Arabic Name:</label>
                <input class="form-control" type="text" name="full_arabic_name" id="arabicname"
                    value="{{ $client->full_arabic_name }}" required>
            </div>
            <div>
                <label for="username">Username:</label>
                <input class="form-control" type="text" name="username" id="username"
                    value="{{ $client->username }}" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" id="email" value="{{ $client->email }}"
                    required>
            </div>
            <div>
                <label for="mobile">Mobile:</label>
                <input class="form-control" type="tel" name="mobile" id="mobile" value="{{ $client->mobile }}"
                    required>
            </div>
            <div>
                <label for="Country">Country:</label>
                <input class="form-control" type="text" name="country" id="Country" value="{{ $client->country }}"
                    required>
            </div>

            <button class="btn btn-primary mt-4" type="submit">Update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>

</body>

</html>
