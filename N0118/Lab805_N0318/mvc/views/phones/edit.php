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


<div class="container">
    <h2>Thêm điện thoại</h2>
    <form name="themsach" method="post" action="<?php echo BASE_URL."/index.php?controller=phone&action=update" ?>">

        <input type="hidden" name="id" value="<?php echo $phone['ma_dienthoai'] ?>">

        <div class="form-group">
            <label for="email">Mã Hàng</label>
            <input type="text" class="form-control" name="product_name" placeholder="" value="<?php echo $phone['ma_hang'] ?>">
        </div>
        <div class="form-group">
            <label for="email">Tên Điện Thoại</label>
            <input type="text" class="form-control" name="product_desc" placeholder="" value="<?php echo $phone['ten_dienthoai'] ?>">
        </div>
        <div class="form-group">
            <label for="email">Màu sắc</label>
            <input type="text" class="form-control" name="product_price" placeholder="" value="<?php echo $phone['mau_sac'] ?>">
        </div>
        <div class="form-group">
            <label for="email">Giá Điện Thoại</label>
            <input type="text" class="form-control" name="product_price" placeholder="" value="<?php echo $phone['gia_dienthoai'] ?>">
        </div>
        <div class="form-group">
            <label for="email">Mô tả</label>
            <input type="text" class="form-control" name="product_price" placeholder="" value="<?php echo $phone['mo_ta'] ?>">
        </div>
        <div class="form-group">
            <label for="email">Ngày đăng</label>
            <input type="text" class="form-control" name="product_price" placeholder="" value="<?php echo $phone['ngay_dang'] ?>">
        </div>
        <div class="form-group">
            <label for="email">Trạng Thái</label>
            <input type="text" class="form-control" name="product_price" placeholder="" value="<?php echo $phone['trang_thai'] ?>">
        </div>


        <button type="submit" class="btn btn-primary">Sửa Thông Tin</button>
    </form>
</div>
</body>
</html>