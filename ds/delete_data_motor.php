<?php
include_once("db_toko_motor.php");

// jika ada parameter iddel pada URL, hapus data dengan id tersebut
if (isset($_GET["iddel"])) {
    $id = $_GET["iddel"];

    // query untuk menghapus data
    $sql = "DELETE FROM motor WHERE id = $id";

    if ($db->query($sql)) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

// kembali ke halaman utama setelah selesai menghapus data
header("Location: data_motor.php");
exit();
