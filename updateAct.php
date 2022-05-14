<?php
    include 'conn.php';
    $id = $_POST['id'];
    $nama_awal = $_POST ['nama_awal'];
    $nama_akhir = $_POST ['nama_akhir'];
    $alamat = $_POST ['alamat'];
    echo $id, $nama_awal, $nama_akhir, $alamat;
    mysqli_query($conn, "UPDATE data_pegawai SET nama_awal= '$nama_awal', nama_akhir= '$nama_akhir', alamat= '$alamat' WHERE id = $id");
    header("location:main.php");
?>