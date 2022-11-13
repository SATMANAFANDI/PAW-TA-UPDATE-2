<?php 
	// Membuat koneksi ke database
	$koneksi=mysqli_connect("localhost","root","","bento","8111");

	function query($query){
		// variabel didalam function dan diluar functions itu beda
		global $koneksi;

		// result itu lemarinya
		$result=mysqli_query($koneksi,$query);
		// wadah kosong/array kosong
		$rows=[];
		while ( $row=mysqli_fetch_row($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}

	function tambah($data){
		global $koneksi;

		// ambil data dari tiap elemen dalam form
		$upload=htmlspecialchars($data['upload']);
		$id=htmlspecialchars($data['id']);
		$nama=htmlspecialchars($data['nama']);
		$harga=htmlspecialchars($data['harga']);
//  htmlspecialchars() dapat digunakan untuk mengubah beberapa karakter yang telah ditentukan menjadi entitas HTML

		// query insert data
		$query="INSERT INTO tambahmenu VALUES ('$id','$upload','$nama','$harga')";

		mysqli_query($koneksi, $query);
		

		return mysqli_affected_rows($koneksi);
		}


		function hapus($id){
			global $koneksi;

			mysqli_query($koneksi,"DELETE FROM tambahmenu WHERE id=$id");

			return mysqli_affected_rows($koneksi);
		}

?>