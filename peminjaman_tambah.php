<h1 class="mt-4">Peminjaman Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <form method="post">
            <?php
            if(isset($_POST['submit'])) {
                $id_buku = $_POST['id_buku'];
                $id_user = $_POST['id_user'];
                $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
                $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
                $status_peminjaman = $_POST['status_peminjaman'];
                $query = mysqli_query($koneksi, "INSERT INTO peminjaman(id_buku,id_user,tanggal_peminjaman,tanggal_pengembalian,status_peminjaman) VALUES('$id_buku','$id_user','$tanggal_peminjaman','$tanggal_pengembalian','$status_peminjaman')");

                if($query) {
                    echo '<script>alert("Tambah data berhasil."); location.href="?page=peminjaman";</script>';
                }else{
                    echo '<script>alert("Tambah data gagal.");</script>';
                }
            }
            ?>
            <div class="row md-3">
                <div class="col-md-3">User</div>
                <div class="col-md-8">
                    <select name="id_user" class="form-select">
                        <?php
                        $us = mysqli_query($koneksi, "SELECT * FROM user WHERE level='peminjam'");
                        while($user = mysqli_fetch_array($us)) {
                            ?>
                            <option value="<?php echo $user['id_user']; ?>"><?php echo $user['nama']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row md-3">
                <div class="col-md-3">Buku</div>
                <div class="col-md-8">
                    <select name="id_buku" class="form-select">
                        <?php
                        $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                        while($buku = mysqli_fetch_array($buk)) {
                            ?>
                            <option value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row md-3">
                <div class="col-md-3">Tanggal Peminjaman</div>
                <div class="col-md-8"><input type="date" class="form-control" name="tanggal_peminjaman"></div>
            </div>
            <div class="row md-3">
                <div class="col-md-3">Tanggal Pengembalian</div>
                <div class="col-md-8"><input type="date" class="form-control" name="tanggal_pengembalian"></div>
            </div>
            <div class="row md-3">
                <div class="col-md-3">Status Peminjaman</div>
                <div class="col-md-8">
                <select name="status_peminjaman" class="form-select">
                        <option value="dipinjam">Dipinjam</option>
                        <option value="dikembalikan">Dikembalikan</option>
                    </select>
            </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-8">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                <button type="reset" class="btn btn-secondary">Batal</button>
                <a href="?page=peminjaman" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>

    </div>
</div>