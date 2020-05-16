<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

include_once "connect.php";

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST["id"]) && ($_POST["id"] > 0)) {
    $id = (int) $_POST["id"];
    $ten = $_POST["ten"];
    $nsx = $_POST["nsx"];
    $nd = $_POST["nd"];
    $gia = $_POST["gia"];
    $soluong = $_POST["soluong"];

    $sqlUpdate = "UPDATE quanlymathang SET ten = '$ten', nsx = '$nsx', nd = '$nd' , gia = '$gia' , soluong = '$soluong' WHERE id = $id";
    echo "<br> SQL thuần: ". $sqlUpdate;


    $stmt = $connectMysql->prepare($sqlUpdate);

    $stmt->execute();

    echo "<br>". $stmt->rowCount(). "Bản ghi cập nhật thành công";
    echo "<a href = 'index.php'>Quay về trang chủ</a>";

}else{
    echo "Dữ liệu gửi đi không hợp lệ";
    exit;
}
?>
</body>
</html>