<html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Perulangan | Segitiga Siku</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<!-- bagian navigasi -->
	<div>
		<nav>
					<ul class="menu">
					<br><br>
						<li><a href="index.php">HOME</a></li><br><br>
						<li><a href="segitigafor.php">SEGITIGA</a></li><br><br>
						<li><a href="fakfor.php">FAKTORIAL</a></li><br><br>
						<hr><br><br>
						<li><a href="segitigafor.php">Segitiga For</a></li><br><br>
						<li><a href="segitgawhile.php">Segitiga While</a></li><br><br>
					</ul>
				</nav>
	</div>
	
	<br>
	<center><b><h1> Perulangan For Membentuk Segitiga Siku </h1></b></center>
	<!-- bagian perulangan for -->
	<div id="box2">
	<?php
	$bil = 5;
	for($i=1;$i<=$bil;$i++){
	for($j=1;$j<=$i;$j++){
	echo $i;
	}
	echo '<br/>';
	}
	?>
	</div>
	<div id="box">
	<p><b>Berikut source code tampilan di samping kanan : </b><br> &lt;?php
	<br>$bil = 5;
	<br>for($i=1;$i<=$bil;$i++){
	<br>for($j=1;$j<=$i;$j++){
	<br>echo $i;
	<br>}
	<br>echo '< br />';
	<br>}
	<br>?&gt
	</p>
	</div>
	<div id="box4">
	<?php
	$bil = isset($_POST['bil']) ? $_POST['bil'] : NULL;
	echo '<form action="" method="post">';
	echo '<input class="field" type="text" name="bil" value="'.$bil.'" placeholder="Masukkan Bilangan..."/>';
	echo '<input class="tombol" type="submit" name="submit" value="OK"/>';
	echo '</form>';
	if((isset($bil))and($bil!=NULL)){
	echo 'Hasil Perulangan : <br/>';
	for($i=1;$i<=$bil;$i++){
	for($j=1;$j<=$i;$j++){
	echo $i;
	}
	echo '<br/>';
	}
	}
	?>
</div>
<div id="box3">
	<p><b>Berikut source code tampilan di samping kanan : </b><br> &lt;?php
    <br>$bil = isset($_POST['bil']) ? $_POST['bil'] : NULL;
	<br>echo '< form action="" method="post">';
	<br>echo '< input class="field" type="text" name="bil" value="'.$bil.'" placeholder="Masukkan Bilangan..."/>';
	<br>echo '< input class="tombol" type="submit" name="submit" value="OK"/>';
	<br>echo '< / form>';
	<br>if((isset($bil))and($bil!=NULL)){
	<br>echo 'Hasil Perulangan :';
	<br>for($i=1;$i<=$bil;$i++){
	<br>for($j=1;$j<=$i;$j++){
	<br>echo $i;
	<br>}
	<br>echo '< br/>';
	<br>}}?&gt
	</p>
</div>


	</body>
</html>