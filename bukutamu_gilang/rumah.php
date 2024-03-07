<?php
include "header.php";

?>

<body class="bg-info">
<body style="background-size:85%" background="blu.png">
<div class="mb-4">
  <div class="col">
<div class="container col-3">
  <form action="input.php" method="post" >
  <div class="mb-4">
    <label for="exampleInputEmail1" class="form-label">nama</label>
    <input type="text" name="nama"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">hari_tanggal</label>
    <input type="date" name="hari_tanggal"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  
  <div class="col">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">alamat</label>
    <input type="text" name="alamat"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">umur</label>
    <input type="number" name="umur"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">keperluan</label>
    <input type="text" name="keperluan"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  </div>
  </div>
  
  </div>
</div>

