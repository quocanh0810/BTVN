<?php

/**
 * Class BookModel
 * Trong model chịu trách nhiệm tương tác với CSDL
 * và xử lý phần liên quan đến logic
 */
class PhoneModel extends Database {

    // khai báo bảng của model
    public $table = "dienthoai";


    // lấy tất cả các bản ghi trong CSDL
    public function getAll() {

        $sql = "SELECT * FROM " . $this->table;

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        $data = $stmt->fetchAll();

        return $data;
    }

    // lấy 1 bản ghi duy nhất trong CSDL
    public function getSingle($id) {

        $sql = "SELECT * FROM " . $this->table . " WHERE id = " . $id;

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        $data = $stmt->fetchAll();

        $single = $data[0];

        return $single;
    }

    // thêm vào trong bảng
    public function insert($data) {
        $ma_hang= $data["ma_hang"];
        $ten_dienthoai = $data["ten_dienthoai"];
        $mau_sac = $data["mau_sac"];
        $gia_dienthoai = $data["gia_dienthoai"];
        $mo_ta = $data["mo_ta"];
        $ngay_dang = $data["ngay_dang"];
        $trang_thai = $data["trang_thai"];
        $sql = "INSERT INTO " . $this->table . "(ma_hang, ten_dienthoai,mau_sac,gia_dienthoai,mo_ta,ngay_dang,trang_thai) VALUES ('$ma_hang', '$ten_dienthoai', '$mau_sac',$gia_dienthoai,'$mo_ta',$ngay_dang,'$trang_thai')";

        $response = $this->connection->exec($sql);

        return $response;
    }

    // cập nhật vào bảng
    public function update($data) {
        $id = $data["ma_dienthoai"];
        $ma_hang= $data["ma_hang"];
        $ten_dienthoai = $data["ten_dienthoai"];
        $mau_sac = $data["mau_sac"];
        $gia_dienthoai = $data["gia_dienthoai"];
        $mo_ta = $data["mo_ta"];
        $ngay_dang = $data["ngay_dang"];
        $trang_thai = $data["trang_thai"];
        $sql = "UPDATE " . $this->table . " SET ma_hang ='$ma_hang' , ten_dienthoai = '$ten_dienthoai' , mau_sac = $mau_sac , gia_dienthoai = $gia_dienthoai , mo_ta = $mo_ta , ngay_dang = $ngay_dang , trang_thai = $trang_thai  WHERE id=".$id;


        // Bước 1 prepate mysql
        $stmt = $this->connection->prepare($sql);

        // Bước 2 thực hiện query
        $stmt->execute();



    }

    // xóa bản ghi trong CSDL
    public function delete($id) {

        $sql = "DELETE FROM " . $this->table . " WHERE id=".$id;
        
    }


    /**
     * lấy ra tất cả cuốn sách bán chạy nhất trong 1 tháng
     * logic
     */
    public function getAllBookTrends() {

    }


}