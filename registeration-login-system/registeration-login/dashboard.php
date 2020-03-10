<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="des.css">
  <title>Document</title>
</head>
<body>
  <!-- SIDEBAR -->
<div class="sidebar">

<div class="user">
    <a href="#"><img src="logo.png" /></a>

</div>

<nav role='navigation'>
    <ul>
        <li><a class="active" href="#">dashboard</a></li>
        <li><a href="#">Product</a></li>
        <li><a href="#">Message</a></li>
        <li><a href="#">Settings</a></li>
        <li><a href="#">Help</a></li>
    </ul>
</nav>

</div>

<!-- MAIN -->
<div class="main">
<header>
    <div class="bottom">
        <div class="identity">
            <img src="https://www.famousbirthdays.com/headshots/nala-cat-3.jpg" />
            <span class="username"><?php echo $_SESSION['username']; ?></span> <br/>
          </div>
        <div class="edit"><a href="#">Edit Profile</a></div>
        

    </div>
    <span class="logout"><a href="logout.php"> Log out</span>
</header>
  <!-- PAGE -->
<div class="page group">
    <div class="section">
        <div class="col span_1_of_3">
            <h1>ประวัติการแลกเปลี่ยนของ</h1>
            <a class="span1" target="_blank" href="#">Click</a>
        </div>
        <div class="col span_1_of_3">
            <h1>Report</h1>
            <a class="span1" target="_blank" href="#">รายะละเอียด</a>
        </div>
        <div class="col span_1_of_3">
            <h1> </h1>
            <a class="" target="_blank" href="#"></a>
        </div>

    </div>
    <div class="section">
        <div class="col span_3_of_3"></div>
    </div>




</div>

</div>
</body>
</html>