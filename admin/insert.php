<?php
include("../include/common.php");

 check_login();


// Xử lý thêm
if (is_method_post()) {
	// upload và nhận lại filename
	$gia = $_POST["gia"] ?? "";
	$ten = $_POST["ten"] ?? "";
	$mota = $_POST["mota"] ?? "";
	//$img = $_POST["img"] ?? "";
	// Lưu file vào thư mục students/img
	 $img = upload_and_return_filename("img","");
	$sql = "insert into ttsp( img, gia, ten, mota)
			values( ?, ?, ?, ?)";
	$params = array($img, $gia, $ten, $mota);
	db_execute($sql, $params);

	js_alert("Thêm sản phẩm thành công");
	js_redirect_to("index.php");	// index.php
}

$_title = "Thêm sản phẩm mới";
include("header.php"); 




?>

<form method="post" enctype="multipart/form-data">
	<label for="img">Thêm ảnh cho sản phẩm: </label>
	<input type="file" name="img" accept=".png, .jpg, .jpeg" />
	<br>
	<label for="gia">Giá: </label>
	<input type="text" name="gia" />
	<br>
	<label for="ten">Tên: </label>
	<input type="text" name="ten" />
	<br>
	<label for="mota">Mô tả: </label>
	<input type="text" name="mota"/>
	<br>

	<input type="submit" value="Thêm sản phẩm" />
</form>
</body>
</html>
