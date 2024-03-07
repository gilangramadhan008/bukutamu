<?php include "boot.php"; 
$e=$_GET['id'];
$tampil=$konek->query("select*form bukutamu where no='$e'");
$b=$tampil->fetch_array();
?>

<table>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">hari_tanggal</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">alamat</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">umur</label>
    <input type="date" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">keperluan</label>
   <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
  </div>
  
 
</form>
</table>
<?php
include "koneksi.php";
if (issert($_POST['simpan'])){
    
}