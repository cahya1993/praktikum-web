<!DOCTYPE HTML
	PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
	"http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Set Cookie</title>
</head>

<body>

<?php

//Men-set nilai cookie
setcookie('nama cookie', 'nilai cookie');

//Mendapatkan nilai cookie
echo $_COOKIE['nama_cookie'];
?>
<p>
Tekan Refresh (F5);

</body>
</html>