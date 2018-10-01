<?php
if (isset($_GET['error'])){
	$error=$_GET['error'];
	$pesan="";
	if ($error=="variabel_belum_diset"){
		$pesan="<h3 style='color: red' >Maaf, anda harus mengakses halaman ini dari Formulir</h3>";
	}
	if ($error=="nama_kosong"){
		$pesan="<h3 style='color: red'>Maaf, anda harus mengisi nama</h3>";
	}
	if ($error=="nama_harus_huruf"){
		$pesan="<h3 style='color: red'>Maaf, nama harus berupa huruf</h3>";
	}
} else{
	$error="";
}
?>
<p style="color: red"></p>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<center>
		<h1>FORMULIR </h1>
		<?php error_reporting(0);
			echo $pesan;
			  ?>
		<form action="proses.php" method="get">
			<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number"  name="nim" min="10" maxlength="10"  required ></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"  minlength="1" maxlength="25" ></td>
				<td>
			  	</td>

			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email"  placeholder="Enter Valid Email Address" ></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td>Komentar</td>
				<td>:</td>
				<td><textarea name="Komentar" rows="5" cols="20">Masukan Commentar</textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="kirim" value="Kirim" style="width: 120px"></td>
			</tr>
			</table>
		</form>
		</center>

</body>
</html>
	
