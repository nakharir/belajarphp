<?php
    include "service/database.php";

    $login_message = "";

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE 
        username='$username' AND password='$password'";

        $result = $db->query($sql);
        if($result->num_rows > 0) {
            $data = $result->fetch_assoc();

            header("location: dashboard.php");
        } else {
            $login_message = "GA ADA BOSQUE, ULANG SANA...";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php include "layout/header.html" ?>
    <h3>login Sekarang</h3>
    <i><?= $login_message ?></i>
    <form action="login.php" method="post">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="login">login sekarang</button>
    </form>
    <?php include "layout/footer.html" ?>
</body>
</html>