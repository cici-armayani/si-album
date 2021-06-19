<?php

namespace App;

class album extends koneksi {

    public function __construct ()
    {
            parent :: __construct();
    }

    public function tampil()
    {
        $sql = "select * from album";
        $stmt =$this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
                $data[] = $rows;
        }

        return $data;
    }

public function input()
{
    $i_id  = $_POST['i_id'];
    $i_name = $_POST['i_name'];
    $i_text = $_POST['i_text'];
    $i_photo_id = $_POST['i_photo_id'];

    $sql = "insert into album values (null, :id, :name, :text, :photo_id) ";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":id", $i_id);
    $stmt->bindParam(":name", $i_name);
    $stmt->bindParam(":text", $i_text);
    $stmt->bindParam(":photo_id", $i_photo_id);
    $stmt->execute();

}
}