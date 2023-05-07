<?php
include("../include/common.php");

$id = $_GET["id"] ?? -1;

$sql_ = "select *from ttsp where id=?"; 
$sql = "delete from ttsp where id=?";
$data= db_execute($sql,[$id]);
if(empty($data))
{
    js_alert("Khong co gi de xoa");
    js_redirect_to("/");
    die;
}

db_execute($sql, [$id]);
js_alert("Xóa thành công");
js_redirect_to("/");

