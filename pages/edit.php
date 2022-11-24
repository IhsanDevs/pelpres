<?php
// jika id ada pada database
if (isset($_GET['id']) && !empty($_GET['id'])) {
    echo "berhasil";
} else {
    include(__DIR__ . '/404.php');

    return false;
}
// jika user mengirimkan data, maka kita handle.
if (isset($_POST['submit']))
{
    // kita cek, apakah data yang kita butuhkan ada semua atau tidak

    if (!empty($_POST['name']) && isset($_POST['name']))
    {
        $name = $_POST['name'];
    }
    else
    {
        redirect(null, "Nama mahasiswa wajib diisi");
    }

    if (!empty($_POST['username']) && isset($_POST['username']))
    {
        $username = $_POST['username'];
    }
    else
    {
        redirect(null, "Username mahasiswa wajib diisi");
    }

    if (!empty($_POST['nim']) && isset($_POST['nim']))
    {
        $nim = $_POST['nim'];
    }
    else
    {
        redirect(null, "NIM mahasiswa wajib diisi");
    }

    // membuat data.
    if (isset($name, $username, $nim)) {
        $tambah_data = create("mahasiswa", [
            "name" => $name,
            "username" => $username,
            "nim" => $nim
        ]);

        if ($tambah_data) {
            redirect(null, "Data berhasil ditambahkan");
        } else {
            redirect(null, "Data gagal ditambahkan");
        }
    }
}
?>

<div class="row justify-content-center align-items-center">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Mahasiswa</h4>

                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                            placeholder="Nama Mahasiswa">
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username Mahasiswa</label>
                        <input type="text" class="form-control" name="username" id="username" aria-describedby=""
                            placeholder="Username Mahasiswa">
                    </div>

                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="number" class="form-control" name="nim" id="nim" aria-describedby="helpId"
                            placeholder="NIM Mahasiswa">
                    </div>


                    <div class="d-grid gap-2">
                        <button type="submit" name="submit" id="submit" class="btn btn-dark">Edit Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>