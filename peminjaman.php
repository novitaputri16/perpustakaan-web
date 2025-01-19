<h1 class="mt-4">Peminjaman Buku</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
        <?php
            if ($_SESSION['user']['level'] != 'peminjam') {
        ?>
        <a href="?page=peminjaman_tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Peminjaman</a>
        <?php
            }
            ?>
        <table class="table table-bordered" id="datatablesSimple">
        <thead>
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Status Peminjaman</th>
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
            if ($_SESSION['user']['level'] != 'peminjam') {
        ?>
        <?php
        $i = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM peminjaman 
        LEFT JOIN user ON user.id_user = peminjaman.id_user 
        LEFT JOIN buku ON buku.id_buku = peminjaman.id_buku");
            while($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['tanggal_peminjaman']; ?></td>
                    <td><?php echo $data['tanggal_pengembalian']; ?></td>
                    <td><?php echo $data['status_peminjaman']; ?></td>
                    <?php
                    if ($_SESSION['user']['level'] != 'peminjam') {
                    ?>
                    <td>
                    <a href="?page=peminjaman_ubah&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-info">Ubah</a>
                    <a onclick="return confirm('Apakah anda yakin menghapus data ini?')" href="?page=peminjaman_hapus&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                    <?php
                    }
                    ?>
                </tr>
            <?php
        }
        ?>
        <?php
            }else{
            ?>
            <?php
        $i = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM peminjaman 
        LEFT JOIN user ON user.id_user = peminjaman.id_user 
        LEFT JOIN buku ON buku.id_buku = peminjaman.id_buku 
        WHERE peminjaman.id_user = '" . $_SESSION['user']['id_user'] . "'");
            while($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['tanggal_peminjaman']; ?></td>
                    <td><?php echo $data['tanggal_pengembalian']; ?></td>
                    <td><?php echo $data['status_peminjaman']; ?></td>
                    <?php
                    if ($_SESSION['user']['level'] != 'peminjam') {
                    ?>
                    <td>
                    <a href="?page=peminjaman_ubah&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-info">Ubah</a>
                    <a onclick="return confirm('Apakah anda yakin menghapus data ini?')" href="?page=peminjaman_hapus&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                    <?php
                    }
                    ?>
                </tr>
            <?php
        }
        ?>
        <?php
            }
            ?>
        </table>
    </div>
</div>

    </div>
</div>