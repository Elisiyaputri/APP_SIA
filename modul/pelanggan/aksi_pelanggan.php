<?php
session_start();
include_once('../../koneksi.php');
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];   
    $email = $_POST['email'];   
    if ($_GET['act']=="insert") {
        $query = "INSERT INTO tbl_pelanggan (nama_pelanggan, alamat, telepon, email) VALUES ('$nama_pelanggan', '$alamat', '$telepon', '$email')";
        $exec = mysqli_query($koneksi, $query);
        if ($exec) {
            header('location:../../dashboard.php?modul=pelanggan'); // Kembali ke index.php di folder akun
            exit; // Pastikan untuk keluar setelah pengalihan header
        } else {
            // Tampilkan pesan kesalahan jika gagal menginput data
            $_SESSION['pesan'] = "Gagal menambahkan data";
            header('location:../../dashboard.php?modul=pelanggan');
            exit();
        }
    } elseif ($_GET['act']=="update") {
        $id = $_GET['id'];
        // Query untuk menghapus data
        $query = "UPDATE tbl_pelanggan SET nama_pelanggan = '$nama_pelanggan', alamat = '$alamat', telepon = '$telepon', email= '$email'  WHERE pelanggan_id = '$id'";
        $exec = mysqli_query($koneksi, $query);
        if ($exec) {
            header('location:../../dashboard.php?modul=pelanggan'); // Kembali ke index.php di folder akun
            exit;
        } else {
            $_SESSION['pesan'] = "Gagal mengubah data";
            header('location:../../dashboard.php?modul=pelanggan');
            exit();
        }
    }        
}elseif ($_GET['act']=="delete") {
    $id = $_GET['id'];
    // Query untuk menghapus data
    $query = "DELETE FROM tbl_pelanggan WHERE pelanggan_id = '$id'";
    $exec = mysqli_query($koneksi, $query);
    if ($exec) {
        header('location:../../dashboard.php?modul=pelanggan'); // Kembali ke index.php di folder akun
        exit;
    } else {
        $_SESSION['pesan'] = "Gagal menghapus data";
        header('location:../../dashboard.php?modul=pelanggan');
        exit();
    }
}

?>