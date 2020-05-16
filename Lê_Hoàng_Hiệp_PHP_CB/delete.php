<?php
// Nạp file kết nối cơ sở dữ liệu
include_once "connect.php";
// gọi đến kết nối CSDL thì dùng $connectMysql
if (!isset($_GET["id"]) || ($_GET["id"] < 1)) {
    echo "id mặt hàng không hợp lê";
    exit;
}
var_dump($connectMysql);
$sql = "SELECT * FROM quanlymathang WHERE id=". (int) $_GET["id"];
echo "<br>".$sql;
$stmt = $connectMysql->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll();
if (isset($data[0])) {
    $quanlymathang = $data[0];
} else {
    echo "không lấy được data";
    exit;
}
echo "<pre>";
print_r($data);
echo "</pre>";
if (!isset($quanlymathang["id"]) || ($quanlymathang["id"] < 1)) {
    echo "dữ liệu không hợp lệ";
    exit;
}

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
                <input type="hidden" name="id" value="<?php echo $quanlymathang["id"] ?>" >

                <div class="form-group">
                    <label>Tên mặt hàng:</label>
                    <input type="text" name="ten" class="form-control" value="<?php echo $quanlymathang["ten"] ?>">
                </div>
                <div class="form-group">
                    <label>Nhà sản xuất:</label>
                    <input type="text" name="nsx" class="form-control" value="<?php echo $quanlymathang["nsx"] ?>">
                </div>
                <div class="form-group">
                    <label>Tóm tắt nội dung mặt hàng:</label>
                    <input type="text" name="nd" class="form-control" value="<?php echo $quanlymathang["nd"] ?>">
                </div>
                <div class="form-group">
                    <label>Giá bán:</label>
                    <input type="text" name="gia" class="form-control" value="<?php echo $quanlymathang["gia"] ?>">
                </div>
                <div class="form-group">
                    <label>Số lượng:</label>
                    <input type="text" name="soluong" class="form-control" value="<?php echo $quanlymathang["soluong"] ?>">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>