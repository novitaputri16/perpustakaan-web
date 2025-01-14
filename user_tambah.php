<h1 class="mt-4">Tambah User</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <form method="post">
            <?php
            if(isset($_POST['submit'])) {
                $nama = $_POST['nama'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $alamat = $_POST['alamat'];
                $level = $_POST['level'];
                $query = mysqli_query($koneksi, "INSERT INTO user(nama,username,password,email,alamat,level) VALUES('$nama','$username','$password','$email','$alamat','$level')");

                if($query) {
                    echo '<script>alert("Tambah data berhasil."); location.href="?page=user";</script>';
                }else{
                    echo '<script>alert("Tambah data gagal.");</script>';
                }
            }
            ?>
            <div class="row md-3">
                <div class="col-md-2">Nama Lengkap</div>
                <div class="col-md-8"><input type="text" class="form-control" name="nama"></div>
            </div>
            <div class="row md-3">
                <div class="col-md-2">Username</div>
                <div class="col-md-8"><input type="text" class="form-control" name="username"></div>
            </div>
            <div class="row md-3">
                <div class="col-md-2">Password</div>
                <div class="col-md-8"><input type="text" class="form-control" name="password"></div>
            </div>
            <div class="row md-3">
                <div class="col-md-2">Email</div>
                <div class="col-md-8"><input type="text" class="form-control" name="email"></div>
            </div>
            <div class="row md-3">
                <div class="col-md-2">Alamat</div>
                <div class="col-md-8"><input type="text" class="form-control" name="alamat"></div>
            </div>
            <div class="row md-3">
                <div class="col-md-2">Level</div>
                <div class="col-md-8">
                    <select name="level" class="form-select">
                        <option value="petugas">Petugas</option>
                        <option value="admin">Admin</option>
                        <option value="peminjam">Peminjam</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                <button type="reset" class="btn btn-secondary">Batal</button>
                <a href="?page=buku" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>

    </div>
</div>