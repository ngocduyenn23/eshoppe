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
    <link rel="stylesheet" href="../css/details.css">
</head>
<body>
<div class="box">
    <div class="box box-a">
        <form method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="anh_details_father">
                <div class="anh_details">
                    <?php
                     if (!empty($data["img"])) {
                    ?>
                    <img src ="<?php upload($data["img"]); ?>" alt="" width = "100" />
                    <br>
                    <?php } ?>
                </div>
                <div class="anh_details_9">
                    <?php
                     if (!empty($data["img"])) {
                    ?>
                    <img src ="<?php upload($data["img"]); ?>" alt="" width = "100" />
                    <br>
                    <?php } ?>
                </div>
                <div >
                    <ul>
                        <li><h1><?php echo $data["ten"]; ?></h1></li>
                        <li><h2 class="price"> Giá: <?php echo $data["gia"]; ?></h2> </li>
                        <li> <?php echo $data["mota"]; ?> </li>
                    </ul>
                </div>

            </div>
    </div>
</div>
</body>
</html>