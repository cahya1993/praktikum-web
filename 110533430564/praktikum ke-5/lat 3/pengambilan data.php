<?php
// File: seleksi.php

require_once './koneksi.php';

$sql = 'SELECT * FROM mahasiswa';
$res = mysql_query($sql);
if ($res){
	if (mysql num rows($res)) { ?>
	
		<table border=1 cellspacing=1 cellpadding=5>
		<tr>
			<th>#</th>
			<th width=100>NIM</th>
			<th width=150>Nama</th>
			<th>Alamat</th>
		<