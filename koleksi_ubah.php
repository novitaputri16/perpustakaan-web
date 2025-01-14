<h1 class="mt-4">Koleksi Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <form method="post">
            <?php
            $id = $_GET['id'];
            if(isset($_POST['submit'])) {
                $id_buku = $_POST['id_buku'];
                $id_user = $_SESSION['user']['id_user'];
                $query = mysqli_query($koneksi, "UPDATE koleksi SET id_buku='$id_buku' WHERE id_koleksi=$id");

                if($query) {
                    echo '<script>alert("Ubah data berhasil."); location.href="?page=koleksi";</script>';
                }else{
                    echo '<script>alert("Ubah data gagal.");</script>';
                }
            }
            $query = mysqli_query($koneksi, "SELECT * FROM koleksi WHERE id_koleksi=$id");
            $data = mysqli_fetch_array($query);
            ?>
            <div class="row md-3">
                <div class="col-md-2">Buku</div>
                <div class="col-md-8">
                    <select name="id_buku" class="form-select">
                        <?php
                        $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                        while($buku = mysqli_fetch_array($buk)) {
                            ?>
                            <option <?php if($data['id_buku'] == $buku['id_buku']) echo 'selected'; ?> value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                <button type="reset" class="btn btn-secondary">Batal</button>
                <a href="?page=koleksi" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>

    </div>
</div>