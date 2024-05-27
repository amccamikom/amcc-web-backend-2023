<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Daftar Buku</title>
    </head>
    <body>
        <h1>Daftar Buku</h1>
        <ol>
             @foreach($books as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ol>
    </body>
</html>