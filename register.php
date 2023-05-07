<?php
	include("include/common.php");

	if(is_method_post()){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$cf_password = $_POST["cf_password"];
		if($password != $cf_password){
			js_alert("Mật khẩu không khớp!!");
			js_redirect_to("register.php");
			die;
		}
	
    if(isUsernameExists($username)){
        js_alert("tên tài khoản đã tồn tại!!");
        js_redirect_to("register.php");
        die;
    }
	$password_hash = password_hash($password, PASSWORD_DEFAULT);
	$sql = "insert into sigup values(?, ?,?,default)";
	$params = [$username,$password, $password_hash];
	db_execute($sql, $params);
	js_redirect_to("");
}
	function isUsernameExists(string $username): bool
    {
        $sql = "select * from sigup where ten=?";
        $data = db_select($sql,[$username]) ;
		return !empty($pargams);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng ký</title>
	<link rel="stylesheet" href="css/dangky.css">
</head>
<body> 
	<div class="nen">
		<div class="button">
			<button class="dktk"><h1>Đăng ký tài khoản</h1></button>
		</div>

		<form method="post">
			<div class="giua">
				<div class="ctdn">
					<label ><input class="dtd" type="text"  name ="username" placeholder="Tên đăng nhập"></label>
					<!-- <label class="tdn">Tên dăng nhập</label>
					<input type="text" name ="username"> -->
				</div>
				<div class="chonut">
					<label ><input class="dtd" type="password" name ="password" placeholder="Mật khẩu" minlength = "4" required /></label>
					<!-- <label>Mật khẩu</label>
					<input type="password" name ="password" minlength = "4" required /> -->
				</div>
				<div class="chonut">
					<label ><input class="dtd" type="password" name ="cf_password" placeholder="Nhập lại mật khẩu"></label>
					<!-- <label>Nhập lại mật khẩu</label>
					<input type="password" name ="cf_password"> -->
				</div>
				<div class="chonut">
					<input class="dangky" type="submit" value = "Đăng ký" >
				</div>
			</div>
	
		</form>

		
	</div>
</body>
</html>