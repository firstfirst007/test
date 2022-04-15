<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeAdmin</title>

    <link rel="stylesheet" href="css\app.css">

</head>
<body>
    <div class="navbar">
        <a href="homeAdmin" style="font-size: 15pt"><b>TypingTrain</b></a>
        <div class="dropdown">
            <button class="dropbtn"><a href="regisAdmin">Sign in</a></button>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><a href="loginAdmin">log in</a></button>
        </div>
        {{--<button class="dropbtn">ชื่อแอดมิน
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="/">ออกจากระบบ</a>
          </div> เอาไว้ใส่ if--}}
      </div>

    <div class="container">
        <section>
            <form action="homeTeacher">
                <button class="btn" name="Teach">Teacher</button>
            </form>
            <br>
            <form action="homeStudent"> 
                <button class="btn" name="STD">Student</button>
            </form>
            <br>
            <form action="homeExercise"> 
                <button class="btn" name="Ex">Exercise</button>
            </form>
        </section>
    </div>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>