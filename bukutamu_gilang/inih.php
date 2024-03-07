<?php
include "konek.php";

?>
<div class="">

   <body style="background-image: url(bukutamu.avif)" width="500px";
    background-size: cover; overflow-x: hidden; >
   
    <div class="row py-5">
    <div class="col-lg-5 offset-lg-4 col-sm-5 py-3 offset-sm-2">
    <div class="background ">
    <div class="text-center py-3">
    <h2 class="name-logo py-2">login</h2>
  </div>
    
<div class="container py-4"> 
  <form action= "" method="post" class="mx-3">
  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInput1" aria-describedby="inputHelp" required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div class="container-login100-form-btn ">
						<input type="submit" name="login" class="btn btn-primary " value="login">
						
                        
					</div> 
</form>
</div> 
</div>
</div>
</body>

<!-- <div olign="center">
<div class="container" style="margin-left:300px;">
<div class="card w-50">
  <div class="card-body" style="background-image:url(kantor.png); width: 800px; height:600px; background-size:cover;">

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->


<?php
session_start(); 
    include "conn.php";
    
    
    if (isset($_POST['login'])) {
        $username=$_POST['username'];
        $password = $_POST['password'];

        
        $result = $conn-> query("SELECT * FROM aman where username='$username' and password='$password'")  ;
        $rowcount=mysqli_num_rows($result);
    if($rowcount> 0) {
          $_SESSION['username'] = $username;
    ?>
    <script type="text/javascript">

        document.location='navbar.php';
    </script>



    <?php
            
    }else{
        
    }

}


?>

  
