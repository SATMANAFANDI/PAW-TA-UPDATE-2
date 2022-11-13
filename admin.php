<?php 

// menghubungkan dengan file functions, menyisipkan file
require'functions/functions.php';

$coffee=query("SELECT * FROM pemesanan")

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!--CSS -->
    <link rel="stylesheet" type="text/css" href="admin.css">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/d98efcb603.js" crossorigin="anonymous"></script>

    <!-- Botstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  </head>
  <body>
    
    
  	<input type="checkbox" id="check">
  	<label for="check">
  		<i class="fas fa-bars" id="btn"></i>
  		<i class="fas fa-times" id="cancel"></i>
  	</label>

    <div class="sidebar">
    	<div style="text-align: center; padding-top:20px; padding-bottom: 20px;">
	    	<img src="img/logocoffee.png" width="100" height="90">
	    	<h1>Bento Coffee</h1>
    	</div>

    	<ul style="padding:0;">
    		<li><a href=""><i class="fa-solid fa-house"></i> Dashboard</a></li>
    		<li><a class="menu" href=""><i class="fa-solid fa-utensils"></i>Menu <span style="margin-left: 100px;"><</span></a></li>
          <ul class="down">
            <li><a href=""><i class="fa-solid fa-mug-hot" ></i> Coffee</a></li>
            <li><a href=""><i class="fa-sharp fa-solid fa-martini-glass-citrus"></i>Non Coffee</a></li>
            <li><a href=""><img src="img_admin/Icon food.png" height="25"><span style="margin-left:8px;">Food</span></a></li>
            <li><a href=""><img src="img_admin/Icon dessert.png" height="20"><span style="margin-left:12px;">Dessert</span></a></li>
          </ul>

    		<li><a href=""><i class="fa-sharp fa-solid fa-bag-shopping"style="color:white;"></i> Pesanan</a></li>

        <li><a href=""><i class="fa-solid fa-power-off"></i>Keluar</a></li>
    	</ul>
    </div>

   <section><table class="table table-light" style="width:1000px;">
  <thead style="text-align:center ; ">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id Pesanan</th>
      <th scope="col">No Meja</th>
      <th scope="col">Tanggal Pemesanan</th>
      <th scope="col">Metode Pembayaran</th>
      <th scope="col">Total Pembayaran</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php $i=1; ?>
    <?php foreach( $coffee as $cof ):?>
    <tr style="text-align:center;">
      <th scope="row"><?php echo $i ?></th>
      <th scope="row"><?php echo $cof[0]; ?></th>
      <th scope="row"><?php echo $cof[1]; ?></th>
      <th scope="row"><?php echo $cof[2]; ?></th>
      <th scope="row"><?php echo $cof[3]; ?></th>
      <th scope="row"><?php echo $cof[4]; ?></th>
      <th scope="row"><?php echo $cof[5]; ?></th>
    </tr>
    <?php $i++; ?>
  <?php endforeach; ?>
    
  </tbody>
</table></section>


  </body>
</html>
