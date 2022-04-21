<!doctype html>
<html lang="3">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="/images/inkman2.png">

    <title>inkman Studio</title>

</head>
<body class="bg-black text-white">
{{--header--}}
@include('components.navbar')

{{--components--}}
@include('components.hero')
@include('components.services')
@include('components.sketching')
@include('components.tattoos')
@include('components.piercings')
@include('components.courses')
@include('components.giveaways')
@include('components.contact')

{{--footer--}}
</body>
</html>
