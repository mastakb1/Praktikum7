<?php
    include 'conn.php';
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM data_pegawai WHERE id =$id");
    header("location:main.php");
?>