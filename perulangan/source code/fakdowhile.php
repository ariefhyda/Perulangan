<html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Perulangan | Faktorial</title>
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
						<li><a href="fakfor.php">Faktorial For</a></li><br><br>
						<li><a href="fakwhile.php">Faktorial While</a></li><br><br>
						<li><a href="fakdowhile.php">Faktorial Do-While</a></li><br><br>
					</ul>
				</nav>
	</div>
	
	<br>
	<center><b><h1> Perulangan Do-While Aplikasi Faktorial </h1></b></center>
	<!--Bagian Postingan1-->
	<div id="box6">
<form name="frm01" method="post">
<table>
<tr>
<td>Masukkan Angka</td>
<td><input type="text" name="txtAngka" size="5"/></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="hasil" value="Hasil"/></td>
</tr>
</table>
<?php
error_reporting(0);
if($_POST['hasil']!=''){
            $angka=$_POST['txtAngka'];

            function faktorial($angka){
            if($angka<=1){
                        $hasil=1;
                        return $hasil;
            }elseif($angka>1){
                        $i=1;
                        do
                        {
                             $hasil=$angka * faktorial($angka-1);
                             $i=$i+1;
                        }while($i<=5);
                        return $hasil;
            }
}
         echo "Angka :".$angka."<br>";
   echo "Faktorial dari "." ".$angka." "."adalah :"." ".faktorial($angka);
}
?>
</form>
</div>
<div id="box5">
<p><b><center> Berikut source code dari tampilan di samping kanan : </center></b><br>
<br>< form name="frm01" method="post">
<br>< table>
<br>< tr>
<br>< td>Masukkan Angka< / td>
<br>< td>< input type="text" name="txtAngka" size="5"/>< / td>
<br>< / tr>
<br>< tr>
<br>< td colspan="2">< input type="submit" name="hasil" value="Hasil"/>< / td>
<br>< / tr>
<br>< / table>
<br>&lt;?php
<br>error_reporting(0);
<br>if($_POST['hasil']!=''){
<br>$angka=$_POST['txtAngka'];
<br>function faktorial($angka){
<br>if($angka<=1){
<br>$hasil=1;
<br>return $hasil;
<br>}elseif($angka>1){
<br>$i=1;
<br>do
<br>{
<br>$hasil=$angka * faktorial($angka-1);
<br>$i=$i+1;
<br>}while($i<=5);
<br>return $hasil;
<br>}
<br>}
<br>echo "Angka :".$angka."< br>";
<br>echo "Faktorial dari "." ".$angka." "."adalah :"." ".faktorial($angka);
<br>}
<br>?&gt
<br></ form>
</p>
</div>

	</body>
</html>