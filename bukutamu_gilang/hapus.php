<?php
include "koneksi.php";
$id = $_GET['id'];
$delete = $konek->query("delete from bukutamu where no='$id'");


?>

<script>
    document.location.href='tampil.php';
</script>