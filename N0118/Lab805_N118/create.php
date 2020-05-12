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
    <h1>Thêm mặt hàng mới</h1>
    <div class="row">
        <div class="col-md-12">
            <form name="create" action="save.php" method="post">
                <div class="form-group">
                    <label>Tên Mặt Hàng</label>
                    <input type="text" name="tenhang" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label>Nhà sản xuất</label>
                    <input type="text" name="nhasanxuat" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label>Tóm tắt</label>
                    <input type="text" name="tomtat" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label>Giá:</label>
                    <input type="text" name="giaban" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label>Số Lượng:</label>
                    <input type="text" name="soluong" class="form-control" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>