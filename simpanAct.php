<?php
    include 'conn.php';
    $id = $_POST['id'];
    $nama_awal = $_POST ['nama_awal'];
    $nama_akhir = $_POST ['nama_akhir'];
    $alamat = $_POST ['alamat'];
    mysqli_query($conn, "INSERT INTO data_pegawai VALUES ('$id','$nama_awal','$nama_akhir','$alamat')");
    header("location:main.php");
?>