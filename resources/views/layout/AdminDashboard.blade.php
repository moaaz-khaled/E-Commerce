<!DOCTYPE html>
<html lang="en" class ="w-full h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title' , 'AdminDashboard')</title>
    <link href = "../../css/app.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class = "bg-[#EEEEEE] w-full h-full flex">
    <div class = "w-1/6 h-full">
        <x-admin.admin-sidebar/>
    </div>
    <div class ="w-5/6 h-full">
        <div class = "w-full h-[120px] flex items-center px-16">
            <x-admin.header/>
        </div>
        <div class="h-[calc(100%-120px)]">
            @yield('content')
        </div>
    </div>
</body>
</html>
