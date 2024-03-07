<?php
include "koneksi.php";
include "header.php";
$id = $_GET['id'];
$tampil = $konek->query("select * from bukutamu where no='$id'");

$b = $tampil->fetch_array();

?>
<body class="bg-">
<body style="background-size:cover;" background="blu.png">
<div class="py-1 mx-2 ">
<a href="tampil.php" class="text-dark" data-toggle="back" data-placement="right" title="back"><i class='bx bx-undo icon-back fs-2'></i></a>
</div>
<div class="container">
    <div class="text-center">
      <h3></h3>
    </div>
  </div>
<div class="container py-5">
    <body class="bg-light">
<form action="" method="post">
    <div class="row offset-2">
<div class="col-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama :</label>
    <input type="text" name="nama"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
    value="<?php echo $b['nama'] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">hari_tanggal :</label>
    <input type="date" name="hari_tanggal"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="<?php echo $b['hari_tanggal'] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">alamat:</label>
    <input type="date" name="alamat"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="<?php echo $b['alamat'] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">umur:</label>
    <input type="text" name="umur"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="<?php echo $b['umur'] ?>">
  </div>
</div>
<div class="col-5">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Keperluan :</label>
    <input type="text" name="keperluan"class="form-control" id="exampleInputPassword1"
    value="<?php echo $b['keperluan'] ?>">
  </div>
</div>
<div class="col-5">
  <div class="mb-3">
  <button type="simpan" name="simpan" class="btn btn-primary">simpan</button>
</div>
  </div>
</form>

  </div>


<?php
if(isset($_POST['simpan'])) {

$update= $konek->query("update bukutamu set nama='$_POST[nama]',hari_tanggal='$_POST[hari_tanggal]',alamat='$_POST[alamat]',umur='$_POS[umur]',keperluan='$_POST[keperluan]' where no='$id'");


?>
<script>
      document.location.href='tampil.php';
</script>

<?php

}
?>




