<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tuna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<h1><a href=""></a>Anasayfa</h1>
<ul>
    <li><a href="/hakkimda">Hakkımda</a></li>
    <li><a href="/cv">Cv</a></li>
    <li><a href="iletisim">İletişim</a></li>
    @yield('content')
</ul>

<!-- <ol>
            @foreach($dizi as $d)
    <li><a href="">{{$d}}</a></li>
            @endforeach
</ol>-->
<button type="button" class="btn btn-danger">Hoşgeldiniz</button>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

