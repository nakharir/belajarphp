<?php
    session_start();
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "layout/header.html" ?>
    <h3>Allo, Selamat datang <?= $_SESSION["username"] ?></h3>
    <form action="dashboard.php" method="post">
        <button type="submit" name="logout">logout</button>
    </form>
    <?php include "layout/footer.html" ?>
    <script src="script.js"></script>
</body>
</html>