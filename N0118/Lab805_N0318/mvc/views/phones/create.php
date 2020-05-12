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
        <form name="themdienthoai" method="post" action="<?php echo BASE_URL."/index.php?controller=phone&action=store" ?>">
            <div class="form-group">
                <label for="email">Mã Hàng</label>
                <input type="text" class="form-control" name="ma_hang" placeholder="" >
            </div>

            <div class="form-group">
                <label for="email">Tên</label>
                <input type="text" class="form-control" name="ten_dienthoai" placeholder="" >
            </div>

            <div class="form-group">
                <label for="email">Màu sắc</label>
                <input type="text" class="form-control" name="mau_sac" placeholder="" >
            </div>

            <div class="form-group">
                <label for="email">Giá</label>
                <input type="text" class="form-control" name="gia_dienthoai" placeholder="" >
            </div>

            <div class="form-group">
                <label for="email">Mô tả</label>
                <input type="text" class="form-control" name="mo_ta" placeholder="" >
            </div>

            <div class="form-group">
                <label for="email">Ngày đăng</label>
                <input type="text" class="form-control" name="ngay_dang" placeholder="" >
            </div>

            <div class="form-group">
                <label for="email">Trạng Thái</label>
                <input type="text" class="form-control" name="trang_thai" placeholder="" >
            </div>
        <button type="submit" class="btn btn-primary">Thêm Điện Thoại</button>
    </form>
</div>
</body>
</html>