<?php

include("../koneksi.php");

$id = $_POST['id'];
$kode = $_POST['kode'];
$jurusan = $_POST['jurusan'];

$sunting ="UPDATE jurusans SET kode='$kode', jurusan='$jurusan' WHERE id='$id'";

$proses = mysqli_query($koneksi, $sunting);
// untuk mengalihkan halaman diphp
// header("location:index.php");
?>

<script>
    document.location="index.php";
</script>
