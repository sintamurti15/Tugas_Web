<?php
//Include file koneksi ke database
include "koneksi.php";
//menerima nilai dari kiriman form 
$nim=$_POST["nim"];
$nama=$_POST["nama"];
$jurusan=$_POST["jurusan"];

//Query input menginput data kedalam tabel mahasiswa
$sql="insert into mahasiswa (nim,nama,jurusan) values('$nim','$nama','$jurusan')";

//Mengeksekusi/menjalankan query diatas
$hasil=mysqli_query($kon,$sql);

?>