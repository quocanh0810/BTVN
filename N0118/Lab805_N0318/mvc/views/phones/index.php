<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>

<?php echo $a ?>
<div class="container">
    <h2>Liệt kê Điện Thoại</h2>
    <p><a class="btn btn-info" href="<?php echo BASE_URL."/index.php?controller=phone&action=create"?>">Thêm mới</a> </p>
    <table class="table">
        <thead>
        <tr>
            <th>Mã Điện Thoại</th>
            <th>Mã Hàng</th>
            <th>Tên</th>
            <th>Màu sắc</th>
            <th>Giá</th>
            <th>Mô tả</th>
            <th>Ngày Đăng</th>
            <th>Trạng Thái</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach($phones as $phoneItem) { ?>
            <tr>
                <td><?php echo $phoneItem['ma_dienthoai'] ?></td>
                <td><?php echo $phoneItem['ma_hang'] ?></td>
                <td><?php echo $phoneItem['ten_dienthoai'] ?></td>
                <td><?php echo $phoneItem['mau_sac'] ?></td>
                <td><?php echo $phoneItem['gia_dienthoai'] ?></td>
                <td><?php echo $phoneItem['mo_ta'] ?></td>
                <td><?php echo $phoneItem['ngay_dang'] ?></td>
                <td><?php echo $phoneItem['trang_thai'] ?></td>
                <td>
                    <a href="<?php echo BASE_URL."/index.php?controller=book&action=edit&id=".$phoneItem['ma_dienthoai'] ?>" class="btn btn-warning">Sửa</a>
                    <a href="<?php echo BASE_URL."/index.php?controller=book&action=delete&id=".$phoneItem['ma_dienthoai'] ?>" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>