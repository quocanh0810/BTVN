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
    <h1 style="text-align: center">Đăng nhập</h1>
<form action="" method="post" onsubmit="CheckForm()" name="form">
    <div class="form-group">
        <label>Tên</label>
        <input type="text" class="form-control" name="tendangnhap">
    </div>
    <div class="form-group">
        <label>Mật khẩu:</label>
        <input type="password" class="form-control" name="matkhau">
    </div>
    <button type="submit" name="submit">Đăng nhập</button>
</form>

    <h1>Cơ sở Dữ liệu : <a href="index2.php">VàoCơSởDữLiệu</a></h1>
</div>

<script type="text/javascript">
    function CheckForm() {
        var f = document.form;
        if(f.tendangnhap.value == ''){
            alert("Tên khác rỗng");
            f.tendangnhap.focus();
            return false;
        }

        if(f.matkhau.value != 'admin'){
            alert('Mật khẩu là "admin"');
            f.matkhau.focus();
            return false;
        }

        return true;
    }
</script>
</body>