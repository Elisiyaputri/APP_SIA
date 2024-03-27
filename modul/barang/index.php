<div class="card mb-3">
    <div class="card-body">
        <form action="" method="post">
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
            <div class="col text-end">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
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
                    <tr>
                    <td>1</td>
                    <td>Laptop Asus</td>
                    <td>RP. 10.000,000,-</td>
                    <td>RP. 12.000,000,-</td>
                    <td>5</td>
                    <td>
                        <a href="#editBarang" class="text-decoration-none" data-bs-toggle="modal">
                           <i class="bi bi-pencil-square text-success"></i>
                        </a>
                        <a href="" class="text-decoration-none" >
                           <i class="bi bi-trash text-danger"></i>
                        </a>
                    </td>
                    <!--Modal-->
                    <div class="modal fade" id="editBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Barang</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                                <input type="text" class="form-control" name="nama_barang" value="Laptop Asus" disabled>
                                            </div>
                                            <div class="mb-3">
                                                <label for="harga_beli" class="form-label">Harga Beli</label>
                                                <input type="number" class="form-control" name="harga_beli" value="10000000">
                                            </div>
                                            <div class="mb-3">
                                                <label for="harga_jual" class="form-label">Harga Jual</label>
                                                <input type="number" class="form-control" name="harga_jual" value="12000000">
                                            </div>
                                            <div class="mb-3">
                                                <label for="stok" class="form-label">Stok</label>
                                                <input type="number" class="form-control" name="stok" value="5">
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
                    <td>Monitor Samsung</td>
                    <td>RP. 5.000,000,-</td>
                    <td>Rp. 6.000,000,-</td>
                    <td>10</td>
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