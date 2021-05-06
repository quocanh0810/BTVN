<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ql_sach';
$conn = new mysqli($servername,$username,$password,$dbname);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<style type="text/css">
    table,th,td{
        border:1px solid black;
        border-collapse:collapse;
        padding:5px;
    }
</style>
<?php
if(isset($_POST["create"])){
    $ms = $_POST["ms"];
    $ts = $_POST["ts"];
    $tg = $_POST["tg"];
    $nxb = $_POST["nxb"];
    $tmh = $_POST["tmh"];
    $gia = $_POST["gia"];

    $sql = "INSERT INTO products (ms,ts,tg,nxb,gia,tmh) VALUES ('$ms','$ts','$tg','$nxb','$gia','$tmh')";
    $conn->query($sql);

}
?>

<?php // ý 2
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM sach WHERE stt='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<?php // ý cuối
if (isset($_GET["id"])){
    if(isset($_POST["edit"])){
        $ms = $_POST["ms"];
        $ts = $_POST["ts"];
        $tg = $_POST["tg"];
        $nxb = $_POST["nxb"];
        $tmh = $_POST["tmh"];
        $gia = $_POST["gia"];
        $sql = "Update sach SET ms = '$ms', ts = '$ts', tg = '$tg', nxb = '$nxb', tmh = '$tmh', gia = 'gia' where stt=".$_GET["id"] ;
        $result = $conn->query($sql)
        ;
    }
}
?>
<?php // ý xóa

if(isset($_GET["id"])){
    if(isset($_POST["delete"])){
        $sql = "DELETE FROM sach where stt = ".$_GET["id"];
        $result =$conn->query($sql);
    }
}
?>
<body>
<form name="danhsach" action="" method="post">
    <table>
        <tr>
            <td>Mã sách</td>
            <td><input type="text" value="<?php if(isset($row['ms'])){ echo $row['ms']; }else{ echo ""; } ?>">
            </td>
        </tr>
        <tr>
            <td>Tên sách</td>
            <td><input type="text" name="ts" value="<?php if(isset($row['ts'])){ echo $row['ts']; }else{ echo ""; } ?>"></td>

        </tr>
        <tr>
            <td>Tác giả</td>
            <td><input type="text" name="tg" value="<?php if(isset($row['tg'])){ echo $row['tg']; }else{ echo ""; } ?>"></td>

        </tr>
        <tr>
            <td>Nhà xuất bản</td>
            <td><input type="text" name="nxb" value="<?php if(isset($row['nxb'])){ echo $row['nxb']; }else{ echo ""; } ?>"></td>

        </tr>
        <tr>
            <td>Thể loại</td>
            <td>

                <select name="tmh">
                    <?php if(isset($row['tmh'])) : ?>
                        <option id="none" value="<?php echo $row['tmh']; ?>"><?php echo $row['tmh']; ?></option>
                    <?php endif; ?>

                    <?php if($row['tmh'] == "Tin học") : ?>
                        <option value="Tin học" style="display:none;">Tin học</option>
                    <?php else: ?>
                        <option value="Tin học">Tin học</option>
                    <?php endif; ?>

                    <?php if($row['tmh'] == "Ngoại ngữ") : ?>
                        <option value="Ngoại ngữ" style="display:none;">Ngoại ngữ</option>
                    <?php else: ?>
                        <option value="Ngoại ngữ">Ngoại ngữ</option>
                    <?php endif; ?>

                    <?php if($row['tmh'] == "Toán") : ?>
                        <option value="Toán" style="display:none;">Toán</option>
                    <?php else: ?>
                        <option value="Toán">Toán</option>
                    <?php endif; ?>
                </select></td>
            <td>Giá</td>
            <td><input type="number" value="<?php echo $row['gia'];?>" name="gia"></td>


        </tr>
    </table>
    <button type="submit" name="create">Thêm</button>
    <button type="submit" name = "edit">Sửa</button>
    <button type="submit" name="delete">Xóa</button>

    <div class="table">
        <table>
            <thead>
            <th>STT</th>
            <th>Mã sách</th>
            <th>Tên sách</th>
            <th>Tác giả</th>
            <th>Nhà xuất  bản</th>
            <th>gía</th>
            <th>Thể loại</th>
            <th></th>
            </thead>
            <?php
            $sql = "SELECT * FROM sach";
            $result = $conn->query($sql); //chạy câu truy vấn
            if($result->num_rows >0){
                while ($row = $result->fetch_assoc()){ //fetch_assoc là lấy ra số hàng
                    $data[] = $row;
                }
            }

            ?>
            <tbody>
            <?php foreach ($data as $post) : ?>
                <tr>
                    <td><?php echo $post["stt"] ?></td>
                    <td><?php echo $post["ms"] ?></td>
                    <td><?php echo $post["ts"] ?></td>
                    <td><?php echo $post["tg"] ?></td>
                    <td><?php echo $post["nxb"] ?></td>
                    <td><?php echo $post["gia"] ?></td>
                    <td><?php echo $post["tl"] ?></td>
                    <td ><a href="b4.php?id=<?php echo $post["stt"]?>" style=" color: black">detail</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</form>
<body>





