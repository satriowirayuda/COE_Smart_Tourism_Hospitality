<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#FFFFFF]">
    @include('activity.bisnis.banner')
    @include('activity.bisnis.dashboard')

    <x-footer></x-footer>
</body>
</html>