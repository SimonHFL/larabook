<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" >
</head>
<body>

    @include('layouts.partials.nav')

    <div class="container">
        @yield('content')
    </div>

    <scripts src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></scripts>

</body>
</html>