<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Studi Kasus 2</title>
</head>
<style type="text/css">
#bigbody{
	margin:  20px auto;
	width: 50%;
	height: auto;
	padding: 10px;
	border: 1px solid red
}
body {
    background-color: #55ffCC;
}
</style>
<body>
<div id="bigbody">
	<h1><center>Restoran Pahe-Pahe Caruban</center></h1>
	<div id='info'>Restoran Lezat dengan Cita Rasa Khas Jawa </div>
	<em>Pilih menu yang akan dipesan</em>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="checkbox" name="menu[]" value="Rawon Daging Khas Surabaya" 
		<?php if (isset($_POST['menu'])) {

			foreach ($_POST['menu'] as $key => $value) {
				if ($value=='Rawon Daging Khas Surabaya') {
					echo "checked";
				}
		}
			
		} ?>
		>Rawon Daging Khas Surabaya <br>
		<input type="checkbox" name="menu[]" value="Rendang Daging" 
		<?php if (isset($_POST['menu'])) {

			foreach ($_POST['menu'] as $key => $value) {
				if ($value=='Rendang Daging') {
					echo "checked";
				}
		}
			
		} ?>
		>Rendang Daging<br>
		<input type="checkbox" name="menu[]" value="Soto Ayam Lamongan"
		<?php if (isset($_POST['menu'])) {

			foreach ($_POST['menu'] as $key => $value) {
				if ($value=='Soto Ayam Lamongan') {
					echo "checked";
				}
		}
			
		} ?>
		>Soto Ayam Lamongan<br>
		<input type="checkbox" name="menu[]" value="Sop Buntut Makassar"
		<?php if (isset($_POST['menu'])) {

			foreach ($_POST['menu'] as $key => $value) {
				if ($value=='Sop Buntut Makassar') {
					echo "checked";
				}
		}
			
		} ?>
		>Sop Buntut Makassar<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['menu'])) {
		echo "<div id='pilihan'>Anda memesan makanan berikut ini : </div><br/>";
		echo "<ul>";
		foreach ($_POST['menu'] as $key => $value) {
			echo "
			<li>".$value."</li>
			";
		}

		echo "</ul>";
	}
	 ?>
</div>
</body>
</html>