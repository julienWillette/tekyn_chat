<?php

$h1 = 'Tekyn_chat';
$_SESSION['role'] = 'user';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="../public/assets/CSS/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <title>
        <?php if (isset($title)) : ?>
            <?= $title; ?>
        <?php else: ?>
            Mon site
        <?php endif ?>
    </title>
    <style type="text/css">
        <?php include '../public/assets/CSS/colors.css'; ?>
        <?php include '../public/assets/CSS/style.css'; ?>
    </style>
</head>

<body>


    <span class="all-index">
        <h1><?= $h1 ?></h1>
    </span>

</body>
</html>