<?php
include "header.php";
include "koneksi.php";

?>
<body class="bg-info">
<body style="background-size:cover" background="blu.png">
<div class="py-1 mx1 ">
<a href="navbar.php><button"class="btn btn-outline-dangger"><i class='bx bx-arrow-back'></i/button></a>
</div>
<div class="col col-">
<form action=""method="get" >
<div class="input-group" target="henhen">
  <input type="date" aria-label="First name" name="awal" class="form-control">
  <input type="date" aria-label="Last name" name="akhir" class="form-control">
  <span class="input-group-text"><button type="submit"><i class="bi bi-search"></i></button></span>
  <button class="btn" onclick="printDiv('print')" type="submit"><i class="bi bi-printer"></i></button>
</span>
</div>
</form>
</div>
<fieldset id="print"> 
  <table class="table class text-center bg-warning-emphasis mt-2 mt-2">
    <thead>
    <tr>
        <th scope="col">no</th>
        <th scope="col">nama</th>
        <th scope="col">hari_tanggal</th>
        <th scope="col">alamat</th>
        <th scope="col">umur</th>
        <th scope="col">keperluan</th>
       
    </tr>
    </thead>
    <?php include "koneksi.php";
    @$cari=$_GET['awal'];
    if($cari==""){
      $tampil=$konek->query("select * from bukutamu");
      while ($a=$tampil->fetch_array()){
      @$no++;
      ?>
      <tbody class="table">
<tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $a['nama'] ?></td>
            <td><?php echo $a['hari_tanggal'] ?></td>
            <td><?php echo $a['alamat'] ?></td>
            <td><?php echo $a['umur'] ?></td>
            <td><?php echo $a['keperluan'] ?></td>
            

        <?php
    }
  }else{

    $tampil=$konek->query("select * from bukutamu where hari_tanggal between'$_GET[awal]' and '$_GET[akhir]'");
    while ($a=$tampil->fetch_array()){
      @$no++;
      ?>
      <tbody class="table">
<tr>
<td>
    <?php echo $no; ?></td>
    <td><?php echo $no; ?></td>
            <td><?php echo $a['nama'] ?></td>
            <td><?php echo $a['hari_tanggal'] ?></td>
            <td><?php echo $a['alamat'] ?></td>
            <td><?php echo $a['umur'] ?></td>
            <td><?php echo $a['keperluan'] ?></td>
            
        <?php
    }
  }
    ?>
</tr>
  </table>
</fieldset>
<script type="text/javascript">
  function printDiv (el) {
    var a= document.body.innerHTML;
    var b= document.getElementById(el).innerHTML;

    document.body.innerHTML=b;
    window.print();
    dokument.body.innerHTML=a;
  }
</script>
