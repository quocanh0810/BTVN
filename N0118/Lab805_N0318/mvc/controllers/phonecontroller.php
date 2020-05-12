<?php

class PhoneController {

    /**
     * để trả về view liệt kê các cuốn sách
     */
    public function indexAction() {
        echo "<br>" . __METHOD__;

        $PhoneModel = new PhoneModel();

        // index.php => route.php => controller ( gọi model )
        // model trả dữ liệu cho controller => controller trả dữ liệu
        // xuống view => view hiển thị

        $phones = $PhoneModel->getAll();

        print_r($phones);

        $a = "demo biến của controller";

        include_once BASE_PATH . "/mvc/views/phones/index.php";
    }

    /**
     * để trả về view tạo ra 1 form nhập cuốn sách
     */
    public function createAction() {
        echo "<br>" . __METHOD__;

        include_once BASE_PATH . "/mvc/views/phones/create.php";
    }

    /**
     * để trả về view sửa cuốn sách
     */
    public function editAction() {
        echo "<br>" . __METHOD__;

        $id = (int) $_GET["ma_dienthoai"];
        if ($id > 0) {

            $PhoneModel = new PhoneModel();

            $phone = $PhoneModel->getSingle($id);

            var_dump($phone);

            echo "<pre>";
            print_r($phone);
            echo "</pre>";
        }

        include_once BASE_PATH . "/mvc/views/phones/edit.php";
    }

    /**
     * để trả về view xóa cuốn sách trước khi xóa thật sự
     */
    public function deleteAction() {
        echo "<br>" . __METHOD__;

        include_once BASE_PATH . "/mvc/views/phones/delete.php";
    }


    /**
     * method lưu dữ liệu thêm mới sp
     */
    public function storeAction() {

        $PhoneModel = new PhoneModel();

        if (isset($_POST["ten_dienthoai"]) && isset($_POST["ma_dienthoai"]) && isset($_POST["gia_dienthoai"])) {
            $PhoneModel->insert($_POST);
        }

        header("Location: index.php?controller=book&action=index");
        exit;
    }

    /**
     * lưu trữ dữ liệu khi sửa
     */
    public function updateAction() {


        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        $PhoneModel = new PhoneModel();

        if (isset($_POST["id"]) && ($_POST["ma_dienthoai"] > 0) && isset($_POST["ten_dienthoai"]) && isset($_POST["gia_dienthoai"])) {
            $PhoneModel->update($_POST);

            header("Location: index.php?controller=book&action=index");
            exit;
        }
    }

    /** xóa dữ liệu */
    public function destroyAction() {

    }

}
