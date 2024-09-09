<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    @include('welcome.banner')
    @include('welcome.profil-ketua')
    @include('welcome.project')
    @include('welcome.news')
    <x-footer></x-footer>
</body>

</html>
