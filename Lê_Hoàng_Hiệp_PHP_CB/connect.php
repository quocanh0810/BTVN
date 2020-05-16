<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 12/27/2019
 * Time: 6:43 PM
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";
try {
    $connectMysql = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connectMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo  "Kết nối thành công";
}
catch(PDOException $e)
{
    echo "Kết nối đến CSDL thất bại : " . $e->getMessage();
    die();
}