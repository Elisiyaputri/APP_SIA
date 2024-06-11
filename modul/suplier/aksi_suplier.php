<?php
session_start();
include_once('../../koneksi.php');
if ($_SERVER['REQUEST_METHOD']== 'POST') {
    $nama_supplier = $_POST['nama_supplier'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];   
    $email = $_POST['email'];   
    if ($_GET['act']=="insert") {
        $query = "INSERT INTO tbl_supplier (nama_supplier, alamat, telepon, email) VALUES ('$nama_supplier', '$alamat', '$telepon', '$email')";
        $exec = mysqli_query($koneksi, $query);
        if ($exec) {
            $_SESSION['pesan'] = "Berhasil menambah data";
            header('location:../../dashboard.php?modul=suplier'); // Kembali ke index.php di folder suplier
            exit; // Pastikan untuk keluar setelah pengalihan header
        } else {
            $_SESSION['pesan'] = "Gagal menambahkan data";
            header('location:../../dashboard.php?modul=suplier');
            exit();
        }
    } elseif ($_GET['act']=="update") {
        $id = $_GET['id'];
        // Query untuk menghapus data
        $query = "UPDATE tbl_supplier SET nama_supplier = '$nama_supplier', alamat = '$alamat', telepon = '$telepon', email = '$email' WHERE supplier_id = '$id'";
        $exec = mysqli_query($koneksi, $query);
        if ($exec) {
            $_SESSION['pesan'] = "Berhasil mengubah data";
            header('location:../../dashboard.php?modul=suplier'); // Kembali ke index.php di folder suplier
            exit;
        } else {
            $_SESSION['pesan'] = "Gagal mengubah data";
            header('location:../../dashboard.php?modul=suplier');
            exit();
        }
    }        
}elseif ($_GET['act']=="delete") {
    $id = $_GET['id'];
    // Query untuk menghapus data
    $query = "DELETE FROM tbl_supplier WHERE supplier_id = '$id'";
    $exec = mysqli_query($koneksi, $query);
    if ($exec) {
        $_SESSION['pesan'] = "Berhasil menghapus data";
        header('location:../../dashboard.php?modul=suplier'); // Kembali ke index.php di folder supplier
        exit;
    } else {
        $_SESSION['pesan'] = "Gagal menghapus data";
        header('location:../../dashboard.php?modul=suplier');
        exit();
    }
}
?>