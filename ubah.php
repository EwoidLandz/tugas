<?php 
	require 'function.php';
	$id = $_GET["id"];

	$pinjam = query("SELECT * FROM buku WHERE id = $id")[0];
	if (isset($_POST['submit'])) {
		if (ubah($_POST) > 0) {
			echo "
				<script>
					alert('Data Berhasil Diubah');
					document.location.href = 'index.php';
				</script
			";
		}else{
			echo "
				<script>
					alert('Data Gagal Diubah');
					document.location.href = 'index.php';
				</script>
			";
		}
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Ubah Data</title>
 	<link rel="stylesheet" type="text/css" href="stylesheet.css?version=<?php echo filemtime('stylesheet.css'); ?>">
 </head>
 <body>
 	<h2>Ubah Data</h2>
 	<form action="" method="post">
 		<input type="hidden" name="id" value="<?php echo $pinjam["id"]; ?>">
 		<ul>
 			<li>
 				<label for="nama">Nama</label>
 				<input type="text" name="nama" id="nama" required value="<?php echo $pinjam["nama"]; ?>">
 			</li>

 			<li>
 				<label for="tanggal_peminjaman">Tanggal Peminjaman</label>
 				<input type="text" name="tanggal_peminjaman" id="tanggal_peminjaman" required value="<?php echo $pinjam["tanggal_peminjaman"]; ?>">
 			</li>
 			<li>
 				<label for="waktu_peminjaman">Waktu Peminjaman</label>
 				<input type="text" name="waktu_peminjaman" id="waktu_peminjaman" required value="<?php echo $pinjam["waktu_peminjaman"]; ?>">
 			</li>
 			<li>
 				<label for="identitas_peminjaman">Identitas Peminjam</label>
 				<input type="text" name="identitas_peminjaman" id="identitas_peminjaman" required value="<?php echo $pinjam["identitas_peminjaman"]; ?>">
 			</li>
 			<li>
 				<label for="gambar">Gambar</label>
 				<input type="text" name="gambar" id="gambar" required value="<?php echo $pinjam["gambar"]; ?>">
 			</li>
 			<br></br>
 			<li>
 				<button type="submit" name="submit">Ubah Data</button>
 			</li>
 		</ul>
 	</form>
 </body>
 </html>