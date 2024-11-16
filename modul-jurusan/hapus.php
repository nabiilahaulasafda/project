<?php

include("../koneksi.php");

$id = $_GET['xyz'];

$hapus = "DELETE FROM jurusans WHERE id='$id' ";

$proses = mysqli_query($koneksi, $hapus);

// untuk mengalihkan halaman diphp
// header("location:index.php");
?>

<script>
    document.location="index.php";
</script>

