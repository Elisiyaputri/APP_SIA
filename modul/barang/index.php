<?php
require_once('koneksi.php');
?>
<div class="card mb-3">
    <div class="card-body">
        <form action="modul/barang/aksi_barang.php?act=insert" method="post">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang">
                </div>
                <div class="col-md-6">
                    <label for="harga_beli" class="form-label">Harga Beli</label>
                    <input type="number" class="form-control" name="harga_beli">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="harga_jual" class="form-label">Harga Jual</label>
                    <input type="number" class="form-control" name="harga_jual">
                </div>
                <div class="col-md-6">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" name="stok">
                </div>
            </div>
            <hr>
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
        <h3>Data Barang</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Barang</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <th><i class="bi bi-gear-fill"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM tbl_barang";
                    $exec = mysqli_query($koneksi, $query);
                    $no = 0;
                    while ($data = mysqli_fetch_array($exec)) {
                        $no++;
                    ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $data['nama_barang']; ?></td>
                        <td>Rp. <?= number_format($data['harga_beli'],0,'.','.') ?>,-</td>
                        <td>Rp. <?= number_format($data['harga_jual'],0,'.','.') ?>,-</td>
                        <td><?= $data['stok']; ?></td>
                        <td>
                            <a href="#editBarang<?= $data['barang_id'];  ?>" class="text-decoration-none"
                                data-bs-toggle="modal">
                                <i class="bi bi-pencil-square text-success"></i>
                            </a>
                            <a href="modul/barang/aksi_barang.php?act=delete&id=<?= $data['barang_id']; ?>"
                                class="text-decoration-none"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i class="bi bi-trash text-danger"></i>
                            </a>
                        </td>
                        <!--Modal-->
                        <div class="modal fade" id="editBarang<?= $data['barang_id'];?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <form action="modul/barang/aksi_barang.php?act=update&id=<?= $data['barang_id'];?>"
                                method="post">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Barang</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                                <input type="text" class="form-control" name="nama_barang"
                                                    value="<?= $data['nama_barang'];?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="harga_beli" class="form-label">Harga Beli</label>
                                                <input type="number" class="form-control" name="harga_beli"
                                                    value="<?= $data['harga_beli'];?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="harga_jual" class="form-label">Harga Jual</label>
                                                <input type="number" class="form-control" name="harga_jual"
                                                    value="<?= $data['harga_jual'];?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="stok" class="form-label">Stok</label>
                                                <input type="number" class="form-control" name="stok"
                                                    value="<?= $data['stok'];?>">
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