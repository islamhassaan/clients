<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>

    <div class="container mt-4">
        <form method="POST" action="{{ route('clients.store') }}">
            @csrf
            <label for="full_english_name">Full English Name:</label>
            <input class="form-control" type="text" name="full_english_name" id="full_english_name" required>

            <label for="full_arabic_name">Full Arabic Name:</label>
            <input class="form-control" type="text" name="full_arabic_name" id="full_arabic_name" required>

            <label for="username">Username:</label>
            <input class="form-control" type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input class="form-control" type="password" name="password" id="password" required>

            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email" id="email" required>

            <label for="mobile">Mobile:</label>
            <input class="form-control" type="tel" name="mobile" id="mobile" required>

            <label for="country_code">Country Code:</label>
            <input class="form-control" type="tel" name="country_code" id="country_code" required>

            <label for="country_code">Country:</label>
            <select class="form-control country" name="country_code">
                <option>Egypt</option>
                <option>Algeria</option>
                <option>Belgium</option>
                <option>Chad</option>
            </select>

            <button class="btn btn-primary mt-4" type="submit">Create</button>
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
