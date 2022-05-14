<!DOCTYPE html>
<html>
<head>

	<title>Update Pegawai</title>
</head>
<style>
	T1{
		width: 350px;
	}
	thead {
		background-color: #cccddd;
	}
</style>

<body>
<h2> Update Pegawai</h2>
<form action="UpdateAct.php" method="post">
	<?php
	$id = $_GET['id'];
	include "conn.php";
	$query = mysqli_query($conn, "SELECT * FROM data_pegawai where id = $id");
	while ($data = mysqli_fetch_array($query)){
		?>
		<table>
			<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
			<tr>
				<td>Nama Awal</td>
				<td><input type="text" name="nama_awal" value="<?php echo $data['nama_awal']; ?>"> </td>
			</tr>
			<tr>
				<td>Nama Akhir</td>
				<td><input type="text" name="nama_akhir" value="<?php echo $data['nama_akhir']; ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Simpan"></td>
			</tr>
		</table>
		<?php
	} ?>
</form>
</body>
</html>