<!DOCTYPE html>
<html>
<head>
    <title> Simpan Pegawai </title>
</head>
<style>
    p{
        width: 350px;
    }
    thead{
        background-color: #cccddd;
    }
</style>
<body>
    <h2>Simpan Pegawai</h2>
    <form action = "SimpanAct.php" method="post">
        <table>
            <tr>
                <td>ID Pegawai</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>Nama_Awal</td>
                <td><input type="text" name="nama_awal"></td>
            </tr>
            <tr>
                <td>Nama_Akhir</td>
                <td><input type="text" name="nama_akhir"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>