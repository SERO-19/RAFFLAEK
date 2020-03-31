<?php
include("auth_session.php");
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link
      href="https://fonts.googleapis.com/css?family=Mukta|Sarabun&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/add.css">
</head>

<body>


    <!-----------------------------------slide bar---------------------------------------------->

    <div class="sidebar">

        <div class="user">
            <a href="#"> <img src="img/logo.png" alt="logo"></a>

        </div>

        <nav role='navigation'>
            <ul>
                <li><a href="http://localhost/Rafflaek/registeration-login/dashboard.php">Dashboard</a></li>
                <li><a class="active" href="#">Product</a></li>
                <li><a href="#">Message</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="http://localhost/Rafflaek/registeration-login/contact.php?firstName=&lastName=&email=&phone=&message=&submit=#">Help</a></li>
            </ul>
        </nav>

    </div>


    <!-----------------------------------slide bar---------------------------------------------->



    <div class="main">


        <div class="head">
            <h4> เพิ่มสิ่งของที่ต้องการแลกเปลี่ยน </h4>
        </div>

        <div class="main-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6"> <br />
                        <h4> กรุณากรอกรายละเอียดสิ่งของ </h4>
                        <form action="add_product_db.php" method="POST" enctype="multipart/form-data" name="addprd" class="form-horizontal" id="addprd">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <p> ชื่อสินค้า</p>
                                    <input type="text" name="pro_name" class="form-control" required placeholder="ชื่อสินค้า" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <p> รายละเอียดสินค้า </p>
                                    <textarea name="pro_detail" class="form-control" rows="3" required placeholder="รายละเอียดสินค้า"></textarea>
                                </div>
                            </div>
                            <div class="picture">
                                <p> ภาพสินค้า </p>
                                <input type="file" name="pro_img" class="form-control" />
                            </div>
                    
                    <div class="form-group">
                        <div class="botton">
                           <br> <button type="submit" class="btn btn-success" name="btnadd"> ยืนยัน </button></br>
                          
                        </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


    </div>
</body>

</html>