<?php
include("../include/common.php");
$data = db_select("SELECT*from ttsp")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eshoppe</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <header  class="header1" >
        <img src="images/header01.png" alt="">
        <div class="input-search">
            <input type="text" name="search" placeholder="     Nhập tên sản phẩm">
        </div>
    </header>
    <div><a href="insert.php">Thêm sản phẩm</a></div>
    <div class="slideshow">
        <div class="slide-img">
            <input type="radio" name="inputslide" id="images1">
            <input type="radio" name="inputslide" id="images2">
            <input type="radio" name="inputslide" id="images3">

            <div class="slide1"><img src="../images/slide-1.png"></div>
            <div class="slide2"><img src="../images/slide-2.png"></div>
            <div class="slide3"><img src="../images/slide-3.png"></div>
        </div>
        <div class="slide-label">
            <label for="images1"></label>
            <label for="images2"></label>
            <label for="images3"></label>
        </div>
    </div>
    <main>
    <?php
            
	    foreach ($data as $x) {
            $id = $x["id"];  //thêm đây
	    	$img = upload($x["img"], true);					
	    	$ten = $x["ten"];
	    	$gia = $x["gia"];
	    	$mota = $x["mota"];
				
			echo <<<EOL
                    <div id="tongsanpham">
                        <div class="backgroundsp">
                            <div class="sanpham">
                               <img class="dtd" src="$img" alt="sản phẩm">
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
        <!-- <h3 class="them">Sản phẩm mới</h3>
        <div id="tongsanpham">
         
            <div class="backgroundsp">
                <div class="sanpham">
                   <img class="dtd" src="images/500.png" alt="sản phẩm">
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
                    <img class="dtd" src="images/474.png" alt="sản phẩm">
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
                    <img class="dtd" src="images/430.png" alt="sản phẩm">
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
                    <img class="dtd" src="images/570.png" alt="sản phẩm">
                </div>
                <h5>
                    CHUỘT MÁY TÍNH
                </h5>
                <P class="spice">
                    150.000
                </P>
                <h6>Mới</h6>
            </div>
        </div> -->
        <div class="button">
            <button> <h4>XEM THÊM</h4></button>
        </div>
    </main>
    
        <h3 class="information">Thông tin thêm</h3>
        <span>
            <p class="span" > Số điện thoại: +8424 - 7303.02xx</p>
            <p class="span" > Fax: +8424 - 6277.64xx</p>
            <p class="span" > Địa chỉ email: hello@canifa.com</p>
        </span>
    
    </body>
    </html>
    <!-- <header>
        <div style="display:flex">
            <div >
                <input class="header-input" type="text" placeholder="    Nhập tên sản phẩm">
            </div>
            <div class="nav">
                <nav >
                    <a href="trangchu.html"><p class="muclon">Trang chủ</p>  </a>
                    <a href="gioithieu.html"><p class="muclon">Laptop</p></a>
                    <a href="tintuc.html"><p class="muclon">Tin tức</p></a>
                    <a href="dangnhap.html"><p class="muclon">Đăng nhập</p></a>
                    <a href="lienhe.html"><p class="muclon">Đăng nhập</p></a>
                </nav> 
            </div>
        </div> 

    </header>

    </body>
</html>  -->


