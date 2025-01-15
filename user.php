<h1 class="mt-4">Data User</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
        <?php
        if ($_SESSION['user']['level'] != 'petugas') {
        ?>
        <a href="?page=user_tambah" class="btn btn-primary">+ Tambah Data</a>
        <?php
        }
        ?>
        <table class="table table-bordered" id="datatablesSimple">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Level</th>
                <?php
                    if ($_SESSION['user']['level'] != 'petugas') {
                ?>

                <th>Aksi</th>
                <?php
                    }
                ?>
            </tr>
        </thead>
        <?php
        $i = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM user");
        while($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['level']; ?></td>
                    <?php
                        if ($_SESSION['user']['level'] != 'petugas') {
                    ?>

                    <td>
                    <a href="?page=user_ubah&&id=<?php echo $data['id_user']; ?>" class="btn btn-info">Ubah</a>
                    <a onclick="return confirm('Apakah anda yakin menghapus data ini?')" href="?page=user_hapus&&id=<?php echo $data['id_user']; ?>" class="btn btn-danger">Hapus</a>
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