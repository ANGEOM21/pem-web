<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit;
}


include('../partials/header.php');
$name =  $_SESSION["name"];
$bannerTitle = "Selamat Datang administator $name";
include('../components/banner.php');

?>
<div class="container">
    <a href="../logout.php" class="btn btn-primary">Logout</a>
    <a href="../show.php" class="btn btn-primary">show</a>
</div>
<?php include('../partials/footer.php'); ?>