<?php

// IP máy chủ mysql
$servername = "localhost";
// Username mysql
$username = "root";

$password = "";

$dbname = "quanlymathang";

try {
    $connectMysql = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $connectMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Kết nối đến CSDL thất bại : " . $e->getMessage();
    die();
}

echo "<pre>";
print_r($_POST);
echo "</pre>";
if (isset($_POST["tenhang"]) && isset($_POST["nhasanxuat"]) && isset($_POST["tomtat"]) && isset($_POST["giaban"]) && isset($_POST["soluong"])) {
    $sql = "INSERT mathang(tenhang, nhasanxuat, tomtat , giaban , soluong) VALUES('".$_POST["tenhang"]."', '".$_POST["nhasanxuat"]."', '".$_POST["tomtat"]."' ,'".$_POST["giaban"]."', '".$_POST["soluong"]."')";
    echo $sql;
    $test = $connectMysql->exec($sql);
    var_dump($test);
    header("Location: index2.php");
    exit;
} else {
    echo "dữ liệu không hợp lệ";
}