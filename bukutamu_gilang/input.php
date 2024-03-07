<?php
include "koneksi.php";
$nama=$_POST['nama'];
$hari_tanggal=$_POST['hari_tanggal'];
$alamat=$_POST['alamat'];
$umur=$_POST['umur'];
$keperluan=$_POST['keperluan'];

$input=$konek->query("insert into bukutamu (nama,hari_tanggal,alamat,umur,keperluan) values('$nama','$hari_tanggal','$alamat','$umur','$keperluan')");



?>
<script>
    document.location.href='tampil.php';
    </script>