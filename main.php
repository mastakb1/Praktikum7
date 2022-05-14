<!DOCTYPE html>
<html>
<head>
    <title>Main Menu</title>
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
        h2 {
            text-align: center;
        }
        table {
            margin: auto;
        }
        1 {
         text-decoration: none;   
        }
        .btn-simpan {
            text-decoration : none;
            margin-top: 2rem;
            margin-left: 35rem;
        }
        </style>
</head>
<body>
<h2> Daftar Pegawai </h2>
<table>
    <thead>
        <tr>
            <td> ID Pegawai </td>
            <td> Nama_Awal </td>
            <td> Nama_Akhir </td>
            <td> Alamat </td>
            </tr>
        </thead>
        <?php
            include "conn.php";
            $no = 1;
            $query = mysqli_query($conn, 'SELECT * FROM data_pegawai');
            while ($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data ['nama_awal']?></td>
                <td><?php echo $data ['nama_akhir']?></td>
                <td><?php echo $data ['alamat']?></td>
                <td class ="update"><a href="update.php?id=<?php echo $data['id']; ?>">Update | </a> 
                    <a href="deleteAct.php?id=<?php echo $data['id'];?>"> | Hapus </a>
                </td>
            </tr>
            <?php
            }
        ?>
    </table>
    <button class="btn-simpan"> <a href="simpan.php"> Simpan Data </a> </button>
</body>
</html>