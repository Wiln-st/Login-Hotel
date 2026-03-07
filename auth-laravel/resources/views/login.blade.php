<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <form action="/login" method="POST">
        @csrf

        <h1>Login</h1>

        <input type="text" name="name" placeholder="Nama">

        <input type="password" name="password" placeholder="Password">

        <input name="token">

        <button type="submit">Login</button>

    </form>
</body>

</html>
