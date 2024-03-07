<?php
include "header.php"
?>

<body style="background-size:cover" background="blu.png" opacity="30%";>
<body class="bg-info">
<table class="table">
  <thead class="table-dark">
    <tr>
    <th>no</th>
        <th>nama</th>
        <th>hari_tanggal</th>
        <th>alamat</th>
        <th>umur</th>
        <th>keperluan</th>
        
    </tr>
  </thead>
  <tbody>
<?php 
include "header.php";
include "koneksi.php";
if(isset($_POST['search'])){
$search=$_POST['cari'];
$tampil=$konek->query("select * from bukutamu where nama like '%$search%'");
while($t=$tampil ->fetch_array()){
			@$no++;
      ?>

        <tr>

            <td><?php echo $t['nama'] ?></td>
            <td><?php echo $t['hari_tanggal'] ?></td>
            <td><?php echo $t['alamat'] ?></td>
            <td><?php echo $t['umur'] ?></td>
            <td><?php echo $t['keperluan'] ?></td>
            <td><a href="hapus.php?id=<?php echo $t['no'] ?>"><button class="btn bg-danger text-light"><i class="bi bi-trash"></i></button></a>
            <a href="update.php?id=<?php echo $t['no'] ?>"><button class="btn bg-warning text-light"><i class="bi bi-pencil-fill"></i></td>
        </tr>
        <?php
    }
}
    ?>

  </tbody>
</table>