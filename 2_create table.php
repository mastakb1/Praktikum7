<?php
$conn = mysqli_connect("localhost", "root", "", "DBPerusahaan");

// Create table
$sql = "CREATE TABLE data_pegawai ( 
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    nama_awal VARCHAR(50) NOT NULL,
    nama_akhir VARCHAR(50) NOT NULL,
    alamat VARCHAR(200) NOT NULL)";
    
if(mysqli_query($conn, $sql)){
    echo "New Table created successfully";
}else{
    echo "Error : ".$sql."<br>".mysqli_error($conn);
}
  
mysqli_close($conn);
?>