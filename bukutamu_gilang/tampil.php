<?php
include "header.php";
?>
<table class="table">
  <body class="bg-info">
<body style="background-size:cover;" background="blu.png">
  <thead class="table-dark">
    <tr>
        <th>No</th>
        <th>NAMA</th>
        <th>HARI TANGGAL</th>
        <th>ALAMAT</th>
        <th>UMUR</th>
        <th>KEPERLUAN</th>
        <th>AKSI</th>
    </tr>
  <tbody>
    <?php
    include "koneksi.php";
    $tampil=$konek->query ("select * from bukutamu");
    while ($t=$tampil->fetch_array()){
        @$no++;
        ?>
        


        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $t['nama'] ?></td>
            <td><?php echo $t['hari_tanggal'] ?></td>
            <td><?php echo $t['alamat'] ?></td>
            <td><?php echo $t['umur'] ?></td>
            <td><?php echo $t['keperluan'] ?></td>
            
             <td><a href="hapus.php?id=<?php echo $t['no'] ?>"><button class="btn bg-danger text-light"><i class="bi bi-trash-fill"></i></button></a>
             <a href="update.php?id=<?php echo $t['no'] ?>"><button class="btn bg-warning text-light"><i class="bi bi-pencil"></i></button></a></td>
    </tr>
           
        <?php

    }

    ?>
  
  </tbody>
</table>