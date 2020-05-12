<?php

define("BASE_PATH", dirname(__FILE__));
// www.abc.com

// nạp các router
include_once BASE_PATH."/mvc/route.php";

// nạp file kết nối đến CSDL
include_once BASE_PATH."/mvc/models/database.php";

// nạp các controller của ứng dụng
include_once BASE_PATH."/mvc/controllers/indexcontroller.php";
include_once BASE_PATH . "/mvc/controllers/phonecontroller.php";

// nạp các model của ứng dụng
include_once BASE_PATH . "/mvc/models/phonemodel.php";
include_once BASE_PATH."/mvc/models/usermodel.php";



// khởi tạo router
$router = new Route();
$router->run();