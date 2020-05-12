<?php

include_once "connect.php";


$sql = "SELECT * FROM mathang";
$stmt = $connectMysql->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll();

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

    <h1>Quản lý Mặt Hàng</h1>

    <div class="row" style="margin-bottom: 20px">
        <div class="col-md-12">
            <a href="create.php" class="btn btn-primary">Thêm mặt hàng</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>Mã hàng</th>
                    <th>Tên Hàng</th>
                    <th>Nhà sản xuất</th>
                    <th>Tóm Tắt</th>
                    <th>Giá bán</th>
                    <th>Số lượng</th>
                </tr>
                </thead>
                <tbody>


                <?php foreach($data as $i => $mathang) { ?>
                    <tr>
                        <td><?php echo $mathang["id"] ?></td>
                        <td><?php echo $mathang["tenhang"] ?></td>
                        <td><?php echo $mathang["nhasanxuat"] ?></td>
                        <td><?php echo $mathang["tomtat"] ?></td>
                        <td><?php echo $mathang["giaban"] ?></td>
                        <td><?php echo $mathang["soluong"] ?></td>
                        <td>
                            <a href="view.php?id=<?php echo $mathang["id"] ?>" class="btn btn-success">Xem chi tiết</a>
                            <a href="edit.php?id=<?php echo $mathang["id"] ?>" class="btn btn-warning">Sửa</a>
                            <a href="delete.php?id=<?php echo $mathang["id"] ?>" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>