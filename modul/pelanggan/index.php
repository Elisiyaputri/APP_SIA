<div class="card mb-3">

    <div class="card-body">
        <form action="" method="post">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="pelanggan" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" name="pelanggan">
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
                    <input type="email" class="form-control" name="email">
                </div>
            </div>
            <hr class="text-secondary">
            <div class="text-end">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
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
                    <tr>
                        <td>1</td>
                        <td>PT Sejahtera</td>
                        <td>JL. Kebangsaan Medan</td>
                        <td>082168042803</td>
                        <td>sejahtera@gmain.com</td>
                        <td>
                            <a href="#editPelanggan" class="text-decoration-none" data-bs-toggle="modal">
                                <i class="bi bi-pencil-square text-success"></i>
                            </a>
                            <a href="" class="text-decoration-none">
                                <i class="bi bi-trash text-danger"></i>
                            </a>
                        </td>
                        <!-- Modal -->
                        <div class="modal fade" id="editPelanggan" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <form action="" method="post">
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
                                                    <label for="pelanggan" class="form-label">Nama Pelanggan</label>
                                                    <input type="text" class="form-control" name="pelanggan"
                                                        value="PT Sejahtera">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="alamat" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat"
                                                        value="Jl. Kebangsaan Medan">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="telepon" class="form-label">Telepon</label>
                                                    <input type="number" class="form-control" name="telepon"
                                                        value="081299223344">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email"
                                                        value="sejahtera@gmail.com">
                                                </div>
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
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>CV Maju Bersama</td>
                        <td>Jl. Perintis Kemerdekaan Binjai</td>
                        <td>081344553322</td>
                        <td>majubersama@gmail.com</td>
                        <td>
                            <a href="" class="text-decoration-none">
                                <i class="bi bi-pencil-square text-success"></i>
                            </a>
                            <a href="" class="text-decoration-none">
                                <i class="bi bi-trash text-danger"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>