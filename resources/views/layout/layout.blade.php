<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Email Project</title>
</head>

<body>
    <div class=" h-screen flex flex-col justify-start items-center bg-gray-100">
        @yield('content')
    </div>

</body>

</html>
