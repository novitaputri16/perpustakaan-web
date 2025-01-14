<h1 class="mt-4">Koleksi Buku</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
        <!-- <a href="cetak.php" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i>+ Cetak Data</a> -->
        <table class="table table-bordered" id="datatablesSimple">
        <thead>
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Buku</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        $i = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user on user.id_user = peminjaman.id_user LEFT JOIN buku on buku.id_buku = peminjaman.id_buku");
        while($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td>
                    <a href="?page=koleksi_ubah&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-info">Ubah</a>
                    <a onclick="return confirm('Apakah anda yakin menghapus data ini?')" href="?page=koleksi_hapus&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-danger">Hapus</a>
                    </td>

                </tr>
            <?php
        }
        ?>
        </table>
    </div>
</div>

    </div>
</div>