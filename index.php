<?php 
	require 'function.php';
	$pinjam = mysqli_query($conn,"SELECT * FROM buku");
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Perpustakaan Advent</title>
 	<link rel="stylesheet" type="text/css" href="stylesheet.css?version=<?php echo filemtime("stylesheet.css"); ?>">
 </head>
 <body>
 	<div class="header">
 		<div class="header-logo">ADV</div>
 		<div class="header-list">
 			<ul>
 				<li>Home</li>
 				<li>About</li>
 				<li>Contact Us</li>
 			</ul>
 		</div>
 	</div>
 	<div class="main">
 		<div class="content">
 			<div class="copy-container">KOMIK</div>
            <div class="section-title">*Note: Telat Di Denda 5000/hari</div>
 			<div class="content-item">
 				<table border="1" cellspacing="0" cellpadding="10">
 					<tr>
 						<th>No.</th>
 						<th>Aksi</th>
 						<th>Gambar</th>
 						<th>Judul Buku</th>
 						<th>Identitas Peminjaman</th>
 						<th>Tanggal Peminjaman</th>
 						<th>Waktu Peminjaman</th>
 					</tr>
 					<?php $i=1; ?>
 					<?php foreach($pinjam as $row) : ?>
 					<tr>
 						<td><?php echo $i;?></td>
 						<td>
                            <a href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a> |
 							<a href="hapus.php?id=<?php echo $row["id"]; ?>">Delete</a>
 						</td>
 						<td><img src="img/<?php echo $row["gambar"]; ?>"></td>
 						<td><?php echo $row["nama"]; ?></td>
 						<td><?php echo $row["identitas_peminjaman"]; ?></td>
 						<td><?php echo $row["tanggal_peminjaman"]; ?></td>
 						<td><?php echo $row["waktu_peminjaman"]; ?> hari</td>
 					</tr>
 					<?php $i++; ?>
 				<?php endforeach; ?>
 				</table>
 				<h1><a href="tambah.php">Pinjam</a></h1>
 			</div>
 		</div>
 	</div>
    <div class="footer">
        <div class="footer-logo">©Copyright 2023 by Pakpahan</div>
    </div>
 </body>
 </html>