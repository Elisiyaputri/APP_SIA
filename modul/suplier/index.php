<?php
require_once('koneksi.php');
?>
<div class="card mb-3">
    <div class="card-body">
    <form action="modul/suplier/aksi_suplier.php?act=insert" method="post">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nama_supplier" class="form-label">Nama Suplier</label>
                <input type="text" class="form-control" name="nama_supplier">
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
        <hr>
        <div class="row">
            <div class="d-flex">
            <span class="me-auto text-gray">
                    <?php
                    if(isset($_SESSION['pesan'])){
                        echo $_SESSION['pesan'];
                        unset($_SESSION['pesan']);
                    }
                    ?>
                </span>
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3>Data Suplier</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Suplier</th>
                        <th>Alamat</th>
                        <th>Telepon </th>
                        <th>Email</th>
                        <th><i class="bi bi-gear-fill"></i></th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                    $query = "SELECT * FROM tbl_supplier";
                    $exec = mysqli_query($koneksi, $query);
                    $no = 0;
                    while ($data = mysqli_fetch_array($exec)) {
                        $no++;
                    ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $data['nama_supplier']; ?></td>
                        <td><?= $data['alamat']; ?></td>
                        <td><?= $data['telepon']; ?></td>
                        <td><?= $data['email']; ?></td>
                        <td>
                            <a href="#editSupplier<?= $data['supplier_id']; ?>" class="text-decoration-none"
                                data-bs-toggle="modal">
                                <i class="bi bi-pencil-square text-success"></i>
                            </a>
                            <a href="modul/suplier/aksi_suplier.php?act=delete&id=<?= $data['supplier_id']; ?>"
                                class="text-decoration-none">
                                <i class="bi bi-trash text-danger"></i>
                            </a>
                        </td>
                    </tr>
                        <!--Modal-->
                        <div class="modal fade" id="editSupplier<?= $data['supplier_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <form action="modul/suplier/aksi_suplier.php?act=update&id=<?= $data['supplier_id']; ?>" method="post">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Barang</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nama_supplier" class="form-label">Nama Suplier</label>
                                            <input type="text" class="form-control" name="nama_supplier"
                                                value="<?= $data['nama_supplier']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label"> Alamat</label>
                                            <input type="text" class="form-control" name="alamat"
                                                value="<?= $data['alamat']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="telepon" class="form-label">Telepon</label>
                                            <input type="number" class="form-control" name="telepon" value="<?= $data['telepon']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email"
                                                value="<?= $data['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                          </form>
                        </div>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>