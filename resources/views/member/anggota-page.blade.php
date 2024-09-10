<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>

    @include('member.banner')
    @include('member.opening')
    @include('member.tim')
    <x-footer></x-footer>
</body>
</html>