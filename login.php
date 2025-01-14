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
    <title>Login Perpustakaan Digital</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                                <?php
                                if (isset($_POST['login'])) {
                                    $username = $_POST['username'];
                                    $password = md5($_POST['password']);

                                    $data = mysqli_query($koneksi, "SELECT * FROM user where username='$username' and password='$password'");
                                    $cek = mysqli_num_rows($data);
                                    if ($cek > 0) {
                                        $_SESSION['user'] = mysqli_fetch_array($data);
                                        echo '<script>alert("Selamat datang, Login berhasil"); location.href="index.php";</script>';
                                    } else {
                                        echo '<script>alert("Maaf, Username/Password salah");</script>';
                                    }
                                }
                                ?>

                                <h2 class="fw-bold mb-2 text-uppercase">BOOK SPACE</h2>
                                <p class="text-white-50 mb-5">Isi nama pengguna dan sandi dengan benar!</p>
                                <form method="post">
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" name="username" id="inputEmail" placeholder="Nama Pengguna"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="password" id="inputPassword" placeholder="Sandi"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <div>
                                        <button data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-outline-light btn-lg px-5" name="login" value="login"
                                            type="submit">Masuk</button>
                                    </div>
                                </form>
                           
                                <p class="mt-4 mb-0">Belum punya akun? <a href="register.php"
                                        class="text-white-50 fw-bold">Buat akun</a>
                                </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </section>
</body>
</html>