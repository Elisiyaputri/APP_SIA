<?php
require_once('koneksi.php');
?>
<div class="card mb-3">
    <div class="card-body">
        <form action="modul/pengguna/aksi_pengguna.php?act=insert" method="post">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="col-md-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="col-md-4">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="hak_akses">Hak Akses</label>
                    <select class="form-select" name="hak_akses" required>
                        <option value="admin">Admin</option>
                        <option value="pimpinan">Pimpinan</option>
                        <option value="karyawan">Karyawan</option>
                    </select>
                </div>
            </div>
            <hr class="text-secondary">
            <div class="d-flex">
                <span class="me-auto text-gray">
                    <?php
                    if(isset($_SESSION['pesan'])){
                        echo $_SESSION['pesan'];
                        unset($_SESSION['pesan']);
                    }
                    ?>
                </span>
                <button type="reset" class="btn me-2 btn-secondary">Reset</button>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3>Data Pengguna</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Hak Akses</th>
                        <th><i class="bi bi-gear-fill"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM tbl_pengguna";
                    $exec = mysqli_query($koneksi, $query);
                    $no = 0;
                    while ($data = mysqli_fetch_assoc($exec)) {
                        $no++;
                    ?>
                    <tr>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $data['username']; ?></td>
                        <td><?= $data['nama_lengkap']; ?></td>
                        <td><?= $data['email']; ?></td>
                        <td><?= $data['jabatan']; ?></td>
                        <td><?= $data['hak_akses']; ?></td>
                        <td>
                            <a href="#editPengguna<?= $data['user_id']; ?>" class="text-decoration-none"
                                data-bs-toggle="modal">
                                <i class="bi bi-pencil-square text-success"></i>
                            </a>
                            <a href="modul/pengguna/aksi_pengguna.php?act=delete&id=<?= $data['user_id']; ?>"
                                class="text-decoration-none"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i class="bi bi-trash text-danger"></i>
                            </a>
                        </td>
                        <!-- Modal -->
                        <div class="modal fade" id="editPengguna<?= $data['user_id'];?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <form action="modul/pengguna/aksi_pengguna.php?act=update&id=<?= $data['user_id']; ?>"
                                method="post">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Pengguna</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control" name="username"
                                                    aria-describedby="username" value="<?= $data['username'];?>"
                                                    readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password">
                                                <span class="form-text text-muted">Kosongkan jika tidak ingin
                                                    mengganti password</span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="nama_lengkap"
                                                    aria-describedby="nama_lengkap"
                                                    value="<?= $data['nama_lengkap'];?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" class="form-control" name="email"
                                                    aria-describedby="email" value="<?= $data['email'];?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="jabatan" class="form-label">Jabatan</label>
                                                <input type="text" class="form-control" name="jabatan"
                                                    aria-describedby="jabatan" value="<?= $data['jabatan'];?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="hak_akses">Hak Akses</label>
                                                <select class="form-select" name="hak_akses" required>
                                                    <option value="admin"
                                                        <?= $data['hak_akses'] == 'admin' ? 'selected' : ''; ?>>Admin
                                                    </option>
                                                    <option value="pimpinan"
                                                        <?= $data['hak_akses'] == 'pimpinan' ? 'selected' : ''; ?>>
                                                        Pimpinan</option>
                                                    <option value="karyawan"
                                                        <?= $data['hak_akses'] == 'karyawan' ? 'selected' : ''; ?>>
                                                        Karyawan</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </tr>
                    <?php
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>