<?php

$nama_server = '127.0.0.1' ;
$username_mysql = 'root' ;
$password_mysql = '' ;
$database_mysql = 'latihan' ;

$db = mysqli_connect($nama_server,$username_mysql,$password_mysql,$database_mysql);

/*var_dump ($db)*/
/*cek koneksi*/
if(!$db){
		echo "Oops ada Error" . mysqli_connect_error(); 
} else{
		echo "Berhasil terhubung";
}

/*isa ngapain aja di database
1. insert data dulu ke tabel siswa*/

$nis = nul;
$nama = nul;
$tl = nul;
$alamat = nul;

if(isset ($_GET['nis']))
	$nis = $_GET ['nis'];
if(isset ($_GET['nama']))
	$nama = $_GET ['nama'];
if(isset ($_GET['tl']))
	$tl = $_GET ['tl'];
if(isset ($_GET['alamat']))
	$alamat = $_GET ['alamat'];


/*$nis = $_GET['nis'];
$nama = $_GET['nama'];
$tl = $_GET['tl'];
$alamat = $_GET['alamat'];*/

/*$query = "INSERT INTO siswa(nis,nama,tanggal_lahir,alamat) VALUE (12321,'ani','2002-02-22','semarang')"; */
$query = "INSERT INTO siswa(nis,nama,tanggal_lahir,alamat) VALUE ('.$nis.','.$nama.','.$tl.','.$alamat.')";

echo $query
/*eksekusi koneksi*/
mysqli_query($db,$query);

/*tutup koneksi*/
mysqli_close($db);
?>