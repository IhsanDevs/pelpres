<?php 
$mahasiswa = all("mahasiswa");
?>

<div class="row">
    <div class="col-12">
        <h1>Daftar Mahasiswa</h1>

        <a href="<?= server() ?>?page=buat_mahasiswa" class="btn btn-primary">Tambah Data Mahasiswa</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $mhs): ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $mhs['name'] ?></td>
                    <td><?= $mhs['username'] ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td>
                        <a href="index.php?page=edit&id=<?= $mhs['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="index.php?page=delete&id=<?= $mhs['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>