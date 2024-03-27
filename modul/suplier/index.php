<div class="card mb-3">
    <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nama_suplier" class="form-label">Nama Suplier</label>
                    <input type="text" class="form-control" name="nama_suplier">
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
            <div class="text-end">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
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
                    <tr>
                    <td>1</td>
                    <td>PT Suplier Jaya</td>
                    <td>Gedung Mayora Jl.Tomang</td>
                    <td>0216710276</td>
                    <td>ptsuplier@gmail.com</td>
                    <td>
                        <a href="#editSuplier" class="text-decoration-none" data-bs-toggle="modal">
                           <i class="bi bi-pencil-square text-success"></i>
                        </a>
                        <a href="" class="text-decoration-none" >
                           <i class="bi bi-trash text-danger"></i>
                        </a>
                    </td>
                    <!--Modal-->
                    <div class="modal fade" id="editSuplier" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Barang</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="nama_suplier" class="form-label">Nama Suplier</label>
                                                <input type="text" class="form-control" name="nama_suplier" value="PT Suplier Jaya" disabled>
                                            </div>
                                            <div class="mb-3">
                                                <label for="alamat" class="form-label"> Alamat</label>
                                                <input type="text" class="form-control" name="alamat" value="Gedung Mayora Jl.Tomang">
                                            </div>
                                            <div class="mb-3">
                                                <label for="telepon" class="form-label">Telepon</label>
                                                <input type="number" class="form-control" name="telepon" value="0215710276">
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" value="ptsuplier@gmail.com">
                                            </div>
                                        </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>CV Maju Bersama</td>
                    <td>Jl.Surya Mandala</td>
                    <td>02166453</td>
                    <td>majubersama@gmail.com</td>
                    <td>
                            <a href="" class="text-decoration-none">
                                <i class="bi bi-pencil-square text-success"></i>
                            </a>
                            <a href="" class="text-decoration-none">
                                <i class=" bi bi-trash text-danger"></i>
                            </a>
                    </td>
                   </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>