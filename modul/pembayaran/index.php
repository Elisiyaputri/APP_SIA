<?php
require_once('koneksi.php');
?>
<div class="card mb-3">
    <div class="card-body">
        <form action="modul/pembayaran/aksi_pembayaran.php?act=insert" method="post">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="invoice_pembayaran" class="form-label">Invoice</label>
                    <input type="text" class="form-control" name="invoice_pembayaran">
                </div>
                <div class="col-md-6">
                    <label for="tanggal_pembayaran" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal_pembayaran">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="total_pembayaran" class="form-label">Total</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" name="total_pembayaran">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="keterangan" class="form-control" name="keterangan">
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
        <h3>Data Pembayaran</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Invoice</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Keterangan</th>
                        <th><i class="bi bi-gear-fill"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM tbl_pembayaran";
                    $exec = mysqli_query($koneksi, $query);
                    $no = 0;
                    while ($data = mysqli_fetch_array($exec)) {
                        $no++;
                    ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $data['invoice_pembayaran']; ?></td>
                        <td><?= $data['tanggal_pembayaran']; ?></td>
                        <td>Rp. <?= number_format($data['total_pembayaran'],0,'.','.') ?>,-</td>
                        <td><?= $data['keterangan']; ?></td>
                        <td>
                            <a href="#editPembayaran<?= $data['pembayaran_id']; ?>" class="text-decoration-none"
                                data-bs-toggle="modal">
                                <i class="bi bi-pencil-square text-success"></i>
                            </a>
                            <a href="modul/pembayaran/aksi_pembayaran.php?act=delete&id=<?= $data['pembayaran_id']; ?>"
                                class="text-decoration-none"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i class="bi bi-trash text-danger"></i>
                            </a>
                        </td>
                        <!--Modal-->
                        <div class="modal fade" id="editPembayaran<?= $data['pembayaran_id']; ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <form
                                action="modul/pembayaran/aksi_pembayaran.php?act=update&id=<?= $data['pembayaran_id']; ?>"
                                method="post">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Pembayaran
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="invoice_pembayaran" class="form-label">Invoice</label>
                                                <input type="text" class="form-control" name="invoice_pembayaran"
                                                    value="<?= $data['invoice_pembayaran']; ?>" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tanggal_pembayaran" class="form-label">Tanggal</label>
                                                <input type="date" class="form-control" name="tanggal_pembayaran"
                                                    value="<?= $data['tanggal_pembayaran']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="total_pembayaran" class="form-label">Total</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">Rp.</span>
                                                    <input type="number" class="form-control" name="total_pembayaran"
                                                        value="<?= $data['total_pembayaran']; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="keterangan" class="form-label">Keterangan</label>
                                                <input type="keterangan" class="form-control" name="keterangan"
                                                    value="<?= $data['keterangan']; ?>">
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