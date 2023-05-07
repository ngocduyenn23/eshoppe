<?php
include("include/common.php");
$data = db_select("SELECT*from ttsp");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eshop</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header id="content" class="header1" >
        <img src="images/header01.png" alt="">
        <div class="input-search">
            <input type="text" name="search" placeholder="     Nhập tên sản phẩm">
        </div>
        <nav class="nav">
            <a class="href" href="index.php"><p class="muclon">Trang chủ</p>  </a>
            <a class="href" href="admin/insert.php"><p class="muclon">Thêm sản phẩm mới</p></a>
            <?php if(is_logged()){ ?>
            <a class="href" href="logout.php"><p class="muclon">Đăng xuất</p></a>
            <?php } else { ?>
            <a class="href" href="login.php"><p class="muclon">Đăng nhập</p></a>
            <a class="href" href="register.php"><p class="muclon">Đăng ký</p></a>
            <u class="giohang" ></u>
            <u class="canhan"></u>
            <?php }  ?>
        </nav>
    </header>
    <!-- <div class="frame_father">
        <div class="frame_chill">
                <img src="images/474.png" alt="">
                <div class="content_img">Tên Sp</div>
                <div class="content_img">Giá</div>
                <div class="content_img"> Mô tả</div>
        </div>
    </div> .. -->
    
    
    <div id="content" class="slideshow">
        <div class="slide-img">
            <input type="radio"  title="#" name="inputslide" id="images1">
            <input type="radio"  title="Vui lòng nhập tên"  name="inputslide" id="images2">
            <input type="radio"  title="Vui lòng nhập tên" name="inputslide" id="images3">

            <div class="slide1"><img src="images/slide-1.png" alt="slide anh"></div>
            <div class="slide2"><img src="images/slide-2.png" alt="slide anh"></div>
            <div class="slide3"><img src="images/slide-3.png" alt="lide anh"></div>
        </div>
        <div class="slide-label">
            <label for="images1"></label>
            <label for="images2"></label>
            <label for="images3"></label>
        </div>
    </div>
    <main>
        <h3 class="them">Sản phẩm mới</h3>

        <?php  
	    foreach ($data as $x) {

            $id = $x["id"]; //thêm đây
	    	$img = upload($x["img"], true);					
	    	$ten = $x["ten"];
	    	$gia = $x["gia"];
	    	$mota = $x["mota"];
				
			echo <<<EOL
                    <div id="tongsanpham">
                        <div class="backgroundsp">
                        <div class="sanpham">
                            <ul>
                                <li><a href="admin/edit.php?id=$id" class="edit">sửa</a></li>
                                <li><a href="admin/delete.php?id=$id" class="delete">xóa</a></li>
                                <li><a href="admin/details.php?id=$id">Details</a></li>
                            </ul>
                            <div class="pic1" id="image1" >                         
                            <img class="dtd" src="$img" alt="sản phẩm">
                            </div>
                        </div>
                            <h5>
                                $ten
                            </h5>
                            <P class="spice">
                               $gia
                            </P>
                            <h6>$mota</h6>
                        </div>
                    </div>
                    EOL;
                }
            ?>
</body>
</html>
        <!-- <div id="tongsanpham">  
            <div class="backgroundsp">
                <div class="sanpham">
                   <img class="dtd" src="images/500.png" alt="">
                </div>
                <h5>
                    CHUỘT MÁY TÍNH
                </h5>
                <P class="spice">
                    350.000
                </P>
                <h6>Mới</h6>
            </div>


            <div class="backgroundsp">
                <div class="sanpham">
                    <img class="dtd" src="images/474.png" alt="">
                </div>
                <h5>
                    CHUỘT MÁY TÍNH
                </h5>
                <P class="spice">
                    500.000
                </P>
                <h6>Mới</h6>
            </div>
            <div class="backgroundsp">
                <div class="sanpham">
                    <img class="dtd" src="images/430.png" alt="">
                </div>
                <h5>
                    CHUỘT MÁY TÍNH
                </h5>
                <P class="spice">
                    200.000
                </P>
                <h6>Cập nhật</h6>
            </div>
            <div class="backgroundsp">
                <div class="sanpham">
                    <img class="dtd" src="images/570.png" alt="">
                </div>
                <h5>
                    CHUỘT MÁY TÍNH
                </h5>
                <P class="spice">
                    150.000
                </P>
                <h6>Mới</h6>
            </div> -->

<!--
        </div>
        <div class="button">
            <button> <h4>XEM THÊM</h4></button>
        </div>
    </main>
   
        <h3 class="information">Thông tin thêm</h3>
        <span>
            <p class="span" > Số điện thoại: +8424 - 7303.02xx</p>
            <p class="span" > Fax: +8424 - 6277.64xx</p>
            <p class="span" > Địa chỉ email: hello@canifa.com</p>
        </span>-->
  
