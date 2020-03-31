<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="css/des.css">
  <title>Dashboard</title>
</head>
<body>
  <!-- SIDEBAR -->
<div class="sidebar">

<div class="user">
    <a href="http://127.0.0.1:5500/index.html"><img src="img/logo.png" /></a>

</div>

<nav role='navigation'>
    <ul>
        <li><a class="active" href="#">Dashboard</a></li>
        <li><a href="http://localhost/Rafflaek/registeration-login/add.php">Product</a></li>
        <li><a href="#">Message</a></li>
        <li><a href="#">Settings</a></li>
        <li><a href="http://localhost/Rafflaek/registeration-login/contact.php?firstName=&lastName=&email=&phone=&message=&submit=#">Help</a></li>
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
          </div> <a href="#" class="btn btn-info btn-sm active" role="button" aria-pressed="true">แก้ไขข้อมูล</a>
        
          
       
    
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
        





</div>

</div>
</body>
</html>
