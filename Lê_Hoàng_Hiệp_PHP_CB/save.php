<?php
/**
 * Created by PhpStorm.
 * User: Hocvien
 * Date: 16/05/2020
 * Time: 13:38 CH
 */
include_once "connect.php";


echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST["ten"]) && isset($_POST["nsx"]) && isset($_POST["nd"]) && isset($_POST["gia"]) && isset($_POST["soluong"])) {
    $sql = "INSERT quanlymathang(ten, nsx, nd, gia, soluong) VALUES('".$_POST["ten"]."', '".$_POST["nsx"]."', '".$_POST["nd"]."', '".$_POST["gia"]."', '".$_POST["soluong"]."')";
    echo $sql;
    $test = $connectMysql->exec($sql);
    var_dump($test);
    header("Location: index.php");
    exit;

}else {
    echo "dữ liệu không hợp lệ";
}