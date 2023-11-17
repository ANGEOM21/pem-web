<?php include('./partials/header.php'); 
$bannerTitle = "Selamat Datang";
include('./components/banner.php');



if(isset($_SESSION['user'])) {
    header("Location: ./index.php");
    exit;
}
?>
    <div class="container">
    <div class="row justify-content-center">
        <div class="card col-md-6 col-lg-6">
            <div class="card-body">
                <form action="./backend/login.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Masukan Email :</label>
                        <input type="email" name="email" placeholder="example@.com" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" placeholder="masukkan password anda" class="form-control">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">login</button>
                </form>
                <div class="mt-2 mb-1 justify-content-center align-items-center d-flex">
                    Belum punya akun ?&nbsp; <a class="text-decoration-none text-center fw-bold text-dark" href="register.php" title="login">  Register</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('./partials/footer.php'); ?>