<?php 
	$conn = mysqli_connect("localhost","root","","perpus");
	function query($query){
		global $conn;
		$result = mysqli_query($conn,$query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		return $rows;
	}
	function tambah($post){
		global $conn;
		


		$nama = htmlspecialchars($post["nama"]);
		$tanggal_peminjaman = htmlspecialchars($post["tanggal_peminjaman"]);
		$waktu_peminjaman = htmlspecialchars($post["waktu_peminjaman"]);
		$identitas_peminjaman = htmlspecialchars($post["identitas_peminjaman"]);
		$gambar = htmlspecialchars($post["gambar"]);

		$query = "INSERT INTO buku VALUES ('','$nama','$tanggal_peminjaman','$waktu_peminjaman','$identitas_peminjaman','$gambar')";
		mysqli_query($conn,$query);
		return mysqli_affected_rows($conn);
	}
	function delete($id){
		global $conn;
		mysqli_query($conn,"DELETE FROM buku WHERE id = $id;");
		return mysqli_affected_rows($conn);
	}
	function ubah($post){
		global $conn;
		
		$id = $post["id"];

		$nama = htmlspecialchars($post["nama"]);
		$tanggal_peminjaman = htmlspecialchars($post["tanggal_peminjaman"]);
		$waktu_peminjaman = htmlspecialchars($post["waktu_peminjaman"]);
		$identitas_peminjaman = htmlspecialchars($post["identitas_peminjaman"]);
		$gambar = htmlspecialchars($post["gambar"]);

		$query = "UPDATE buku SET 
					nama = '$nama',
					tanggal_peminjaman = '$tanggal_peminjaman',
					waktu_peminjaman = '$waktu_peminjaman',
					identitas_peminjaman = '$identitas_peminjaman',
					gambar = '$gambar'
					WHERE id = $id
		";
		mysqli_query($conn,$query);	
		return mysqli_affected_rows($conn);
	}
 ?>