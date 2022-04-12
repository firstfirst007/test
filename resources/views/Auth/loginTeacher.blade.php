<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LoginTeacher</title>

    <link rel="stylesheet" href="css\regis_logTeach.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form method="post" action="{{route('login-user')}}">
        @csrf
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="{{old('username')}}">
            <span class="text-danger">@error('username') {{$message}} @enderror</span>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="pws1" value="{{old('password')}}">
            <span class="text-danger">@error('password') {{$message}} @enderror</span>
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn btn-dark">Login</button>
        </div>
        <p>
            Not yet a member? <a href="regisTeach">sign in</a>
        </p>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script>
</html>