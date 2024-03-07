<?php include "header.php"; 
?>
<img src="logosmk.jpg" alt="">
<div class="container_fluid" >
    <div class="row vh-200 ">
    <div class=" d-flex justify-content-center align-items-center bg-light ">
     <div class="card p-4 border-0 shadow" style="widht:400px">
     <form action="" method="post">
        <h2>login</h2>
        
        <hr>
        <div class="mb-3">
            <label for="username" class="form-label">username</label>
            <input type="text" class="form-control" id="username"name="username">
        </div>
        <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control" id="password" name="password">
        </div>
            <button type="sumbit" class="btn btn-primary" name="login">login</button>
         </from>
         </div>
         </div>

    </div>
</div>

<?php

include "conn.php";
session_start();

if (isset($_POST['login'])) {

}
    $username=$_POST['username'];
    $password=$_POST['password'];

    $kueri ="select * from aman where username ='$username' and password='$password'";
    $aman =$konek -> query ($kueri);
    $cek   =$aman -> num_rows;

    if ($cek > 0) {


        echo "login berhasil"; 
        header('location:hal1.php');

    }else

    ?>