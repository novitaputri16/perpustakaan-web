<h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                        <?php
                                if ($_SESSION['user']['level'] != 'peminjam') {
                            ?>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                        <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kategori"));
                                        ?>
                                        Total Kategori
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php
                                    if ($_SESSION['user']['level'] != 'peminjam') {
                                    ?>
                                        <a class="small text-white stretched-link" href="?page=kategori">Selengkapnya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    <?php
                                    }
                                    ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM buku"));
                                        ?>
                                        Total Buku
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php
                                    if ($_SESSION['user']['level'] != 'peminjam') {
                                    ?>
                                        <a class="small text-white stretched-link" href="?page=buku">Selengkapnya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    <?php
                                    }
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                                    ?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM ulasan"));
                                        ?>
                                        Total Ulasan
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="?page=ulasan">Selengkapnya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                                                        <?php
                                if ($_SESSION['user']['level'] != 'peminjam') {
                            ?>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user"));
                                        ?>
                                        Total User
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="?page=user">Selengkapnya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }else{
                                    ?>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM koleksi"));
                                        ?>
                                        Total Koleksi Buku
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="?page=koleksi">Selengkapnya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM peminjaman"));
                                        ?>
                                        Total Peminjaman
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="?page=peminjaman">Selengkapnya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    }
                                    ?>


                        </div>

                        <!-- <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <td width="200">Nama</td>
                                        <td width="1">:</td>
                                        <td><?php echo $_SESSION['user']['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="200">Level</td>
                                        <td width="1">:</td>
                                        <td><?php echo $_SESSION['user']['level']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="200">Tanggal Login</td>
                                        <td width="1">:</td>
                                        <td><?php echo date('d-m-y'); ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div> -->
