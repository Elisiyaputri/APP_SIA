<?php
session_start();
include_once('../../koneksi.php');
if (isset($_POST['submit'])) {
    $nama_akun = $_POST['nama_akun'];
    $jenis_akun = $_POST['jenis_akun'];
    $tipe_saldo = $_POST['tipe_saldo'];   
    if ($_GET['act']=="insert") {
        $query = "INSERT INTO tbl_akun (nama_akun, jenis_akun, tipe_saldo) VALUES ('$nama_akun', '$jenis_akun', '$tipe_saldo')";
        $exec = mysqli_query($koneksi, $query);
        if ($exec) {
            header('location:../../dashboard.php?modul=akun'); // Kembali ke index.php di folder akun
            exit; // Pastikan untuk keluar setelah pengalihan header
        } else {
            // Tampilkan pesan kesalahan jika gagal menginput data
            $_SESSION['pesan'] = "Gagal menambahkan data";
            header('location:../../dashboard.php?modul=akun');
            exit();
        }
    } elseif ($_GET['act']=="update") {
        $id = $_GET['id'];
        // Query untuk menghapus data
        $query = "UPDATE tbl_akun SET nama_akun = '$nama_akun', jenis_akun = '$jenis_akun', tipe_saldo = '$tipe_saldo' WHERE akun_id = '$id'";
        $exec = mysqli_query($koneksi, $query);
        if ($exec) {
            header('location:../../dashboard.php?modul=akun'); // Kembali ke index.php di folder akun
            exit;
        } else {
            $_SESSION['pesan'] = "Gagal mengubah data";
            header('location:../../dashboard.php?modul=akun');
            exit();
        }
    }        
}elseif ($_GET['act']=="delete") {
    $id = $_GET['id'];
    // Query untuk menghapus data
    $query = "DELETE FROM tbl_akun WHERE akun_id = '$id'";
    $exec = mysqli_query($koneksi, $query);
    if ($exec) {
        header('location:../../dashboard.php?modul=akun'); // Kembali ke index.php di folder akun
        exit;
    } else {
        $_SESSION['pesan'] = "Gagal menghapus data";
        header('location:../../dashboard.php?modul=akun');
        exit();
    }
}
//batas

?>