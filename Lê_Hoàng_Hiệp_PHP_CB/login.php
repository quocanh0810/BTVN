<?php
session_start();

?>


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

if (isset($_POST["username"]) && isset($_POST["password"])) {
    include_once "connect.php";
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM account WHERE username = '$username' AND password='$password'";
    $stmt = $connectMysql->prepare($sql);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $user = $stmt -> fetchAll();
    $userLogin = isset($user[0]) ? $user[0] : false;

    echo $sql;

    if ( $userLogin) {
        $_SESSION["login"] = $userLogin["username"];

        header("Location: index.php");
        exit;
    } else {
        echo "<p>Username và password không đúng</p>";
    }
}
?>

<?php
// Code PHP xử lý validate

$error = array();
$data = array();

if (!empty($_POST['login1'])) {
// Lấy dữ liệu

    $data['username'] = isset($_POST['username']) ? $_POST['username'] : '';

    if (empty($data['username'])) {
        $error['username'] = "<span style=\"color:red;\">Bạn chưa nhập tên</span>";
    }
}
?>

<form name="login" method="post" action="">
    <div>
        <label>Username</label>
        <input type="text" name="username" value="<?php echo isset($data['username']) ? $data['username'] : ''; ?>">
        <?php echo isset($error['username']) ? $error['username'] : ''; ?>
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="password" value="">
    </div>
    <div>
        <input type="submit" name="login1" value="Đăng nhập">
    </div>

</form>


</body>
</html>