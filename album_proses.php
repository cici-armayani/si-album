<?php

require_once "inc/config.php";

$album = new app\album();

if (isset ($_POST ['btn_simpan'])) {
    $album->input();
    header("location:index.php?page=album_tampil");
}
if (isset ($_POST ['btn_edit'])) {
    $album->update();
    header("location:index.php?page=album_tampil");
}
