<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css"/>
    
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM users WHERE username='$username' AND password='".md5($password)."'";
        echo"$query";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>กดที่นี่เพื่อ <a href='login.php'>เข้าสู่ระบบ</a> อีกครั้ง.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">เข้าสู่ระบบ</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="เข้าสู่ระบบ" name="submit" class="login-button"/>
        <p class="link">สมาชิกใหม่? <a href="registration.php">ลงทะเบียน</a> ที่นี่</p>
        <p class="link">กลับสู่ <a href="http://127.0.0.1:5500/index.html">หน้าแรก</a></p>
  </form>
<?php
    }
?>
   
</body>
</html>
