<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Halaman About</title>
</head>
<body>
    <h1>Disini akan menampilkan halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{  $email }}</p>
    <img src="img/{{  $img }}" alt="{{ $name  }}" width="200">
</body>
</html>