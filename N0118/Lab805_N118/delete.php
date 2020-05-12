<?php

include_once "connect.php";

if (!isset($_GET["id"]) || ($_GET["id"] < 1)) {
    echo "id Mặt hàng không hợp lê";
    exit;
}
var_dump($connectMysql);
$sql = "SELECT * FROM mathang WHERE id=". (int) $_GET["id"];
echo "<br>".$sql;
$stmt = $connectMysql->prepare($sql);
$stmt->execute();

$data = $stmt->fetchAll();
if (isset($data[0])) {
    $mathang = $data[0];
} else {
    echo "không lấy được data";
    exit;
}
echo "<pre>";
print_r($data);
echo "</pre>";
if (!isset($mathang["id"]) || ($mathang["id"] < 1)) {
    echo "dữ liệu không hợp lệ";
    exit;
}
echo "<pre>";
print_r($mathang);
echo "</pre>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Xem thông tin trước khi xóa</h1>
    <div class="row">
        <div class="col-md-12">
            <form name="create" action="remove.php" method="post">
                <input type="hidden" name="id" value="<?php echo $mathang["id"] ?>" />

                <div class="form-group">
                    <label>Tên Mặt Hàng:</label>
                    <?php echo $mathang["tenhang"] ?>
                </div>
                <div class="form-group">
                    <label>Nhà sản xuất:</label>
                    <?php echo $mathang["nhasanxuat"] ?>
                </div>
                <div class="form-group">
                    <label>Tóm tắt sản phẩm : </label>
                    <?php echo $mathang["tomtat"] ?>
                </div>
                <div class="form-group">
                    <label>Giá bán :</label>
                    <?php echo $mathang["giaban"] ?>
                </div>
                <div class="form-group">
                    <label>Số lượng</label>
                    <?php echo $mathang["soluong"] ?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>