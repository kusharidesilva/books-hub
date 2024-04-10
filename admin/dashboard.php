<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['id'];

if (!isset($admin_id)) {
    header('location: ../login.php');
};

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.jpg" type="image/jpg">
    <link rel="stylesheet" href="../admin/admin_style.css">
    <script src="../main.js" defer></script>
    <title>BOOKS HUB</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <body>

        <?php @include 'admin_header.php'; ?>

        <section class="dashboard">

            <h1 class="title">dashboard</h1>

            <div class="box-container">

                <div class="box">
                    <div class="book-cover-content">
                        <a href="./book-add.php" class="book-cover-item">
                            <div class="book-cover-img">
                                <img src="..//img/mermaid.png" alt="mermaid">
                            </div>
                            <div class="book-cover-title">
                                <p>SHORT STORIES</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="box">
                    <div class="book-cover-content">
                        <a href="./book-add.php" class="book-cover-item">
                            <div class="book-cover-img">
                                <img src="..//img/adventure2.png" alt="adventure">
                            </div>
                            <div class="book-cover-title">
                                <p>ADVENTURE</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="box">
                    <div class="book-cover-content">
                        <a href="./book-add.php" class="book-cover-item">
                            <div class="book-cover-img">
                                <img src="..//img/fantacy2.png" alt="fantacy">
                            </div>
                            <div class="book-cover-title">
                                <p>FANTASY</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="box">
                    <div class="book-cover-content">
                        <a href="./book-add.php" class="book-cover-item">
                            <div class="book-cover-img">
                                <img src="..//img/horror2.png" alt="mermaid">
                            </div>
                            <div class="book-cover-title">
                                <p>HORROR</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="box">
                    <div class="book-cover-content">
                        <a href="./book-add.php" class="book-cover-item">
                            <div class="book-cover-img">
                                <img src="..//img/mystery2.png" alt="mermaid">
                            </div>
                            <div class="book-cover-title">
                                <p>MYSTERY</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </section>

        <script src="js/admin_script.js"></script>

    </body>

</html>