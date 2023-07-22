<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @auth
    <p>congrats you are logged in</p>
    <form action="/logout" method="POST">
        @csrf
        <button>log out</button>
    </form>
    @else
    <div style="border: 3px solid black;padding: 5px;">
        <h2>Register</h2>
        <form action="/register" method="post">
            @csrf
            <input type="text" placeholder="name" name="name">
            <input type="text" placeholder="email" name="email">
            <input type="password" name="password" placeholder="password">
            <button>Register</button>
        </form>
    </div>
    <div style="border: 3px solid black;padding: 5px;">
        <h2>Login</h2>
        <form action="/login" method="post">
            @csrf
            <input type="text" placeholder="name" name="loginname">
            <input type="password" name="loginpassword" placeholder="password">
            <button>Log in</button>
        </form>
    </div>
    @endauth



   
</body>

</html>