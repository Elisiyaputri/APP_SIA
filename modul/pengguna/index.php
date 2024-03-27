<div class="card mb-3">

    <div class="card-body">
        <form action="" method="post">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" name="password">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="level" class="form-label">Level</label>
                    <input type="text" class="form-control" name="level">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
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
        <h3>Data Pengguna</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Email</th>
                        <th><i class="bi bi-gear-fill"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>admin</td>
                        <td>admin</td>
                        <td>pelisya30@gmail.com</td>
                        <td>
                            <a href="#editPengguna" class="text-decoration-none" data-bs-toggle="modal">
                                <i class="bi bi-pencil-square text-success"></i>
                            </a>
                            <a href="" class="text-decoration-none">
                                <i class="bi bi-trash text-danger"></i>
                            </a>
                        </td>
                        <!-- Modal -->
                        <div class="modal fade" id="editPengguna" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <form action="" method="post">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Pengguna</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="text" class="form-control" name="username"
                                                        value="admin">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="text" class="form-control" name="password">
                                                    <span class="form-text text-muted">Kosongkan jika tidak ingin
                                                        mengganti password</span>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="level" class="form-label">Level</label>
                                                    <select name="level" class="form-select">
                                                        <option value="admin" selected>Admin</option>
                                                        <option value="user">User</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="text" class="form-control" name="email"
                                                        value="pelisya30@gmail.com">
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
                        <td>user</td>
                        <td>user</td>
                        <td>erikaa11@gmail.com</td>
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