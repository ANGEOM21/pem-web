<?php

require './../config/db.php';

if(isset($_POST['submit'])) {
    global $db_connect;

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    $randomFilename = time().'-'.md5(rand()).'-'.$image;

    $uploadPath = '../upload/'.$randomFilename;

    $upload = move_uploaded_file($tempImage,$uploadPath);

    if($upload) {
        mysqli_query($db_connect,"INSERT INTO products (name,price,image)
                    VALUES ('$name','$price','/upload/$randomFilename')");
                    
        echo "<script>alert('data berhasil ditambahkan');</script>";
        header('location: ../show.php');
    } else {
        echo "gagal upload";
    }

}