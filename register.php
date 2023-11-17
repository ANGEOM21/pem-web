<?php include('./partials/header.php');
$bannerTitle = "Register";
include('./components/banner.php');
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="card col-md-6 col-lg-6">
            <div class="card-body">
                <form action="./backend/register.php" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Masukan Nama :</label>
                        <input type="text" name="name" placeholder="Udin Petot" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Masukan Email :</label>
                        <input type="email" name="email" placeholder="example@.com" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" placeholder="masukkan password anda" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="re_password" class="form-label">Password</label>
                        <input type="password" name="confirm" placeholder="masukkan konfirmasi password anda" class="form-control" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                </form>
                <div class="mt-2 mb-1 justify-content-center align-items-center d-flex">
                    sudah register ?&nbsp; <a class="text-decoration-none text-center fw-bold text-dark" href="login.php" title="login">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./partials/footer.php'); ?>