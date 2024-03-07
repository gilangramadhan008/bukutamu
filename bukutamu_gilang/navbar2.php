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

<body style="background-size:cover" background="gambar2.jpg">

<div class="row">
  <div class="col col-1">
<img src="" alt="" width="100">
  </div>
<div class="col mt-5" style="font-size:2rem;">
BUKU TAMU SMKN 1 RONGGA
</div>


<!-- As a link -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MENU</a>
  </div>
</nav>

<!-- As a heading -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">formulir</span>
  </div>
</nav>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">tampil</span>
  </div>
</nav>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">rekap data</span>
  </div>
</nav>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">logout</span>
  </div>
</nav>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">search</span>
  </div>
</nav>
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


<iframe src="" name="henhen" frameborder="0" width=" 100%" height="500"></iframe>

