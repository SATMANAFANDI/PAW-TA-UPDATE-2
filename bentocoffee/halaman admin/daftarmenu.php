<?php 
// hubungkan daftar dan functions
require "functions/functions.php";



// Ambil data dari table pemesanan / query data pemesanan
// Ambil seluruh data dari table(SELECT * FROM)
// $result=mysqli_query($koneksi,"SELECT * FROM tambahmenu");
// variabel result ibarat lemari

// lakukan query dengan memanggil fungsi query dihalam function untuk emndapatkan seluruh data menu
$menu=query("SELECT * FROM tambahmenu");

if (isset($_GET['search'])) {
  $menu=search($_GET['keywoard']);
};
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Menu</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<style type="text/css">
		body{
			background-color: #262626;
		}
	</style>
</head>
<body>
	<!-- Nav bar -->
	 <!-- Nav bar -->
  <nav class="navbar navbar-dark bg-dark fixed-top">
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
            <a class="nav-link" href="">Pesanan</a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>


    <div style="border:2px solid white; color: white; width:1000px; margin-left:auto; margin-right:auto; margin-top: 100px; background-color: white; text-align:center;">
	    <div style="background-color: #FF9933; height: 25px; font-weight: bold; font-size: 12px; text-align:center;">Daftar Menu</div>

	    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id Menu</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php $i=1; ?>
  	<?php foreach ( $menu as $row ):?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $row[0]; ?></td>
      <td><img src="img_upload/<?php echo $row[1] ?>" width="80"></td>
      <td><?php echo $row[2]; ?></td>
      <td><?php echo $row[3]; ?></td>
      <td><a class="btn btn-primary" href="update.php?id=<?php echo $row[0] ?>">Update </a>||<a class="btn btn-danger" href="hapus.php?id=<?php echo $row[0]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus menu?')">Delete</a></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </body>
</table>

	    
	</div>
  <form action="" method="get">
                  <input type="text" name="keywoard"  autofocus placeholder="cari..." size="10" autocomplete="off"><!-- autofocus=untuk memfokuskan ke input kita, autocomplete=untuk menghapus history di inputan -->
                  <button type="submit" name="search">Search</button>
</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>