<meta charset="UTF-8" />
<?php 
require_once('condb.php');

    //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
	
	//รับชื่อไฟล์จากฟอร์ม 
	$p_name = (isset($_POST['p_name']) ? $_POST['p_name'] : '');
	$p_detail = (isset($_POST['p_detail']) ? $_POST['p_detail'] : '');
	$p_img = (isset($_POST['p_img']) ? $_POST['p_img'] : '');



	$upload=$_FILES['p_img']['p_detail']['p_name'];
	if($upload <> '') echo  "alert('p_img');";
					  echo  "alert('p_detail');";
					  echo  "alert('p_name');";{ 

	//โฟลเดอร์ที่เก็บไฟล์
	$path="img2/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['p_img']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname =$numrand.$date1.$type;
	$path_copy=$path.$newname;
	$path_link="img2/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['p_img']['tmp_name'],$path_copy);  
	
	}


			 $sql = "INSERT INTO tbl_product 
					(p_name, p_detail, p_img) 
					VALUES
					('$p_name','$p_detail','$newname')";
		
		$result = mysql_db_query($database_condb, $sql) or die ("Error in query: $sql " . mysql_error());
				  
					

	mysql_close() ;



	if($result){
   
			echo "<script type='text/javascript'>";
			echo  "alert('เพิ่มสินค้าเรียบร้อย');";
			echo "window.location='add_product.php';";
			echo "</script>";
	  }
	  else{
            echo "<script type='text/javascript'>";
            echo  "alert('เพิ่มสินค้าไม่สำเร็จ');";
			echo "window.location='add_product.php';";
			echo "</script>";
	  }
	
	
 ?>