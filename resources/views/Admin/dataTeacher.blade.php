<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Teacher</title>

    <link rel="stylesheet" href="css\admin.css">
</head>
<body>
    <div class="navbar">
        <a href="homeAdmin" style="font-size: 15pt"><b>TypingTrain</b></a>
        <a href="dataTeacher"><u>ข้อมูลอาจารย์</u></a>
        <a href="addDataTeacher">เพิ่มข้อมูลอาจารย์</a>
        <div class="dropdown">
          <button class="dropbtn">ชื่อแอดมิน
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="/">ออกจากระบบ</a>
          </div>
        </div> 
      </div>

      <div class="table">
        <h2>Data Teacher</h2>
        <table>
          <tr>
            <th>Teacher ID</th>
            <th>Username</th>
            <th>Lastname</th>
            <th>E-mail</th>
            <th>Update</th>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <form>
                <button class="btn1" type="submit">edit</button>
              </form>
              <form>
                <button class="btn1" type="submit">delete</button>
              </form>
            </td>
          </tr>
        </table>
      </div>
</body>
</html>