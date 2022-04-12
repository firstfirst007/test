<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RegisterStudent</title>

    <link rel="stylesheet" href="css\regis_logSTD.css">
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form method="post">
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email">
        </div>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Lastname</label>
            <input type="text" name="lastname">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="pws1">
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="pws2">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
            Already a member? <a href="loginStudent">sign in</a>
        </p>
    </form>
</body>
</html>