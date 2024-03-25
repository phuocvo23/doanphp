<?php require_once "app/views/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/css/view.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php require_once "app/views/header.php"; ?>
    <?php
    // sass ./public/css/view.scss ./public/css/view.css --watch
    
    require_once "app/views/product.php";
    require_once "app/views/footer.php";
    ?>
</body>

</html>