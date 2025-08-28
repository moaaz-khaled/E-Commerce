<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserTest</title>
</head>
<body>
    Hello World User

    <form action="{{ url('/Logout') }}" method="post">
        @csrf
        <button type="submit"> Logout </button>
    </form>
</body>
</html>
