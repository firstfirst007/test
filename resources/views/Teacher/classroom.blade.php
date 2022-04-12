<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classroom</title>

    <link rel="stylesheet" href="css\classroom.css">
</head>
<body>
    <div class="navbar">
        <a href="createRoom" style="font-size: 15pt"><b>TypingTrain</b></a>
        <a href="classroom"><u>ห้องเรียน</u></a>
        <a href="pointSTD">คะแนนนักศึกษา</a>
        <a href="addSTD">เพิ่มข้อมูลนักศึกษา</a>
        <div class="dropdown">
          <button class="dropbtn">ชื่ออาจารย์
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <ul class = "navbar-nav ml-auto">
              <li class = "nav-item">
                <a class = "nav-link" href="/locale/en">EN</a>
              </li>
              <li class = "nav-item">
                <a class = "nav-link" href="/locale/th">TH</a>
              </li>
              <li class = "nav-item">
                <a class = "nav-link" href="/">ออกจากระบบ</a>
              </li>
            </ul>
          </div>  
        </div>
      </div>
      <div class = "contain">
        <h1 class = "text-center">@lang('lang.lang')</h1>
      </div>
</body>
</html>