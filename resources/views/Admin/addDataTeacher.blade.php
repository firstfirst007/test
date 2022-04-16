<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page Teacher</title>

    <link rel="stylesheet" href="css\admin.css">
</head>
<body>
    <div class="navbar">
        <a href="homeAdmin" style="font-size: 15pt"><b>TypingTrain</b></a>
        <a href="dataTeacher">ข้อมูลอาจารย์</a>
        <a href="addDataTeacher"><u>เพิ่มข้อมูลอาจารย์</u></a>
        <div class="dropdown">
          <button class="dropbtn">ชื่อแอดมิน
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="/">ออกจากระบบ</a>
          </div>
        </div> 
      </div>

      <div class="header">
        <h2>Add Teacher</h2>
      </div>
      <form>
        <div class="input-group">
          <label><b>Email</b></label>
          <input type="text" name="email">
        </div>
        <div class="input-group">
          <label><b>Username</b></label>
          <input type="text" name="username">
        </div>
        <div class="input-group">
          <label><b>Lastname</b></label>
          <input type="text" name="lastname">
        </div>
        <div class="input-group">
          <label><b>Password</b></label>
          <input type="password" name="pws1">
        </div>
        <div class="input-group">
          <button type="submit" class="btn1 btn-success">Save</button>
          <button type="submit" class="btn2 btn-success">Cancle</button>
        </div>
      </form>
</body>
</html>