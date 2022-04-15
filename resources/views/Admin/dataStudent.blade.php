<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Student</title>

    <link rel="stylesheet" href="css\admin.css">
</head>
<body>
    <div class="navbar">
        <a href="homeAdmin" style="font-size: 15pt"><b>TypingTrain</b></a>
        <a href="dataStudent"><u>ข้อมูลนักศึกษา</u></a>
        <a href="addDataStudent">เพิ่มข้อมูลนักศึกษา</a>
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