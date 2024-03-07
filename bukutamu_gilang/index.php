<?php include "header.php"; 
?>
<body style="background-size: 99%" img background="schol.avif">
<div class="container_fluid mt-5" >
    <div class="row vh-200 ">
    <div class=" d-flex justify-content-center align-items-center  ">
     <div class="mt-3" style="widht:200px">
     <form action="" method="post">
        <div class="container text-center">
  <div class="row">
    
  </div></div>

        <div class="mb-3">
           
        <label for="username" class="form-label"><b>username</b></label>
            <input type="text" class="form-control" id="username"name="username">
        </div>
        <div class="mb-3">
                <label for="password" class="form-label"><b>password</b></label>
                <input type="password" class="form-control" id="password" name="password">
        </div>
            <button type="sumbit" class="btn btn-primary" name="login">login</button>
         </from>
         </div>
         </div>

    </div>
</div>



<?php
session_start();
include "koneksi.php";
if (isset($_POST['login'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

    $kueri ="select * from aman where username='$username' and password='$password'";
    $login =$konek->query($kueri);
    $cek   = $login->num_rows;


	if ($cek >0) {
		$_SESSION['username']=$username;
		?>
		<script type="text/javascript">
			document.location='navbar.php';
		</script>
	<?php
	}else{
		echo"gagal";
	}
}
?>
<!-- <?php

       session_start();
       include "koneksi.php";
            if (isset($_POST['login'])) {

                $username =$_POST['username'];
                $password =$_POST['password'];

                $sql = "SELECT * from user where username='$username' and password=md5('$password')";
                $result = $conn-> query($sql);

                if ($result->num_rows > 0) {
                    while($raw = $result ->fetch_array()){
                        $_SESSION [ 'username'] = $username;
                        $_SESSION[ 'status' ] = "login";
                        header ("location:navbar.php");
                    }
                }else {
        header("location:login.php>pesan=gagal");
                 }
                 $conn->close();
}
?> -->
