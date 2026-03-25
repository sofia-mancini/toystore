<?php

    require_once 'database-connection.php';
    require_once 'session.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toys R URI</title>

    <link rel="stylesheet" href="css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
</head>

<body>

<header class="site-header">

    <div class="container header-container">

        <div class="logo">
            <img src="imgs/logo.png" alt="Toys R URI logo">
        </div>

        <nav class="main-nav">
            <ul>
                <li><a href="index.php">Toy Catalog</a></li>

                <li>
                    <?php if ($_SESSION['logged_in'] ?? false): ?>
                        <a href="logout.php">Log Out</a>
                    <?php else: ?>
                        <a href="login.php">Log In</a>
                    <?php endif; ?>
                </li>
                 
            </ul>
        </nav>

    </div>

</header>

<main class="container">
