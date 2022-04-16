<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PointStudent</title>

    <link rel="stylesheet" href="css\ed.css">
</head>
<body>
    <div class="navbar">
        <a href="createRoom" style="font-size: 15pt"><b>TypingTrain</b></a>
        <a href="classroom">ห้องเรียน</a>
        <a href="pointSTD"><u>คะแนนนักศึกษา</u></a>
        <a href="addSTD">เพิ่มข้อมูลนักศึกษา</a>
        <div class="dropdown">
          <button class="dropbtn">ชื่ออาจารย์ 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="/">ออกจากระบบ</a>
          </div>
        </div> 
      </div>

      <div class="table">
        <h2>Data Student</h2>
        <table>
          <tr>
            <th>Student ID</th>
            <th>Username</th>
            <th>Lastname</th>
            <th>E-mail</th>
            <th>Section</th>
            <th>Update</th>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <div>
                <button type="submit" class="btn1">View</button>
                <button type="submit" class="btn1">Edit</button>
              </div>
            </td>
          </tr>
        </table>
      </div>
</body>
</html>