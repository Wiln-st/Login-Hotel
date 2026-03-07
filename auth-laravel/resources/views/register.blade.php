<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <form action="/register" method="POST">
        @csrf

        <h1>Register</h1>

        <input type="text" name="name" placeholder="Nama">

        <input type="email" name="email" placeholder="Email">

        <input type="password" name="password" placeholder="Password">

        <input type="text" name="token" id="token" readonly>

        <button type="button" onclick="generateToken()">Generate Token</button>

        <button type="submit">Register</button>

    </form>

    <script>
        function generateToken(){
            let chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            let token = "";

            for(let i=0;i<5;i++){
                token += chars.charAt(Math.floor(Math.random()*chars.length));
            }

            document.getElementById("token").value = token;
        }
    </script>
</body>

</html>
