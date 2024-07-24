<!DOCTYPE html>
<html lang="en" data-bs-theme="{{ $theme }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    @vite([
        'resources/sass/guest.scss', 
        'resources/js/guest.js',
    ])


</head>
<body>

    @include("symlink::guest.includes.navbar");
    {{ $slot }}


</body>
</html>