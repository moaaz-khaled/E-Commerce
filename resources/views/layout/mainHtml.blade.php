<!DOCTYPE html>
<html lang="en" class ="h-full w-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title' , "Auth System")</title>
    <link href = "../../css/app.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="h-full w-full">
    <div class="w-full h-screen bg-[url('/resources/images/background.jpg')] bg-no-repeat bg-cover bg-center">
        <div class="w-full h-full backdrop-blur-sm bg-black/30 flex items-center justify-center">
            <div class="w-3/4 h-4/5 bg-black/50">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
