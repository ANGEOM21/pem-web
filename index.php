<?php
session_start();

if (!isset ($_SESSION["login"]) && !isset($_SESSION["register"])) {
    header("Location: ./login.php");
    exit;
}


include('./partials/header.php');
$name =  $_SESSION["name"];
$bannerTitle = "Selamat Datang $name";
include('./components/banner.php');

?>
<div class="container">
    <a href="./logout.php" class="btn btn-primary">Logout</a>
    <a href="./create.php" class="btn btn-primary">create</a>
    <a href="./show.php" class="btn btn-primary">show</a>
</div>
<?php include('./partials/footer.php'); ?>