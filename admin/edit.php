
<?php

include("../include/common.php");

$id = $_GET["id"] ?? -1;

if (is_method_get()) {
	$sql = "select * from ttsp where id=?";
	$data = db_select($sql, [$id]);

	if (empty($data)) {
		//quay về trang chủ nếu không có dữ liệu
		redirect_to("/");
	}
	$data = $data[0];
} else if (is_method_post()) {
	//Cập nhật dữ liệu


    $img = upload_and_return_filename("img", "ttsp/img"); 

    $gia= $_POST["gia"];

    $ten = $_POST["ten"];

    $mota = $_POST["mota"];

	if (!empty($img)) {
		$sql = "update ttsp set ten=?, mota=?, gia=?, img=? where id=?";
		$params = [$ten, $mota, $gia, $img, $id];
		db_execute($sql, $params);
		js_redirect_to("/");
		die;
	}
	else{
		$sql1 =  "update ttsp set ten=?, mota=?, gia=? where id=?";
		$params1 = [$ten, $mota, $gia, $id];
		db_execute($sql1, $params1);
		js_redirect_to("/"); 
	}
}

$_title = "Edit product information";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $_title ?? ""; ?></title>
    <link rel="stylesheet" href="../css/edit.css">
</head>
<body>
<div class="box">
    <div class="box box-a">
        <form method="post" enctype="multipart/form-data" autocomplete="off">
            <div>
                <?php
                 if (!empty($data["img"])) {
                ?>
                <img src ="<?php upload($data["img"]); ?>" alt="" width = "100" />
                <br>
                <?php } ?>
            </div>
            <label class="box name">Giá:</label>
            <input class="box text" type="text" name="gia" required value="<?php echo $data["gia"]; ?>" />
             </br>
            <label class="box name">Name:</label>
            <input class="box text" type="text" name="ten" required value="<?php echo $data["ten"]; ?>" /></br>

            <label class="box name">Mô tả:</label>
            <input class="box text" type="text" name="mota" required value="<?php echo $data["mota"]; ?>" /></br>

            <label class="box name">Chooses avatar:</label>
            <input class="box text img" type="file" name="img_path" accept=".png, .jpg, .jpeg, .jfif" /></br>

            <input class="box btn" type="submit" value="Update product" />
        </form>
    </div>
</div>
</body>
</html>