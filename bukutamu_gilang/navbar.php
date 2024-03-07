<?php
session_start();

$username= $_SESSION['username'];



if (!isset($_SESSION['username'])){

    // header('location:index.php');
}else{

 
}


?>






<a href="logout.php"></a>




<?php include "header.php";

?>

<body style="background-size:85%" background="sekolah.avif">

<div class="row">
  <div class="col col-1">
<img src="smk.png" alt="" width="100">
  </div>
<div class="col mt-2" style="font-size:2rem;"style="font-family:Cobber Black;"><strong><h3>BUKUTAMU SMKN 1 RONGGA<h3>
</strong></h3>
        
</div>

</div>
</nav>
<nav class="navbar navbar-expand-lg bg-light">
<body style="background-size:85%" background="blu.png">
  <div class="container-fluid ">
    <a class="navbar-bran text-dark" href="#">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-3 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-dark" aria-current="page" href="#">MENU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          </a>
          <ul class="dropdown-menu">
          <li><a href="rumah.php" target="henhen" class="dropdown-item" >formulir</a></li>
            <li><a href="tampil.php" target="henhen" class="dropdown-item" >tampil</a></li>
            <li><a href="rekap.php" target="henhen" class="dropdown-item" >rekap data</a></li>
            <li><hr class="dropdown-divider"></li>
            
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
      <form action="cari.php" method="post" class="d-flex" role="search" target="henhen" >
        <input class="form-control " type="text" placeholder="Search" aria-label="Search" name="cari">
       &nbsp; &nbsp; <button class="btn btn-outline-success" type="submit" name="search">Search</button>
      </form>
    </div>
  </div>
</nav>


<iframe src="" name="henhen" frameborder="0" width=" 100%" height="1000"></iframe>

