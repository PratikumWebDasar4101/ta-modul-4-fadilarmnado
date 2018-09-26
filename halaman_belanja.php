<!DOCTYPE html>
<html>
<head>
	<title>Halaman belanja</title>
</head>
<body>
	<form class="" action="proses_belanja.php" method="post">
			<table>
				<tr>
					<td colspan="4"><h1>Daftar Barang Belanjaan</h1></td>

				</tr>
				<tr>
					<td><input type="checkbox" name="barang[]" value="Beras 1kg">Beras</td>
					<td><input type="checkbox" name="barang[]" value="Telur 1 butir">Telur</td>
					<td><input type="checkbox" name="barang[]"
						value="Minyak Goreng 500 ml">Minyak Goreng</td>
					<td><input type="checkbox" name="barang[]" value="Gula Pasir 1kg">Gula Pasir</td>
				</tr>

				<tr>
					<td colspan="4"><h1>Jenis Pengiriman</h1> </td>
				</tr>
				<tr>
					<td><input type="radio" name="pengiriman" value="JNE">JNE</td>
					<td><input type="radio" name="pengiriman" value="TIKI">TIKI</td>
					<td><input type="radio" name="pengiriman" value="Indah Cargo">Indah Cargo</td>
				</tr>
				<tr>
					<td colspan="4"><h1>Alamat</h1></td>
				</tr>
				<tr>
					<td colspan="4"><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit"></td>
				</tr>
			</table>
	</form>
</body>
</html>
