<?php
include("include/common.php");

if (is_logged()) {
    // js_alert("/");
}

// nhập thông tin đăng nhâp từ form post
if (is_method_post()) {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";
    // select từ db dựa vào username
    $sql = "select * from sigup where ten = ?";
    $users1= db_select($sql, [$username]);
    $sql = "select * from sigup where pass = ?";
    $users2 = db_select($sql, [$password]);
    // nếu kqua là rỗng => nhap sai username
    if (empty($users1)) {
        js_alert("tên đăng nhập hoặc mật khẩu không hợp lệ");
        js_redirect_to("login.php");
        die;
    }
    $users1 = $users2;
    // nếu kq đăng nhập khác rỗng thì so sánh pw trong username với pw ở bước 1
    // => bằng function

    if ($users2 == true) {
        // xác thực thông tin đăng nhập thành công
        js_alert("đăng nhập thành công!!");
        $_SESSION["username"] = $username;
        $_SESSION["users"] = $users2;
        js_redirect_to("/");
    } else {
        js_alert("sai mật khẩu!");
        js_redirect_to("login.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login1.css">
</head>

<body>
    <div class="nen">
        <div >
            <img src="images/sanpham1.png" alt="erza">
        </div>
         <div class="chochu">
             <div class="cdn">
                 <h1 class="dangnhap">Đăng nhập</h1>
             </div>
             <form method="post">
                 <div>
                    <input class="nut" type="text" name="username" placeholder="Tên đăng nhập">
                     <!-- <label class="dtd">Tên dăng nhập</label>
                     <input type="text" name="username"> -->
                 </div>
                 <div>
                    <input class="nut" type="password" name="password" placeholder="Mật khẩu" minlength="4" required />
                     <!-- <label class="dtd">Mật khẩu</label>
                     <input type="password" name="password" minlength="4" required /> -->
                 </div>
                 <div class="sub">
                     <input class="sumit" type="submit" value="Đăng nhập">
                 </div>
                 
                </form>
        </div>
    </div>
</body>

</html>