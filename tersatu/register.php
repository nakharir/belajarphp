<?php
    include "service/database.php";

    $register_message = "";

    if(isset($_POST["register"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "INSERT INTO users (username, password) VALUES 
        ('$username', '$password')";


        if($db->query($sql)){
            $register_message = "OKHHE BERHASIL BOS";
        }else{
            $register_message = "YAKIN? COBA LAGI DAH..";
        }



    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <?php include "layout/header.html" ?>
    <h3>Daftar Sekarang</h3>
    <i><?= $register_message ?></i>
    <form action="register.php" method="post">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="register">daftar sekarang</button>
    </form>
    <?php include "layout/footer.html" ?>
</body>
</html>