<?php
require_once('koneksi.php');
?>
<div class="card mb-3">
    <div class="card-body">
        <form action="modul/pelanggan/aksi_pelanggan.php?act=insert" method="post">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" name="nama_pelanggan">
                </div>
                <div class="col-md-6">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input type="number" class="form-control" name="telepon">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
            </div>
            <hr class="text-secondary">
            <div class="row">
                <div class="d-flex ">
                    <span class="me-auto text-grey">
                        <?php
                        if (isset($_SESSION['pesan'])) {
                            echo $_SESSION['pesan'];
                            unset($_SESSION['pesan']);
                        }
                        ?>
                    </span>
                    <button type="reset" class="btn btn-secondary me-2">Reset</button>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3>Data Pelanggan</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Pelanggan</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th><i class="bi bi-gear-fill"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM tbl_pelanggan";
                    $exec = mysqli_query($koneksi, $query);
                    $no = 0;
                    while ($data = mysqli_fetch_array($exec)) {
                        $no++;
                    ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $data['nama_pelanggan']; ?></td>
                        <td><?= $data['alamat']; ?></td>
                        <td><?= $data['telepon']; ?></td>
                        <td><?= $data['email']; ?></td>
                        <td>
                            <a href="#editPelanggan<?= $data['pelanggan_id']; ?>" class="text-decoration-none"
                                data-bs-toggle="modal">
                                <i class="bi bi-pencil-square text-success"></i>
                            </a>
                            <a href="modul/pelanggan/aksi_pelanggan.php?act=delete&id=<?= $data['pelanggan_id']; ?>"
                                class="text-decoration-none"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i class="bi bi-trash text-danger"></i>
                            </a>
                        </td>
                        <!-- Modal -->
                        <div class="modal fade" id="editPelanggan<?= $data['pelanggan_id']; ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <form
                                action="modul/pelanggan/aksi_pelanggan.php?act=update&id=<?= $data['pelanggan_id']; ?>"
                                method="post">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Pelanggan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="nama_pelanggan" class="form-label">Nama
                                                        Pelanggan</label>
                                                    <input type="text" class="form-control" name="nama_pelanggan"
                                                        value="<?= $data['nama_pelanggan'];?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="alamat" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat"
                                                        value="<?= $data['alamat'];?>">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="telepon" class="form-label">Telepon</label>
                                                    <input type="number" class="form-control" name="telepon"
                                                        value="<?= $data['telepon'];?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email"
                                                        value="<?= $data['email'];?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
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