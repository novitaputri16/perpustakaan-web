<h1 class="mt-4">Daftar Buku</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
    <?php
        if ($_SESSION['user']['level'] != 'peminjam') {
    ?>
        <a href="?page=buku_tambah" class="btn btn-primary">+ Tambah Data</a>
        <?php
            }
        ?>
        <table class="table table-bordered" id="datatablesSimple">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Deskripsi</th>
                <?php
                if ($_SESSION['user']['level'] != 'peminjam') {
                ?>
                <th>Aksi</th>
                <?php
                }
                ?>
            </tr>
        </thead>
        <?php
        $i = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM buku LEFT JOIN kategori on buku.id_kategori = kategori.id_kategori");
        while($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['penulis']; ?></td>
                    <td><?php echo $data['penerbit']; ?></td>
                    <td><?php echo $data['tahun_terbit']; ?></td>
                    <td><?php echo $data['deskripsi']; ?></td>
                    <?php
                        if ($_SESSION['user']['level'] != 'peminjam') {
                    ?>
                    <td>
                    <a href="?page=buku_ubah&&id=<?php echo $data['id_buku']; ?>" class="btn btn-info">Ubah</a>
                    <a onclick="return confirm('Apakah anda yakin menghapus data ini?')" href="?page=buku_hapus&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                    <?php
                        }
                    ?>

                </tr>
            <?php
        }
        ?>
        </table>
    </div>
</div>

    </div>
</div>