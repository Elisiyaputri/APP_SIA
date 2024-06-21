<?php
session_start();
include_once('../../koneksi.php');
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $invoice_pembayaran = $_POST['invoice_pembayaran'];
    $tanggal_pembayaran = $_POST['tanggal_pembayaran'];
    $total_pembayaran = $_POST['total_pembayaran'];   
    $keterangan = $_POST['keterangan'];   
    if ($_GET['act']=="insert") {
        $query = "INSERT INTO tbl_pembayaran (invoice_pembayaran, tanggal_pembayaran, total_pembayaran, keterangan) VALUES ('$invoice_pembayaran', '$tanggal_pembayaran', '$total_pembayaran', '$keterangan')";
        $exec = mysqli_query($koneksi, $query);
        if ($exec) {
            header('location:../../dashboard.php?modul=pembayaran'); 
            exit; 
        } else {
            // Tampilkan pesan kesalahan jika gagal menginput data
            $_SESSION['pesan'] = "Gagal menambahkan data";
            header('location:../../dashboard.php?modul=pembayaran');
            exit();
        }
    } elseif ($_GET['act']=="update") {
        $id = $_GET['id'];
        // Query untuk menghapus data
        $query = "UPDATE tbl_pembayaran SET invoice_pembayaran = '$invoice_pembayaran', tanggal_pembayaran = '$tanggal_pembayaran', total_pembayaran = '$total_pembayaran', keterangan = '$keterangan' WHERE pembayaran_id = '$id'";
        $exec = mysqli_query($koneksi, $query);
        if ($exec) {
            header('location:../../dashboard.php?modul=pembayaran'); // Kembali ke index.php di folder pembayaran
            exit;
        } else {
            $_SESSION['pesan'] = "Gagal mengubah data";
            header('location:../../dashboard.php?modul=pembayaran');
            exit();
        }
    }        
}elseif ($_GET['act']=="delete") {
    $id = $_GET['id'];
    // Query untuk menghapus data
    $query = "DELETE FROM tbl_pembayaran WHERE pembayaran_id = '$id'";
    $exec = mysqli_query($koneksi, $query);
    if ($exec) {
        header('location:../../dashboard.php?modul=pembayaran'); // Kembali ke index.php di folder pembayaran
        exit;
    } else {
        $_SESSION['pesan'] = "Gagal menghapus data";
        header('location:../../dashboard.php?modul=pembayaran');
        exit();
    }
}

?>