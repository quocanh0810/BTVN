<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/27/2019
 * Time: 6:02 PM
 */

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "quanlymathang";

try {
    $connectMysql = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $connectMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Kết nối đến CSDL thất bại : " . $e->getMessage();
    die();
}