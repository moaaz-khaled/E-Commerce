<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminTest</title>
</head>
<body>
    Hello World Admin

    <form action="{{ url('/Logout') }}" method="post">
        @csrf
        <button type="submit"> Logout </button>
    </form>
</body>
</html>
