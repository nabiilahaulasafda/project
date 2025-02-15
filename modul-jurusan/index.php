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
                        <h3 class="float-start"> Data Jurusan </h3>
                        <span class="float-end btn btn-outline-dark text-dark btn-sm">
                            <a href="form.php"> <i class="fa-solid fa-user-plus"></i> Add </a>
                        </span>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama Jurusan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("../koneksi.php");

                                $tampil = "SELECT * FROM jurusans";

                                $proses = mysqli_query($koneksi, $tampil);

                                $nomor = 1;
                                foreach ($proses as $data) {
                                ?>

                                    <tr>
                                        <th scope="row"> <?= $nomor++ ?> </th>
                                        <td> <?= $data['kode'] ?> </td>
                                        <td> <?= $data['jurusan'] ?> </td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="edit.php?id=<?= $data['id'] ?>"> <i class="fa-solid fa-pen-to-square"></i> </a>

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?= $data['id'] ?>">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="hapus<?= $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">PERINGATAN !!!</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Yakin Ingin Menghapus Data <b><?= $data['jurusan'] ?> ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <a href="hapus.php?xyz=<?= $data['id'] ?>" class="btn btn-danger">Hapus</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>

                                <?php } ?>

                            </tbody>
                        </table>
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