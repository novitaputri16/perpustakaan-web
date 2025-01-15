<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

        }
    </style>
    </head>
    <body>
    <section class="gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-black" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                        <?php
                                        if (isset($_POST['register'])) {
                                            $nama = $_POST['nama'];
                                            $email = $_POST['email'];
                                            $alamat = $_POST['alamat'];
                                            $username = $_POST['username'];
                                            $level = $_POST['level'];
                                            $password = md5($_POST['password']);

                                            $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,username,password,level) VALUES('$nama','$email','$alamat','$username','$password','$level')");

                                            if ($insert) {
                                                echo '<script>alert("Selamat, register berhasil. Silahkan Login"); location.href="login.php"</script>';
                                            }else {
                                                echo '<script>alert("Register gagal, silahkan ulangi kembali.");</script>';
                                            }
                                        }
                                        ?>                                     
                                    <h2 class="fw-bold mb-2 text-uppercase text-white">BOOK SPACE</h2>
                                    <p class="text-white-50 mb-5">Daftarkan akun anda, Isi data yang tepat!</p>
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" required name="nama" placeholder="Masukkan Nama Lengkap" style="text-color: black"/>
                                                <label>Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="email" required name="email" placeholder="Masukkan Email" />
                                                <label>Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" required name="alamat" placeholder="Masukkan Alamat" />
                                                <label>Alamat</label>
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="username" required name="username" placeholder="Masukkan Username" />
                                                <label>Nama Pengguna</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" required name="password" type="password" placeholder="Masukkan Password" />
                                                <label for="inputPassword">Sandi</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputLevel" name="level" type="password" placeholder="" />
                                                <label>Level</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-5">                                            <button data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-outline-light btn-lg px-5" name="register" value="register" type="submit">Buat Akun</button>
                                            </div>
                                        
                                    
                                        </form>
                                        <p class=" text-white mt-4 mb-0 ">Sudah punya akun? <a href="login.php"
                                        class="text-white-50 fw-bold">Masuk</a>
                                </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
