<?php

include("../koneksi.php");

$kode = $_POST['kode'];
$jurusan = $_POST['jurusan'];

$simpan = "INSERT INTO jurusans (kode,jurusan) VALUES ('$kode','$jurusan')";

$proses = mysqli_query($koneksi, $simpan);

// untuk mengalihkan halaman diphp
// header("location:index.php");
?>

<script>
    document.location="index.php";
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data jurusan </title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
<?php include_once('../navbar.php') ?>

<div class="container">
    <div class="row mt-5">
      <div class="col-8 m-auto">
        <div class="card">
        <div class="card-header bg-dark-subtle">
            <h3 class="float-start"> Form Data Jurusan </h3>
        </div>

        <div class="card-body">
        <div class="card-body">
            <table class="table">

              <tbody>
                <tr>
                  <td scope="row"> kode jurusan</td>
                  <th>: <?= $kode ?> </th>
                </tr>
                <tr>
                  <td scope="row"> nama jurusan</td>
                  <th>: <?= $jurusan ?> </th>
                </tr>

              </tbody>

            </table>
            <a href="form.php" class="btn btn-warning btn-sm">Kembali</a>
          </div>
        </div>

        </div>
      </div>
    </div>
  </div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>