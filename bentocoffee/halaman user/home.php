<?php 
require '../halaman admin/functions/functions.php';
$menu=query("SELECT * FROM tambahmenu");


// jika tombol cari diklik
if (isset($_GET['search'])) {
	$menu=search($_GET['keywoard']);
};
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Link css -->
    <link rel="stylesheet" type="text/css" href="css/home.css">

    <!-- Responsive css -->
    <!-- <link rel="stylesheet" type="text/css" href="css/responsive.css"> -->

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/d98efcb603.js" crossorigin="anonymous"></script>

    <!-- Logo title -->
    <link rel="icon" type="text/css" href="img/logocoffee.png">

    <title>Bento Coffee</title>
  </head>
  <body>
    
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparant">
        <div class="container">
          <a class="navbar-brand" href="Home.html"><img src="img/logo_bento.png" alt="" width="200" height="60" class="me-3"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active mx-2" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="Coffee.php">COFFEE</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">NON_COFFEE</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">FOOD</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">DESSERT</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#contact">CONTACT US</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="keranjang.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i> Kerajang</a>
              </li>
              <li>
              	<form action="" method="get">
	              	<input type="text" name="keywoard"  autofocus placeholder="cari..." size="10" autocomplete="off"><!-- autofocus=untuk memfokuskan ke input kita, autocomplete=untuk menghapus history di inputan -->
	              	<button type="submit" name="search">Search</button>
              	</form>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- <center><img src="img/image.png"></center> -->
    <!-- <img src="img/rectangle.png" class="rectangle"> -->
    <!-- <h1 class="t1">Welcome To<br><span>BENTO</span> COFFEE</h1>

    <p class="t2">We are hereto provide our best<br> services at affordable prices</p> -->
    <!-- <a href="" class="btn1">About Us</a> -->
    <!-- <button class="btn1">About Us</button> -->

    <div id="about">
      <div class="card-about" style="">
        <div class="row">
          <h1 class="t1">Welcome To<br><span>BENTO</span> COFFEE</h1>
          <p class="t2">We are hereto provide our best<br> services at affordable prices</p> 
          <a href="About_Us.html"><button class="btn1">About Us</button></a>
        </div>
      </div>
    </div>


    <!-- Layanan kami -->
    <section id="layanan">
    <div class="t3 text-center">
      <h2 class="t4">Layanan Kami</h2>
      <p>Bento Coffee Hadir sebagai Solusi Pagi Mu</p>
    </div>

      <div class="row">
        <div class="col-md-3 text-center mt-4 ">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto">
              <img src="img/Icon coffee.png" class="position-absolute top-50 start-50 translate-middle">
            </div> 
              <h3 class="mt-3">COFFEE</h3>
              <p class="mt-2">Dari minunan tradisional berbasis espresso sampai berbagai minuman racikan kopi terkini.</p>
          </div>
        </div>

        <div class="col-md-3 text-center mt-4 ">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto">
              <img src="img/Icon non-coffee.png" class="position-absolute top-50 start-50 translate-middle">
            </div> 
              <h3 class="mt-3">NON-COFFEE</h3>
              <p class="mt-2">Kami juga memiliki menu non-coffee untuk
              kamu  yang ingin pilihan  lain selain kopi.</p>
          </div>
        </div>

        <div class="col-md-3 text-center mt-4 ">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto">
              <img src="img/Icon food.png" class="position-absolute top-50 start-50 translate-middle">
            </div> 
              <h3 class="mt-3">FOOD</h3>
              <p class="mt-2">Berbagai macam makanan ringan sampai makanan utama siap menemani secangkir kopimu.</p>
          </div>
        </div>

        <div class="col-md-3 text-center mt-4 ">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto">
              <img src="img/Icon dessert.png" class="position-absolute top-50 start-50 translate-middle">
            </div> 
              <h3 class="mt-3">DESSERT</h3>
              <p class="mt-2">Aneka hidangan penutup hadir untuk 
              menjadi pilihanmu.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Best Seller -->
    <div>
      <h2 class="t5" style="color: white;">Best Seller!</h2>    
    </div>

    <div class="container" style="margin-left: 60px;">
      <div class="row">
        <div class="col-md-3 mt-4" style="">
          <div class="card " style="width: 23rem; background-color:transparent; border: 5px solid white; line-height: 20px; " >
            <img src="img/coffe latte.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title" style="color:white;">Coffee Latte</h4>
              <p style="color: #FFC121; font-size: 25px;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-alt"></i>
              </p>
              <p class="card-text" style="font-size: 12px; color:white;">Coffee latte adalah secangkir kopi susu yang berasal dari 
                Italia. Menu ini merupakan perpaduan antara kopi espresso 
                dan susu yang dapat dinikmati kapan saja, baik dalam 
                keadaan dingin ataupun panas..</p>
            </div>
          </div> 
        </div>

        <div class="col-md-3 mt-4" style="margin-left: 100px;">
          <div class="card" style="width: 23rem; background-color:transparent; border: 5px solid white; line-height: 20px;" >
            <img src="img/coffee cappucino.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title" style="color:white;">Coffee Cappucino</h4>
              <p style="color: #FFC121; font-size: 25px;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </p>
              <p class="card-text" style="font-size: 12px; color:white;">Cappuccino adalah secangkir kopi susu yang berasal dari 
              Italia. Rasa kopi cappuccino umumnya sangat rich, 
              walaupun sudah dicampur susu, rasa kopinya tetap 
              kuat..</p>
            </div>
          </div> 
        </div>

        <div class="col-md-3 mt-4" style="margin-left: 100px;">
          <div class="card" style="width: 23rem; background-color:transparent; border: 5px solid white; line-height: 20px;" >
            <img src="img/coffee affogato.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title" style="color:white;">Coffee Affogato</h4>
              <p style="color: #FFC121; font-size: 25px;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </p>
              <p class="card-text" style="font-size: 12px; color:white;">Affogato merupakan sajian penutup khas italia, Affogato dalam bahasa italia “Ahfogatoe” yang berarti tenggelam.Maksud dari penamaan ini adalah menggambarkan tenggelamnya satu scoop gelato di dalam segelas espresso..</p>
            </div>
          </div> 
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 mt-4" style="">
          <div class="card " style="width: 23rem; background-color:transparent; border: 5px solid white; line-height: 20px;" >
            <img src="img/coffe mocha.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title" style="color:white;">Coffee Mocha</h4>
              <p style="color: #FFC121; font-size: 25px;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </p>
              <p class="card-text" style="font-size: 12px; color:white;">Coffee Mocha adalah minuman kopi yang terbuat dari campuran espreso dengan coklat dan susu. Komposisinya diracik dari bubuk cokelat, kopi Wina, susu panas, dan busa..</p>
            </div>
          </div> 
        </div>

        <div class="col-md-3 mt-4" style="margin-left: 100px;">
          <div class="card" style="width: 23rem; background-color:transparent; border: 5px solid white; line-height: 20px;" >
            <img src="img/coffee americano.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title" style="color:white;">Coffee Americano</h4>
              <p style="color: #FFC121; font-size: 25px;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-alt"></i>
              </p>
              <p class="card-text" style="font-size: 12px; color:white;">Coffee Americano adalah minuman kopi yang dibuat dengan mencampurkan satu seloki espresso dengan air panas, soal rasa, tentunya Americano lebih ringan dibandingkan espresso. .</p>
            </div>
          </div> 
        </div>

        <div class="col-md-3 mt-4" style="margin-left: 100px;">
          <div class="card" style="width: 23rem; background-color:transparent; border: 5px solid white; line-height: 20px;" >
            <img src="img/coffee espreso.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title" style="color:white;">Coffee Espresso</h4>
              <p style="color: #FFC121; font-size: 25px;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </p>
              <p class="card-text" style="font-size: 12px; color:white;">Coffee Espresso merupakan kopi yang dihasilkan dari proses penyeduhan kopi dengan tekanan dan suhu tinggi. Coffee espresso dibuat dengan menggiling kopi hingga halus..</p>
            </div>
          </div> 
        </div>


      </div>
    </div>


    <section id="contact">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-6" style="color: white;">
              <h1 style="font-weight: 600">Ada Pertanyaan?<br>
              Silahkan Kontak Kami<br>
              Kami Siap Membantu</h1>

              <p style="font-weight: bold; margin-top:30px;" id="kontak">Kontak</p>
              <p><img src="img/location.png">             Jl.godean no.44 Yogyakarta</p>
              <p><img src="img/whatsapp.png">          +62 82782726938</p>
              <p><img src="img/email.png">BentoCoffee@gmail.com</p>

              <p style="font-weight:bold; margin-top: 25px;">Social Media</p>
              <a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="img/fb.png"></a>
              <a href="https://twitter.com/login"><img style="margin-left:10px;" src="img/twiter.png"></a>
              <a href="https://www.instagram.com/?hl=id"><img style="margin-left:8px;" src="img/ig.png"></a> 
              <label>@BentoCoffee</label>
            </div>

            <div class="col-md-6" style="color:white;">
              <div class="card-contact w-100">
                <form>
                  <div style="background-color: white; width:450px; height:450px; border-radius: 10px; text-align: center;">
                      <h1 style="padding: 40px; color:black; font-size: 30px; font-weight: 600;">Saran dan Masukan!</h1>
                      <form>
                        <input style="width:380px; height:80px; margin-top: -20px; background-color: grey;" type="email" name="" placeholder=" Masukkan email anda disini..">
                      </form>
                      <form>
                        <input style="width:380px; height:80px; margin-top: 30px; background-color:grey;" type="text" name="" placeholder="Pertanyaan Anda..">
                      </form>
                      <button style="background-color:#FF9933; color: white; width:380px; height:80px; font-size: 23px; font-weight: bold; margin-top: 30px;">Kirim</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <div>
      <img src="img/background_.png" style="margin-top: 151px;">
      <h1 style="color: white; font-weight: 600;">Ada Pertanyaan?<br>
        Silahkan Kontak Kami<br>
        Kami Siap Membantu</h1>
    </div>
    <div style="color: white;">
      <p style="font-weight: bold;">Kontak</p>
      <p><img src="img/location.png">Jl.godean no.44 Yogyakarta</p>
      <p><img src="img/whatsapp.png">+62 82782726938</p>
      <p><img src="img/email.png">BentoCoffee@gmail.com</p>

      <p style="font-weight:bold;">Social Media</p>
      <p><img src="img/fb.png">
      <img src="img/twiter.png">
      <img src="img/ig.png">@BentoCoffee</p>
    </div> -->

<!-- 
    <div style="background-color: white; width:596px; height:545px; border-radius: 10px; text-align: center;">
      <h1 style="padding: 50px;">Saran dan Masukan!</h1>
      <form>
        <input style="width:481px; height:91px; margin-top: -20px; background-color: grey;" type="" name="" placeholder=" Masukkan email anda disini..">
      </form>
      <form>
        <input style="width:481px; height:91px; margin-top: 40px; background-color:grey;" type="" name="" placeholder="Pertanyaan Anda..">
      </form>
      <button style="background-color:#FF9933; color: white; width:481px; height:91px; font-size: 32px; font-weight: bold;
      margin-top: 40px;">Kirim</button>
    </div> -->

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Java script -->
    <!-- <script type="text/javascript" src="Home"></script> -->
    
  </body>
</html>