<?php

$SQL_Product = "SELECT * FROM tbl_product "; // คำสั่ง sql ดึงข้อมูล Product ที่อยู่ในฐานข้อมูลแล้วเก็บไว้ในตัวแปรที่ชื่อ $strSQL
$objQuery_Product = mysqli_query($con, $SQL_Product); // นำ Product มาประมวลผล

 ?>
<div class="row">
	<!--ใช้ while loop แสดงข้อมูล -->
	<?php while($ObjResult_Product = mysqli_fetch_array($objQuery_Product)){ ?> 
		<div class="col-4 mb-3"> 
			<div class="card shadow-sm" >
			<img class="card-img-top" src="img2/<?php echo $ObjResult_Product['p_img']; ?>" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title"><?php echo $ObjResult_Product['p_name']; ?></h5>
					<p class="card-text"><?php echo $ObjResult_Product['p_detail']; ?></p>
					<a href="loginchat.php" class="btn btn-info">SWAP</a> 
				</div>
			</div>
		</div>
	<?php } ?>
</div>

<!--<div class="row">

<div class="row">
<?php while($ObjResult_Product = mysqli_fetch_array($objQuery_Product)) { ?>

<div class="card border-success mb-3" style="width: 15rem;">
<img class="card-img-top" src="img2/146124951720200429_155449.jpg" alt="Card image cap">
<div  class="card-body">
  <h5 class="card-title"><?php echo $ObjResult_Dep['p_name']; ?></h5>
  <p class="card-text"><?php echo $ObjResult_Dep['p_detail']; ?>></p>
  <a href="loginchat.php" class="btn btn-primary">Go somewhere</a>
</div>
</div>
<?php } ?>
</div>


</div>-->

