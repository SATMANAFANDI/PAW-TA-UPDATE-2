<?php  

$coffee=[
	[
	"nama_coffee"=>"Coffee Latte",
	"Harga"=>10000,
	"Foto"=>"coffe latte.png",
	]
];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

	<?php foreach ($coffee as $cof):?>
	<div class="card" style="width: 18rem;">
	  <img src="img/<?php echo $cof["Foto"] ?>" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title"><?php echo $cof["nama_coffee"] ?></h5>
	    <p class="card-text">Rp.<?php echo $cof["Harga"] 221z?></p>

	    <form action="admin.php" method="post">
	    <input type="integrity" name="jml" style="width:40px;">	    
			<a href="admin.php?name=<?php echo $cof["nama_coffee"] ?>"><button type="submit">Beli</button></a>
		</form>

	  </div>
	</div>
	<?php endforeach; ?>

</body>
</html>