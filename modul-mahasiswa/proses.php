<?php

include("../koneksi.php");

$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$email = $_POST['email'];
$hp = $_POST['hp'];

$simpan = "INSERT INTO dosens (nidn,nama,jabatan,email,hp) VALUES ('$nidn','$nama',
'$jabatan','$email','$hp')";

$proses = mysqli_query($koneksi, $simpan);

// untuk mengalihkan halaman diphp
// header("location:index.php");
?>

<script>
    document.location="index.php";
</script>

