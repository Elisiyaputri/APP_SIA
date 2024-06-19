<?php
session_start();
include_once('../../koneksi.php');
if (isset($_POST['submit'])) {
    $nama_barang = $_POST['nama_barang'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];
    if ($_GET['act']=="insert") {
        $query = "INSERT INTO tbl_barang (nama_barang, harga_beli, harga_jual, stok) VALUES ('$nama_barang', '$harga_beli', '$harga_jual', '$stok')";
        $exec = mysqli_query($koneksi, $query);
        if ($exec) {
            $_SESSION['pesan'] = "Berhasil menambahkan data";
            header('location:../../dashboard.php?modul=barang');
            exit();
        }else {
            $_SESSION['pesan'] = "Gagal menambahkan data";
            header('location:../../dashboard.php?modul=barang');
            exit();
        }
    }elseif ($_GET['act']=="update") {
        $id = $_GET['id'];
        $query = "UPDATE tbl_barang SET nama_barang = '$nama_barang', harga_beli = '$harga_beli', harga_jual = '$harga_jual', stok = '$stok' WHERE barang_id = '$id'";
        $exec = mysqli_query($koneksi, $query);
        if ($exec) {
            $_SESSION['pesan'] = "Berhasil mengubah data";
            header('location:../../dashboard.php?modul=barang');
            exit();
        }else {
            $_SESSION['pesan'] = "Gagal mengubah data";
            header('location:../../dashboard.php?modul=barang');
            exit();
        }
    }
}elseif ($_GET['act']=="delete") {
    $id = $_GET['id'];
        $query = "DELETE FROM tbl_barang WHERE barang_id = '$id'";
        $exec = mysqli_query($koneksi, $query);
        if ($exec) {
            $_SESSION['pesan'] = "Berhasil menghapus data";
            header('location:../../dashboard.php?modul=barang');
            exit();
        }else {
            $_SESSION['pesan'] = "Gagal menghapus data";
            header('location:../../dashboard.php?modul=barang');
            exit();
        }
}
?>