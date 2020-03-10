<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>สร้างบัญชี</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>ลงทะเบียนสำเร็จ.</h3><br/>
                  <p class='link'>กดที่นี่เพื่อ <a href='login.php'>เข้าสู่ระบบ</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">สร้างบัญชี</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="email" class="login-input" name="email" placeholder="Email Adress" required />
        <input type="password" class="login-input" name="password" placeholder="Password"required />
        <input type="submit" name="submit" value="สมัครสมาชิค" class="login-button">
        <p class="link">เป็นสมาชิกอยู่แล้วหรือ?  <a href="login.php">เข้าสู่ระบบ</a> ที่นี่</p>
    </form>
<?php
    }
?>
</body>
</html>
