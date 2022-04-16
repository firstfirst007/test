<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LoginAdmin</title>

    <link rel="stylesheet" href="css\homeAdmin.css">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form action="homeAdmin">
        <div class="input-group">
            <label>Email / Username</label>
            <input type="text" name="email">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="pws1">
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p>
            Not yet a member? <a href="regisAdmin">sign in</a>
        </p>
    </form>
</body>
</html>