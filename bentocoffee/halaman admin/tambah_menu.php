<?php  
require"functions/functions.php";

// cek apakah tombol submit sudah ditekan atau belum
// apakah post ,submit key nya
if( isset($_POST["submit"])){

	
	// cek apakah data berhasil ditambahkan atau tidak
	// ada berapa baris dalam tabel yg terpengaruhi(mysqli_affected_rows)
	if( tambah($_POST)>0){
		echo"
		<script>
			alert('Data berhasil ditambahkan');
		</script>";
	}else{
		echo"
		<script>
			alert('Data gagal ditambahkan');
		</script>";
	}
};
// document.location.href='index.php';,untuk memindahkan ke file selanjutnya ketika memencet ok pda java script
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Menu</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	
	<style type="text/css">
		body{
			background-color: #262626;
		}
	</style>

</head>
<body>

	<!-- Nav bar -->
	<nav class="navbar navbar-dark bg-transparant fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php"><img src="img/logo_bento.png" alt="" width="200" height="60" class="me-3" style="margin-top:-20px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Bento Coffee</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="daftarmenu.php">Daftar Menu</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="tambah_menu.php">Add Coffee</a></li>
              <li><a class="dropdown-item" href="#">Add Non-Coffee</a></li>
              <li><a class="dropdown-item" href="#">Add Food</a></li>
              <li><a class="dropdown-item" href="#">Add Dessert</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
            </ul>
          <li class="nav-item">
            <a class="nav-link" href="#">Pesanan</a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>


    <form action="" method="post" enctype="multipart/form-data"><!--  -->

		<div style="border:2px solid white; color: white; width:1000px; margin-left:auto; margin-right:auto; margin-top: 100px; background-color:white;">

		<div style="background-color: #FF9933; height: 25px; font-weight: bold; font-size: 12px; text-align:center;">Tambah Menu</div>

		<div style="color:black; padding:15px; font-size:12px;">
			<div>
				<label for="gambar">Upload Gambar</label><br>
				<input type="file" name="gambar" id="gambar" style="width:100%;">
			</div>

			<div style="margin-top:10px;">
				<label for="id">Id Menu</label><br>
				<input type="text" name="id" id="id" style="width:100%;" required placeholder="masukkan id">
			</div>

			<div style="margin-top:10px;">
				<label for="nama">Nama Manu</label><br>
				<input type="text" name="nama" id="nama" style="width:100%;" required placeholder="masukkan nama"> 
			</div>

			<div style="margin-top:10px;">
				<label for="harga">Harga Menu</label><br>
				<input type="text" name="harga"harga id="harga" style="width:100%;" required placeholder="masukkan harga">
			</div>
<!-- required, agar inputannyaa tidak boleh kosong -->

			<button type="submit" name="submit" class="btn btn-success" style="margin-top:13px;">Simpan Menu</button>
			</div>
		</div>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>