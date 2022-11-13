<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Keranjang</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<!-- Font awesome -->
    <script src="https://kit.fontawesome.com/d98efcb603.js" crossorigin="anonymous"></script>
	
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
    <a class="navbar-brand" href="#"><img src="img/logo_bento.png" alt="" width="200" height="60" class="me-3" style="margin-top:-20px;"></a>
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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Daftar Menu</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Add Coffee</a></li>
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


<div style="border:2px solid white; color: white; width:1000px; margin-left:auto; margin-right:auto; margin-top: 100px; background-color:white;">
	<table class="table" style="text-align:center; color: black; width: 900px; margin-left:auto; margin-right:auto; ">

		<div style="background-color: #FF9933; height: 25px; font-weight: bold; font-size: 12px; text-align:center;">KERANJANG</div>

		<div style="margin-top:10px;">
  <thead>
    <tr style="background-color:#F2F2F2; border-bottom: 2px solid black;">
      <th scope="col">Menu</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Hapus</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td colspan="2"></td>
      <td></td>
    </tr>
  </tbody>
</table>
	<div style="color:black; margin-top:30px; width:400px; margin-left: auto; margin-right: 10px; font-weight:bold;">
   		<div style="background-color:#F2F2F2; text-align: center; border-bottom: 2px solid black;">Total Belanja</div>

   		<div style="padding:10px; text-align: center;"><label for="total">Total Harga <i class="fa-solid fa-basket-shopping-simple"></i><span style="font-weight: normal;">Rp</label> </span><input style="height:20px;" type="" name="" id="total">
		</div>

   		<button  style="width:400px; border-radius: 10px; background-color:#FF9933;"><i class="fa-sharp fa-solid fa-cart-shopping"></i>Checkout</button>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>